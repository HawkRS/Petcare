@extends('layouts.app')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h2 class="mb-sm-0">Smartbites Gato - Beneficios</h2>
        </div>
      </div>
    </div>

    <div class="m-2">
      <hr>
      <h5 class="text-uppercase fntB">Adulto</h5>
    </div>

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
            <img src="{{ asset('img/productos/smart-bites/iconos/gato/adulto/sistema_inmune.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[0]->value }}</h6>
            <p>{{ $Contenidos[1]->value }}</p>
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
            <img src="{{ asset('img/productos/smart-bites/iconos/gato/adulto/salud_visual.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[2]->value }}</h6>
            <p>{{ $Contenidos[3]->value }}</p>
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
            <img src="{{ asset('img/productos/smart-bites/iconos/gato/adulto/control_bolas_pelo.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[4]->value }}</h6>
            <p>{{ $Contenidos[5]->value }}</p>
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
            <img src="{{ asset('img/productos/smart-bites/iconos/gato/adulto/salud_intestinal.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
            <h6 class="pt-2">{{ $Contenidos[6]->value }}</h6>
            <p>{{ $Contenidos[7]->value }}</p>
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

  </div>
</div>

{{-- Texto Beneficios 1 Adulto --}}
<div class="modal fade" id="Beneficios1AdultoModal" tabindex="-1" aria-labelledby="Beneficios1AdultoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios1AdultoModalLabel">Beneficios Adulto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbitesgato.updatebeneficios', ['section' => 'adulto']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesgato">
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
{{-- Texto Beneficios 1 Adulto END --}}
{{-- Texto Beneficios 2 Adulto --}}
<div class="modal fade" id="Beneficios2AdultoModal" tabindex="-1" aria-labelledby="Beneficios2AdultoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios2AdultoModalLabel">Beneficios Adulto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbitesgato.updatebeneficios', ['section' => 'adulto']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesgato">
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
{{-- Texto Beneficios 2 Adulto END --}}
{{-- Texto Beneficios 3 Adulto --}}
<div class="modal fade" id="Beneficios3AdultoModal" tabindex="-1" aria-labelledby="Beneficios3AdultoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios3AdultoModalLabel">Beneficios Adulto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbitesgato.updatebeneficios', ['section' => 'adulto']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesgato">
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
{{-- Texto Beneficios 3 Adulto END --}}
{{-- Texto Beneficios 4 Adulto --}}
<div class="modal fade" id="Beneficios4AdultoModal" tabindex="-1" aria-labelledby="Beneficios4AdultoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios4AdultoModalLabel">Beneficios Adulto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbitesgato.updatebeneficios', ['section' => 'adulto']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesgato">
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
{{-- Texto Beneficios 4 Senior END --}}

@endsection