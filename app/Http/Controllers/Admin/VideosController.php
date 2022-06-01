<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Video\BulkDestroyVideo;
use App\Http\Requests\Admin\Video\DestroyVideo;
use App\Http\Requests\Admin\Video\IndexVideo;
use App\Http\Requests\Admin\Video\StoreVideo;
use App\Http\Requests\Admin\Video\UpdateVideo;
use App\Models\Service;
use App\Models\Video;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Client\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class VideosController extends Controller {
  
  /**
   * Display a listing of the resource.
   *
   * @param  IndexVideo  $request
   *
   * @return array|Factory|View
   */
  public function index(IndexVideo $request) {
    // create and AdminListing instance for a specific model and
    $data = AdminListing::create(Video::class)->processRequestAndGet(
    // pass the request with params
      $request,
      
      // set columns to query
      ['id', 'video_link', 'service_id', 'order', "title", "description", "thumb_default", "thumb_medium", "thumb_high"],
      
      // set columns to searchIn
      ['id', 'video_link', "title", "description",]
    );
    
    $data->load("service");
    
    if ($request->ajax()) {
      if ($request->has('bulk')) {
        return [
          'bulkItems' => $data->pluck('id')
        ];
      }
  
      return ['data' => $data];
    }
    
    
    return view('admin.video.index', ['data' => $data,
    ]);
  }
  
  /**
   * Show the form for creating a new resource.
   *
   * @return Factory|View
   * @throws AuthorizationException
   */
  public function create() {
    $this->authorize('admin.video.create');
    
    $services = Service::orderBy("title")->get();
    
    return view('admin.video.create', [
      "services" => $services
    ]);
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  StoreVideo  $request
   *
   * @return array|RedirectResponse|Redirector
   */
  public function store(StoreVideo $request) {
    // Sanitize input
    $sanitized = $request->getSanitized();
    
    // Store the Video
    $video = Video::create($sanitized);
    
    if ($request->ajax()) {
      return ['redirect' => url('admin/videos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
    }
    
    return redirect('admin/videos');
  }
  
  /**
   * Display the specified resource.
   *
   * @param  Video  $video
   *
   * @return void
   * @throws AuthorizationException
   */
  public function show(Video $video) {
    $this->authorize('admin.video.show', $video);
    
    // TODO your code goes here
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param  Video  $video
   *
   * @return Factory|View
   * @throws AuthorizationException
   */
  public function edit(Video $video) {
    $this->authorize('admin.video.edit', $video);
    
    $services = Service::orderBy("title")->get();
    
    return view('admin.video.edit', [
      'video'    => $video,
      "services" => $services
    ]);
  }
  
  /**
   * Update the specified resource in storage.
   *
   * @param  UpdateVideo  $request
   * @param  Video        $video
   *
   * @return array|RedirectResponse|Redirector
   */
  public function update(UpdateVideo $request, Video $video) {
    // Sanitize input
    $sanitized = $request->getSanitized();
    
    // Update changed values Video
    $video->update($sanitized);
    
    if ($request->ajax()) {
      return [
        'redirect' => url('admin/videos'),
        'message'  => trans('brackets/admin-ui::admin.operation.succeeded'),
      ];
    }
    
    return redirect('admin/videos');
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  DestroyVideo  $request
   * @param  Video         $video
   *
   * @return ResponseFactory|RedirectResponse|Response
   * @throws Exception
   */
  public function destroy(DestroyVideo $request, Video $video) {
    $video->delete();
    
    if ($request->ajax()) {
      return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
    
    return redirect()->back();
  }
  
  /**
   * Remove the specified resources from storage.
   *
   * @param  BulkDestroyVideo  $request
   *
   * @return Response|bool
   * @throws Exception
   */
  public function bulkDestroy(BulkDestroyVideo $request): Response {
    DB::transaction(static function () use ($request) {
      collect($request->data['ids'])
        ->chunk(1000)
        ->each(static function ($bulkChunk) {
          Video::whereIn('id', $bulkChunk)->delete();
          
          // TODO your code goes here
        });
    });
    
    return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
  }
  
  public function videoInfo(\Illuminate\Http\Request $request, $videoId) {
    $API_KEY  = 'AIzaSyAi7TFO_UJfdnhMKy3HMsyXACdqdPdXOMQ';
    $API_link = 'https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id=' . $videoId . '&key=' . $API_KEY;
    
    $response = Http::get($API_link);
    
    $response->throw();
    
    return $response['items'][0]['snippet'];
  }
}
