@extends('layouts.dev')
@section('section', 'Encuentranos')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Encuentranos</h4>



                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card table-responsive p-3">
              <div class="card-body">
                <div class="float-md-start">
                  <h4 class="card-title float-left">Registros de tiendas</h4>
                  <p class="card-title-desc">Agregar editar o eliminar registros de cadenas o tiendas de nuestros distribuidores.</p>
                </div>
                <div class="float-md-end">
                  <button type="button" name="button"  data-bs-toggle="modal" data-bs-target="#Marker1Modal" class="float-right btn btn-primary">Agregar marcador</button>
                </div>
                <div class="clearfix">
                </div>

                <table id='MarkersTable'  class="table table-sm table-bordered table-striped dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                  <thead class="">
                    <tr class="fnt18 fnt_blue">
                      <th class="fntB">NOMBRE</th>
                      <th class="fntB">CATEGORIA</th>
                      <th class="fntB">ESTADO</th>
                      <th class="fntB">CIUDAD</th>
                      <th class="fntB">DIRECCION</th>
                      <th class="fntB">CODIGO POSTAL</th>
                      <th class="fntB">TELEFONO</th>
                      <th class="fntB">TELEFONO 2</th>
                      <th class="fntB">LATITUD</th>
                      <th class="fntB">LONGITUD</th>
                      <th class="fntB">FECHA DE ALTA</th>
                      <th class="fntB">ACCIONES</th>
                    </tr>
                  </thead>
                  <tbody>mdi-bookmark-remove
                    @foreach($marcadores as $marcador)
                    <td class="{{ $marcador->published == 0 ? 'text-danger' : '' }}" >
                      {{ $marcador->name }} @if($marcador->published == 0) <i class="mdi mdi-bookmark-remove"></i> @endif
                    </td>
                    <td class="{{ $marcador->published == 0 ? 'text-danger' : '' }}" >{{ $marcador->category }}</td>
                    <td class="{{ $marcador->published == 0 ? 'text-danger' : '' }}" >{{ $marcador->state }}</td>
                    <td class="{{ $marcador->published == 0 ? 'text-danger' : '' }}" >{{ $marcador->city }}</td>
                    <td class="{{ $marcador->published == 0 ? 'text-danger' : '' }}" >{{ $marcador->address }}</td>
                    <td class="{{ $marcador->published == 0 ? 'text-danger' : '' }}" >{{ $marcador->postal }}</td>
                    <td class="{{ $marcador->published == 0 ? 'text-danger' : '' }}" >{{ $marcador->phone }}</td>
                    <td class="{{ $marcador->published == 0 ? 'text-danger' : '' }}" >{{ $marcador->phone2 }}</td>
                    <td class="{{ $marcador->published == 0 ? 'text-danger' : '' }}" >{{ $marcador->lat }}</td>
                    <td class="{{ $marcador->published == 0 ? 'text-danger' : '' }}" >{{ $marcador->lng }}</td>
                    <td class="{{ $marcador->published == 0 ? 'text-danger' : '' }}" >{{ $marcador->date }}</td>
                    <td>
                      <a href="{{ route('findus.edit', ['id' => $marcador->id]) }}" class="btn btn-sm btn-outline-warning fntB"><i class="fas fnt18 fa-pencil-alt"></i></a>
                      <button type="button" name="button"  data-bs-toggle="modal" data-bs-target="#Marcador{{$marcador->id}}Modal" class="btn btn-sm btn-outline-danger fntB"><i class="fas fnt18 fa-trash-alt"></i></button>

                    </td>
                    <!-- Logout Modal-->
                  <div class="modal fade" id="Marcador{{$marcador->id}}Modal" tabindex="-1" role="dialog" aria-labelledby="Marcador{{$marcador->id}}ModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="Marcador{{$marcador->id}}ModalLabel">¿Seguro que deseas eliminar este marcador?</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>{{$marcador->name}}</p>
                          <p>Una vez eliminado no hay forma de recuperarlo.</p>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                          <form class="" method="POST" action="{{ route('findus.delete', ['id' => $marcador->id]) }}">
                            @csrf
                                <button type="submit" class="btn btn-danger">
                                  Borrar
                                </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>{{-- END MODAL --}}
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
              </div>
          </div>
        </div>

    </div>
  </div>

  {{-- MODAL ADD MARKER --}}
  <div class="modal fade" id="Marker1Modal" tabindex="-1" aria-labelledby="Marker1ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="Marker1ModalLabel">Crear nueva ubicacion</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="needs-validation" action="{{ route('findus.store') }}" method="post" novalidate>
          @csrf
          <div class="modal-body">
            @include('findus.partials.markerfields')
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