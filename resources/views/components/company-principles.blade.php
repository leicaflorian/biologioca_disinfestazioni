<div>
  <div class="row row-cols-1 row-cols-md-2 g-4 g-lg-5">
    @foreach($principles as $principle)
      <div class="col" data-aos="fade-up">
        <div class="card-badge gap-0">
          <i class="{{$principle["icon"]}} icon-rounded-offset fs-4 me-2 text-primary"></i>
          <h6 class="card-badge-text">{{$principle["title"]}}</h6>
          <p class="text-center">{{$principle["shortText"]}}</p>
        </div>
      </div>
    @endforeach
  </div>
</div>
