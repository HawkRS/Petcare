@extends('layouts.dev')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h2 class="mb-sm-0">Smartbites</h2>
                </div>
            </div>
        </div>

        <div class="row">

          <div class="col-12 ">
            <div class="card">
              <div class="card-body">
                <h4>Banner Smartbites Perro</h4>
                <div class="row">

                  <div class="col-12 col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-title mb-4">Imagen izq externa</h6>
                        <img src="{{ asset('img/productos/smart-bites/thumbs/smart-bites-neuro-active-senior.png') }}" class="img-thumbnail mx-auto d-block" alt="">
                      </div>
                      <div class="card-footer  d-grid gap-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ImgIzqExtModal">
                          Editar
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-title mb-4">Imagen izq interna</h6>
                        <img src="{{ asset('img/productos/smart-bites/thumbs/inicio_smart_perro.png') }}" class="img-thumbnail mx-auto d-block" alt="">
                      </div>
                      <div class="card-footer  d-grid gap-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ImgIzqIntModal">
                          Editar
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-title mb-4">Imagen der interna</h6>
                        <img src="{{ asset('img/productos/smart-bites/thumbs/smart-bites-neuro-active-adulto.png') }}" class="img-thumbnail mx-auto d-block" alt="">
                      </div>
                      <div class="card-footer  d-grid gap-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ImgDerIntModal">
                          Editar
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-title mb-4">Imagen der externa</h6>
                        <img src="{{ asset('img/productos/smart-bites/thumbs/smart-bites-neuro-active-cachorro.png') }}" class="img-thumbnail mx-auto d-block" alt="">
                      </div>
                      <div class="card-footer  d-grid gap-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ImgDerExtModal">
                          Editar
                        </button>
                      </div>
                    </div>
                  </div>

                </div>{{-- END IMAGES ROW --}}

                  <hr>
                  <h4>Titulo</h4>
                  <h6>{{ $Contenidos[0]->value }}</h6>
                  <hr>
                  <h4>Descripción</h4>
                  <p class="text-truncate">{{ $Contenidos[1]->value }}</p>
              </div>
              </div>
            </div>
          </div>

        </div>

        {{-- Imagen IZQ Externa --}}
        <div class="modal fade" id="ImgIzqExtModal" tabindex="-1" aria-labelledby="ImgIzqExtModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="ImgIzqExtModalLabel">Imagen Izquierda Externa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="needs-validation" action="{{ route('smartbites.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
                @csrf
                <input type="hidden" name="page" value="smartbites">
                <input type="hidden" name="type" value="image">
                <input type="hidden" name="position" value="banner">
                <input type="hidden" name="descripcion" value="image">
                <div class="modal-body">
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
                    <input name="imagefile" class="form-control" type="file" id="formFile"
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
        {{-- Imagen IZQ Externa END --}}
        {{-- Imagen IZQ Externa --}}
        <div class="modal fade" id="ImgIzqIntModal" tabindex="-1" aria-labelledby="ImgIzqIntModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="ImgIzqIntModalLabel">Imagen Izquierda Externa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="needs-validation" action="{{ route('smartbites.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
                @csrf
                <input type="hidden" name="position" value="slider1">
                <div class="modal-body">
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia</label>
                    <input name="banner_576" class="form-control" type="file" id="formFile">
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
        {{-- Imagen IZQ Externa END --}}

  </div>
</div>

@endsection