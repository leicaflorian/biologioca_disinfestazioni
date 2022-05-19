<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller {
  /**
   * @return Application|Factory|View
   */
  function index(): View|Factory|Application {
    $menuEntries = Service::where('has_page', 1)->orderBy("title")->get();
    
    return view('contacts.index', [
      'menuEntries' => $menuEntries
    ]);
  }
}
