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

        <div class="row justify-content-center">
          <div class="col-12 col-md-7">

            <div class="card table-responsive p-3">
              <div class="card-body">
                <div class="float-md-start">
                  <h4 class="card-title float-left">Editar usuario {{$Usuario->name}}</h4>
                </div>
                <div class="clearfix"> </div>
                <form class="needs-validation" action="{{ route('users.update', ['id' => $Usuario->id]) }}" method="post" novalidate>
                                    @csrf
                  <div class="row">
                    @include('users.partials.fields')
                  </div>

                  <div class="row justify-content-center">
                    <div class="col-12 col-md-3">
                      <div class="d-grid gap-2">
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
                      </div>
                    </div>
                    <div class="col-12 col-md-3">
                      <div class="d-grid gap-2">
                        <button type="submit" name="button" class="btn btn-primary fnt_white">Guardar</button>
                      </div>
                    </div>
                  </div>
                </form>


        	  </div>
        	</div>

        	</div>
        </div>

	</div>
</div>


@endsection