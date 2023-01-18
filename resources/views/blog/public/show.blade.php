@extends('layouts.blogapp')
@section('pagina', 'Blog')

@section('content')


<div id="carouselBlog" class="carousel slider-general slider-general-v2 slide ov-h position-relative zi-1" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item jumbotron active" data-paroller-factor="0.3" data-paroller-factor-xs="0.4" style='background: url("{{ asset('admin/'.$Post->banner) }}") no-repeat center center/cover'>
      </div>
  </div>
</div>

<article id="blog-informacion" class="mt-5 mb-5">
  <div class="container pe-5 pe-sm-3 ps-5 ps-sm-3">
    <div class="box">
      <div class="box-content">
        <h1 class="c-azul-2 f-bold mb-2">{{ $Post->title }}</h1>

        <p class="c-gris-3 f-regular text-justify mb-3">
          {!! $Post->body !!}
        </p>
        <hr>
        <p class="c-gris-3 f-regular text-justify mb-0">
        Publicado en
        @switch($Post->created_at->month)
            @case(1)
                 Ene
            @break
            @case(2)
                Feb
                @break
            @case(3)
                Mar
                @break
            @case(4)
                Abr
                @break
            @case(5)
                May
                @break
            @case(6)
                Jun
                @break
            @case(7)
                Jul
                @break
            @case(8)
                Ago
                @break
            @case(9)
                Sep
                @break
            @case(10)
                Oct
                @break
            @case(11)
                Nov
                @break
            @case(12)
                Dic
                @break
            @default
                --
        @endswitch
        {{$Post->created_at->day}}, {{$Post->created_at->year}}
          @if(count($Post->HasSources) > 0)
            Fuentes:
            @foreach($Post->HasSources as $Fuente)
              @if($loop->index > 0)
                |
              @endif
              <a href="{{ $Fuente->link }}">{{ $Fuente->link }}</a>
            @endforeach
          @endif
        </p>
        <hr>
        <p class="c-gris-3 f-regular text-justify mb-0">
          @if(count($Post->HasTags) > 0)
            TAGS: <span class="c-azul-2">
              @foreach($Post->HasTags as $Tags)
                @if($loop->index > 0)
                  |
                @endif
                {{ $Tags->tag }}
              @endforeach
            </span>
          @endif
        </p>
      </div>
    </div>
  </div>
</article>

@endsection