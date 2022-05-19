@extends("layouts.main")

@section("page-title", $service->name)

@section("content")
  <div class="section">
    <div class="container">
      <div class="section-jumbotron position-relative">
        <div class="bg-jumbotron bg-end-75 bg-offset-top">
          <img src="{{$service->img_cover}}" alt="{{$service->img_cover_alt}}">
        </div>

        <div class="row">
          <div class="col col-md-8 col-lg-7 col-xl-6">
            <div class="card card-jumbotron">
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
          <div class="lead">{!! $service->description_long  !!}</div>

        </div>
      </div>
    </div>
  </div>


  @include("components.banner-contact-us", ["bgColor" => "bg-primary"])

  @include("components.section-why-us")


  <div class="section">
    <div class="container">
      <h3 class="section-title d-flex align-items-center">
        Altri servizi
        <a href="" class="btn btn-outline-primary ms-auto d-none d-md-block">Tutti i servizi</a>
      </h3>

      <div class="row row-cols-3 g-3 g-md-4 mb-5">
        @foreach($otherServices as $service)
          <div class="col">
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
