@extends('layouts.app')
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
                      <th class="fntB">ACCIONES</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($marcadores as $marcador)
                    <td>{{ $marcador->name }}</td>
                    <td>{{ $marcador->category }}</td>
                    <td>{{ $marcador->state }}</td>
                    <td>{{ $marcador->city }}</td>
                    <td>{{ $marcador->address }}</td>
                    <td>{{ $marcador->postal }}</td>
                    <td>{{ $marcador->phone }}</td>
                    <td>{{ $marcador->phone2 }}</td>
                    <td>{{ $marcador->lat }}</td>
                    <td>{{ $marcador->lng }}</td>
                    <td>
                      <a href="{{ route('findus.edit', ['id' => $marcador->id]) }}" class="btn btn-sm btn-warning fntB"><i class="fas fnt18 fa-pencil-alt"></i></a>
                      <a href="#" class="btn btn-sm btn-danger fntB"><i class="fas fnt18 fa-trash-alt"></i></a>
                    </td>
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
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end page title -->
@endsection