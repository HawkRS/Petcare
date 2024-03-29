@extends('layouts.app')
@section('pagina', 'Blogedit')
@section('section', 'Blogedit')
@section('tinymce')
  <script src="https://cdn.tiny.cloud/1/jd9diezu5sooas44kostlfthofj7mv2qpng0adjvqef3lbhm/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
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

            <form class="needs-validation" action="{{ route('blog.update', ['id'=>$PostEdit->id]) }}" method="post" enctype="multipart/form-data"  novalidate>
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