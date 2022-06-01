<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medium extends Model {
  protected $fillable = [
    'model_type',
    'model_id',
    'uuid',
    'collection_name',
    'name',
    'file_name',
    'mime_type',
    'disk',
    'conversions_disk',
    'size',
    'manipulations',
    'custom_properties',
    'generated_conversions',
    'responsive_images',
    'order',
    'caption',
    'alt_text',
  ];
  
  
  protected $dates = [
    'created_at',
    'updated_at',
  
  ];
  
  protected $appends = ['resource_url'];
  
  /* ************************ ACCESSOR ************************* */
  
  public function getResourceUrlAttribute() {
    return url('/admin/media/' . $this->getKey());
  }
  
  public function service() {
    return $this->belongsTo(Service::class, "model_id", "id");
  }
}
