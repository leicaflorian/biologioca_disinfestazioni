@extends("layouts.main")

@section("page-title", "Home")
@section("page-description", "Siamo un azienda di Disinfestazione ed operiamo in tutto il gran parte del territorio Veneto! Ci occupiamo di tutti i tipi di infestanti, piccoli e grandi!")

@section("content")
  {{--  Jumbotron --}}
  <div class="section section-jumbotron section-dark">
    <div class="bg-jumbotron">
      <img src="{{asset('images/home_jumbo_bg.jpeg')}}" alt="">
    </div>

    <div class="container text-light">
      <div class="row">
        <div class="col col-md-8 col-lg-6 col-xl-5 col-xxl-4">
          <h1 class="section-title" data-aos="fade-right">DISINFESTIAMO IN MODO RESPONSABILE</h1>
          <p class="lead" data-aos="fade-right" data-aos-delay="100">
            Rispettare e salvaguardare l'ambiente, ma allo stesso tempo essere efficaci: é possibile? Con Biologica
            Disinfestazioni sì! Proponiamo soluzioni mirate ed efficaci, prediligendo prodotti con un minor impatto
            ambientale e tecniche sempre all’avanguardia.
          </p>

          <div class="d-flex" style="gap: 2rem">
            <div data-aos="fade-right" data-aos-delay="300">
              <a href="{{route("contacts.index")}}" class="btn btn-outline-light outline-primary" >Scrivici</a>
            </div>
            <div data-aos="fade-right" data-aos-delay="200">
              <a href="tel:+39 351 7238237" class="btn btn-primary btn-to-light">Chiama</a>
            </div>
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
          <h3 class="section-title" data-aos="fade-right">Alcuni dei nostri servizi più richiesti</h3>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 g-3 g-md-4 mb-5">
          @foreach($featuredServices as $key=>$service)

            <div class="col" data-aos="fade-up" data-aos-delay="{{$key * 100}}">
              @include("components.card-service")
            </div>
          @endforeach
        </div>

        <div class="text-center" data-aos="fade-up">
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
            <img src="{{asset('images/con_cura_1.jpeg')}}" alt="" data-aos="fade-right">
            <img src="{{asset('images/con_cura_2.jpeg')}}" alt="" data-aos="fade-up">
          </div>
        </div>
        <div class="col-lg-5">
          <h2 class="section-title" data-aos="fade-right">
            Lavoriamo con passione, cura e professionalità!
          </h2>

          <p class="lead" data-aos="fade-right" data-aos-delay="100">Il nostro non é solo un lavoro ma prima di tutto
            una passione.</p>

          <div class="row row-cols-1 row-cols-sm-2 g-4 g-md-5">
            <div class="col" data-aos="fade-up" data-aos-delay="200">
              <div class="card-badge ms-4">
                <i class="fa-solid fa-award icon-rounded-offset fs-4 me-2 text-primary"></i>
                <h6 class="card-badge-text">Alta Qualità</h6>
              </div>
            </div>
            <div class="col" data-aos="fade-up" data-aos-delay="300">
              <div class="card-badge ms-4">
                <i class="fa-solid fa-house-circle-check icon-rounded-offset fs-4 me-2 text-primary"></i>
                <h6 class="card-badge-text">Sicurezza</h6>
              </div>
            </div>
            <div class="col" data-aos="fade-up" data-aos-delay="400">
              <div class="card-badge ms-4">
                <i class="fa-solid fa-leaf icon-rounded-offset fs-4 me-2 text-primary"></i>
                <h6 class="card-badge-text">Eco-friendly</h6>
              </div>
            </div>
            <div class="col" data-aos="fade-up" data-aos-delay="500">
              <div class="card-badge ms-4">
                <i class="fa-solid fa-hourglass icon-rounded-offset fs-4 me-2 text-primary"></i>
                <h6 class="card-badge-text">Tempestività</h6>
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
