@extends('layouts.app')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h2 class="mb-sm-0">Smart bites Gato</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title mb-4">Imagen izq</h6>
                  <img src="{{ asset('img/productos/smart-bites/gato/thumbs/smart-bites-neuro-active-gato-adulto.png') }}" class="img-thumbnail mx-auto d-block" alt="" height="100px">
                </div>
                <div class="card-footer  d-grid gap-2">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ImgIzqModal">
                    Editar
                  </button>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-4">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title mb-4">Imagen der</h6>
                  <img src="{{ asset('img/productos/smart-bites/gato/thumbs/gato_beneficios.png') }}" class="img-thumbnail mx-auto d-block" alt="" height="100px">
                </div>
                <div class="card-footer  d-grid gap-2">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ImgDerModal">
                    Editar
                  </button>
                </div>
              </div>
            </div>



        </div>

        <div class="row justify-content-center">

          <div class="col-12 col-md-4">
            <div class="card">
              <div class="card-body">
                <h4 class="mb-3">Texto banner</h4>
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

          <div class="col-12 col-md-4">
            <div class="card">
              <h5 class="p-2">Smart Bites Gato Adulto</h5>
              <div class="card-body">
                <h4>Rango de edades</h4>
                <h6>{{ $Contenidos[2]->value }}</h6>
                <hr>
                <h4>Presentaciones</h4>
                <p class="text-truncate">{{ $Contenidos[3]->value }}</p>
              </div>
              <div class="card-footer  d-grid gap-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#PresentacionGatoModal">
                  Editar
                </button>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4">
            <div class="card">
              <h5 class="p-2">Beneficios Smartbites Gato</h5>
              <div class="card-body">
                <h5>{{ $Contenidos[4]->value }}</h5>
                <p>{{ $Contenidos[5]->value }}</p>
                <h5>{{ $Contenidos[6]->value }}</h5>
                <p>{{ $Contenidos[7]->value }}</p>
                <h5>{{ $Contenidos[8]->value }}</h5>
                <p>{{ $Contenidos[9]->value }}</p>
                <h5>{{ $Contenidos[10]->value }}</h5>
                <p>{{ $Contenidos[11]->value }}</p>
              </div>
              <div class="card-footer  d-grid gap-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#BeneficiosGatoModal">
                  Editar
                </button>
              </div>
            </div>
          </div>

        </div>

	</div>
</div>
{{-- Imagen IZQ --}}
<div class="modal fade" id="ImgIzqModal" tabindex="-1" aria-labelledby="ImgIzqModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ImgIzqModalLabel">Imagen Izquierda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesgato">
        <input type="hidden" name="type" value="image">
        <input type="hidden" name="section" value="banner">
        <input type="hidden" name="imgname" value="izqext">
        <input type="hidden" name="descripcion" value="image">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
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
{{-- Imagen IZQ END --}}
{{-- Imagen DER --}}
<div class="modal fade" id="ImgDerModal" tabindex="-1" aria-labelledby="ImgDerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ImgDerModalLabel">Imagen Izquierda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesgato">
        <input type="hidden" name="type" value="image">
        <input type="hidden" name="section" value="banner">
        <input type="hidden" name="imgname" value="derext">
        <input type="hidden" name="descripcion" value="image">
        <div class="modal-body">
          <div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
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
{{-- Imagen DER END --}}
{{-- Texto Banner --}}
<div class="modal fade" id="BannerTxtModal" tabindex="-1" aria-labelledby="BannerTxtModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="BannerTxtModalLabel">Texto Banner</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebannertitle') }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesgato">
        <input type="hidden" name="type" value="txt">
        <input type="hidden" name="section" value="banner">
        <div class="modal-body">
          <div class="mb-3">
            <label for="parrafo1" class="form-label">Parrafo 1</label>
            @if(isset($Contenidos[0]->value))
            <textarea class="form-control  {{ $errors->has('parrafo1') ? ' is-invalid' : '' }}" name="parrafo1" id="parrafo1" rows="3" required>{{$Contenidos[0]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('parrafo1') ? ' is-invalid' : '' }}" name="parrafo1" id="parrafo1" rows="3" required></textarea>
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
            <label for="parrafo2" class="form-label">Parrafo 2</label>
            @if(isset($Contenidos[1]->value))
            <textarea class="form-control  {{ $errors->has('parrafo2') ? ' is-invalid' : '' }}" name="parrafo2" id="parrafo2" rows="3" required>{{$Contenidos[1]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('parrafo2') ? ' is-invalid' : '' }}" name="parrafo2" id="parrafo2" rows="3" required></textarea>
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
{{-- Texto Banner END --}}
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
{{-- Texto Presentacion END --}}
{{-- Texto Beneficios --}}
<div class="modal fade" id="BeneficiosGatoModal" tabindex="-1" aria-labelledby="BeneficiosGatoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="BeneficiosGatoModalLabel">Presentacion Adulto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('smartbites.updatebeneficios') }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="smartbitesgato">
        <input type="hidden" name="section" value="beneficios">
        <input type="hidden" name="area" value="adulto">
        <div class="modal-body">
          {{--<div class="mb-3">
            <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
            <input name="imagefile" class="form-control" type="file" id="formFile">
          </div>--}}
          <div class="mb-3">
            <label for="beneficiostitulo1" class="form-label">Beneficio 1 titulo</label>
            @if(isset($Contenidos[4]->value))
            <input type="text" name="beneficiostitulo1" class="form-control {{ $errors->has('beneficiostitulo1') ? ' is-invalid' : '' }}" id="beneficiostitulo1" placeholder="Titulo" value="{{$Contenidos[4]->value}}" required>
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
            @if(isset($Contenidos[5]->value))
            <textarea class="form-control  {{ $errors->has('beneficios1') ? ' is-invalid' : '' }}" name="beneficios1" id="beneficios1" rows="2" required>{{$Contenidos[5]->value}}</textarea>
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
          <div class="mb-3">
            <label for="beneficiostitulo2" class="form-label">Beneficio 2 titulo</label>
            @if(isset($Contenidos[6]->value))
            <input type="text" name="beneficiostitulo2" class="form-control {{ $errors->has('beneficiostitulo2') ? ' is-invalid' : '' }}" id="beneficiostitulo2" placeholder="Titulo" value="{{$Contenidos[6]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo2" class="form-control {{ $errors->has('beneficiostitulo2') ? ' is-invalid' : '' }}" id="beneficiostitulo2" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios2" class="form-label">Beneficio 2</label>
            @if(isset($Contenidos[7]->value))
            <textarea class="form-control  {{ $errors->has('beneficios2') ? ' is-invalid' : '' }}" name="beneficios2" id="beneficios2" rows="2" required>{{$Contenidos[7]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios2') ? ' is-invalid' : '' }}" name="beneficios2" id="beneficios2" rows="2" required></textarea>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega una descripción
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo3" class="form-label">Beneficio 3 titulo</label>
            @if(isset($Contenidos[8]->value))
            <input type="text" name="beneficiostitulo3" class="form-control {{ $errors->has('beneficiostitulo3') ? ' is-invalid' : '' }}" id="beneficiostitulo3" placeholder="Titulo" value="{{$Contenidos[8]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo3" class="form-control {{ $errors->has('beneficiostitulo3') ? ' is-invalid' : '' }}" id="beneficiostitulo3" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios3" class="form-label">Beneficio 3</label>
            @if(isset($Contenidos[9]->value))
            <textarea class="form-control  {{ $errors->has('beneficios3') ? ' is-invalid' : '' }}" name="beneficios3" id="beneficios3" rows="2" required>{{$Contenidos[9]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios3') ? ' is-invalid' : '' }}" name="beneficios3" id="beneficios3" rows="2" required></textarea>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega una descripción
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficiostitulo4" class="form-label">Beneficio 4 titulo</label>
            @if(isset($Contenidos[10]->value))
            <input type="text" name="beneficiostitulo4" class="form-control {{ $errors->has('beneficiostitulo4') ? ' is-invalid' : '' }}" id="beneficiostitulo4" placeholder="Titulo" value="{{$Contenidos[10]->value}}" required>
            @else
            <input type="text" name="beneficiostitulo4" class="form-control {{ $errors->has('beneficiostitulo4') ? ' is-invalid' : '' }}" id="beneficiostitulo4" placeholder="Titulo" required>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega un titulo válido
            </div>
          </div>
          <div class="mb-3">
            <label for="beneficios4" class="form-label">Beneficio 4</label>
            @if(isset($Contenidos[11]->value))
            <textarea class="form-control  {{ $errors->has('beneficios4') ? ' is-invalid' : '' }}" name="beneficios4" id="beneficios4" rows="2" required>{{$Contenidos[11]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('beneficios4') ? ' is-invalid' : '' }}" name="beneficios4" id="beneficios4" rows="2" required></textarea>
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
{{-- Texto Beneficios END --}}


@endsection