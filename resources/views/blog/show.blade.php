@extends('layouts.app')
@section('pagina', 'Blog')

@section('content')

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box align-items-center justify-content-between">
          <div class="float-md-start">
            <h2 class="mb-sm-0">Blog - ver entrada</h2>
          </div>
          <div class="float-md-end">
            <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">Volver</a>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card table-responsive p-3">
          <div class="card-body">
            <div class="float-md-start">

              <h4 class="card-title float-left"> <strong>Titulo:</strong> {{ $Post->title }}</h4>
              <h4 class="card-title float-left"> <strong>Slug:</strong> {{ $Post->slug }}</h4>

              {{--<p class="card-title-desc">Agregar o editar entradas al blog publico de Vimifos Petcare.</p>--}}
            </div>
            <div class="float-md-end">
              <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fnt18 fa-pencil-alt"></i> Editar</a>
              <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fnt18 fa-trash-alt"></i> Eliminar</a>
              @if($Post->publicado == true)
              <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye-slash"></i> Despublicar</a>
              @else
              <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i> Publicar</a>
              @endif
            </div>
            <div class="clearfix">
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <p> <strong>Cuerpo:</strong> </p>
                <p>{{ $Post->body }}</p>
              </div>
              <div class="col-2">
                <strong>Autor:</strong> {{ $Post->Autor->name }}
              </div>
            </div>


          </div>
          </div>
      </div>
    </div>


  </div>
</div>



@endsection