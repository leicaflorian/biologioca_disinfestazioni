@extends("layouts.main")

@section("page-title", "Disinfestazioni Veneto: affidati a Biologica Disinfestazioni")
@section("page-description", "Proponiamo soluzioni mirate per disinfestazioni in Veneto di ogni genere, normative in materia di HACCP e Sanificazione di locali commerciali e non.")

@section("header_script")
  <script>
    gtag('event', 'conversion', { 'send_to': 'AW-10950377080/vOVxCKaorM4DEPj8xeUo' })
  </script>
@endsection

@section("content")
  {{--  Jumbotron --}}
  <div class="section section-jumbotron section-dark">
    <div class="bg-jumbotron bg-homepage">
      <img src="{{asset('images/home_jumbo_bg.jpeg')}}" alt="Mamma con la figlia ed il cane, all'aperto in sicurezza.">
    </div>

    <div class="container text-light">
      <div class="row">
        <div class="col col-md-8 col-lg-7 col-xl-6 col-xxl-5">
          <h1 class="section-title" data-aos="fade-right">DISINFESTIAMO IN MODO RESPONSABILE A VICENZA</h1>
          <p class="lead" data-aos="fade-right" data-aos-delay="100">
            Biologica Disinfestazioni propone soluzioni mirate ed efficaci per risolvere qualsiasi problema legato ad
            insetti, normative vigenti in materia di HACCP e Sanificazione, prediligendo prodotti con minore impatto
            ambientale e tecniche di intervento all’avanguardia.
          </p>
          <p class="lead" data-aos="fade-right" data-aos-delay="300">
            Operiamo in gran parte del territorio Veneto, in particolare nelle zone di Bassano del Grappa, Marostica,
            Tezze sul Brenta, Vicenza, ma anche in provincia di Padova e Treviso.
          </p>


          <div class="d-flex" style="gap: 1rem">
            <div data-aos="fade-right" data-aos-delay="300">
              <a href="{{route("contacts.index")}}" class="btn btn-outline-light outline-primary">Scrivici</a>
            </div>
            <div data-aos="fade-right" data-aos-delay="200">
              <a href="tel:+39 351 7238237" class="btn btn-primary btn-to-light">Chiama</a>
            </div>
          </div>

          <div data-aos="fade-up" data-aos-delay="300" class="pt-3">
            <a id="save-contact-btn" href="#" class="text-light btn btn-link btn-sm">Salva il nostro contatto</a>
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
          <h2 class="section-title" data-aos="fade-right">Alcuni dei nostri servizi più richiesti</h2>
        </div>
      </div>

      <p class="lead mb-5" data-aos="fade-left">In qualità di <strong>esperti nel controllo dei parassiti</strong>,
        siamo in grado di
        controllare ed eliminare
        con successo varie infestazioni di insetti, roditori e parassiti in tutto il Veneto e nelle zone
        circostanti. In particolar modo ci occupiamo di realizzare <strong>Disinfestazioni a Vicenza</strong> per
        scongiurare il
        proliferare eccessivo di colonie indesiderate in ambienti residenziali, commerciali, industriali e di
        stoccaggio. Siamo al tuo fianco per risolvere problemi così spiacevoli come
        le infestazioni alla radice ed evitare che si ripresentino nel tempo.</p>

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

  @include("components.banner-contact-us", ["bgColor"=> "bg-primary"])

  {{-- Lavoro con passione --}}
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col mb-4 mb-lg-0">
          {{-- Sfondo immagini --}}
          <div class="offset-img-container ">
            <img src="{{asset('images/con_cura_1.jpeg')}}" alt="Esposizione di vari tipi di insetti"
                 data-aos="fade-right">
            <img src="{{asset('images/con_cura_2.jpeg')}}" alt="Analisi sotto lente di ingrandimento di uno scarafaggio"
                 data-aos="fade-up">
          </div>
        </div>
        <div class="col-lg-7">
          <h2 class="section-title" data-aos="fade-right">
            Biologica Disinfestazioni lavora con passione, cura e professionalità!
          </h2>

          <p class="lead mb-5" data-aos="fade-right" data-aos-delay="100">
            Il nostro non é solo un lavoro ma prima di tutto una passione: grazie al nostro impegno nel effettuare
            <strong>disinfestazioni in Veneto</strong> abbiamo aiutato decine di committenti a liberarsi da insetti,
            roditori e parassiti
            indesiderati, <strong>rendendo il nostro territorio un posto più sicuro</strong>. Il nostro impegno va in
            favore di famiglie,
            professionisti ed aziende produttrici per dare serenità quotidiana e sicurezza a chi vive le città.
          </p>

          <x-company-principles :compact="true"></x-company-principles>
        </div>
      </div>
    </div>
  </div>

@endsection
