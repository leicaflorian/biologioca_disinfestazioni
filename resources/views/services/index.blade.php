@extends("layouts.main")

@section("page-title", "Tutti i nostri servizi")
@section("page-description", "Grazie all'esperienza acquisita siamo in grado di risolvere qualsiasi inconveniente causato da infestanti piccoli o grandi!")

@section("content")
  <div class="section">
    <div class="container">
      <div class="section-jumbotron position-relative">
        <div class="bg-jumbotron bg-end-75 bg-offset-top">
          <img src="{{asset('images/services_jumbo_bg.jpeg')}}" alt="Vista di una città dall'alto" data-aos="fade-left">
        </div>

        <div class="row">
          <div class="col col-md-9 col-lg-7 col-xl-6">
            <div class="card card-jumbotron" data-aos="fade-right" data-aos-delay="200">
              <div class="card-body">
                <h1 class="card-title mb-5">Tutti i nostri servizi</h1>
                <p class="lead mb-0">Meglio agire: affidati agli specialisti.
                  Scopri i nostri servizi e chiedici consiglio!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Services --}}
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h3 class="section-title" data-aos="fade-right">Le nostre competenze</h3>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 g-3 g-md-4 mb-5">
          @foreach($services as $key=>$service)
            <div class="col" data-aos="fade-up" data-aos-delay="{{$key * 50}}">
              @include("components.card-service", ["withDescription" => true])
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  @include("components.banner-contact-us", ["bgColor" => "bg-primary"])
@endsection
