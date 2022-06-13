<div class="section bg-light" id="contacts-section">
  <div class="container">
    <div class="row">
      <div class="col-lg">
        <h3 class="section-title" data-aos="fade-right">Scrivici per una consulenza gratuita
        </h3>

        <div>
          <ul class="list-unstyled list-contacts flex-lg-column " style="gap: 2rem">
            <li class="list-item-with-icon" data-aos="fade-right" data-aos-delay="100">
              <a target="_blank"
                 href="https://www.google.it/maps/place/Comune+di+Tezze+sul+Brenta/@45.6868356,11.7012757,15.53z/data=!4m5!3m4!1s0x4778d1811809c60d:0xf0807f2e50054a8d!8m2!3d45.6872232!4d11.7037791">
                <i class="fa-solid fa-location-pin icon-rounded icon-primary icon-lg"></i>
                Tezze sul Brenta</a></li>
            <li class="list-item-with-icon" data-aos="fade-right" data-aos-delay="200">
              <a href="tel:+39 351 7238237">
                <i class="fa-solid fa-phone icon-rounded icon-primary icon-lg"></i>
                +39 351 7238237</a></li>
            <li class="list-item-with-icon" data-aos="fade-right" data-aos-delay="300">
              <a href="https://api.whatsapp.com/send?phone=393517238237&text=Buongiorno%2C%20vorrei%20maggiori%20informazioni%20su%20">
                <i class="fa-brands fa-whatsapp icon-rounded icon-primary icon-lg"></i>
                WhatsApp</a></li>
            <li class="list-item-with-icon" data-aos="fade-right" data-aos-delay="400">
              <a href="mailto:info@biologicadisinfestazioni.it?subject=Informazioni">
                <i class="fa-solid fa-envelope icon-rounded icon-primary icon-lg"></i>
                info@biologicadisinfestazioni.it</a></li>
          </ul>
        </div>

      </div>
      <div class="col-lg">
        @if(!session()->has('formSubmitted'))
          <form action="{{route('contacts.store') . '#contacts-section'}}" method="post" class="needs-validation">
            @csrf

            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="mb-4 form-floating" data-aos="fade-left">
                  <input type="text" class="form-control @error('name') is-invalid @enderror"
                         placeholder="Nome"
                         name="name"
                         value="{{old('name')}}">
                  <label for="">Nome</label>
                  @error('name')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="mb-4 form-floating" data-aos="fade-left" data-aos-delay="200">
                  <input type="text" class="form-control @error('email') is-invalid @enderror"
                         placeholder="Email" name="email"
                         value="{{old('email')}}">
                  <label for="">Email</label>
                  @error('email')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror</div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="mb-4 form-floating" data-aos="fade-left" data-aos-delay="300">
                  <select type="text" class="form-select @error('service_id') is-invalid @enderror"
                          placeholder="Servizio" name="service_id">
                    <option value="">Scegli un servizio...</option>
                    @foreach($services as $service)
                      <option value="{{$service->id}}"
                          {{old('service_id') == $service->id ? 'selected' : ''}}>
                        {{$service->title}}
                      </option>
                    @endforeach
                  </select>
                  <label for="">Servizio</label>
                  @error('service_id')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror</div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="mb-4 form-floating" data-aos="fade-left" data-aos-delay="400">
                  <input type="text" class="form-control @error('phone') is-invalid @enderror"
                         placeholder="Telefono" name="phone"
                         value="{{old('phone')}}">
                  <label for="">Telefono</label>
                  @error('phone')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="col-12">
                <div class="form-floating mb-4" data-aos="fade-left" data-aos-delay="500">
                  <textarea class="form-control @error('message') is-invalid @enderror"
                            placeholder="Scrivi il tuo messaggio..." id="floatingTextarea"
                            style="height: 100px" name="message">{{old('message')}}</textarea>
                  <label for="floatingTextarea">Scrivi il tuo messaggio...</label>
                  @error('message')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>
              </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="200">
              <button class="btn btn-primary">Invia</button>
            </div>
          </form>
        @else
          <div class="d-flex flex-column align-items-center">
            <div
                class="border border-2 border-primary rounded-circle d-flex justify-content-center align-items-center mb-5"
                style="width: 100px; height: 100px">
              <i class="fa-solid fa-check fa-5x text-primary"></i>
            </div>

            <div class="display-5 text-center">Grazie per averci contattato! Vi risponderemo il prima possibile!</div>
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
