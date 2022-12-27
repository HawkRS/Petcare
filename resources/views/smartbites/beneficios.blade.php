@extends('layouts.app')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h2 class="mb-sm-0">Smartbites Perro - Beneficios</h2>
        </div>
      </div>
    </div>

    {{-- CACHORRO --}}
    <div class="m-2">
      <hr>
      <h5>Cachorro</h5>
    </div>

    <div class="row">
      <div class="col-12 col-md-3">
        <div class="card">
          <div class="card-header card-primary">
            <h5 class="text-light p-2">Beneficio 1</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title mb-4 text-center">Icono</h6>
            <img src="{{ asset('img/productos/smart-bites/iconos/cachorro/cachorro_sistemainmune.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h5>{{ $Contenidos[0]->value }}</h5>
            <p>{{ $Contenidos[1]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios1CachorroModal">
              Editar
            </button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-3">
        <div class="card">
          <div class="card-header card-primary">
            <h5 class="text-light p-2">Beneficio 2</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title mb-4 text-center">Icono</h6>
            <img src="{{ asset('img/productos/smart-bites/iconos/cachorro/cachorro_corazon_sano.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h5>{{ $Contenidos[2]->value }}</h5>
            <p>{{ $Contenidos[3]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios2CachorroModal">
              Editar
            </button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-3">
        <div class="card">
          <div class="card-header card-primary">
            <h5 class="text-light p-2">Beneficio 3</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title mb-4 text-center">Icono</h6>
            <img src="{{ asset('img/productos/smart-bites/iconos/cachorro/cachorro_desarrollo_saludable.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h5>{{ $Contenidos[4]->value }}</h5>
            <p>{{ $Contenidos[5]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios3CachorroModal">
              Editar
            </button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-3">
        <div class="card">
          <div class="card-header card-primary">
            <h5 class="text-light p-2">Beneficio 4</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title mb-4 text-center">Icono</h6>
            <img src="{{ asset('img/productos/smart-bites/iconos/cachorro/cachorro_sistema_digestivo.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h5>{{ $Contenidos[6]->value }}</h5>
            <p>{{ $Contenidos[7]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios4CachorroModal">
              Editar
            </button>
          </div>
        </div>
      </div>

    </div>{{-- END ROW --}}
    {{-- END CACHORRO --}}

  </div>
</div>

{{-- Texto Beneficios Cachorro --}}
<div class="modal fade" id="Beneficios1CachorroModal" tabindex="-1" aria-labelledby="Beneficios1CachorroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios1CachorroModalLabel">Presentacion Adulto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios') }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="cachorro">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo1" class="form-label">Beneficio 1 titulo</label>
            @if(isset($Contenidos[0]->value))
            <input type="text" name="beneficiostitulo1" class="form-control {{ $errors->has('beneficiostitulo1') ? ' is-invalid' : '' }}" id="beneficiostitulo1" placeholder="Titulo" value="{{$Contenidos[0]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo1" class="form-control {{ $errors->has('beneficiostitulo1') ? ' is-invalid' : '' }}" id="beneficiostitulo1" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios1" class="form-label">Beneficio 1</label>
            @if(isset($Contenidos[1]->value))
            <textarea class="form-control  {{ $errors->has('beneficios1') ? ' is-invalid' : '' }}" name="beneficios1" id="beneficios1" rows="2" required>{{$Contenidos[1]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios1') ? ' is-invalid' : '' }}" name="beneficios1" id="beneficios1" rows="2" required></textarea>
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
{{-- Texto Beneficios Cachorro END --}}

@endsection