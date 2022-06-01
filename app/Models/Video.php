<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {
  protected $fillable = [
    'video_link',
    'service_id',
    'order',
    "title", "description", "thumb_default", "thumb_medium", "thumb_high"
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
    'service_id' => 'integer',
  ];
  
  protected $appends = ['resource_url'];
  
  /* ************************ ACCESSOR ************************* */
  
  public function getResourceUrlAttribute() {
    return url('/admin/videos/' . $this->getKey());
  }
  
  public function service() {
    return $this->belongsTo(Service::class);
  }
}
