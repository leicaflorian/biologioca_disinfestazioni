@extends("layouts.main")

@section("page-title", "Home")

@section("content")
  {{--  Jumbotron --}}
  <div class="section section-jumbotron section-dark">
    <div class="bg-jumbotron">
      <img src="{{asset('images/home_jumbo_bg.jpeg')}}" alt="">
    </div>

    <div class="container text-light">
      <div class="row">
        <div class="col col-md-8 col-lg-6 col-xl-5 col-xxl-4">
          <h1 class="section-title">DISINFESTIAMO IN MODO RESPONSABILE</h1>
          <p class="lead">
            Rispettare e salvaguardare l'ambiente, ma allo stesso tempo essere efficaci: é possibile? Con biologica
            disinfestazioni sì! Proponiamo soluzioni mirate ed efficaci, prediligendo prodotti con un minor impatto
            ambientale e tecniche sempre all’avanguardia.
          </p>

          <div class="d-flex" style="gap: 2rem">
            <a href="#" class="btn btn-outline-light outline-primary">Scrivici</a>
            <a href="#" class="btn btn-primary btn-to-light">Chiama</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Alcuni dei nostri servizi --}}
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h3 class="section-title">Alcuni dei nostri servizi più richiesti</h3>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 g-3 g-md-4 mb-5">
          @foreach($featuredServices as $service)

            <div class="col">
              @include("components.card-service")
            </div>
          @endforeach
        </div>

        <div class="text-center">
          <a href="{{ route('services.index') }}" class="btn btn-outline-primary">Tutti i servizi</a>
        </div>
      </div>
    </div>
  </div>

  {{-- Banner risolvi subito --}}
  {{--  <div class="section section-dark bg-dark section-bg-leafs">
      <div class="container text-center">
        <h3 class="section-title">RISOLVI SUBITO IL TUO PROBLEMA!
        </h3>
        <a href="#" class="btn btn-primary btn-to-light">Chiamaci</a>
      </div>
    </div>--}}

  @include("components.banner-contact-us", ["bgColor"=> "bg-primary"])

  {{--  Banner con le nostre aziende  --}}

  {{-- Banner con le nostre esperienze --}}

  {{-- Lavoro con passione --}}
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col mb-4 mb-lg-0">
          {{-- Sfondo immagini --}}
          <div class="offset-img-container ">
            <img src="{{asset('images/con_cura_1.jpeg')}}" alt="">
            <img src="{{asset('images/con_cura_2.jpeg')}}" alt="">
          </div>
        </div>
        <div class="col-lg-5">
          <h2 class="section-title">
            Lavoriamo con passione, cura e professionalità!
          </h2>

          <p class="lead">Il nostro non é solo un lavoro ma prima di tutto una passione.</p>

          <div class="row row-cols-1 row-cols-sm-2 g-4">
            <div class="col">
              <div class="card-badge">
                <img src="{{asset('images/icon_quality.svg')}}" alt="">
                <h6 class="card-badge-text">Alta Qualità</h6>
              </div>
            </div>
            <div class="col">
              <div class="card-badge">
                <img src="{{asset('images/icon_security.svg')}}" alt="">
                <h6 class="card-badge-text">Sicurezza</h6>
              </div>
            </div>
            <div class="col">
              <div class="card-badge">
                <img src="{{asset('images/icon_eco_friendly.svg')}}" alt="">
                <h6 class="card-badge-text">Eco-friendly</h6>
              </div>
            </div>
            <div class="col">
              <div class="card-badge">
                <img src="{{asset('images/icon_convenient.svg')}}" alt="">
                <h6 class="card-badge-text">Convenienza</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Section contatti --}}
  {{--  @include("components.section-contact")--}}
@endsection
