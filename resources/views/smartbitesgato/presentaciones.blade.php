@extends('layouts.app')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h2 class="mb-sm-0">Smartbites Gato - Presentaciones</h2>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">

      <div class="col-12 col-md-4">
        <div class="card">
          <div class="card-header card-primary">
            <h5 class="text-light p-2">Smart Bites Gato Adulto</h5>
          </div>
          <div class="card-body">
            <h4>Rango de edades</h4>
            <h6>{{ $Contenidos[0]->value }}</h6>
            <hr>
            <h4>Presentaciones</h4>
            <p class="text-truncate">{{ $Contenidos[1]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#PresentacionGatoModal">
              Editar
            </button>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

{{-- Texto Presentacion --}}
<div class="modal fade" id="PresentacionGatoModal" tabindex="-1" aria-labelledby="PresentacionGatoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="PresentacionGatoModalLabel">Presentaciones Smart Bites Gato</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatepresentacion') }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesgato">
        <input type="hidden" name="section" value="adulto">
        <input type="hidden" name="area1" value="edad">
        <input type="hidden" name="area2" value="presentaciones">
        <div class="modal-body">
          {{--<div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div> --}}
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
{{-- Texto Presentacion END --}}

@endsection