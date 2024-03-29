@extends('layouts.app')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h2 class="mb-sm-0">Landing</h2>



                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4">
              <div class="card">
                <div class="card-header card-primary">
                  <h5 class="text-light">Banner 1</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title mb-4">Imagen</h6>
                    <img src="{{ asset('img/sliders/thumbs/banner-home-1-desktop.jpg') }}" class="img-thumbnail mx-auto d-block" alt="">
                    <hr>
                    <h4>Título</h4>
                    <h6>{{ $Contenidos[0]->value }}</h6>
                    <hr>
                    <h4>Descripción</h4>
                    <p class="text-truncate">{{ $Contenidos[1]->value }}</p>
                </div>
                <div class="card-footer card-primary d-grid gap-2">
                  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Slider1Modal">
                    Editar
                  </button>
                </div>
              </div>
          </div>
            <div class="col-12 col-md-4">
              <div class="card">
                <div class="card-header card-primary">
                  <h5 class="text-light">Banner 2</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title mb-4">Imagen</h6>
                    <img src="{{ asset('img/sliders/thumbs/banner-home-2-desktop.jpg') }}" class="img-thumbnail mx-auto d-block" alt="">
                    <hr>
                    <h4>Título</h4>
                    <h6>{{ $Contenidos[2]->value }}</h6>
                    <hr>
                    <h4>Descripción</h4>
                    <p class="text-truncate">{{ $Contenidos[3]->value }}</p>
                </div>
                <div class="card-footer card-primary d-grid gap-2">
                  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Slider2Modal">
                    Editar
                  </button>
                </div>
              </div>
          </div>
            <div class="col-12 col-md-4">
              <div class="card">
                <div class="card-header card-primary">
                  <h5 class="text-light">Banner 3</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title mb-4">Imagen</h6>
                    <img src="{{ asset('img/sliders/thumbs/banner-home-3-desktop.jpg') }}" class="img-thumbnail mx-auto d-block" alt="">
                    <hr>
                    <h4>Título</h4>
                    <h6>{{ $Contenidos[4]->value }}</h6>
                    <hr>
                    <h4>Descripción</h4>
                    <p class="text-truncate">{{ $Contenidos[5]->value }}</p>
                </div>
                <div class="card-footer card-primary d-grid gap-2">
                  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#Slider3Modal">
                    Editar
                  </button>
                </div>
              </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-4">
            <div class="card">
              <div class="card-header card-primary">
                <h5 class="text-light">Productos (Smart Bites)</h5>
              </div>
              <div class="card-body">
                  <h6 class="card-title mb-4">Contenido</h6>
                  <?php $p = "![\r\n]+!";
                  $textSmartbites = preg_split($p, $Contenidos[6]->value, 4);
                  $textSmartbites = array_slice($textSmartbites, 0, 2);
                  $textSmartbites = join("\r\n", $textSmartbites);?>
                  <p>{{ $textSmartbites }}</p>
                  <hr>
                  <div class="accordion", id="accordionsmartbitesExample">
                    <div class="accordion-item">
                      <h4 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Imagenes
                        </button>
                      </h4>
                      <div  id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionsmartbitesExample">
                        <div class="accordion-body">
                          <h4>Imagen Izq</h4>
                          <img src="{{ asset('img/home/productos/thumbs/smart_bites_neuro_active_adulto.png') }}" class="img-thumbnail  mx-auto d-block" alt="">
                          <hr>
                          <h4>Imagen Der</h4>
                          <img src="{{ asset('img/home/productos/thumbs/perro-smart-bites.png') }}" class="img-thumbnail  mx-auto d-block" alt="">
                          <hr>
                          <h4>Imagen Mobile</h4>
                          <img src="{{ asset('img/home/productos/thumbs/composite_smartbites.jpg') }}" class="img-thumbnail  mx-auto d-block" alt="">
                        </div>
                      </div>
                    </div>
                  </div>

              </div>
              <div class="card-footer card-primary d-grid gap-2">
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#ProdSmartModal">
                  Editar
                </button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card">
              <div class="card-header card-primary">
                <h5 class="text-light">Productos (Titan)</h5>
              </div>
              <div class="card-body">
                  <h6 class="card-title mb-4">Contenido</h6>
                  <?php $p = "![\r\n]+!";
                  $textTitan = preg_split($p, $Contenidos[7]->value, 4);
                  $textTitan = array_slice($textTitan, 0, 2);
                  $textTitan = join("\r\n", $textTitan);?>
                  <p>{{ $textTitan }}</p>
                  <hr>
                  <div class="accordion", id="accordionTitanExample">
                    <div class="accordion-item">
                      <h4 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Imagenes
                        </button>
                      </h4>
                      <div  id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionTitanExample">
                        <div class="accordion-body">
                          <h4>Imagen perro Izq</h4>
                          <img src="{{ asset('/img/home/productos/thumbs/titan-perro.png') }}" class="img-thumbnail  mx-auto d-block" alt="">
                          <hr>
                          <h4>Imagen perro Der</h4>
                          <img src="{{ asset('img/home/productos/thumbs/perro-titan.png') }}" class="img-thumbnail  mx-auto d-block" alt="">
                          <hr>
                          <h4>Imagen gato Izq</h4>
                          <img src="{{ asset('img/home/productos/thumbs/gato-titan.png') }}" class="img-thumbnail  mx-auto d-block" alt="">
                          <hr>
                          <h4>Imagen gato Der</h4>
                          <img src="{{ asset('img/home/productos/thumbs/titan-gato.png') }}" class="img-thumbnail  mx-auto d-block" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-footer card-primary d-grid gap-2">
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#ProdTitanModal">
                  Editar
                </button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card">
              <div class="card-header card-primary">
                <h5 class="text-light">Productos (Rocko)</h5>
              </div>
              <div class="card-body">
                  <h6 class="card-title mb-4">Contenido</h6>
                  <?php $p = "![\r\n]+!";
                  $textRocko = preg_split($p, $Contenidos[8]->value, 4);
                  $textRocko = array_slice($textRocko, 0, 2);
                  $textRocko = join("\r\n", $textRocko);?>
                  <p>{{ $textRocko }}</p>
                  <hr>
                  <div class="accordion", id="accordionRockoExample">
                    <div class="accordion-item">
                      <h4 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          Imagenes
                        </button>
                      </h4>
                      <div  id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionRockoExample">
                        <div class="accordion-body">
                          <h4>Imagen Rocko Izq Externa</h4>
                          <img src="{{ asset('/img/home/productos/thumbs/perro-rocko.png') }}" class="img-thumbnail  mx-auto d-block" alt="">
                          <hr>
                          <h4>Imagen Rocko Izq Interna</h4>
                          <img src="{{ asset('img/home/productos/thumbs/rocko-plus-complete.png') }}" class="img-thumbnail  mx-auto d-block" alt="">
                          <hr>
                          <h4>Imagen Rocko Der Interna</h4>
                          <img src="{{ asset('img/home/productos/thumbs/rocko-perro.png') }}" class="img-thumbnail  mx-auto d-block" alt="">
                          <hr>
                          <h4>Imagen Rocko Der Externa</h4>
                          <img src="{{ asset('img/home/productos/thumbs/perro-rocko-cafe.png') }}" class="img-thumbnail  mx-auto d-block" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-footer card-primary d-grid gap-2">
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#ProdRockoModal">
                  Editar
                </button>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>

  {{-- MODALS --}}
{{-- Slider1 --}}
<div class="modal fade" id="Slider1Modal" tabindex="-1" aria-labelledby="Slider1ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Slider1ModalLabel">Editar Banner 1</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('landing.edit', ['id' => $Contenidos[0]->id]) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="position" value="slider1">
        <div class="modal-body">
          <div class="mb-3">
              <label class="form-label" for="validationCustom01">Título</label>
              @if(isset($Contenidos[0]->value))
              <input type="text" name="titulo" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" id="titulo" placeholder="Título" value="{{$Contenidos[0]->value}}" required>
              @else
              <input type="text" name="titulo" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" id="titulo" placeholder="Título" required>
              @endif
              <div class="valid-feedback">
                  ¡Todo parece en orden!
              </div>
              <div class="invalid-feedback">
                  Por favor agrega un titulo válido
              </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            @if(isset($Contenidos[1]->value))
            <textarea class="form-control  {{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="leyenda" id="descripcion" rows="3" required>{{$Contenidos[1]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="leyenda" id="descripcion" rows="3" required></textarea>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega una descripción
            </div>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para pantallas escritorio (1920px x 1134px)</label>
            <input name="banner_desk" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 1200 (1571px x 900px)</label>
            <input name="banner_1200" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 992 (1355px x 800px)</label>
            <input name="banner_992" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 768 (1186px x 700px)</label>
            <input name="banner_768" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 576 (847px x 500px)</label>
            <input name="banner_576" class="form-control" type="file" id="formFile">
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
{{-- MODAL SLIDER 1 END --}}
{{-- Slider2 --}}
<div class="modal fade" id="Slider2Modal" tabindex="-1" aria-labelledby="Slider2ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Slider1ModalLabel">Editar Banner 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('landing.edit', ['id' => $Contenidos[2]->id]) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="position" value="slider2">
        <div class="modal-body">
          <div class="mb-3">
              <label class="form-label" for="validationCustom01">Título</label>
              @if(isset($Contenidos[2]->value))
              <input type="text" name="titulo" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" id="titulo" placeholder="Título" value="{{$Contenidos[2]->value}}" required>
              @else
              <input type="text" name="titulo" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" id="titulo" placeholder="Título" required>
              @endif
              <div class="valid-feedback">
                  ¡Todo parece en orden!
              </div>
              <div class="invalid-feedback">
                  Por favor agrega un titulo válido
              </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            @if(isset($Contenidos[3]->value))
            <textarea class="form-control  {{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="leyenda" id="descripcion" rows="3" required>{{$Contenidos[3]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="leyenda" id="descripcion" rows="3" required></textarea>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega una descripción
            </div>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para pantallas escritorio (1920px x 1134px)</label>
            <input name="banner_desk" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 1200 (1571px x 900px)</label>
            <input name="banner_1200" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 992 (1355px x 800px)</label>
            <input name="banner_992" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 768 (1186px x 700px)</label>
            <input name="banner_768" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 576 (847px x 500px)</label>
            <input name="banner_576" class="form-control" type="file" id="formFile">
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
{{-- MODAL SLIDER 2 END --}}
{{-- Slider3 --}}
<div class="modal fade" id="Slider3Modal" tabindex="-1" aria-labelledby="Slider3ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Slider3ModalLabel">Editar Banner 3</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('landing.edit', ['id' => $Contenidos[4]->id]) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="position" value="slider3">
        <div class="modal-body">
          <div class="mb-3">
              <label class="form-label" for="validationCustom01">Título</label>
              @if(isset($Contenidos[4]->value))
              <input type="text" name="titulo" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" id="titulo" placeholder="Título" value="{{$Contenidos[4]->value}}" required>
              @else
              <input type="text" name="titulo" class="form-control {{ $errors->has('titulo') ? ' is-invalid' : '' }}" id="titulo" placeholder="Título" required>
              @endif
              <div class="valid-feedback">
                  ¡Todo parece en orden!
              </div>
              <div class="invalid-feedback">
                  Por favor agrega un titulo válido
              </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            @if(isset($Contenidos[5]->value))
            <textarea class="form-control  {{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="leyenda" id="descripcion" rows="3" required>{{$Contenidos[5]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="leyenda" id="descripcion" rows="3" required></textarea>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega una descripción
            </div>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para pantallas escritorio (1920px x 1134px)</label>
            <input name="banner_desk" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 1200 (1571px x 900px)</label>
            <input name="banner_1200" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 992 (1355px x 800px)</label>
            <input name="banner_992" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 768 (1186px x 700px)</label>
            <input name="banner_768" class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Banner para resolución 576 (847px x 500px)</label>
            <input name="banner_576" class="form-control" type="file" id="formFile">
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
{{-- MODAL SLIDER 2 END --}}

{{-- PRODUCTOS SMART BITE --}}
<div class="modal fade" id="ProdSmartModal" tabindex="-1" aria-labelledby="ProdSmartModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ProdSmartModalLabel">Editar Productos Smart Bites</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('landing.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="landing">
        <input type="hidden" name="position" value="smartbites">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            @if(isset($Contenidos[6]->value))
            <textarea class="form-control  {{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="descripcion" id="descripcion" rows="3" required>{{$Contenidos[6]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="descripcion" id="descripcion" rows="3" required></textarea>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega una descripción
            </div>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen para escritorio Izq (999px x 999px)</label>
            <input class="form-control" name="imgizq" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen para escritorio Der (460px x 460px)</label>
            <input class="form-control" name="imgder" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen para dispositivos mobiles (339px x 420px)</label>
            <input class="form-control" name="imgmobil" type="file" id="formFile">
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
{{-- PRODUCTOS TITAN BITE --}}
<div class="modal fade" id="ProdTitanModal" tabindex="-1" aria-labelledby="ProdTitanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ProdTitanModalLabel">Editar Productos titan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('landing.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="landing">
        <input type="hidden" name="position" value="titan">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            @if(isset($Contenidos[7]->value))
            <textarea class="form-control  {{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="descripcion" id="descripcion" rows="3" required>{{$Contenidos[7]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="descripcion" id="descripcion" rows="3" required></textarea>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega una descripción
            </div>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen titan perro Izq (258px x 450px)</label>
            <input class="form-control" name="imgtitanperroizq" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen titan perro Der (235px x 330px)</label>
            <input class="form-control" name="imgtitanperroder" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen titan gato Izq (450px x 300px)</label>
            <input class="form-control" name="imgtitangatoizq" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen titan gato Der (252px x 450px)</label>
            <input class="form-control" name="imgtitangatoder" type="file" id="formFile">
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
{{-- PRODUCTOS ROCKO BITE --}}
<div class="modal fade" id="ProdRockoModal" tabindex="-1" aria-labelledby="ProdRockoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ProdRockoModalLabel">Editar Productos titan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('landing.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <input type="hidden" name="page" value="landing">
        <input type="hidden" name="position" value="rocko">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            @if(isset($Contenidos[8]->value))
            <textarea class="form-control  {{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="descripcion" id="descripcion" rows="3" required>{{$Contenidos[8]->value}}</textarea>
            @else
            <textarea class="form-control  {{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="descripcion" id="descripcion" rows="3" required></textarea>
            @endif
            <div class="valid-feedback">
                ¡Todo parece en orden!
            </div>
            <div class="invalid-feedback">
                Por favor agrega una descripción
            </div>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen rocko izq externa (208px x 300px)</label>
            <input class="form-control" name="imgrockoIzqExt" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen rocko izq interna (277px x 480px)</label>
            <input class="form-control" name="imgrockoIzqInt" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen rocko der interna (348px x 485px)</label>
            <input class="form-control" name="imgrockoDerInt" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen rocko der externa (232px x 300px)</label>
            <input class="form-control" name="imgrockoDerExt" type="file" id="formFile">
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
  <!-- end page title -->
@endsection
