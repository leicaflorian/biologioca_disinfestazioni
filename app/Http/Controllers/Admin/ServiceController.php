<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;

class ServiceController extends Controller {
  private function generateSlug(string $title, int $idToIgnore) {
    $valid = false;
    $index = 0;
    $slug  = "";
    
    while ( !$valid) {
      $titleToSlug = $title;
      
      if ($index > 0) {
        $titleToSlug = $title . ' ' . $index;
      }
      
      $slug  = Str::slug($titleToSlug);
      $valid = Service::where('slug', $slug)
          ->where('id', "<>", $idToIgnore)->count() == 0;
      
      $index++;
    }
    
    return $slug;
  }
  
  private function generateSmallCoverImage(UploadedFile $image, $folderName) {
    $size    = 600;
    $imgFile = Image::make($image->getRealPath());
    
    $imgFile->resize($size, $size, function ($constraint) {
      $constraint->aspectRatio();
    });
    
    $path = $folderName . '/low_res_' . $image->getFilename() . "." . $image->clientExtension();
    $file = Storage::put($path, $imgFile->stream());
    
    return $file ? $path : false;
  }
  
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function index() {
    $services = Service::orderBy("title", "asc")->get();
    
    return view('admin.services.index', [
      'services' => $services
    ]);
  }
  
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create() {
    //
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   *
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
  
  }
  
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   *
   * @return \Illuminate\Http\Response
   */
  public function show(Service $service) {
  
  
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   *
   * @return \Illuminate\Http\Response
   */
  public function edit(Service $service) {
    return view('admin.services.edit', [
      'service' => $service
    ]);
  }
  
  /**
   * Update the specified resource in storage.
   *
   * @param  Request  $request
   * @param  Service  $service
   *
   * @return RedirectResponse
   */
  public function update(Request $request, Service $service): RedirectResponse {
    $data = $request->only([
      'name',
      'title',
      'description',
      'description_long',
      'description_short',
      'img_cover',
      'img_cover_alt',
      'has_page',
      'featured',
      'order',
    ]);
    
    
    // Update the slug if title has changed
    if ($data['name'] != $service->name) {
      $data['slug'] = $this->generateSlug($data['name'], $service->id);
    }
    
    if (key_exists("img_cover", $data)) {
      // Update main cover
      if ($service["img_cover"]) {
        Storage::delete($service["img_cover"]);
      }
      
      $data["img_cover"] = Storage::put("coverImages", $data["img_cover"]);
      
      // Update the thumbnail
      if ($service["img_cover_low_res"]) {
        Storage::delete($service["img_cover_low_res"]);
      }
      $data['img_cover_low_res'] = $this->generateSmallCoverImage($request->file("img_cover"), 'coverImages');
    }
    
    $service->update($data);
    
    return redirect()->route('admin.services.index');
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   *
   * @return \Illuminate\Http\Response
   */
  public function destroy($id) {
    //
  }
}
