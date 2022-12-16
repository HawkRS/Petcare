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

          <div class="col-12 col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Banner 1</h4>
                  <h6 class="card-title mb-4">Imagen</h6>
                  <img src="{{ asset('img/landing/thumbs/banner-home-1-desktop.jpg') }}" class="img-thumbnail mx-auto d-block" alt="">
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

  </div>
</div>

@endsection