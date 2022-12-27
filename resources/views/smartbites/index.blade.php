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

          <div class="col-12 ">

                <h4>Banner Smartbites Perro</h4>
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

                </div>{{-- END IMAGES ROW --}}

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

          <hr>

          <div class="row">
            <h4>Presentaciones Smartbites Perro</h4>

            <div class="col-12 col-md-3">
              <div class="card">
                <h5 class="p-2">Cachorro</h5>
                <div class="card-body">
                  <h6 class="card-title mb-4">Imagen</h6>
                  <img src="{{ asset('img/productos/smart-bites/thumbs/render_bolsa_cachorro_SB.png') }}" class="img-thumbnail mx-auto d-block" alt="">
                  <h4>Rango de edades</h4>
                  <h6>{{ $Contenidos[2]->value }}</h6>
                  <hr>
                  <h4>Presentaciones</h4>
                  <p class="text-truncate">{{ $Contenidos[3]->value }}</p>
                </div>
                <div class="card-footer  d-grid gap-2">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#PresentacionCachorroModal">
                    Editar
                  </button>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-3">
              <div class="card">
                <h5 class="p-2">Adulto raza pequeña</h5>
                <div class="card-body">
                  <h6 class="card-title mb-4">Imagen</h6>
                  <img src="{{ asset('img/productos/smart-bites/thumbs/smart-bites-neuro-active-adulto-raza-pequena.png') }}" class="img-thumbnail mx-auto d-block" alt="">
                  <h4>Rango de edades</h4>
                  <h6>{{ $Contenidos[4]->value }}</h6>
                  <hr>
                  <h4>Presentaciones</h4>
                  <p class="text-truncate">{{ $Contenidos[5]->value }}</p>
                </div>
                <div class="card-footer  d-grid gap-2">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#PresentacionRazaModal">
                    Editar
                  </button>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-3">
              <div class="card">
                <h5 class="p-2">Adulto</h5>
                <div class="card-body">
                  <h6 class="card-title mb-4">Imagen</h6>
                  <img src="{{ asset('img/productos/smart-bites/thumbs/render_bolsa_adulto_SB.png') }}" class="img-thumbnail mx-auto d-block" alt="">
                  <h4>Rango de edades</h4>
                  <h6>{{ $Contenidos[6]->value }}</h6>
                  <hr>
                  <h4>Presentaciones</h4>
                  <p class="text-truncate">{{ $Contenidos[7]->value }}</p>
                </div>
                <div class="card-footer  d-grid gap-2">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#PresentacionAdultoModal">
                    Editar
                  </button>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-3">
              <div class="card">
                <h5 class="p-2">Senior</h5>
                <div class="card-body">
                  <h6 class="card-title mb-4">Imagen</h6>
                  <img src="{{ asset('img/productos/smart-bites/thumbs/render_bolsa_senior_SB.png') }}" class="img-thumbnail mx-auto d-block" alt="">
                  <h4>Rango de edades</h4>
                  <h6>{{ $Contenidos[8]->value }}</h6>
                  <hr>
                  <h4>Presentaciones</h4>
                  <p class="text-truncate">{{ $Contenidos[9]->value }}</p>
                </div>
                <div class="card-footer  d-grid gap-2">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#PresentacionSeniorModal">
                    Editar
                  </button>
                </div>
              </div>
            </div>

          </div>


          <div class="row">
            <h4>Beneficios Smartbites Perro</h4>

            <div class="m-3">CACHORRO</div>

            <div class="col-12 col-md-3">
              <div class="card">
                  <h6 class="card-title m-3">Beneficio 1</h6>
                <div class="card-body">
                  <img src="{{ asset('img/productos/smart-bites/iconos/cachorro/cachorro_sistemainmune.svg') }}" class="img-thumbnail mx-auto d-block" alt="">
                  <h5>{{ $Contenidos[10]->value }}</h5>
                  <p>{{ $Contenidos[11]->value }}</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3">
              <div class="card">
                  <h6 class="card-title m-3">Beneficio 2</h6>
                <div class="card-body">
                  <img src="{{ asset('img/productos/smart-bites/iconos/cachorro/cachorro_corazon_sano.svg') }}" class="img-thumbnail mx-auto d-block" alt="">
                  <h5>{{ $Contenidos[12]->value }}</h5>
                  <p>{{ $Contenidos[13]->value }}</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3">
              <div class="card">
                  <h6 class="card-title m-3">Beneficio 3</h6>
                <div class="card-body">
                  <img src="{{ asset('img/productos/smart-bites/iconos/cachorro/cachorro_desarrollo_saludable.svg') }}" class="img-thumbnail mx-auto d-block" alt="">
                  <h5>{{ $Contenidos[14]->value }}</h5>
                  <p>{{ $Contenidos[15]->value }}</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3">
              <div class="card">
                  <h6 class="card-title m-3">Beneficio 4</h6>
                <div class="card-body">
                  <img src="{{ asset('img/productos/smart-bites/iconos/cachorro/cachorro_sistema_digestivo.svg') }}" class="img-thumbnail mx-auto d-block" alt="">
                  <h5>{{ $Contenidos[16]->value }}</h5>
                  <p>{{ $Contenidos[17]->value }}</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-3">
              <div class="card">
                <h5 class="p-2">Cachorro</h5>
                <div class="card-body">
                  <h5>{{ $Contenidos[10]->value }}</h5>
                  <p>{{ $Contenidos[11]->value }}</p>
                  <h5>{{ $Contenidos[12]->value }}</h5>
                  <p>{{ $Contenidos[13]->value }}</p>
                  <h5>{{ $Contenidos[14]->value }}</h5>
                  <p>{{ $Contenidos[15]->value }}</p>
                  <h5>{{ $Contenidos[16]->value }}</h5>
                  <p>{{ $Contenidos[17]->value }}</p>
                </div>
                <div class="card-footer  d-grid gap-2">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#BeneficiosCachorroModal">
                    Editar
                  </button>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-3">
              <div class="card">
                <h5 class="p-2">Razas pequeñas</h5>
                <div class="card-body">
                  <h5>{{ $Contenidos[18]->value }}</h5>
                  <p>{{ $Contenidos[19]->value }}</p>
                  <h5>{{ $Contenidos[20]->value }}</h5>
                  <p>{{ $Contenidos[21]->value }}</p>
                  <h5>{{ $Contenidos[22]->value }}</h5>
                  <p>{{ $Contenidos[23]->value }}</p>
                  <h5>{{ $Contenidos[24]->value }}</h5>
                  <p>{{ $Contenidos[25]->value }}</p>
                </div>
                <div class="card-footer  d-grid gap-2">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#BeneficiosRazasModal">
                    Editar
                  </button>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-3">
              <div class="card">
                <h5 class="p-2">Adulto</h5>
                <div class="card-body">
                  <h5>{{ $Contenidos[26]->value }}</h5>
                  <p>{{ $Contenidos[27]->value }}</p>
                  <h5>{{ $Contenidos[28]->value }}</h5>
                  <p>{{ $Contenidos[29]->value }}</p>
                  <h5>{{ $Contenidos[30]->value }}</h5>
                  <p>{{ $Contenidos[31]->value }}</p>
                  <h5>{{ $Contenidos[32]->value }}</h5>
                  <p>{{ $Contenidos[33]->value }}</p>
                </div>
                <div class="card-footer  d-grid gap-2">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#BeneficiosAdultoModal">
                    Editar
                  </button>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-3">
              <div class="card">
                <h5 class="p-2">SENIOR</h5>
                <div class="card-body">
                  <h5>{{ $Contenidos[34]->value }}</h5>
                  <p>{{ $Contenidos[35]->value }}</p>
                  <h5>{{ $Contenidos[36]->value }}</h5>
                  <p>{{ $Contenidos[37]->value }}</p>
                  <h5>{{ $Contenidos[38]->value }}</h5>
                  <p>{{ $Contenidos[39]->value }}</p>
                  <h5>{{ $Contenidos[40]->value }}</h5>
                  <p>{{ $Contenidos[41]->value }}</p>
                </div>
                <div class="card-footer  d-grid gap-2">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#BeneficiosSeniorModal">
                    Editar
                  </button>
                </div>
              </div>
            </div>

          </div>

        </div>

        {{-- Imagen IZQ Externa --}}
        <div class="modal fade" id="ImgIzqExtModal" tabindex="-1" aria-labelledby="ImgIzqExtModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="ImgIzqExtModalLabel">Imagen Izquierda Externa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="needs-validation" action="{{ route('smartbites.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
                @csrf
                <input type="hidden" name="page" value="smartbites">
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
        {{-- Imagen IZQ Externa END --}}
        {{-- Imagen IZQ Interna --}}
        <div class="modal fade" id="ImgIzqIntModal" tabindex="-1" aria-labelledby="ImgIzqIntModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="ImgIzqIntModalLabel">Imagen Izquierda Externa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="needs-validation" action="{{ route('smartbites.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
                @csrf
                <input type="hidden" name="page" value="smartbites">
                <input type="hidden" name="type" value="image">
                <input type="hidden" name="section" value="banner">
                <input type="hidden" name="imgname" value="izqint">
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
        {{-- Imagen IZQ Interna END --}}
        {{-- Imagen DER Interna --}}
        <div class="modal fade" id="ImgDerIntModal" tabindex="-1" aria-labelledby="ImgDerIntModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="ImgDerIntModalLabel">Imagen Derecha interna</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="needs-validation" action="{{ route('smartbites.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
                @csrf
                <input type="hidden" name="page" value="smartbites">
                <input type="hidden" name="type" value="image">
                <input type="hidden" name="section" value="banner">
                <input type="hidden" name="imgname" value="derint">
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
        {{-- Imagen DER Interna END --}}
        {{-- Imagen DER Externa --}}
        <div class="modal fade" id="ImgDerExtModal" tabindex="-1" aria-labelledby="ImgDerExtModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="ImgDerExtModalLabel">Imagen Derecha interna</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="needs-validation" action="{{ route('smartbites.updatecontent') }}" method="post" enctype="multipart/form-data"  novalidate>
                @csrf
                <input type="hidden" name="page" value="smartbites">
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
        {{-- Imagen DER Externa END --}}
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
                <input type="hidden" name="page" value="smartbites">
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
                    @if(isset($Contenidos[8]->value))
                    <textarea class="form-control  {{ $errors->has('edades') ? ' is-invalid' : '' }}" name="edades" id="edades" rows="2" required>{{$Contenidos[8]->value}}</textarea>
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
                    @if(isset($Contenidos[9]->value))
                    <textarea class="form-control  {{ $errors->has('presentaciones') ? ' is-invalid' : '' }}" name="presentaciones" id="presentaciones" rows="2" required>{{$Contenidos[9]->value}}</textarea>
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
        {{-- Texto Beneficios Cachorro --}}
        <div class="modal fade" id="BeneficiosCachorroModal" tabindex="-1" aria-labelledby="BeneficiosCachorroModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="BeneficiosCachorroModalLabel">Presentacion Adulto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="needs-validation" action="{{ route('smartbites.updatebeneficios') }}" method="post" enctype="multipart/form-data"  novalidate>
                @csrf
                <input type="hidden" name="page" value="smartbitesperro">
                <input type="hidden" name="section" value="beneficios">
                <input type="hidden" name="area" value="cachorro">
                <div class="modal-body">
                  {{--<div class="mb-3">
                    <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
                    <input name="imagefile" class="form-control" type="file" id="formFile">
                  </div>--}}
                  <div class="mb-3">
                    <label for="beneficiostitulo1" class="form-label">Beneficio 1 titulo</label>
                    @if(isset($Contenidos[10]->value))
                    <input type="text" name="beneficiostitulo1" class="form-control {{ $errors->has('beneficiostitulo1') ? ' is-invalid' : '' }}" id="beneficiostitulo1" placeholder="Titulo" value="{{$Contenidos[10]->value}}" required>
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
                    @if(isset($Contenidos[11]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios1') ? ' is-invalid' : '' }}" name="beneficios1" id="beneficios1" rows="2" required>{{$Contenidos[11]->value}}</textarea>
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
                    @if(isset($Contenidos[12]->value))
                    <input type="text" name="beneficiostitulo2" class="form-control {{ $errors->has('beneficiostitulo2') ? ' is-invalid' : '' }}" id="beneficiostitulo2" placeholder="Titulo" value="{{$Contenidos[12]->value}}" required>
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
                    @if(isset($Contenidos[13]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios2') ? ' is-invalid' : '' }}" name="beneficios2" id="beneficios2" rows="2" required>{{$Contenidos[13]->value}}</textarea>
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
                    @if(isset($Contenidos[14]->value))
                    <input type="text" name="beneficiostitulo3" class="form-control {{ $errors->has('beneficiostitulo3') ? ' is-invalid' : '' }}" id="beneficiostitulo3" placeholder="Titulo" value="{{$Contenidos[14]->value}}" required>
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
                    @if(isset($Contenidos[15]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios3') ? ' is-invalid' : '' }}" name="beneficios3" id="beneficios3" rows="2" required>{{$Contenidos[15]->value}}</textarea>
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
                    @if(isset($Contenidos[16]->value))
                    <input type="text" name="beneficiostitulo4" class="form-control {{ $errors->has('beneficiostitulo4') ? ' is-invalid' : '' }}" id="beneficiostitulo4" placeholder="Titulo" value="{{$Contenidos[16]->value}}" required>
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
                    @if(isset($Contenidos[17]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios4') ? ' is-invalid' : '' }}" name="beneficios4" id="beneficios4" rows="2" required>{{$Contenidos[17]->value}}</textarea>
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
        {{-- Texto Beneficios Cachorro END --}}
        {{-- Texto Beneficios Razas Pequeñas --}}
        <div class="modal fade" id="BeneficiosRazasModal" tabindex="-1" aria-labelledby="BeneficiosRazasModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="BeneficiosRazasModalLabel">Presentacion Adulto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="needs-validation" action="{{ route('smartbites.updatebeneficios') }}" method="post" enctype="multipart/form-data"  novalidate>
                @csrf
                <input type="hidden" name="page" value="smartbitesperro">
                <input type="hidden" name="section" value="beneficios">
                <input type="hidden" name="area" value="razapequeña">
                <div class="modal-body">
                  {{--<div class="mb-3">
                    <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
                    <input name="imagefile" class="form-control" type="file" id="formFile">
                  </div>--}}
                  <div class="mb-3">
                    <label for="beneficiostitulo1" class="form-label">Beneficio 1 titulo</label>
                    @if(isset($Contenidos[18]->value))
                    <input type="text" name="beneficiostitulo1" class="form-control {{ $errors->has('beneficiostitulo1') ? ' is-invalid' : '' }}" id="beneficiostitulo1" placeholder="Titulo" value="{{$Contenidos[18]->value}}" required>
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
                    @if(isset($Contenidos[19]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios1') ? ' is-invalid' : '' }}" name="beneficios1" id="beneficios1" rows="2" required>{{$Contenidos[19]->value}}</textarea>
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
                    @if(isset($Contenidos[20]->value))
                    <input type="text" name="beneficiostitulo2" class="form-control {{ $errors->has('beneficiostitulo2') ? ' is-invalid' : '' }}" id="beneficiostitulo2" placeholder="Titulo" value="{{$Contenidos[20]->value}}" required>
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
                    @if(isset($Contenidos[21]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios2') ? ' is-invalid' : '' }}" name="beneficios2" id="beneficios2" rows="2" required>{{$Contenidos[21]->value}}</textarea>
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
                    @if(isset($Contenidos[22]->value))
                    <input type="text" name="beneficiostitulo3" class="form-control {{ $errors->has('beneficiostitulo3') ? ' is-invalid' : '' }}" id="beneficiostitulo3" placeholder="Titulo" value="{{$Contenidos[22]->value}}" required>
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
                    @if(isset($Contenidos[23]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios3') ? ' is-invalid' : '' }}" name="beneficios3" id="beneficios3" rows="2" required>{{$Contenidos[23]->value}}</textarea>
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
                    @if(isset($Contenidos[24]->value))
                    <input type="text" name="beneficiostitulo4" class="form-control {{ $errors->has('beneficiostitulo4') ? ' is-invalid' : '' }}" id="beneficiostitulo4" placeholder="Titulo" value="{{$Contenidos[24]->value}}" required>
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
                    @if(isset($Contenidos[25]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios4') ? ' is-invalid' : '' }}" name="beneficios4" id="beneficios4" rows="2" required>{{$Contenidos[25]->value}}</textarea>
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
        {{-- Texto Beneficios Razas Pequeñas END --}}
        {{-- Texto Beneficios Adultos --}}
        <div class="modal fade" id="BeneficiosAdultoModal" tabindex="-1" aria-labelledby="BeneficiosAdultoModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="BeneficiosAdultoModalLabel">Presentacion Adulto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="needs-validation" action="{{ route('smartbites.updatebeneficios') }}" method="post" enctype="multipart/form-data"  novalidate>
                @csrf
                <input type="hidden" name="page" value="smartbitesperro">
                <input type="hidden" name="section" value="beneficios">
                <input type="hidden" name="area" value="adulto">
                <div class="modal-body">
                  {{--<div class="mb-3">
                    <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
                    <input name="imagefile" class="form-control" type="file" id="formFile">
                  </div>--}}
                  <div class="mb-3">
                    <label for="beneficiostitulo1" class="form-label">Beneficio 1 titulo</label>
                    @if(isset($Contenidos[26]->value))
                    <input type="text" name="beneficiostitulo1" class="form-control {{ $errors->has('beneficiostitulo1') ? ' is-invalid' : '' }}" id="beneficiostitulo1" placeholder="Titulo" value="{{$Contenidos[26]->value}}" required>
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
                    @if(isset($Contenidos[27]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios1') ? ' is-invalid' : '' }}" name="beneficios1" id="beneficios1" rows="2" required>{{$Contenidos[27]->value}}</textarea>
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
                    @if(isset($Contenidos[28]->value))
                    <input type="text" name="beneficiostitulo2" class="form-control {{ $errors->has('beneficiostitulo2') ? ' is-invalid' : '' }}" id="beneficiostitulo2" placeholder="Titulo" value="{{$Contenidos[28]->value}}" required>
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
                    @if(isset($Contenidos[29]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios2') ? ' is-invalid' : '' }}" name="beneficios2" id="beneficios2" rows="2" required>{{$Contenidos[29]->value}}</textarea>
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
                    @if(isset($Contenidos[30]->value))
                    <input type="text" name="beneficiostitulo3" class="form-control {{ $errors->has('beneficiostitulo3') ? ' is-invalid' : '' }}" id="beneficiostitulo3" placeholder="Titulo" value="{{$Contenidos[30]->value}}" required>
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
                    @if(isset($Contenidos[31]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios3') ? ' is-invalid' : '' }}" name="beneficios3" id="beneficios3" rows="2" required>{{$Contenidos[31]->value}}</textarea>
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
                    @if(isset($Contenidos[32]->value))
                    <input type="text" name="beneficiostitulo4" class="form-control {{ $errors->has('beneficiostitulo4') ? ' is-invalid' : '' }}" id="beneficiostitulo4" placeholder="Titulo" value="{{$Contenidos[32]->value}}" required>
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
                    @if(isset($Contenidos[33]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios4') ? ' is-invalid' : '' }}" name="beneficios4" id="beneficios4" rows="2" required>{{$Contenidos[33]->value}}</textarea>
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
        {{-- Texto Beneficios Adultos END --}}
        {{-- Texto Beneficios Senior --}}
        <div class="modal fade" id="BeneficiosSeniorModal" tabindex="-1" aria-labelledby="BeneficiosSeniorModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="BeneficiosSeniorModalLabel">Presentacion Adulto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="needs-validation" action="{{ route('smartbites.updatebeneficios') }}" method="post" enctype="multipart/form-data"  novalidate>
                @csrf
                <input type="hidden" name="page" value="smartbitesperro">
                <input type="hidden" name="section" value="beneficios">
                <input type="hidden" name="area" value="senior">
                <div class="modal-body">
                  {{--<div class="mb-3">
                    <label for="formFile" class="form-label">Carga tu imagen (archivos tipo png con transparencia)</label>
                    <input name="imagefile" class="form-control" type="file" id="formFile">
                  </div>--}}
                  <div class="mb-3">
                    <label for="beneficiostitulo1" class="form-label">Beneficio 1 titulo</label>
                    @if(isset($Contenidos[34]->value))
                    <input type="text" name="beneficiostitulo1" class="form-control {{ $errors->has('beneficiostitulo1') ? ' is-invalid' : '' }}" id="beneficiostitulo1" placeholder="Titulo" value="{{$Contenidos[34]->value}}" required>
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
                    @if(isset($Contenidos[35]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios1') ? ' is-invalid' : '' }}" name="beneficios1" id="beneficios1" rows="2" required>{{$Contenidos[35]->value}}</textarea>
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
                    @if(isset($Contenidos[36]->value))
                    <input type="text" name="beneficiostitulo2" class="form-control {{ $errors->has('beneficiostitulo2') ? ' is-invalid' : '' }}" id="beneficiostitulo2" placeholder="Titulo" value="{{$Contenidos[36]->value}}" required>
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
                    @if(isset($Contenidos[37]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios2') ? ' is-invalid' : '' }}" name="beneficios2" id="beneficios2" rows="2" required>{{$Contenidos[37]->value}}</textarea>
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
                    @if(isset($Contenidos[38]->value))
                    <input type="text" name="beneficiostitulo3" class="form-control {{ $errors->has('beneficiostitulo3') ? ' is-invalid' : '' }}" id="beneficiostitulo3" placeholder="Titulo" value="{{$Contenidos[38]->value}}" required>
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
                    @if(isset($Contenidos[39]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios3') ? ' is-invalid' : '' }}" name="beneficios3" id="beneficios3" rows="2" required>{{$Contenidos[39]->value}}</textarea>
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
                    @if(isset($Contenidos[40]->value))
                    <input type="text" name="beneficiostitulo4" class="form-control {{ $errors->has('beneficiostitulo4') ? ' is-invalid' : '' }}" id="beneficiostitulo4" placeholder="Titulo" value="{{$Contenidos[40]->value}}" required>
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
                    @if(isset($Contenidos[41]->value))
                    <textarea class="form-control  {{ $errors->has('beneficios4') ? ' is-invalid' : '' }}" name="beneficios4" id="beneficios4" rows="2" required>{{$Contenidos[41]->value}}</textarea>
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
        {{-- Texto Beneficios Senior END --}}

  </div>
</div>

@endsection
