@extends('layouts.app')
@section('pagina', 'Encuentranos')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Encuentranos</h4>



                </div>
            </div>
        </div>
        <div class="row">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-8">
                      <div class="card">
                          <div class="card-header">{{ __('Dashboard') }}</div>

                          <div class="card-body">
                              @if (session('status'))
                                  <div class="alert alert-success" role="alert">
                                      {{ session('status') }}
                                  </div>
                              @endif

                              {{ __('You are logged in!') }}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>
  <!-- end page title -->
@endsection