@extends('layouts.app')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h2 class="mb-sm-0">Smartbites Perro - Presentaciones</h2>
        </div>
      </div>
    </div>

    <div class="row display-flex">

      <div class="col-12 col-md-3" height="100">
        <div class="card ">
          <div class="card-header card-primary">
            <h5 class="text-light">Cachorro</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title mb-4">Imagen</h6>
            <img src="{{ asset('img/productos/smart-bites/thumbs/render_bolsa_cachorro_SB.png') }}" class="img-thumbnail mx-auto d-block pres-img" alt="">
            <h4>Rango de edades</h4>
            <h6>{{ $Contenidos[0]->value }}</h6>
            <hr>
            <h4>Presentaciones</h4>
            <p class="text-truncate">{{ $Contenidos[1]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#PresentacionCachorroModal">
              Editar
            </button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-3">
        <div class="card " >
          <div class="card-header card-primary">
            <h5 class="text-light">Adulto raza pequeña</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title mb-4">Imagen</h6>
            <img src="{{ asset('img/productos/smart-bites/thumbs/smart-bites-neuro-active-adulto-raza-pequena.png') }}" class="img-thumbnail mx-auto d-block pres-img" alt="">
            <h4>Rango de edades</h4>
            <h6>{{ $Contenidos[2]->value }}</h6>
            <hr>
            <h4>Presentaciones</h4>
            <p class="text-truncate">{{ $Contenidos[3]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#PresentacionRazaModal">
              Editar
            </button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-3">
        <div class="card " >
          <div class="card-header card-primary">
            <h5 class="text-light">Adulto</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title mb-4">Imagen</h6>
            <img src="{{ asset('img/productos/smart-bites/thumbs/render_bolsa_adulto_SB.png') }}" class="img-thumbnail mx-auto d-block pres-img" alt="">
            <h4>Rango de edades</h4>
            <h6>{{ $Contenidos[4]->value }}</h6>
            <hr>
            <h4>Presentaciones</h4>
            <p class="text-truncate">{{ $Contenidos[5]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#PresentacionAdultoModal">
              Editar
            </button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-3">
        <div class="card " >
          <div class="card-header card-primary">
            <h5 class="text-light">Senior</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title mb-4">Imagen</h6>
            <img src="{{ asset('img/productos/smart-bites/thumbs/render_bolsa_senior_SB.png') }}" class="img-thumbnail mx-auto d-block pres-img" alt="">
            <h4>Rango de edades</h4>
            <h6>{{ $Contenidos[6]->value }}</h6>
            <hr>
            <h4>Presentaciones</h4>
            <p class="text-truncate">{{ $Contenidos[7]->value }}</p>
          </div>
          <div class="card-footer card-primary d-grid gap-2">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#PresentacionSeniorModal">
              Editar
            </button>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>
{{-- Texto Presentacion Cachorro --}}
  <div class="modal fade" id="PresentacionCachorroModal" tabindex="-1" aria-labelledby="PresentacionCachorroModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="PresentacionCachorroModalLabel">Presentaciones Cachorro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="needs-validation" action="{{ route('smartbites.updatepresentacion') }}" method="post" enctype="multipart/form-data"  novalidate>
          @csrf
          <input type="hidden" name="page" value="smartbitesperro">
          <input type="hidden" name="section" value="cachorro">
          <input type="hidden" name="area1" value="edad">
          <input type="hidden" name="area2" value="presentaciones">
          <div class="modal-body">
            <div class="mb-3">
              <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
              <input name="imagefile" class="form-control" type="file" id="formFile">
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
{{-- Texto Presentacion Cachorro END --}}
{{-- Texto Presentacion Raza Pequeña --}}
  <div class="modal fade" id="PresentacionRazaModal" tabindex="-1" aria-labelledby="PresentacionRazaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="PresentacionRazaModalLabel">Presentacion Razas Pequeñas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="needs-validation" action="{{ route('smartbites.updatepresentacion') }}" method="post" enctype="multipart/form-data"  novalidate>
          @csrf
          <input type="hidden" name="page" value="smartbitesperro">
          <input type="hidden" name="section" value="razapequeña">
          <input type="hidden" name="area1" value="edad">
          <input type="hidden" name="area2" value="presentaciones">
          <div class="modal-body">
            <div class="mb-3">
              <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
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
{{-- Texto Presentacion Raza Pequeña END --}}
{{-- Texto Presentacion Adulto --}}
  <div class="modal fade" id="PresentacionAdultoModal" tabindex="-1" aria-labelledby="PresentacionAdultoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="PresentacionAdultoModalLabel">Presentacion Adulto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="needs-validation" action="{{ route('smartbites.updatepresentacion') }}" method="post" enctype="multipart/form-data"  novalidate>
          @csrf
          <input type="hidden" name="page" value="smartbitesperro">
          <input type="hidden" name="section" value="adulto">
          <input type="hidden" name="area1" value="edad">
          <input type="hidden" name="area2" value="presentaciones">
          <div class="modal-body">
            <div class="mb-3">
              <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
              <input name="imagefile" class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
              <label for="edades" class="form-label">Edades</label>
              @if(isset($Contenidos[4]->value))
              <textarea class="form-control  {{ $errors->has('edades') ? ' is-invalid' : '' }}" name="edades" id="edades" rows="2" required>{{$Contenidos[4]->value}}</textarea>
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
              @if(isset($Contenidos[5]->value))
              <textarea class="form-control  {{ $errors->has('presentaciones') ? ' is-invalid' : '' }}" name="presentaciones" id="presentaciones" rows="2" required>{{$Contenidos[5]->value}}</textarea>
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
{{-- Texto Presentacion Adulto END --}}
{{-- Texto Presentacion Senior --}}
  <div class="modal fade" id="PresentacionSeniorModal" tabindex="-1" aria-labelledby="PresentacionSeniorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="PresentacionSeniorModalLabel">Presentacion Adulto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="needs-validation" action="{{ route('smartbites.updatepresentacion') }}" method="post" enctype="multipart/form-data"  novalidate>
          @csrf
          <input type="hidden" name="page" value="smartbitesperro">
          <input type="hidden" name="section" value="senior">
          <input type="hidden" name="area1" value="edad">
          <input type="hidden" name="area2" value="presentaciones">
          <div class="modal-body">
            <div class="mb-3">
              <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
              <input name="imagefile" class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
              <label for="edades" class="form-label">Edades</label>
              @if(isset($Contenidos[6]->value))
              <textarea class="form-control  {{ $errors->has('edades') ? ' is-invalid' : '' }}" name="edades" id="edades" rows="2" required>{{$Contenidos[6]->value}}</textarea>
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
              @if(isset($Contenidos[7]->value))
              <textarea class="form-control  {{ $errors->has('presentaciones') ? ' is-invalid' : '' }}" name="presentaciones" id="presentaciones" rows="2" required>{{$Contenidos[7]->value}}</textarea>
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
{{-- Texto Presentacion Senior END --}}


@endsection