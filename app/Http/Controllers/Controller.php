<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response;

class Controller extends BaseController {
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  
  /**
   * @param $method
   * @param $parameters
   *
   * @return Response
   */
  function callAction($method, $parameters) {
    /**
     * @var Response $resp
     */
    $resp = parent::callAction($method, $parameters);
    
    if (isset($resp) && !is_array($resp) && is_object($resp) && get_class($resp) === "Illuminate\View\View") {
      $menuEntries = Service::where('featured', 1)->orderBy("title")->get();
      
      $resp["menuEntries"] = $menuEntries;
      $resp["recaptchaKey"] = env("RECAPTCHA_KEY");
    }
    
    return $resp;
  }
}
