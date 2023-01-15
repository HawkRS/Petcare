@extends('layouts.app')
@section('pagina', 'Ver')

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
              <h4 class="card-title float-left"> <strong>Link del artículo:</strong> {{ $Post->slug }}</h4>

              {{--<p class="card-title-desc">Agregar o editar entradas al blog publico de Vimifos Petcare.</p>--}}
            </div>
            <div class="float-md-end">
              <a href="{{ route('blog.edit', ['id' => $Post->id]) }} " class="btn btn-sm btn-outline-warning"><i class="fas fnt14 fa-pencil-alt"></i> Editar</a>
              <button type="button" name="button"  data-bs-toggle="modal" data-bs-target="#PostModal" class="btn btn-sm btn-outline-danger fntB"><i class="fas fnt14 fa-trash-alt"></i> Eliminar</button>

              <a href="{{ route('blog.togglepublish', ['id' => $Post->id]) }}" class="btn btn-sm btn-outline-info">
              @if($Post->publicado == true)
                <i class="fas fnt14 fa-eye-slash"></i> Despublicar
              @else
                <i class="fas fnt14 fa-eye"></i> Publicar
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
              <div class="col-12">
                <strong>Autor:</strong> {{ $Post->Autor->name }}
              </div>
              <div class="col-12">
                <strong>Fuentes:</strong>
                @foreach($Post->HasSources as $Fuente)
                @if($loop->index > 0)
                |
                @endif
                {{ $Fuente->link }} <a class="btn btn-sm btn-outline-danger pn-1" href="{{ route('blog.deletesource' , ['id' => $Fuente->id, 'postid' => $Post->id]) }}"><i class="fas fnt8 fa-trash"></i> </a>
                @endforeach
                <div class="col-12">
                  <button type="button" name="button"  data-bs-toggle="modal" data-bs-target="#FuenteModal" class="btn btn-sm btn-primary fntB"><i class="fas fnt14 fa-quote-left"></i> Agregar Fuente</button>
                </div>
                @error('fuente')
                  <div class="invalid-feedback d-block">
                    <div class="alert alert-danger">
                      {{ $errors->first('fuente') }}
                    </div>
                  </div>
                @enderror
              </div>
              <div class="col-12">
                <strong>Tags:</strong>
                @foreach($Post->HasTags as $Tags)
                @if($loop->index > 0)
                |
                @endif
                {{ $Tags->tag }} <a class="btn btn-sm btn-outline-danger pn-1" href="{{ route('blog.deletetag' , ['id' => $Tags->id, 'postid' => $Post->id]) }}"><i class="fas fnt8 fa-trash"></i> </a>
                @endforeach
                <div class="col-12">
                  <button type="button" name="button"  data-bs-toggle="modal" data-bs-target="#TagModal" class="btn btn-sm btn-primary fntB"><i class="fas fnt14 fa-tag"></i> Agregar Tag</button>
                </div>
                @error('etiqueta')
                  <div class="invalid-feedback d-block">
                    <div class="alert alert-danger">
                      {{ $errors->first('etiqueta') }}
                    </div>
                  </div>
                @enderror
              </div>
            </div>


          </div>
          </div>
      </div>
    </div>


  </div>
</div>
{{-- DELETE POST --}}
<div class="modal fade" id="PostModal" tabindex="-1"  tabindex="-1" aria-labelledby="PostModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="PostModalLabel">¿Seguro que deseas eliminar este Post?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>{{$Post->name}}</p>
        <p>Una vez eliminado no hay forma de recuperarlo.</p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
{{-- FUENTE POST --}}
<div class="modal fade" id="FuenteModal" tabindex="-1" aria-labelledby="FuenteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="FuenteModalLabel">Escribe la fuente que deseas añadir</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('blog.addsource', ['id' => $Post->id]) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="fuente" class="form-label">Fuente</label>
            <input name="fuente" class="form-control" type="text" id="fuente" placeholder="Escribe el link de la fuente">
          </div>
          @error('fuente')
            <div class="invalid-feedback d-block">
              {{ $errors->first('fuente') }}
            </div>
          @enderror
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- END FUENTE MODAL --}}
{{-- TAG POST --}}
<div class="modal fade" id="TagModal" tabindex="-1" aria-labelledby="TagModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="TagModalLabel">Escribe la etiqueta que deseas añadir</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="{{ route('blog.addtag', ['id' => $Post->id]) }}" method="post" enctype="multipart/form-data"  novalidate>
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="etiqueta" class="form-label">Etiqueta</label>
            <input name="etiqueta" class="form-control" type="text" id="etiqueta" placeholder="Escribe el link de la etiqueta">
          </div>
          @error('etiqueta')
            <div class="invalid-feedback d-block">
              {{ $errors->first('etiqueta') }}
            </div>
          @enderror
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- END TAG MODAL --}}


@endsection