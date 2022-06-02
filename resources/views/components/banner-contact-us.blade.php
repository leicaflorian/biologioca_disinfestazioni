@php
  $bgColor = $bgColor ?? 'bg-dark';
@endphp

<div class="section section-dark section-bg-leafs {{$bgColor}}">
  <div class="container text-center">
    <h3 class="section-title" data-aos="fade-down">Come ti possiamo aiutare?</h3>

    <div class="d-flex justify-content-center flex-column flex-md-row" style="gap: 1rem">
      <div data-aos="fade-right" data-aos-delay="100">
        <a href="tel:+39 351 7238237" class="btn btn-outline-light ">
          <i class="fas fa-phone me-2"></i>
          Chiamaci</a>
      </div>
      <div data-aos="fade-up" data-aos-delay="300">
        <a href="{{route('contacts.index')}}" class="btn btn-dark">
          <i class="fas fa-envelope me-2"></i>
          Scrivici</a>
      </div>
      <div data-aos="fade-left" data-aos-delay="200">
        <a href="https://api.whatsapp.com/send?phone=393517238237&text=Buongiorno%2C%20vorrei%20maggiori%20informazioni%20su%20" class="btn btn-outline-light">
          <i class="fab fa-whatsapp me-2"></i>
          Whatsapp</a>
      </div>
    </div>
  </div>
</div>
