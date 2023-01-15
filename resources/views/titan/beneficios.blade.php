@extends('layouts.app')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h2 class="mb-sm-0">Titán - Beneficios</h2>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">

      {{-- PERRO --}}
      <div class="m-2">
        <hr>
        <h5 class="text-uppercase fntB">PERRO</h5>
      </div>

      <div class="row">
        <div class="col-12 col-md-3">
          <div class="card">
            <div class="card-header card-primary">
              <h5 class="text-light p-2">Beneficio 1</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title mb-4 text-center">Icono</h6>
              <img src="{{ asset('img/productos/titan/perro/iconos-v2/claim_perro_musculos.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[0]->value }}</h6>
              <p>{{ $Contenidos[1]->value }}</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios1PerroModal">
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
              <img src="{{ asset('img/productos/titan/perro/iconos-v2/claim_perro_piel_sana.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[2]->value }}</h6>
              <p>{{ $Contenidos[3]->value }}</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios2PerroModal">
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
              <img src="{{ asset('img/productos/titan/perro/iconos-v2/claim_perro_sistema-digestivo.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[4]->value }}</h6>
              <p>{{ $Contenidos[5]->value }}</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios3PerroModal">
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
              <img src="{{ asset('img/productos/titan/perro/iconos-v2/claim_perro_gases.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[6]->value }}</h6>
              <p>{{ $Contenidos[7]->value }}</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios4PerroModal">
                Editar
              </button>
            </div>
          </div>
        </div>

      </div>{{-- END ROW --}}
      {{-- END PERRO --}}

      {{-- GATO --}}
      <div class="m-2">
        <hr>
        <h5 class="text-uppercase fntB">GATO</h5>
      </div>

      <div class="row">
        <div class="col-12 col-md-3">
          <div class="card">
            <div class="card-header card-primary">
              <h5 class="text-light p-2">Beneficio 1</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title mb-4 text-center">Icono</h6>
              <img src="{{ asset('img/productos/titan/gato/iconos-v2/claim_gato_musculos.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[8]->value }}</h6>
              <p>{{ $Contenidos[9]->value }}</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios1GatoModal">
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
              <img src="{{ asset('img/productos/titan/gato/iconos-v2/claim_gato_vista.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[10]->value }}</h6>
              <p>{{ $Contenidos[11]->value }}</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios2GatoModal">
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
              <img src="{{ asset('img/productos/titan/gato/iconos-v2/claim_gato_digestion.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[12]->value }}</h6>
              <p>{{ $Contenidos[13]->value }}</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios3GatoModal">
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
              <img src="{{ asset('img/productos/titan/gato/iconos-v2/claim_gato_corazon.svg') }}" class="img-thumbnail mb-2 mx-auto d-block pres-img" alt="">
              <h6 class="pt-2">{{ $Contenidos[14]->value }}</h6>
              <p>{{ $Contenidos[15]->value }}</p>
            </div>
            <div class="card-footer card-primary d-grid gap-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Beneficios4GatoModal">
                Editar
              </button>
            </div>
          </div>
        </div>

      </div>{{-- END ROW --}}
      {{-- END GATO --}}


    </div>

  </div>
</div>

{{-- Texto Beneficios 1 Perro --}}
<div class="modal fade" id="Beneficios1PerroModal" tabindex="-1" aria-labelledby="Beneficios1PerroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios1PerroModalLabel">Beneficios Perro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('titan.updatebeneficios', ['section' => 'perro']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="titan">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="topizq">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 1 título</label>
            @if(isset($Contenidos[0]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" value="{{$Contenidos[0]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" required>
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
{{-- Texto Beneficios 1 Perro END --}}
{{-- Texto Beneficios 2 Perro --}}
<div class="modal fade" id="Beneficios2PerroModal" tabindex="-1" aria-labelledby="Beneficios2PerroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios2PerroModalLabel">Beneficios Perro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('titan.updatebeneficios', ['section' => 'perro']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="titan">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="topder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 título</label>
            @if(isset($Contenidos[2]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" value="{{$Contenidos[2]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" required>
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
{{-- Texto Beneficios 2 Perro END --}}
{{-- Texto Beneficios 3 Perro --}}
<div class="modal fade" id="Beneficios3PerroModal" tabindex="-1" aria-labelledby="Beneficios3PerroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios3PerroModalLabel">Beneficios Perro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('titan.updatebeneficios', ['section' => 'perro']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="titan">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomizq">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 título</label>
            @if(isset($Contenidos[4]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" value="{{$Contenidos[4]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" required>
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
{{-- Texto Beneficios 3 Perro END --}}
{{-- Texto Beneficios 4 Perro --}}
<div class="modal fade" id="Beneficios4PerroModal" tabindex="-1" aria-labelledby="Beneficios4PerroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios4PerroModalLabel">Beneficios Perro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('titan.updatebeneficios', ['section' => 'perro']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="titan">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 título</label>
            @if(isset($Contenidos[6]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" value="{{$Contenidos[6]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" required>
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
{{-- Texto Beneficios 4 Perro END --}}

{{-- Texto Beneficios 1 Gato --}}
<div class="modal fade" id="Beneficios1GatoModal" tabindex="-1" aria-labelledby="Beneficios1GatoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios1GatoModalLabel">Beneficios Gato</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('titan.updatebeneficios', ['section' => 'gato']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="titan">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="topizq">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 1 título</label>
            @if(isset($Contenidos[8]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" value="{{$Contenidos[8]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" required>
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
{{-- Texto Beneficios 1 Gato END --}}
{{-- Texto Beneficios 2 Gato --}}
<div class="modal fade" id="Beneficios2GatoModal" tabindex="-1" aria-labelledby="Beneficios2GatoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios2GatoModalLabel">Beneficios Gato</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('titan.updatebeneficios', ['section' => 'gato']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="titan">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="topder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 título</label>
            @if(isset($Contenidos[10]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" value="{{$Contenidos[10]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" required>
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
{{-- Texto Beneficios 2 Gato END --}}
{{-- Texto Beneficios 3 Gato --}}
<div class="modal fade" id="Beneficios3GatoModal" tabindex="-1" aria-labelledby="Beneficios3GatoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios3GatoModalLabel">Beneficios Gato</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('titan.updatebeneficios', ['section' => 'gato']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="titan">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomizq">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 título</label>
            @if(isset($Contenidos[12]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" value="{{$Contenidos[12]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" required>
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
{{-- Texto Beneficios 3 Gato END --}}
{{-- Texto Beneficios 4 Gato --}}
<div class="modal fade" id="Beneficios4GatoModal" tabindex="-1" aria-labelledby="Beneficios4GatoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Beneficios4GatoModalLabel">Beneficios Gato</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('titan.updatebeneficios', ['section' => 'gato']) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="titan">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="bottomder">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo" class="form-label">Beneficio 2 título</label>
            @if(isset($Contenidos[14]->value))
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" value="{{$Contenidos[14]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo" class="form-control {{ $errors->has('beneficiostitulo') ? ' is-invalid' : '' }}" id="beneficiostitulo" placeholder="Título" required>
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
{{-- Texto Beneficios 4 Gato END --}}

@endsection