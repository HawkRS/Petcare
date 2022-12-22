<!DOCTYPE html>
<html lang="es_MX" dir="ltr">
    <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Vimifos Petcare - Admin</title>

      {{-- <!-- Inicio meta etiquetas favicon --> --}}
      <meta name="msapplication-TileColor" content="#ffffff" />
      <meta name="msapplication-TileImage" content="{{ asset('img/favicon/ms-icon-144x144.png') }}" />
      <meta name="theme-color" content="#ffffff" />
      <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}" />
      <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}" />
      <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}" />
      <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}" />
      <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}" />
      <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}" />
      <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}" />
      <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}" />
      <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}" />
      <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/favicon/android-icon-192x192.png') }}" />
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}" />
      <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }}" />
      <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}" />
      <link rel="manifest" href="{{ asset('img/favicon/manifest.json') }}" />

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Styles -->
      <link href="libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
      <link href="libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
      <link href="libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/upzet.css') }}" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <!-- Bootstrap Css -->
      <link href="css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="css/icons.min.css" rel="stylesheet" type="text/css" />
      <!-- App Css-->
    </head>

  <body class="bg-pattern">
    <div class="bg-overlay"></div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="">
                                <div class="text-center">
                                    <a href="index.html" class="">
                                        <img src="{{ asset('img/logo-vimifos-petcare-rojo.png') }}" alt="" height="65" class="auth-logo logo-dark mx-auto">
                                        <img src="{{ asset('img/logo-vimifos-petcare-rojo.png') }}" alt="" height="65" class="auth-logo logo-light mx-auto">
                                    </a>
                                </div>
                                <!-- end row -->
                                <h4 class="font-size-20 fnt_terciary mt-2 text-center mb-5">¡ Bienvenidos al Administrador Petcare !</h4>
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                  @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label" for="email">Correo electrónico</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="userpassword">Password</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customControlInline">
                                                        <label class="form-label" class="form-check-label" for="customControlInline">Recúerdame</label>
                                                    </div>
                                                </div>
                                                {{--<div class="col-7">
                                                    <div class="text-md-end mt-3 mt-md-0">
                                                        <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i>¿Olvidaste tu contaseña?</a>
                                                    </div>
                                                </div>--}}
                                            </div>
                                            <div class="d-grid mt-4">
                                                <button class="btn btn-danger waves-effect waves-light" type="submit">Entrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        {{--<p class="text-white-50">Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Register </a> </p>--}}
                        <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> Petcare. Hecho con <i class="mdi mdi-heart text-danger"></i> por Vimifos</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end Account pages -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('js/pages/dashboard.init.js') }}"></script>


    {{-- <script src="{{ asset('js/app.js') }}"></script>--}}
    <script src="{{ asset('js/upzet.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
