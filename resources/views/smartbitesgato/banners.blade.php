@extends('layouts.app')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h2 class="mb-sm-0">Smartbites Gato - Banner</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-4">
        <div class="card">
          <div class="card-header card-primary">
            <h4 class="mb-4 text-light">Imagen izq</h4>
          </div>
          <div class="card-body">
            <img src="{{ asset('img/productos/smart-bites/gato/thumbs/smart-bites-neuro-active-gato-adulto.png') }}" class="img-thumbnail mx-auto d-block pres-img" alt="" height="100px">
          </div>
          <div class="card-footer r card-primary  d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#ImgIzqModal">
              Editar
            </button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="card">
          <div class="card-header card-primary">
            <h4 class="mb-3 text-light">Texto banner</h4>
          </div>
          <div class="card-body">
            <h4>Parrafo 1</h4>
            <h6>{{ $Contenidos[0]->value }}</h6>
            <hr>
            <h4>Parrafo 2</h4>
            <p class="text-truncate">{{ $Contenidos[1]->value }}</p>
          </div>
          <div class="card-footer r card-primary  d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#BannerTxtModal">
              Editar
            </button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="card">
          <div class="card-header card-primary">
            <h4 class="mb-4 text-light">Imagen der</h4>
          </div>
          <div class="card-body">
            <img src="{{ asset('img/productos/smart-bites/gato/thumbs/gato_beneficios.png') }}" class="img-thumbnail mx-auto d-block pres-img" alt="" height="100px">
          </div>
          <div class="card-footer r card-primary  d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#ImgDerModal">
              Editar
            </button>
          </div>
        </div>
      </div>

    </div>



  </div>
</div>

{{-- Imagen IZQ --}}
<div class="modal fade" id="ImgIzqModal" tabindex="-1" aria-labelledby="ImgIzqModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ImgIzqModalLabel">Imagen Izquierda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesgato">
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
{{-- Imagen IZQ END --}}
{{-- Imagen DER --}}
<div class="modal fade" id="ImgDerModal" tabindex="-1" aria-labelledby="ImgDerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ImgDerModalLabel">Imagen Derecha</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesgato">
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
{{-- Imagen DER END --}}
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
        <input type="hidden" name="page" value="smartbitesgato">
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