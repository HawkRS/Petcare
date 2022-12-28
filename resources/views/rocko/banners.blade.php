@extends('layouts.app')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h2 class="mb-sm-0">Rocko - Banner</h2>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">

      <div class="col-12 col-md-4">
        <div class="card">
          <div class="card-header card-primary">
            <h5 class="text-light p-2">Rocko Complete</h5>
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
@endsection