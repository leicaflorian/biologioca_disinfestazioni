@extends("layouts.main")

@section("page-title", $service->meta_title ? $service->meta_title : $service->title)
@section("page-description", strip_tags($service->meta_description))
@section("og_type", "product")

@section("content")

  <div class="section">
    <div class="container">
      <div class="section-jumbotron position-relative">
        <div class="bg-jumbotron bg-end-75 bg-offset-top">
          {{ $service->getFirstMedia("img_cover")("hd", [
              "alt"=>$service->getFirstMedia("img_cover")["alt_text"] ?? $service->title,
              "class"=>"img-fluid",
              "data-aos"=>"fade-left"
            ]) }}
        </div>

        <div class="row">
          <div class="col col-md-8 col-lg-7 col-xl-6">
            <div class="card card-jumbotron" data-aos="fade-right" data-aos-delay="200">
              <div class="card-body">
                <h1 class="card-title mb-0">{{$service->title}}</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-lg-auto">
          <div class="lead main-text" data-aos="fade-up" data-aos-delay="300">{!! $service->description  !!}</div>
        </div>
      </div>
    </div>
  </div>

  <div class="section py-0">
    @php
      $gallery = [];

      foreach ($service->getMedia("gallery") as $media) {
        $gallery[] =array_merge($media->toArray(), [
            "full_hd_url"=>$media->getFullUrl("full-hd"),
          ]);
      }

      $videos = $service->videos->sortBy([
        ["order", "asc"],
        ["created_at", "asc"]
        ])->toArray();
    @endphp

    <slider :slides-per-view='"auto"' :images="{{json_encode($gallery)}}"
            :videos="{{json_encode($videos)}}"></slider>

  </div>

  @include("components.section-why-us", ["title"=> $service->second_title, "text"=>$service->second_content])

  @include("components.banner-contact-us", ["bgColor" => "bg-primary"])

  <div class="section">
    <div class="container">
      <h3 class="section-title d-flex align-items-center">
        <span class="d-inline-block" data-aos="fade-right">
        Altri servizi
        </span>
        <div data-aos="fade-left" class="ms-auto"
             data-aos-delay="200">
          <a href="{{route('services.index')}}" class="btn btn-outline-primary  d-none d-md-block">
            Tutti i servizi</a>
        </div>
      </h3>

      <div class="row row-cols-1 row-cols-md-3 g-3 g-md-4 mb-5">
        @foreach($otherServices as $key=>$service)
          <div class="col" data-aos="fade-left" data-aos-delay="{{$key * 100}}">
            @include("components.card-service", ["withDescription" => true])
          </div>
        @endforeach
      </div>

      <div class="text-center d-md-none">
        <a href="{{ route('services.index') }}" class="btn btn-outline-primary">Tutti i servizi</a>
      </div>
    </div>
  </div>

@endsection
