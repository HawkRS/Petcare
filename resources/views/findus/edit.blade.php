@extends('layouts.app')
@section('section', 'Encuentranos')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Encuéntranos</h4>


                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h6 class="">Editar marcador</h6>
                <form class="needs-validation" action="{{ route('findus.update', ['id' => $MarcadorEdit->id]) }}" method="post" enctype="multipart/form-data"  novalidate>
                  @csrf
                  <input type="hidden" name="bannertype" value="1">
                  <div class="row justify-content-center">

                    <div class="col-12 col-md-8">
                      @include('findus.partials.markerfields')
                    </div>

                    <div class="col-12 col-md-5">
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
  <!-- end page title -->
@endsection