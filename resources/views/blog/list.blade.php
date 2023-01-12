@extends('layouts.app')
@section('pagina', 'Blog')

@section('content')

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h2 class="mb-sm-0">Blog</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card table-responsive p-3">
          <div class="card-body">
            <div class="float-md-start">
              <h4 class="card-title float-left">Entradas del blog</h4>
              <p class="card-title-desc">Agregar o editar entradas al blog publico de Vimifos Petcare.</p>
            </div>
            <div class="float-md-end">
              <a href="{{ route('blog.create') }}" class="float-right btn btn-primary">Agregar entrada</a>
            </div>
            <div class="clearfix">
            </div>

            <table id='BlogTable'  class="table table-sm table-bordered table-striped dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
              <thead class="">
                <tr class="fnt18 fnt_blue">
                  <th class="fntB">SLUG</th>
                  <th class="fntB">TITULO</th>
                  <th class="fntB">CUERPO</th>
                  <th class="fntB">AUTOR</th>
                  <th class="fntB">BANNER</th>
                  <th class="fntB">ESTATUS</th>
                  <th class="fntB">ACCIONES</th>
                </tr>
              </thead>
              <tbody>
                @foreach($Posts as $Post)

                <td class="" >{{ $Post->slug }}</td>
                <td class="" >{{ $Post->title }}</td>
                <td class="" >{{ Str::limit($Post->body, 50) }}</td>
                <td class="" >{{ $Post->Autor->name }}</td>
                <td class="" >{{ $Post->banner }}</td>
                <td>
                  @if($Post->publicado == true)
                    Publicado
                  @else
                    No publicado
                  @endif
                </td>
                <td>
                  <a href="{{ route('blog.show', ['id' => $Post->id]) }}" class="btn btn-sm btn-outline-info fntB"><i class="fas fnt18 fa-eye"></i></a>
                  <a href="{{ route('blog.edit', ['id' => $Post->id]) }}" class="btn btn-sm btn-outline-warning fntB"><i class="fas fnt18 fa-pencil-alt"></i></a>
                  <button type="button" name="button"  data-bs-toggle="modal" data-bs-target="#Marcador{{$Post->id}}Modal" class="btn btn-sm btn-outline-danger fntB"><i class="fas fnt18 fa-trash-alt"></i></button>

                </td>
                <!-- Logout Modal-->
                {{-- DELETE POST --}}
              <div class="modal fade" id="Marcador{{$Post->id}}Modal" tabindex="-1" role="dialog" aria-labelledby="Marcador{{$Post->id}}ModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="Marcador{{$Post->id}}ModalLabel">¿Seguro que deseas eliminar este Post?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>{{$Post->name}}</p>
                      <p>Una vez eliminado no hay forma de recuperarlo.</p>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                      <form class="" method="POST" action="{{ route('blog.delete', ['id' => $Post->id]) }}">
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

{{-- MODAL ADD POST --}}
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
{{-- END ADD POST --}}

@endsection