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
      <h5 class="text-uppercase fntB">Cachorro</h5>
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
            <h6 class="pt-2">{{ $Contenidos[0]->value }}</h6>
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
            <h6 class="pt-2">{{ $Contenidos[2]->value }}</h6>
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
            <h6 class="pt-2">{{ $Contenidos[4]->value }}</h6>
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
            <h6 class="pt-2">{{ $Contenidos[6]->value }}</h6>
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

    {{-- RAZAS PEQUEÑAS --}}
    <div class="m-2">
      <hr>
      <h5 class="text-uppercase fntB">Razas pequeñas</h5>
    </div>

    <div class="row">
      <div class="col-12 col-md-3">
        <div class="card">
          <div class="card-header card-primary">
            <h5 class="text-light p-2">Beneficio 1</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title mb-4 text-center">Icono</h6>
            <img src="{{ asset('img/productos/smart-bites/iconos/adulto-raza-pequena/sistema_inmune_fuerte.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[8]->value }}</h6>
            <p>{{ $Contenidos[9]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios1RazasModal">
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
            <img src="{{ asset('img/productos/smart-bites/iconos/adulto-raza-pequena/corazon_sano.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[10]->value }}</h6>
            <p>{{ $Contenidos[11]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios2RazasModal">
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
            <img src="{{ asset('img/productos/smart-bites/iconos/adulto-raza-pequena/metabolismo_balanceado.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[12]->value }}</h6>
            <p>{{ $Contenidos[13]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios3RazasModal">
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
            <img src="{{ asset('img/productos/smart-bites/iconos/adulto-raza-pequena/aparato_digestivo_sano.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[14]->value }}</h6>
            <p>{{ $Contenidos[15]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios4RazasModal">
              Editar
            </button>
          </div>
        </div>
      </div>

    </div>{{-- END ROW --}}
    {{-- END RAZAS PEQUEÑAS --}}

    {{-- ADULTO --}}
    <div class="m-2">
      <hr>
      <h5 class="text-uppercase fntB">Adulto</h5>
    </div>

    <div class="row">
      <div class="col-12 col-md-3">
        <div class="card">
          <div class="card-header card-primary">
            <h5 class="text-light p-2">Beneficio 1</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title mb-4 text-center">Icono</h6>
            <img src="{{ asset('img/productos/smart-bites/iconos/adulto/adulto_salud_integral.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[16]->value }}</h6>
            <p>{{ $Contenidos[17]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios1AdultoModal">
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
            <img src="{{ asset('img/productos/smart-bites/iconos/adulto/adulto_corazon_sano.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[18]->value }}</h6>
            <p>{{ $Contenidos[19]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios2AdultoModal">
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
            <img src="{{ asset('img/productos/smart-bites/iconos/adulto/adulto_pelaje_brillante.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[20]->value }}</h6>
            <p>{{ $Contenidos[21]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios3AdultoModal">
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
            <img src="{{ asset('img/productos/smart-bites/iconos/adulto/adulto_sistema_digestivo.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[22]->value }}</h6>
            <p>{{ $Contenidos[23]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios4AdultoModal">
              Editar
            </button>
          </div>
        </div>
      </div>

    </div>{{-- END ROW --}}
    {{-- END ADULTO --}}

    {{-- SENIOR --}}
    <div class="m-2">
      <hr>
      <h5 class="text-uppercase fntB">SENIOR</h5>
    </div>

    <div class="row">
      <div class="col-12 col-md-3">
        <div class="card">
          <div class="card-header card-primary">
            <h5 class="text-light p-2">Beneficio 1</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title mb-4 text-center">Icono</h6>
            <img src="{{ asset('img/productos/smart-bites/iconos/senior/senior_articulaciones.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[24]->value }}</h6>
            <p>{{ $Contenidos[25]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios1SeniorModal">
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
            <img src="{{ asset('img/productos/smart-bites/iconos/senior/senior_celulas.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[26]->value }}</h6>
            <p>{{ $Contenidos[27]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios2SeniorModal">
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
            <img src="{{ asset('img/productos/smart-bites/iconos/senior/senior_sistema_inmune.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[28]->value }}</h6>
            <p>{{ $Contenidos[29]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios3SeniorModal">
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
            <img src="{{ asset('img/productos/smart-bites/iconos/senior/senior_aparato_digestivo.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[30]->value }}</h6>
            <p>{{ $Contenidos[31]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios4SeniorModal">
              Editar
            </button>
          </div>
        </div>
      </div>

    </div>{{-- END ROW --}}
    {{-- END SENIOR --}}

  </div>
</div>

{{-- Texto Beneficios 1 Cachorro --}}
<div class="modal fade" id="Beneficios1CachorroModal" tabindex="-1" aria-labelledby="Beneficios1CachorroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios1CachorroModalLabel">Beneficios Cachorro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'cachorro']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="topizq">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 1 titulo</label>
            @if(isset($Contenidos[0]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[0]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 1</label>
            @if(isset($Contenidos[1]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[1]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 1 Cachorro END --}}
{{-- Texto Beneficios 2 Cachorro --}}
<div class="modal fade" id="Beneficios2CachorroModal" tabindex="-1" aria-labelledby="Beneficios2CachorroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios2CachorroModalLabel">Beneficios Cachorro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'cachorro']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="topder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 titulo</label>
            @if(isset($Contenidos[2]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[2]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 2</label>
            @if(isset($Contenidos[3]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[3]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 2 Cachorro END --}}
{{-- Texto Beneficios 3 Cachorro --}}
<div class="modal fade" id="Beneficios3CachorroModal" tabindex="-1" aria-labelledby="Beneficios3CachorroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios3CachorroModalLabel">Beneficios Cachorro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'cachorro']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomizq">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 titulo</label>
            @if(isset($Contenidos[4]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[4]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 2</label>
            @if(isset($Contenidos[5]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[5]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 3 Cachorro END --}}
{{-- Texto Beneficios 4 Cachorro --}}
<div class="modal fade" id="Beneficios4CachorroModal" tabindex="-1" aria-labelledby="Beneficios4CachorroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios4CachorroModalLabel">Beneficios Cachorro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'cachorro']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 titulo</label>
            @if(isset($Contenidos[6]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[6]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 2</label>
            @if(isset($Contenidos[7]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[7]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 4 Cachorro END --}}

{{-- Texto Beneficios 1 Razas Pequeñas --}}
<div class="modal fade" id="Beneficios1RazasModal" tabindex="-1" aria-labelledby="Beneficios1RazasModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios1RazasModalLabel">Beneficios Razas Pequeñas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'pequeños']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="topizq">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 1 titulo</label>
            @if(isset($Contenidos[8]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[8]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 1</label>
            @if(isset($Contenidos[9]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[9]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 1 Razas Pequeñas END --}}
{{-- Texto Beneficios 2 Razas Pequeñas --}}
<div class="modal fade" id="Beneficios2RazasModal" tabindex="-1" aria-labelledby="Beneficios2RazasModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios2RazasModalLabel">Beneficios Razas Pequeñas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'pequeños']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="topder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 titulo</label>
            @if(isset($Contenidos[10]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[10]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 2</label>
            @if(isset($Contenidos[11]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[11]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 2 Razas Pequeñas END --}}
{{-- Texto Beneficios 3 Razas Pequeñas --}}
<div class="modal fade" id="Beneficios3RazasModal" tabindex="-1" aria-labelledby="Beneficios3RazasModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios3RazasModalLabel">Beneficios Razas Pequeñas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'pequeños']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomizq">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 titulo</label>
            @if(isset($Contenidos[12]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[12]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 2</label>
            @if(isset($Contenidos[13]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[13]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 3 Razas Pequeñas END --}}
{{-- Texto Beneficios 4 Razas Pequeñas --}}
<div class="modal fade" id="Beneficios4RazasModal" tabindex="-1" aria-labelledby="Beneficios4RazasModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios4RazasModalLabel">Beneficios Razas Pequeñas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'pequeños']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 titulo</label>
            @if(isset($Contenidos[14]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[14]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 2</label>
            @if(isset($Contenidos[15]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[15]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 4 Razas Pequeñas END --}}

{{-- Texto Beneficios 1 Adulto --}}
<div class="modal fade" id="Beneficios1AdultoModal" tabindex="-1" aria-labelledby="Beneficios1AdultoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios1AdultoModalLabel">Beneficios Adulto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'adulto']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="topizq">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 1 titulo</label>
            @if(isset($Contenidos[16]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[16]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 1</label>
            @if(isset($Contenidos[17]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[17]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 1 Adulto END --}}
{{-- Texto Beneficios 2 Adulto --}}
<div class="modal fade" id="Beneficios2AdultoModal" tabindex="-1" aria-labelledby="Beneficios2AdultoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios2AdultoModalLabel">Beneficios Adulto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'adulto']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="topder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 titulo</label>
            @if(isset($Contenidos[18]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[18]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 2</label>
            @if(isset($Contenidos[19]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[19]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 2 Adulto END --}}
{{-- Texto Beneficios 3 Adulto --}}
<div class="modal fade" id="Beneficios3AdultoModal" tabindex="-1" aria-labelledby="Beneficios3AdultoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios3AdultoModalLabel">Beneficios Adulto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'adulto']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomizq">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 titulo</label>
            @if(isset($Contenidos[20]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[20]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 2</label>
            @if(isset($Contenidos[21]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[21]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 3 Adulto END --}}
{{-- Texto Beneficios 4 Adulto --}}
<div class="modal fade" id="Beneficios4AdultoModal" tabindex="-1" aria-labelledby="Beneficios4AdultoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios4AdultoModalLabel">Beneficios Adulto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'adulto']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 titulo</label>
            @if(isset($Contenidos[22]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[22]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 2</label>
            @if(isset($Contenidos[23]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[23]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 4 Senior END --}}

{{-- Texto Beneficios 1 Senior  --}}
<div class="modal fade" id="Beneficios1SeniorModal" tabindex="-1" aria-labelledby="Beneficios1SeniorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios1SeniorModalLabel">Beneficios Senior</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'senior']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="topizq">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 1 titulo</label>
            @if(isset($Contenidos[24]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[24]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 1</label>
            @if(isset($Contenidos[25]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[25]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 1 Senior END --}}
{{-- Texto Beneficios 2 Senior --}}
<div class="modal fade" id="Beneficios2SeniorModal" tabindex="-1" aria-labelledby="Beneficios2SeniorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios2SeniorModalLabel">Beneficios Senior</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'senior']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="topder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 titulo</label>
            @if(isset($Contenidos[26]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[26]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 2</label>
            @if(isset($Contenidos[27]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[27]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 2 Senior END --}}
{{-- Texto Beneficios 3 Senior --}}
<div class="modal fade" id="Beneficios3SeniorModal" tabindex="-1" aria-labelledby="Beneficios3SeniorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios3SeniorModalLabel">Beneficios Senior</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'senior']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomizq">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 titulo</label>
            @if(isset($Contenidos[28]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[28]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 2</label>
            @if(isset($Contenidos[29]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[29]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 3 Senior END --}}
{{-- Texto Beneficios 4 Senior --}}
<div class="modal fade" id="Beneficios4SeniorModal" tabindex="-1" aria-labelledby="Beneficios4SeniorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios4SeniorModalLabel">Beneficios Senior</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios', ['section' => 'senior']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesperro">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 titulo</label>
            @if(isset($Contenidos[30]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" value="{{$Contenidos[30]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 2</label>
            @if(isset($Contenidos[31]->value))
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required>{{$Contenidos[31]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios') ? ' is-invalid' : '' }}" name="beneficios" id="beneficios" rows="2" required></textarea>
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
{{-- Texto Beneficios 4 Senior END --}}

@endsection