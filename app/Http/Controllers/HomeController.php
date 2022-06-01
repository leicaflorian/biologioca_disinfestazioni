<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller {
  /**
   * @return Application|Factory|View
   */
  function index(): View|Factory|Application {
    $featuredServices = Service::where('featured', 1)->orderBy("order", "asc")->get();
   
    return view('index', [
      'featuredServices' => $featuredServices,
    ]);
  }
  
}
