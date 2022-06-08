<?php

namespace App\Services;


use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class CustomPathGenerator implements PathGenerator {
  
  public function getPath(Media $media): string {
    return $media->id . "/";
  }
  
  public function getPathForConversions(Media $media): string {
    return $media->id . "/conversions/";
  }
  
  public function getPathForResponsiveImages(Media $media): string {
    return $media->id . "/responsive/";
  }
}
