<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContact;
use App\Mail\ContactSubmission;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {
  /**
   * @return Application|Factory|View
   */
  function index(): View|Factory|Application {
    $services = Service::orderBy("title")->get();
    
    return view('contacts.index', [
      "services" => $services
    ]);
  }
  
  function store(StoreContact $request) {
    $recaptchaToken = $request->input('_recaptchaToken');
    
    $resp = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
      "secret"   => env("RECAPTCHA_SECRET"),
      "response" => $recaptchaToken
    ]);
    
    if ( !$resp->json()["success"]) {
      return redirect()->back()->with("recaptchaError", true);
    }
    
    $data       = $request->validated();
    $newContact = Contact::create($data);
    
    if ($data["service_id"]) {
      $newContact->load('service');
    }
    
    Mail::send(new ContactSubmission($newContact));
    
    return redirect()->route("contacts.index")
      ->withFragment('contacts-section')
      ->with("formSubmitted", true);
  }
}
