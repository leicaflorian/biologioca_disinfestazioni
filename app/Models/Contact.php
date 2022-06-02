<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $email
 */
class Contact extends Model {
  protected $fillable = [
    'name',
    'email',
    'service_id',
    'phone',
    'message',
  
  ];
  
  
  protected $dates = [
    'created_at',
    'updated_at',
  
  ];
  
  protected $appends = ['resource_url'];
  
  /* ************************ ACCESSOR ************************* */
  
  public function getResourceUrlAttribute() {
    return url('/admin/contacts/' . $this->getKey());
  }
  
  public function service() {
    return $this->belongsTo(Service::class, 'service_id');
  }
}
