@extends('layouts.admin')

@section('page-title', $service->title)
@section('page-cover-img', asset("storage/" . $service->img_cover))

@section('content')
  <div class="section">
    <div class="container">
      <form action="{{route("admin.services.update", $service->id)}}" method="post"
            enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-5">
          <h4>Meta data</h4>
          <div class="row">
            <div class="col">
              @include("components.forms.form_input", [
             "label" => "Slug",
             "name" => "slug",
             "value" => $service->slug,
             "readonly" => true,
           ])
            </div>

            <div class="col">
              @include("components.forms.form_input", [
                "label" => "Page meta title",
                "name" => "name",
                "value" => $service->name,
                "required" => true,
              ])
            </div>

            <div class="col-12">
              @include("components.forms.form_txt", [
                "label" => "Page meta description",
                "name" => "description_short",
                "value" => $service->description_short,
              ])
            </div>
          </div>
        </div>

        <div class="mb-5">
          <h4>Immagini</h4>
          <div class="row">
            <div class="col">
              <file-input label="Immagine di copertina"
                          accept="image/*"
                          name="img_cover" required></file-input>
            </div>
            <div class="col">
              @include("components.forms.form_input", [
                "label" => "Immagine principale - Alt Text",
                "name" => "img_cover_alt",
                "value" => $service->img_cover_alt,
                "required" => true,
              ])
            </div>

            <div class="col">
              @include("components.forms.form_input", [
                "label" => "Immagine principale - lowres",
                "name" => "img_cover_low_res",
                "value" => $service->img_cover_low_res,
                "readonly" => true,
              ])
            </div>
          </div>

          <div class="row">

          </div>
        </div>

        <div class="mb-5">
          <h4>Service data</h4>
          <div class="row">

            <div class="col">
              @include("components.forms.form_switch", [
                "label" => "Ha una pagina dedicata",
                "name" => "has_page",
                "checked" => $service->has_page,
              ])
            </div>

            <div class="col">
              @include("components.forms.form_switch", [
                "label" => "Mostra in prima pagina",
                "name" => "featured",
                "checked" => $service->featured,
              ])
            </div>

            <div class="col">
              @include("components.forms.form_input", [
                "label" => "Ordine",
                "name" => "order",
                "type" => "number",
                "value" => $service->order,
              ])
            </div>
          </div>

          <div class="row">

            <div class="col">
              @include("components.forms.form_input", [
                "label" => "Title",
                "name" => "title",
                "value" => $service->title,
              ])
            </div>

            <div class="col-12">
              @include("components.forms.form_txt", [
                "label" => "Descrizione",
                "name" => "description",
                "value" => $service->description,
              ])
            </div>

            <div class="col-12">
              @include("components.forms.form_txt", [
                "label" => "Descrizione Lunga",
                "name" => "description_long",
                "value" => $service->description_long,
              ])
            </div>
          </div>
        </div>

        <div class="border-top pt-4 text-center">
          <button class="btn btn-primary" type="submit">Salva</button>
        </div>

      </form>
    </div>
  </div>
@endsection

@section("scripts")
  <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
  <script type="text/javascript">
    bkLib.onDomLoaded(nicEditors.allTextAreas)
  </script>
@endsection
