@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.service.actions.edit', ['name' => $service->name]))

@section('body')

  <div class="container-xl">
    <div class="card">

      @php
        $data = $service->toArray();
        $media = [...$service->getMedia("gallery")->toArray(), ...$service->getMedia("img_cover")->toArray()];

        if(count($media) > 0){
          foreach ($media as $image) {
            $collection = $image["collection_name"];
            $data[$collection . '_meta'][$image["id"]]['alt_text'] = $image["alt_text"];
            $data[$collection . '_meta'][$image["id"]]['order'] = $image["order"];
            $data[$collection . '_meta'][$image["id"]]['caption'] = $image["caption"];
          }
        }
      @endphp

      <service-form
          :action="'{{ $service->resource_url }}'"
          :data="{{ json_encode($data) }}"
          v-cloak
          inline-template>

        <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


          <div class="card-header">
            <i class="fa fa-pencil"></i> {{ trans('admin.service.actions.edit', ['name' => $service->name]) }}
          </div>

          <div class="card-body">
            @include('admin.service.components.form-elements')
          </div>


          <div class="card-footer">
            <button type="submit" class="btn btn-primary" :disabled="submiting">
              <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
              {{ trans('brackets/admin-ui::admin.btn.save') }}
            </button>
          </div>

        </form>

      </service-form>

    </div>

  </div>

@endsection
