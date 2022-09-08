<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

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
}
