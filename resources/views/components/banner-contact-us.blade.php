@php
  $bgColor = $bgColor ?? 'bg-dark';
@endphp

<div class="section section-dark section-bg-leafs position-sticky bottom-0 {{$bgColor}}" id="contact-us-banner">
  <div class="container text-center">
    <h3 class="section-title">Come ti possiamo aiutare?</h3>

    <div class="d-flex justify-content-center" style="gap: 1rem" >
      <div>
        <a href="tel:+39 351 7238237" class="btn btn-outline-light btn-mobile-only-icon">
          <i class="fas fa-phone me-md-2"></i>
          <span>Chiamaci</span></a>
      </div>
      <div>
        <a href="{{route('contacts.index')}}" class="btn btn-dark btn-mobile-only-icon">
          <i class="fas fa-envelope me-md-2"></i>
          <span>Scrivici</span></a>
      </div>
      <div>
        <a href="https://api.whatsapp.com/send?phone=393517238237&text=Buongiorno%2C%20vorrei%20maggiori%20informazioni%20su%20"
           class="btn btn-outline-light btn-mobile-only-icon">
            <i class="fab fa-whatsapp me-md-2"></i>
          <span>Whatsapp</span></a>
      </div>
    </div>
  </div>
</div>
<div id="contact-us-banner-sentinel"></div>
