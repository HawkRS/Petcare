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
            <h2 class="mb-sm-0">Blog - Editar entrada</h2>
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
              <h4 class="card-title float-left">Entradas del blog</h4>
            </div>
            <div class="clearfix">
            </div>

            <form class="needs-validation" action="{{ route('blog.update', ['id'=>$PostEdit->id]) }}" method="post" novalidate>
              @csrf
                @include('blog.partials.fields')
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

          </div>
          </div>
      </div>
    </div>


  </div>
</div>



@endsection