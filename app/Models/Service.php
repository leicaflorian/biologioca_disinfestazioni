<?php

namespace App\Models;

use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Brackets\Media\HasMedia\HasMediaThumbsTrait;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Service extends Model implements HasMedia {
  use ProcessMediaTrait;
  use AutoProcessMediaTrait;
  use HasMediaCollectionsTrait;
  use HasMediaThumbsTrait;
  
  protected $fillable = [
    'slug',
    'name',
    'title',
    'description',
    'description_long',
    'description_short',
    'img_cover_alt',
    'has_page',
    'featured',
    'order',
  
  ];
  
  
  protected $dates = [
    'created_at',
    'updated_at',
  ];
  
  /**
   * The attributes that should be cast.
   *
   * @var array
   */
  protected $casts = [
    'has_page' => 'boolean',
    'featured' => 'boolean',
  ];
  
  protected $appends = ['resource_url'];
  
  /* ************************ ACCESSOR ************************* */
  
  public function registerMediaCollections(): void {
    $this->addMediaCollection('gallery')
      ->accepts('image/*')
      ->maxNumberOfFiles(99);
    
    $this->addMediaCollection('img_cover')
      ->accepts('image/*')
      ->getMaxNumberOfFiles(1);
  }
  
  public function registerMediaConversions(Media $media = null): void {
    $this->autoRegisterThumb200();
    
    $this->getMediaCollections()->filter->isImage()->each(function ($mediaCollection) {
      $this->addMediaConversion('thumb_600')
        ->width(600)
        ->fit(Manipulations::FIT_CONTAIN, 600, 600)
        ->optimize()
        ->performOnCollections($mediaCollection->getName());
    });
  }
  
  public function getResourceUrlAttribute() {
    return url('/admin/services/' . $this->getKey());
  }
  
  public function videos() {
    return $this->hasMany(Video::class);
  }
  
  public function gallery() {
    return $this->hasMany(Media::class, "model_id", "id");
//      ->where("collection_name", "gallery");
  }
  
  public function contacts() {
    return $this->hasMany(Contact::class);
  }
}
