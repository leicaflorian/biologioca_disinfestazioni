<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Service\BulkDestroyService;
use App\Http\Requests\Admin\Service\DestroyService;
use App\Http\Requests\Admin\Service\IndexService;
use App\Http\Requests\Admin\Service\StoreService;
use App\Http\Requests\Admin\Service\UpdateService;
use App\Models\Service;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use function PHPUnit\Framework\isNull;

class ServicesController extends Controller {
  
  /**
   * Display a listing of the resource.
   *
   * @param  IndexService  $request
   *
   * @return array|Factory|View
   */
  public function index(IndexService $request) {
    // create and AdminListing instance for a specific model and
    $data = AdminListing::create(Service::class)->processRequestAndGet(
    // pass the request with params
      $request,
      
      // set columns to query
      ['id', 'slug', 'name', 'title', 'meta_title',
        'second_title', 'description', 'description_short', 'meta_description',
        'second_content', 'img_cover_alt', 'has_page', 'featured', 'order'],
      
      // set columns to searchIn
      ['id', 'slug', 'name', 'title', 'meta_title',
        'second_title', 'description', 'description_short', 'meta_description',
        'second_content', 'img_cover_alt']
    );
    
    if ($request->ajax()) {
      if ($request->has('bulk')) {
        return [
          'bulkItems' => $data->pluck('id')
        ];
      }
      
      return ['data' => $data];
    }
    
    return view('admin.service.index', ['data' => $data]);
  }
  
  /**
   * Show the form for creating a new resource.
   *
   * @return Factory|View
   * @throws AuthorizationException
   */
  public function create() {
    $this->authorize('admin.service.create');
    
    return view('admin.service.create');
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  StoreService  $request
   *
   * @return array|RedirectResponse|Redirector
   */
  public function store(StoreService $request) {
    // Sanitize input
    $sanitized = $request->getSanitized();
    
    // Store the Service
    $service = Service::create($sanitized);
    
    $this->updateMediaMetadata($service, $request->input("img_cover_meta"));
    $this->updateMediaMetadata($service, $request->input("gallery_meta"));
    
    if ($request->ajax()) {
      return ['redirect' => url('admin/services'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
    }
    
    return redirect('admin/services');
  }
  
  /**
   * Display the specified resource.
   *
   * @param  Service  $service
   *
   * @return void
   * @throws AuthorizationException
   */
  public function show(Service $service) {
    $this->authorize('admin.service.show', $service);

//    $m = $service->getFirstMedia('gallery');

//    $m()
    // TODO your code goes here
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param  Service  $service
   *
   * @return Factory|View
   * @throws AuthorizationException
   */
  public function edit(Service $service) {
    $this->authorize('admin.service.edit', $service);
    
    return view('admin.service.edit', [
      'service' => $service,
    ]);
  }
  
  /**
   * Update the specified resource in storage.
   *
   * @param  UpdateService  $request
   * @param  Service        $service
   *
   * @return array|RedirectResponse|Redirector
   */
  public function update(UpdateService $request, Service $service) {
    // Sanitize input
    $sanitized = $request->getSanitized();
    
    // Update changed values Service
    $service->update($sanitized);
    
    $this->updateMediaMetadata($service, $request->input("img_cover_meta"));
    $this->updateMediaMetadata($service, $request->input("gallery_meta"));
    
    if ($request->ajax()) {
      return [
        'redirect' => url('admin/services'),
        'message'  => trans('brackets/admin-ui::admin.operation.succeeded'),
      ];
    }
    
    return redirect('admin/services');
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  DestroyService  $request
   * @param  Service         $service
   *
   * @return ResponseFactory|RedirectResponse|Response
   * @throws Exception
   */
  public function destroy(DestroyService $request, Service $service) {
    $service->delete();
    
    if ($request->ajax()) {
      return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
    
    return redirect()->back();
  }
  
  /**
   * Remove the specified resources from storage.
   *
   * @param  BulkDestroyService  $request
   *
   * @return Response|bool
   * @throws Exception
   */
  public function bulkDestroy(BulkDestroyService $request): Response {
    DB::transaction(static function () use ($request) {
      collect($request->data['ids'])
        ->chunk(1000)
        ->each(static function ($bulkChunk) {
          Service::whereIn('id', $bulkChunk)->delete();
          
          // TODO your code goes here
        });
    });
    
    return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
  }
  
  /**
   *
   * @param  Service  $service
   * @param  array    $metadata
   *
   * @return void
   */
  private function updateMediaMetadata(Service $service, array|null $metadata) {
    if (is_null($metadata)) {
      return;
    }
    
    /**
     * @var array{alt_text: string, caption: string, order: int} $meta
     **/
    foreach ($metadata as $id => $meta) {
      $service->allMedia()->where('id', $id)->update([
        "caption"  => $meta['caption'],
        "order"    => $meta['order'],
        "alt_text" => $meta['alt_text'],
      ]);
    }
  }
}
