@extends("layouts.main")

@section("page-title", "Contatti | Biologica Disinfestazioni")
@section("page-description", "Contattataci per avere un preventivo gratuito o per qualsiasi altra informazione sugli infestanti che ti disturbano. --> 351 7238237")

@section("content")
  <div class="section">
    <div class="container">
      <div class="section-jumbotron position-relative">
        <div class="bg-jumbotron bg-end-75 bg-offset-top">
          <img src="{{asset('images/contact_jumbo_bg.jpeg')}}" alt="Smartphone in primo piano con cui contattare Biologica Disinfestazioni" data-aos="fade-left">
        </div>

        <div class="row">
          <div class="col col-md-9 col-lg-7 col-xl-6">
            <div class="card card-jumbotron" data-aos="fade-right" data-aos-delay="200">
              <div class="card-body">
                <h1 class="card-title mb-5">Contatti</h1>
                <p class="lead mb-0">Meglio agire in fretta: Contattaci per avere un preventivo gratuito o per
                  qualsiasi altra informazione sugli infestanti che ti disturbano!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include("components.section-contact")

  <div class="section overflow-hidden">
    <div id="map" data-aos="fade-right" data-aos-delay="500"></div>

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 offset-md-6">
          <h3 class="section-title mb-3" data-aos="fade-left">Biologica Disinfestazioni è presente in tutta la provincia
            di Vicenza e non
            solo!</h3>
          <h6 class="text-secondary mb-5" data-aos="fade-left" data-aos-delay="200">Ecco alcuni dei comuni
            principali</h6>
          @php
            $citiesList = [
              ["label"=>"Thiene", "coordinates"=>"45.6947834,11.4663993"],
              ["label"=>"Schio", "coordinates"=>"45.7113999,11.3582386"],
              ["label"=>"Vicenza", "coordinates"=>"45.5502767,11.5158951"],
              ["label"=>"Marostica", "coordinates"=>"45.7444728,11.6486996"],
              ["label"=>"Bassano del Grappa", "coordinates"=>"45.7625723,11.6789351"],
              ["label"=>"Tezze sul Brenta", "coordinates"=>"45.69151,11.6983274"],
              ["label"=>"Cartigliano", "coordinates"=>"45.7105592,11.6935929"],
              ["label"=>"Rosà", "coordinates"=>"45.7154013,11.7371201"],
              ["label"=>"Asiago", "coordinates"=>"45.8727102,11.4961087"],
              ["label"=>"Valdagno", "coordinates"=>"45.6440518,11.260047"],
              ["label"=>"Cornedo Vicentino", "coordinates"=>"45.6186891,11.3134762"],
              ["label"=>"Arzignano", "coordinates"=>"45.5173893,11.3243809"],
              ["label"=>"Creazzo", "coordinates"=>"45.5321662,11.4687597"],
              ["label"=>"Isola Vicentina", "coordinates"=>"45.6284551,11.4373274"],
              ["label"=>"Torri di Quartesolo", "coordinates"=>"45.5203371,11.6071841"],
              ["label"=>"Noventa Vicentina", "coordinates"=>"45.2907825,11.5351509"],
              ["label"=>"Torrebelvicino", "coordinates"=>"45.7222444,11.2617064"],
              ["label"=>"Valli del Pasubio", "coordinates"=>"45.7397011,11.2580876"],
              ["label"=>"Longare", "coordinates"=>"45.4773572,11.5890265"],
              ["label"=>"Lonigo", "coordinates"=>"45.3824095,11.3603105"],
              ["label"=>"Roana", "coordinates"=>"45.8791929,11.4389953"],
              ["label"=>"Sandrigo", "coordinates"=>"45.6596582,11.5798782"],
              ["label"=>"Villaverla", "coordinates"=>"45.648253,11.4739685"],
              ["label"=>"Cassola", "coordinates"=>"45.7332411,11.7889874"],
              ["label"=>"Cittadella (TV)", "coordinates"=>"45.852456,12.3084534"],
              ["label"=>"Castelfranco Veneto (TV)", "coordinates"=>"45.6737041,11.9147041"],
              ["label"=>"Piombino Dese (PD)", "coordinates"=>"45.6105642,11.9639735"],
            ];

            $marks = [];
            foreach ($citiesList as $key => $row)
            {
                $marks[$key] = $row['label'];
            }

            array_multisort($marks, SORT_ASC, $citiesList);
          @endphp

          <div class="list-group overflow-auto list-group-flush" id="locationsList" style="max-height: 300px;"
               data-aos="fade-left" data-aos-delay="300">
            @foreach($citiesList as $city)
              <h6 class="list-group-item list-group-item-action mb-0 fw-normal fa-1x"
                  data-coordinates="{{$city["coordinates"]}}">
                {{$city["label"]}}
              </h6>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section("scripts")
  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaT910cD5SB8RKZm9z8W-t6YctMvlQoKk&callback=initMap&v=weekly"
      defer
  ></script>

  <script>
    let map
    let key = 'AIzaSyCoQIhGOSDquFr9IZDpP_R00y8lJX-kSw4'

    function initMap () {
      const locationsList = document.getElementById('locationsList')
      let marker

      map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 45.69151, lng: 11.6983274 },
        zoom: 10
      })

      const citiesList = {!! json_encode($citiesList) !!};
      const infowindow = new google.maps.InfoWindow({
        content: ''
      })
      const markersList = {}

      infowindow.addListener('closeclick', function () {
        locationsList.querySelector('.active')?.classList.remove('active')
      })

      citiesList.forEach(city => {
        const marker = new google.maps.Marker({
          position: {
            lat: parseFloat(city.coordinates.split(',')[0]),
            lng: parseFloat(city.coordinates.split(',')[1])
          },
          map: map,
          title: city.label
        })

        markersList[city.coordinates] = {
          marker,
          city
        }

        marker.addListener('click', function () {
          locationsList.querySelector('.active')?.classList.remove('active')
          const elToActivate = locationsList.querySelector(`[data-coordinates="${city.coordinates}"]`)
          elToActivate.classList.add('active')

          locationsList.scrollTo({
            top: elToActivate.offsetTop - locationsList.offsetTop,
            behavior: 'smooth'
          })

          openInfoWindow(marker, city)
        })
      })

      locationsList.addEventListener('click', function (e) {
        const coordinates = e.target.dataset.coordinates
        const latLng = new google.maps.LatLng(...coordinates.split(','))

        this.querySelector('.active')?.classList.remove('active')

        e.target.classList.add('active')

        map.setCenter(latLng)
        map.setZoom(13)

        const { marker, city } = markersList[coordinates]

        openInfoWindow(marker, city)
      })

      function openInfoWindow (marker, city) {
        infowindow.setContent(`<div class="p-3 "><h6 class="mb-0 text-center">${city.label}</h6><p class="lead text-center mb-0">e limitrofi</p></div>`)

        infowindow.open({
          anchor: marker,
          map,
          shouldFocus: false
        })
      }
    }

    window.initMap = initMap
  </script>
@endsection
