@extends('layouts.blogapp')
@section('pagina', 'Blog')

@section('content')

  <div id="carouselBlog" class="carousel slider-general slider-general-v2 slide ov-h position-relative zi-1" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div id="slider-blog-1" class="carousel-item jumbotron active" data-paroller-factor="0.3" data-paroller-factor-xs="0.4"></div>
    </div>
  </div>

  <section id="slider-contact-us" class="slider-encabezado">
    <div class="container">
      <div class="box">
        <div class="box-title animatedParent">
          <h1 class="c-azul-2 f-bold d-flex justify-content-start align-items-center animated fadeInDownShort delay-250"><span class="line-azul-2">Noticias</span></h1>
        </div>
      </div>
    </div>
  </section>

</section>



<section id="blog-cards" class="ov-x-h mt-4 mb-4">

  <div class="container animatedParent" data-sequence="1000">

    @foreach($Posts as $Post)
    <div class="card mb-4 animated fadeInUpShort" data-id="2">
      <div class="row g-0">
          <div class="col-md-4">
            <div class="card-image" onClick="document.location='{{ route('post.show', ['slug' => $Post->slug]) }}'">
                <picture>
                <source srcset="https://vimifospetcare.com/img/blog/2-los-ojos-del-gato-curiosidades.webp" type="image/webp">
                <source srcset="https://vimifospetcare.com/img/blog/2-los-ojos-del-gato-curiosidades.jpg" type="image/jpeg">
                <img
                  src="https://vimifospetcare.com/img/blog/2-los-ojos-del-gato-curiosidades.jpg"
                  data-src="https://vimifospetcare.com/img/blog/2-los-ojos-del-gato-curiosidades.jpg"
                  class="lazyload img-fluid"
                  width=""
                  height=""
                  alt="">
            </picture>
              </div>
          </div>
          <div class="col-md-8">
              <div class="card-body h-100 d-flex justify-content-center align-items-start flex-column">
                <h4 class="card-date c-azul-2 f-medium">Publicado en {{ date_format($Post->created_at,"M d, o") }}</h4>
                <a href="{{ route('post.show', ['slug' => $Post->slug]) }}" class="card-title c-azul-2 h-c-rojo-1 f-medium text-decoration-none d-block mb-1" rel="noopener">{{$Post->title}}</a>
                <p class="card-text c-gris-3 f-medium fs-6 mb-1">Una de las partes más curiosas de los gatos son los ojos, no solo por lo llamativo de sus colores y formas, sino porque también suelen usarlos para comunicarse. Veamos las características más destacadas de este curioso órgano felino.</p>
                <a href="{{ route('post.show', ['slug' => $Post->slug]) }}" class="card-link c-rojo-1 h-c-azul-2 f-medium fs-6 text-decoration-none text-uppercase d-block mb-1" rel="noopener">LEER MAS...</a>
              </div>
          </div>
      </div>
    </div>
    @endforeach

  </div>
</section>









@endsection