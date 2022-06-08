@extends("layouts.main")

@section("page-title", $service->name)
@section("page-description", $service->description_short)
@section("og_type", "product")

@section("content")
  <div class="section">
    <div class="container">
      <div class="section-jumbotron position-relative">
        <div class="bg-jumbotron bg-end-75 bg-offset-top">
          {{ $service->getFirstMedia("img_cover")("hd", [
              "alt"=>$service->getFirstMedia("img_cover")["alt_text"],
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
      $gallery = $service->getMedia("gallery");
      $videos = $service->videos->toArray();
    @endphp

    <div class="" id="gridContainer">
      @foreach($videos as $video)
        <a style="max-width: 400px; aspect-ratio: 16/9"
           data-lg-size="1280-720"
           data-src="{{$video["video_link"]}}" class="d-inline-block"
           data-poster="{{$video["thumb_high"]}}">
          <img src="{{$video["thumb_high"]}}" alt="Anteprima video {{$video['title']}}" class="w-100 h-100"
               style="object-fit: cover;">
        </a>
      @endforeach

      @foreach($gallery as $image)
        <a style="max-width: 400px;" href="{{$image->getFullUrl("full-hd")}}" class="d-inline-block">
          {{$image('full-hd', [
                  "alt"=> $image["alt_text"] ?? "Immagine relativa al servizio ". $service->title,
                  "class"=> "w-100 h-100",
                  "style"=> "object-fit: cover;",
            ])}}
        </a>
      @endforeach

      <div class="overlay">
        <span class="display-2 mb-3">Caricamento in corso...</span>

        <div class="spinner-grow text-primary" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>
  </div>

  @include("components.banner-contact-us", ["bgColor" => "bg-primary"])

  @include("components.section-why-us")


  <div class="section">
    <div class="container">
      <h3 class="section-title d-flex align-items-center">
        <span class="d-inline-block" data-aos="fade-right">
        Altri servizi
        </span>
        <div data-aos="fade-left" class="ms-auto"
             data-aos-delay="200">
          <a href="{{route('services.index')}}" class="btn btn-outline-primary  d-none d-md-block">Tutti
            i servizi</a>
        </div>
      </h3>

      <div class="row row-cols-3 g-3 g-md-4 mb-5">
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
