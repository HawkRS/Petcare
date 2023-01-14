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
              <a href="{{ route('blog.edit', ['id' => $Post->id]) }} " class="btn btn-sm btn-outline-warning"><i class="fas fnt18 fa-pencil-alt"></i> Editar</a>
              <button type="button" name="button"  data-bs-toggle="modal" data-bs-target="PostModal" class="btn btn-sm btn-outline-danger fntB"><i class="fas fnt18 fa-trash-alt"></i> Eliminar</button>
              <a href="{{ route('blog.togglepublish', ['id' => $Post->id]) }}" class="btn btn-sm btn-outline-info">
              @if($Post->publicado == true)
                <i class="fas fa-eye-slash"></i> Despublicar
              @else
                <i class="fas fa-eye"></i> Publicar
              @endif
            </a>
            </div>
            <div class="clearfix">
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <p> <strong>Cuerpo:</strong> </p>
                <p>{{ $Post->body }}</p>
              </div>
              <div class="col-12 col-md-4">
                <strong>Autor:</strong> {{ $Post->Autor->name }}
              </div>
              <div class="col-12 col-md-4">
                <strong>Fuentes:</strong>
                @foreach($Post->HasSources as $Fuente)
                @if($loop->index > 0)
                |
                @endif
                {{ $Fuente->link }}
                @endforeach
              </div>
              <div class="col-12 col-md-4">
                <strong>Tags:</strong>
                @foreach($Post->HasTags as $Tags)
                @if($loop->index > 0)
                |
                @endif
                {{ $Tags->tag }}
                @endforeach
              </div>
            </div>


          </div>
          </div>
      </div>
    </div>


  </div>
</div>
{{-- DELETE POST --}}
<div class="modal fade" id="PostModal" tabindex="-1" role="dialog" aria-labelledby="PostModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="PostModalLabel">¿Seguro que deseas eliminar este Post?</h5>
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
</div>
{{-- END MODAL --}}


@endsection