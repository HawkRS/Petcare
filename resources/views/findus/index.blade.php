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
                <h4 class="card-title">Registros de tiendas</h4>
                <p class="card-title-desc">Agregar editar o eliminar registros de cadenas o tiendas de nuestros distribuidores.
                </p>

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
  <!-- end page title -->
@endsection