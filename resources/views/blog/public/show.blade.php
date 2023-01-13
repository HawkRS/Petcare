@extends('layouts.blogapp')
@section('pagina', 'Blog')

@section('content')


<div id="carouselBlog" class="carousel slider-general slider-general-v2 slide ov-h position-relative zi-1" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item jumbotron active" data-paroller-factor="0.3" data-paroller-factor-xs="0.4" style='background: url("https://vimifospetcare.com/img/blog/banner_blog.jpg") no-repeat center center/cover'>
      </div>
  </div>
</div>

<article id="blog-informacion" class="mt-5 mb-5">
  <div class="container pe-5 pe-sm-3 ps-5 ps-sm-3">
    <div class="box">
      <div class="box-content">
        <h1 class="c-azul-2 f-bold mb-4">{{ $Post->title }}</h1>

        <p class="c-gris-3 f-regular text-justify mb-3">
          {!! $Post->body !!}
        </p>
        <hr>
        <p class="c-gris-3 f-regular text-justify mb-0">
          Publicado por:{{ $Post->Autor->name }}, {{ date_format($Post->created_at,"d/m/Y") }}
        </p>
        <hr>
        <p class="c-gris-3 f-regular text-justify mb-0">
          TAGS: <span class="c-azul-2">(https://www.santevet.es/)</span>
        </p>
      </div>
    </div>
  </div>
</article>

@endsection