<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Google;

class SitemapController extends Controller {
  public function index(Request $request) {
    $services = Service::where('has_page', true)->orderBy("title")->get();
    
    $sitemap = Sitemap::create()
      ->add(Url::create(route('home'))->setChangeFrequency("monthly")->setPriority(1))
      ->add(Url::create(route('services.index'))->setChangeFrequency("monthly")->setPriority(1))
      ->add(Url::create(route('contacts.index'))->setChangeFrequency("monthly")->setPriority(.8));
    
    foreach ($services as $service) {
      $sitemap->add(Url::create(route('services.details', $service->slug))
        ->setChangeFrequency("monthly")
        ->setPriority(.9)
        ->setLastModificationDate($service->updated_at));
    }
    
    return $sitemap->toResponse($request);
  }
  
  public function test() {
    $client = new Google\Client();
//    $client->setApplicationName("Client_Library_Examples");
//    $client->setDeveloperKey("AIzaSyDaT910cD5SB8RKZm9z8W-t6YctMvlQoKk");
    $client->setAuthConfig(__DIR__ . '/../../../client_secret_476416466685-o0b07o1n6614qnds6ar8p8i9g0aotqbt.apps.googleusercontent.com.json');
  
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
    $client->setRedirectUri($redirect_uri);
    
    $service   = new Google\Service\MyBusinessAccountManagement($client);
    $results   = $service->accounts->listAccounts();
  
      dump($results);
//    foreach ($results->getItems() as $item) {
//      echo $item['volumeInfo']['title'], "<br /> \n";
//    }
  }
}
