@php
  $bgColor = $bgColor ?? 'bg-dark';
@endphp

<div class="section section-dark section-bg-leafs {{$bgColor}}">
  <div class="container text-center">
    <h3 class="section-title">Come ti possiamo aiutare?</h3>

    <div class="d-flex justify-content-center flex-column flex-md-row" style="gap: 1rem">
      <a href="" class="btn btn-outline-light ">
        <i class="fas fa-phone me-2"></i>
        Chiamaci</a>
      <a href="{{route('contacts.index')}}" class="btn btn-dark">
        <i class="fas fa-envelope me-2"></i>
        Scrivici</a>
      <a href="" class="btn btn-outline-light">
        <i class="fab fa-whatsapp me-2"></i>
        Whatsapp</a>
    </div>
  </div>
</div>
