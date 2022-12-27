@extends('layouts.app')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h2 class="mb-sm-0">Smartbites Perro - Banner</h2>
        </div>
      </div>
    </div>


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
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-md-6 col-xl-5">
        <div class="card">
          <div class="card-body">
            <h4>Parrafo 1</h4>
            <h6>{{ $Contenidos[0]->value }}</h6>
            <hr>
            <h4>Parrafo 2</h4>
            <p class="text-truncate">{{ $Contenidos[1]->value }}</p>
          </div>
          <div class="card-footer  d-grid gap-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#BannerTxtModal">
              Editar
            </button>
          </div>
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
          <input type="hidden" name="page" value="smartbitesperro">
          <input type="hidden" name="type" value="image">
          <input type="hidden" name="section" value="banner">
          <input type="hidden" name="imgname" value="izqext">
          <input type="hidden" name="descripcion" value="image">
          <div class="modal-body">
            <div class="mb-3">
              <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
              <input name="imagefile" class="form-control" type="file" id="formFile">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
{{-- Imagen IZQ Externa END --}}
{{-- Imagen IZQ Interna --}}
  <div class="modal fade" id="ImgIzqIntModal" tabindex="-1" aria-labelledby="ImgIzqIntModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="ImgIzqIntModalLabel">Imagen Izquierda Externa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="needs-validation" action="{{ route('smartbites.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
          @csrf
          <input type="hidden" name="page" value="smartbitesperro">
          <input type="hidden" name="type" value="image">
          <input type="hidden" name="section" value="banner">
          <input type="hidden" name="imgname" value="izqint">
          <input type="hidden" name="descripcion" value="image">
          <div class="modal-body">
            <div class="mb-3">
              <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
              <input name="imagefile" class="form-control" type="file" id="formFile">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
{{-- Imagen IZQ Interna END --}}
{{-- Imagen DER Interna --}}
  <div class="modal fade" id="ImgDerIntModal" tabindex="-1" aria-labelledby="ImgDerIntModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="ImgDerIntModalLabel">Imagen Derecha interna</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="needs-validation" action="{{ route('smartbites.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
          @csrf
          <input type="hidden" name="page" value="smartbitesperro">
          <input type="hidden" name="type" value="image">
          <input type="hidden" name="section" value="banner">
          <input type="hidden" name="imgname" value="derint">
          <input type="hidden" name="descripcion" value="image">
          <div class="modal-body">
            <div class="mb-3">
              <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
              <input name="imagefile" class="form-control" type="file" id="formFile">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
{{-- Imagen DER Interna END --}}
{{-- Imagen DER Externa --}}
  <div class="modal fade" id="ImgDerExtModal" tabindex="-1" aria-labelledby="ImgDerExtModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="ImgDerExtModalLabel">Imagen Derecha interna</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="needs-validation" action="{{ route('smartbites.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
          @csrf
          <input type="hidden" name="page" value="smartbitesperro">
          <input type="hidden" name="type" value="image">
          <input type="hidden" name="section" value="banner">
          <input type="hidden" name="imgname" value="derext">
          <input type="hidden" name="descripcion" value="image">
          <div class="modal-body">
            <div class="mb-3">
              <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
              <input name="imagefile" class="form-control" type="file" id="formFile">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
{{-- Imagen DER Externa END --}}
{{-- Texto Banner --}}
  <div class="modal fade" id="BannerTxtModal" tabindex="-1" aria-labelledby="BannerTxtModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="BannerTxtModalLabel">Texto Banner</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="needs-validation" action="{{ route('smartbites.updatebannertitle') }}" method="post" enctype="multipart/form-data"  novalidate>
          @csrf
          <input type="hidden" name="page" value="smartbitesperro">
          <input type="hidden" name="type" value="txt">
          <input type="hidden" name="section" value="banner">
          <div class="modal-body">
            <div class="mb-3">
              <label for="parrafo1" class="form-label">Parrafo 1</label>
              @if(isset($Contenidos[0]->value))
              <textarea class="form-control  {{ $errors->has('parrafo1') ? ' is-invalid' : '' }}" name="parrafo1" id="parrafo1" rows="3" required>{{$Contenidos[0]->value}}</textarea>
              @else
              <textarea class="form-control  {{ $errors->has('parrafo1') ? ' is-invalid' : '' }}" name="parrafo1" id="parrafo1" rows="3" required></textarea>
              @endif
              <div class="valid-feedback">
                ¡Todo parece en orden!
              </div>
              <div class="invalid-feedback">
                Por favor agrega una descripción
              </div>
            </div>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="parrafo2" class="form-label">Parrafo 2</label>
              @if(isset($Contenidos[1]->value))
              <textarea class="form-control  {{ $errors->has('parrafo2') ? ' is-invalid' : '' }}" name="parrafo2" id="parrafo2" rows="3" required>{{$Contenidos[1]->value}}</textarea>
              @else
              <textarea class="form-control  {{ $errors->has('parrafo2') ? ' is-invalid' : '' }}" name="parrafo2" id="parrafo2" rows="3" required></textarea>
              @endif
              <div class="valid-feedback">
                ¡Todo parece en orden!
              </div>
              <div class="invalid-feedback">
                Por favor agrega una descripción
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
{{-- Texto Banner END --}}

@endsection
