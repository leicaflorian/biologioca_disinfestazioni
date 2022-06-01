<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ServiceController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return Application|Factory|View
   */
  function index(): View|Factory|Application {
    $services    = Service::orderBy("order")->get();
    
    return view('services.index', [
      'services'    => $services
    ]);
  }
  
  /**
   * Display details of a service.
   *
   * @param  string  $service
   *
   * @return Application|Factory|View
   */
  function details($service): View|Factory|Application {
    $service       = Service::where('slug', $service)->first();
    $otherServices = Service::where('slug', '!=', $service->slug)
      ->where("has_page", 1)->inRandomOrder()->limit(3)->get();
  
    return view('services.details', [
      'service'       => $service,
      'otherServices' => $otherServices
    ]);
  }
}
