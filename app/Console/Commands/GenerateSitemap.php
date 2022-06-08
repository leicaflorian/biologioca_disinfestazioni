<?php

namespace App\Console\Commands;

use App\Models\Service;
use Illuminate\Console\Command;
use Psr\Http\Message\UriInterface;
use Spatie\Crawler\Crawler;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command {
  /**
   * The console command name.
   *
   * @var string
   */
  protected $signature = 'sitemap:generate';
  
  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Generate the sitemap.';
  
  /**
   * Execute the console command.
   *
   * @return mixed
   */
  public function handle() {
    $services = Service::where('has_page', true)->orderBy("title")->get();
    
    $sitemap = Sitemap::create()
      ->add(Url::create(route('home'))->setChangeFrequency("monthly"))
      ->add(Url::create(route('services.index'))->setChangeFrequency("monthly"))
      ->add(Url::create(route('contacts.index'))->setChangeFrequency("monthly"));
    
    foreach ($services as $service) {
      $sitemap->add(Url::create(route('services.details', $service->slug))->setChangeFrequency("monthly")->setPriority(1));
    }
    
    $sitemap->writeToFile(public_path('sitemap.xml'));
  }
}
