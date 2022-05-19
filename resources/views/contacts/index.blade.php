@extends("layouts.main")

@section("page-title", "Contatti")

@section("content")
  <div class="section">
    <div class="container">
      <div class="section-jumbotron position-relative">
        <div class="bg-jumbotron bg-end-75 bg-offset-top">
          <img src="{{asset('images/services_jumbo_bg.jpeg')}}" alt="">
        </div>

        <div class="row">
          <div class="col col-md-9 col-lg-7 col-xl-6">
            <div class="card card-jumbotron">
              <div class="card-body">
                <h1 class="card-title mb-5">Contatti</h1>
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

  @include("components.section-contact")
@endsection
