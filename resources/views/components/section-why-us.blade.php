@php
  $bgColor = $bgColor ?? 'bg-light';
@endphp

<div class="section {{$bgColor}}">
  <div class="container">
    <h3 class="section-title mb-0">Perchè scegliere noi?</h3>
    <h6 class="text-secondary mb-5">Ecco 4 buoni motivi</h6>

    <div class="row row-cols-1 row-cols-md-2 g-4 g-lg-5">
      <div class="col">
        @include("components.card-why-us", [
          "icon" => "fa-solid fa-leaf",
          "title" => "Eco-friendly",
          "text" => "Eseguiamo trattamenti con prodotti e tecniche che rispettano la sicurezza della persona, degli animali e
      con minore impatto ambientale."
        ])
      </div>

      <div class="col">
        @include("components.card-why-us", [
          "icon" => "fa-solid fa-house-circle-check",
          "title" => "Sicurezza",
          "text" => "Il nostro personale lavora sempre in sicurezza utilizzando tutti i dispositivi di protezione ed è
              costantemente aggiornato sulle normative vigenti."
        ])
      </div>

      <div class="col">
        @include("components.card-why-us", [
         "icon" => "fa-solid fa-hourglass",
         "title" => "Tempestività",
         "text" => "Eseguiamo interventi urgenti, programmati, periodici in base all'esigenza del cliente."
       ])
      </div>

      <div class="col">
        @include("components.card-why-us", [
          "icon" => "fa-solid fa-award",
          "title" => "Alta qualità",
          "text" => "Il nostro lavoro è prima di tutto una passione; per questo lavoriamo con impegno e professionalità."
        ])
      </div>
    </div>
  </div>
</div>
