@extends('layouts.dev')
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
                  <button type="button" name="button"  data-bs-toggle="modal" data-bs-target="#Marker1Modal" class="float-right btn btn-primary">Agregar editor</button>
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
                      		<button type="button" name="button"  data-bs-toggle="modal" data-bs-target="#Users{{$User->id}}Modal" class="btn btn-sm btn-outline-danger fntB"><i class="fas fnt18 fa-trash-alt"></i></button>
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

@endsection