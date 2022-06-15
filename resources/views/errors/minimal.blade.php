@extends("layouts.main")

@section("page-title", "Oops! - " . $exception->getStatusCode())
@section("page-description", "Sembra ci sia stato un problema!")

@section("content")
  <div class="section">
    <div class="container">
      <div class="section-jumbotron position-relative">
        <div class="bg-jumbotron bg-end-75 bg-offset-top">
          <img src="{{asset('images/error_jumbo_bg.jpeg')}}" alt="Vista di una città dall'alto" data-aos="fade-left">
        </div>

        <div class="row">
          <div class="col col-md-8 col-lg-7 col-xl-6">
            <div class="card card-jumbotron" data-aos="fade-right" data-aos-delay="200">
              <div class="card-body">
                <h1 class="card-title"> Ooops! </h1>
                <h6 class=" mb-0">{{ $exception->getStatusCode() }} - @yield("message")</h6>
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
          <p class="lead main-text text-center" data-aos="fade-up" data-aos-delay="300">
            @php
              $code = $exception->getStatusCode();
            @endphp
            @if($code >= 500 && $code < 600)
              Ci dispiace ma sembra che ci sia un problema del recuperare le informazioni richieste
            @elseif($code >= 400 && $code < 500)
              Ci dispiace ma sembra che la pagina che stai cercando di visualizzare non esista o al momento non è
              raggiungibile.
            @endif

            Se il problema persiste, ti preghiamo di contattarci e saremo felici di darti una mano.
          </p>
        </div>
      </div>
    </div>
  </div>

  @include("components.banner-contact-us", ["bgColor" => "bg-primary"])

@endsection
