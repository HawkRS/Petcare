@extends('layouts.app')
@section('pagina', 'Dashboard')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h2 class="mb-sm-0">Usuarios</h2>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-12">

            <div class="card table-responsive p-3">
              <div class="card-body">
                <div class="float-md-start">
                  <h4 class="card-title float-left">Editores de la plataforma</h4>
                  <p class="card-title-desc">Agregar editar o eliminar editores para la plaforma.</p>
                </div>
                <div class="float-md-end">
                  <button type="button" name="button"  data-bs-toggle="modal" data-bs-target="#AddUserModal" class="float-right btn btn-primary">Agregar editor</button>
                </div>
                <div class="clearfix"></div>

                <table class="table table-sm table-bordered table-striped dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                	<thead>
                		<tr class="fnt18 fnt_blue">
                			<th class="fntB">Nombre</th>
                			<th class="fntB">Email</th>
                			<th class="fntB">Posición</th>
                			<th class="fntB">Acciones</th>
                		</tr>
                	</thead>
                	<tbody>
                		@foreach($Users as $User)
                		<tr>
                			<td>{{ $User->name }}</td>
                			<td>{{ $User->email }}</td>
                			@if($User->type == 0)
                				<td>Super Admin</td>
                			@elseif($User->type == 1)
                				<td>Admin</td>
                			@else
                				<td>Editor</td>
                			@endif
                			<td>
                			<a href="{{ route('users.edit', ['id' => $User->id]) }}" class="btn btn-sm btn-outline-warning fntB"><i class="fas fnt18 fa-pencil-alt"></i></a>
                      		<button type="button" name="button"  data-bs-toggle="modal" data-bs-target="#DeleteUser{{$User->id}}Modal" class="btn btn-sm btn-outline-danger fntB"><i class="fas fnt18 fa-trash-alt"></i></button>
                			</td>
                		</tr>
                    {{-- DELETE MODAL  --}}
                                      <div class="modal fade" id="DeleteUser{{$User->id}}Modal" tabindex="-1" role="dialog" aria-labelledby="DeleteUser{{$User->id}}ModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="DeleteUser{{$User->id}}ModalLabel">¿Seguro que deseas eliminar este usuario?</h5>
                                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              <p>{{$User->name}}</p>
                                              <p>Una vez eliminado no hay forma de recuperarlo.</p>
                                            </div>
                                            <div class="modal-footer">
                                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                              <form class="" method="POST" action="{{ route('users.delete', ['id' => $User->id]) }}">
                                                @csrf
                                                    <button type="submit" class="btn btn-danger">
                                                      Borrar
                                                    </button>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>{{-- END MODAL --}}
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
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="AddUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="AddUserModalLabel">Crear nuevo usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('users.add') }}" method="post" novalidate>
        @csrf
        <div class="modal-body">
          @include('users.partials.fields')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection