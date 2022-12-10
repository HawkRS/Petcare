@extends('layouts.app')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h2 class="mb-sm-0">Landing</h2>



                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4">
              <div class="card">
                <div class="card-body">
                  <h4>Banner 1</h4>
                    <h6 class="card-title mb-4">Imagen</h6>
                    <img src="{{ asset('img/landing/thumbs/banner-home-1-desktop.jpg') }}" class="img-thumbnail mx-auto d-block" alt="">
                    <hr>
                    <h4>Titulo</h4>
                    <h6>lorem ipsum</h6>
                    <h6>lorem ipsum</h6>
                    <hr>
                    <h4>Descripción</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="card-footer d-grid gap-2">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Slider1Modal">
                    Editar
                  </button>
                </div>
              </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-4">
            <div class="card">
              <div class="card-body">
                <h4>Productos (Smart Bites)</h4>
                  <h6 class="card-title mb-4">Contenido</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <hr>
                  <h4>Imagen Izq</h4>
                  <img src="{{ asset('images/sliders/banner-home-1-576.jpg') }}" class="img-thumbnail" alt="">
                  <hr>
                  <h4>Imagen Der</h4>
                  <img src="{{ asset('images/sliders/banner-home-1-576.jpg') }}" class="img-thumbnail" alt="">
                  <hr>
                  <h4>Imagen Mobile</h4>
                  <img src="{{ asset('images/sliders/banner-home-1-576.jpg') }}" class="img-thumbnail" alt="">
              </div>
              <div class="card-footer d-grid gap-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ProdSmartModal">
                  Editar
                </button>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>

  {{-- MODALS --}}
{{-- Slider1 --}}
<div class="modal fade" id="Slider1Modal" tabindex="-1" aria-labelledby="Slider1ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Slider1ModalLabel">Editar Banner 1</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('landing.storeslider') }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="bannertype" value="1">
        <div class="modal-body">
          <div class="mb-3">
              <label class="form-label" for="validationCustom01">Titulo</label>
              <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo" required>
              <div class="valid-feedback">
                  ¡Todo parece en orden!
              </div>
              <div class="invalid-feedback">
                  Por favor agrega un titulo válido
              </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            <textarea class="form-control" name="leyenda" id="descripcion" rows="3" required></textarea>
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega una descripción
            </div>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para pantallas escritorio</label>
            <input name="banner1_desk" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 1200</label>
            <input name="banner1_1200" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 992</label>
            <input name="banner1_992" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 768</label>
            <input name="banner1_768" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 576</label>
            <input name="banner1_576" class="form-control" type="file" id="formFile">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      </form>
    </div>
  </div>
</div>

{{-- PRODUCTOS SMART BITE --}}
<div class="modal fade" id="ProdSmartModal" tabindex="-1" aria-labelledby="ProdSmartModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ProdSmartModalLabel">Editar Productos Smart Bites</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="index.html" method="post"  novalidate>
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" rows="3" required></textarea>
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega una descripción
            </div>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen para escritorio Izq</label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen para escritorio Der</label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen para dispositivos mobiles</label>
            <input class="form-control" type="file" id="formFile">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      </form>
    </div>
  </div>
</div>
  <!-- end page title -->
@endsection