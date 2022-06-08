<!--    <div class="" id="gridContainer">
      @foreach($videos as $video)
  <a style="max-width: 400px; aspect-ratio: 16/9"
     data-lg-size="1280-720"
     data-src="{{$video["video_link"]}}" class="d-inline-block"
           data-poster="{{$video["thumb_high"]}}">
          <img src="{{$video["thumb_high"]}}" alt="Anteprima video {{$video['title']}}" class="w-100 h-100"
               style="object-fit: cover;">
        </a>



    @endforeach

@foreach($gallery as $image)
  <a style="max-width: 400px;" href="{{$image->getFullUrl("full-hd")}}" class="d-inline-block">
          {{$image('full-hd', [
                  "alt"=> $image["alt_text"] ?? "Immagine relativa al servizio ". $service->title,
                  "class"=> "w-100 h-100",
                  "style"=> "object-fit: cover;",
            ])}}
  </a>



@endforeach

<div class="overlay">
  <span class="display-2 mb-3">Caricamento in corso...</span>

  <div class="spinner-grow text-primary" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
</div>-->˘
