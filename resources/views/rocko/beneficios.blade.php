@extends('layouts.app')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h2 class="mb-sm-0">Rocko - Beneficios</h2>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">

      {{-- COMPLETE PLUS --}}
      <div class="m-2">
        <hr>
        <h5 class="text-uppercase fntB">Rocko Plus-Complete</h5>
      </div>

      <div class="row">
        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-header card-primary">
              <h5 class="text-light p-2">Beneficio 1</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title mb-4 text-center">Icono</h6>
              <img src="{{ asset('img/productos/rocko/complete/iconos/icon_pollo.png') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[0]->value }}</h6>
              <p>{{ $Contenidos[1]->value }}</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios1CompleteModal">
                Editar
              </button>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-header card-primary">
              <h5 class="text-light p-2">Beneficio 2</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title mb-4 text-center">Icono</h6>
              <img src="{{ asset('img/productos/rocko/complete/iconos/icon_vitaminas.png') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[4]->value }}</h6>
              <p>{{ $Contenidos[5]->value }}</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios2CompleteModal">
                Editar
              </button>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-header card-primary">
              <h5 class="text-light p-2">Beneficio 3</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title mb-4 text-center">Icono</h6>
              <img src="{{ asset('img/productos/rocko/complete/iconos/delicioso_sabor_icon.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[6]->value }}</h6>
              {{--<p>{{ $Contenidos[5]->value }}</p>--}}
              <p>-- Sin texto --</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios3CompleteModal">
                Editar
              </button>
            </div>
          </div>
        </div>
        {{--
        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-header card-primary">
              <h5 class="text-light p-2">Beneficio 4</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title mb-4 text-center">Icono</h6>
              <img src="{{ asset('img/productos/rocko/complete/iconos/delicioso_sabor_icon.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[6]->value }}</h6>
              <p>{{ $Contenidos[7]->value }}</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios4CompleteModal">
                Editar
              </button>
            </div>
          </div>
        </div> --}}

      </div>{{-- END ROW --}}
      {{-- END COMPLETE PLUS --}}

      {{-- MÁS PODER --}}
      <div class="m-2">
        <hr>
        <h5 class="text-uppercase fntB">ROCKO PLUS-MÁS PODER</h5>
      </div>

      <div class="row">
        <div class="col-12 col-md-3">
          <div class="card">
            <div class="card-header card-primary">
              <h5 class="text-light p-2">Beneficio 1</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title mb-4 text-center">Icono</h6>
              <img src="{{ asset('img/productos/rocko/plus/iconos/icon_pollo.png') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[8]->value }}</h6>
              <p>{{ $Contenidos[9]->value }}</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios1PoderModal">
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
              <img src="{{ asset('img/productos/rocko/plus/iconos/icon_prebioticos.png') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[10]->value }}</h6>
              <p>{{ $Contenidos[11]->value }}</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios2PoderModal">
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
              <img src="{{ asset('img/productos/rocko/plus/iconos/icon_vitaminas.png') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[12]->value }}</h6>
              <p>{{ $Contenidos[13]->value }}</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios3PoderModal">
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
              <img src="{{ asset('img/productos/rocko/plus/iconos/delicioso_sabor_icon.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[14]->value }}</h6>
              {{--<p>{{ $Contenidos[15]->value }}</p>--}}
              <p>-- Sin texto --</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios4PoderModal">
                Editar
              </button>
            </div>
          </div>
        </div>

      </div>{{-- END ROW --}}
      {{-- END MÁS PODER --}}

    </div>

  </div>
</div>

{{-- Texto Beneficios 1 Complete --}}
<div class="modal fade" id="Beneficios1CompleteModal" tabindex="-1" aria-labelledby="Beneficios1CompleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios1CompleteModalLabel">Beneficios Complete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('titan.updatebeneficios', ['section' => 'complete']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="rocko">
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
{{-- Texto Beneficios 1 Complete END --}}
{{-- Texto Beneficios 2 Complete --}}
<div class="modal fade" id="Beneficios2CompleteModal" tabindex="-1" aria-labelledby="Beneficios2CompleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios2CompleteModalLabel">Beneficios Complete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('titan.updatebeneficios', ['section' => 'complete']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="rocko">
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
{{-- Texto Beneficios 2 Complete END --}}
{{-- Texto Beneficios 3 Complete --}}
<div class="modal fade" id="Beneficios3CompleteModal" tabindex="-1" aria-labelledby="Beneficios3CompleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios3CompleteModalLabel">Beneficios Complete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('titan.updatebeneficios', ['section' => 'complete']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="rocko">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomder">
        <input type="hidden" name="beneficios" value="placeholder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo svg)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 3 titulo</label>
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
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{{-- Texto Beneficios 3 Complete END --}}
{{-- Texto Beneficios 4 Complete --}}
<div class="modal fade" id="Beneficios4CompleteModal" tabindex="-1" aria-labelledby="Beneficios4CompleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios4CompleteModalLabel">Beneficios Complete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('titan.updatebeneficios', ['section' => 'complete']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="rocko">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo svg)</label>
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
{{-- Texto Beneficios 4 Complete END --}}

{{-- Texto Beneficios 1 Poder --}}
<div class="modal fade" id="Beneficios1PoderModal" tabindex="-1" aria-labelledby="Beneficios1PoderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios1PoderModalLabel">Beneficios Rocko Plus-Más poder</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('rocko.updatebeneficios', ['section' => 'poder']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="rocko">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="topizq">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 titulo</label>
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
            <label for="beneficios" class="form-label">Beneficio 2</label>
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
{{-- Texto Beneficios 1 Poder END --}}
{{-- Texto Beneficios 2 Poder --}}
<div class="modal fade" id="Beneficios2PoderModal" tabindex="-1" aria-labelledby="Beneficios2PoderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios2PoderModalLabel">Beneficios Rocko Plus-Más poder</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('rocko.updatebeneficios', ['section' => 'poder']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="rocko">
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
{{-- Texto Beneficios 2 Poder END --}}
{{-- Texto Beneficios 3 Poder --}}
<div class="modal fade" id="Beneficios3PoderModal" tabindex="-1" aria-labelledby="Beneficios3PoderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios3PoderModalLabel">Beneficios Rocko Plus-Más poder</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('rocko.updatebeneficios', ['section' => 'poder']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="rocko">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomizq">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 3 titulo</label>
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
            <label for="beneficios" class="form-label">Beneficio 3</label>
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
{{-- Texto Beneficios 3 Poder END --}}
{{-- Texto Beneficios 4 Poder --}}
<div class="modal fade" id="Beneficios4PoderModal" tabindex="-1" aria-labelledby="Beneficios4PoderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios4PoderModalLabel">Beneficios Rocko Plus-Más poder</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('rocko.updatebeneficios', ['section' => 'poder']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="rocko">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomder">
        <input type="hidden" name="beneficios" value="placeholder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo svg)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 4 titulo</label>
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
          {{--<div class="mb-3">
            <label for="beneficios" class="form-label">Beneficio 4</label>
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
          </div>--}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
{{-- Texto Beneficios 4 Poder END --}}

@endsection