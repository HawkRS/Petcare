@extends('layouts.dev')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h2 class="mb-sm-0">Smartbites Perro</h2>
                </div>
                <div><h5>Banner</h5></div>
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

@endsection