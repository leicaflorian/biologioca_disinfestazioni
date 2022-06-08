@php
  $withDescription = $withDescription ?? false;
  $tag = $withDescription ? 'div' : 'a';
@endphp

<{{$tag}} class="card card-service h-100" href="{{route('services.details', $service->slug)}}">
<div class="card-img-top">
  {{ $service->getFirstMedia("img_cover")("card", [
              "alt"=>$service->img_cover_alt,
            ]) }}
</div>

<div class="card-body ">
  @if(!$withDescription)
    <h5 class="card-title fs-6 mb-0">{{$service->title}}</h5>
  @else
    <h5 class="card-title fs-6 text-start mb-4">{{$service->title}}</h5>

    <div class="card-text text-start text-secondary overflow-auto" data-simplebar
         style="max-height: 200px">{!! $service->description !!}</div>

    @if($service->has_page)
      <div class="border-top text-start pt-3 mt-3">
        <a href="{{route('services.details', $service->slug)}}" class="card-link">- scopri di più</a>
      </div>
    @endif
  @endif
</div>
</{{$tag}}>
