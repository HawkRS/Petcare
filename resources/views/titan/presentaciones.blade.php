@extends('layouts.app')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h2 class="mb-sm-0">Titán - Presentaciones</h2>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">

      <div class="col-12 col-md-4" height="100">
        <div class="card ">
          <h5 class="p-2">Perro</h5>
          <div class="card-body">
            <h6 class="card-title mb-4">Imagen</h6>
            <div class="row">
                <div class="col-6">
                  <img src="{{ asset('img/productos/titan/perro/thumbs/render_bolsa_adulto_TT_perro.png') }}" class="img-thumbnail mx-auto d-block pres-img" alt="">
                </div>
                <div class="col-6">
                  <img src="{{ asset('img/productos/titan/perro/thumbs/perro.png') }}" class="img-thumbnail mx-auto d-block pres-img" alt="">
                </div>
            </div>
            <h4>Rango de edades</h4>
            <h6>{{ $Contenidos[0]->value }}</h6>
            <hr>
            <h4>Presentaciones</h4>
            <p class="text-truncate">{{ $Contenidos[1]->value }}</p>
          </div>
          <div class="card-footer  d-grid gap-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#PresentacionPerroModal">
              Editar
            </button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4" height="100">
        <div class="card ">
          <h5 class="p-2">Gato</h5>
          <div class="card-body">
            <h6 class="card-title mb-4">Imagen</h6>
            <img src="{{ asset('img/productos/titan/gato/thumbs/cat_prod.png') }}" class="img-thumbnail mx-auto d-block pres-img" alt="">
            <h4>Rango de edades</h4>
            <h6>{{ $Contenidos[2]->value }}</h6>
            <hr>
            <h4>Presentaciones</h4>
            <p class="text-truncate">{{ $Contenidos[3]->value }}</p>
          </div>
          <div class="card-footer  d-grid gap-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#PresentacionGatoModal">
              Editar
            </button>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

{{-- Texto Presentacion Perro --}}
  <div class="modal fade" id="PresentacionPerroModal" tabindex="-1" aria-labelledby="PresentacionPerroModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="PresentacionPerroModalLabel">Presentaciones Titan Perro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="needs-validation" action="{{ route('titan.updatepresentacion') }}" method="post" enctype="multipart/form-data"  novalidate>
          @csrf
          <input type="hidden" name="page" value="titan">
          <input type="hidden" name="section" value="perro">
          <input type="hidden" name="area1" value="edad">
          <input type="hidden" name="area2" value="presentaciones">
          <div class="modal-body">
            <div class="mb-3">
              <label for="formFile" class="form-label">Carga tu imagen Izquierda (archivos tipo png con transparencia)</label>
              <input name="imagefile" class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Carga tu imagen Derecha (archivos tipo png con transparencia)</label>
              <input name="imagefile2" class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
              <label for="edades" class="form-label">Edades</label>
              @if(isset($Contenidos[0]->value))
              <textarea class="form-control  {{ $errors->has('edades') ? ' is-invalid' : '' }}" name="edades" id="edades" rows="2" required>{{$Contenidos[0]->value}}</textarea>
              @else
              <textarea class="form-control  {{ $errors->has('edades') ? ' is-invalid' : '' }}" name="edades" id="edades" rows="2" required></textarea>
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
              <label for="presentaciones" class="form-label">Presentaciones</label>
              @if(isset($Contenidos[1]->value))
              <textarea class="form-control  {{ $errors->has('presentaciones') ? ' is-invalid' : '' }}" name="presentaciones" id="presentaciones" rows="2" required>{{$Contenidos[1]->value}}</textarea>
              @else
              <textarea class="form-control  {{ $errors->has('presentaciones') ? ' is-invalid' : '' }}" name="presentaciones" id="presentaciones" rows="2" required></textarea>
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
{{-- Texto Presentacion Perro END --}}
{{-- Texto Presentacion Gato --}}
  <div class="modal fade" id="PresentacionGatoModal" tabindex="-1" aria-labelledby="PresentacionGatoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="PresentacionGatoModalLabel">Presentaciones Titan Gato</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="needs-validation" action="{{ route('titan.updatepresentacion') }}" method="post" enctype="multipart/form-data"  novalidate>
          @csrf
          <input type="hidden" name="page" value="titan">
          <input type="hidden" name="section" value="gato">
          <input type="hidden" name="area1" value="edad">
          <input type="hidden" name="area2" value="presentaciones">
          <div class="modal-body">
            <div class="mb-3">
              <label for="formFile" class="form-label">Carga tu imagen Izquierda (archivos tipo png con transparencia)</label>
              <input name="imagefile" class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
              <label for="edades" class="form-label">Edades</label>
              @if(isset($Contenidos[2]->value))
              <textarea class="form-control  {{ $errors->has('edades') ? ' is-invalid' : '' }}" name="edades" id="edades" rows="2" required>{{$Contenidos[2]->value}}</textarea>
              @else
              <textarea class="form-control  {{ $errors->has('edades') ? ' is-invalid' : '' }}" name="edades" id="edades" rows="2" required></textarea>
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
              <label for="presentaciones" class="form-label">Presentaciones</label>
              @if(isset($Contenidos[3]->value))
              <textarea class="form-control  {{ $errors->has('presentaciones') ? ' is-invalid' : '' }}" name="presentaciones" id="presentaciones" rows="2" required>{{$Contenidos[3]->value}}</textarea>
              @else
              <textarea class="form-control  {{ $errors->has('presentaciones') ? ' is-invalid' : '' }}" name="presentaciones" id="presentaciones" rows="2" required></textarea>
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
{{-- Texto Presentacion Gato END --}}

@endsection