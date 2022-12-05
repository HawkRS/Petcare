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

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- Custom styles for this template-->
        <link href="css/app.css" rel="stylesheet">
    </head>
    <body class="container-fluid">
      <main class="row">
        <div class="container pt-5" style="/*border: 2px solid blue;*/">
          <div class="row justify-content-center">
            <div class="col-xs-12 col-md-6 col-xl-4">
              <div class="row justify-content-center card card-login mr-2 ml-2" style="/*border: 2px solid red;*/">
                <div class="col-12">
                  <img src="{{ asset('img/logo-vimifos-petcare-rojo.png') }}" class="mx-auto d-block mt-5 img-fluid" alt="Vimifos Petcare">
                </div>
                <div class="col-12 pt-5 text-center">
                  <h1 class="fnt_blue text-uppercase fntB">Bienvenidos</h1>
                  <span class="pt-5">Administrador Petcare</span>
                </div>
                <div class="col-12">
                  <form method="POST" action="{{ route('login') }}" class=" pt-5 pb-5">
                    @csrf

                    <div class="form-group row justify-content-center pt-2 pl-1 pr-1">
                      <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico</label>

                      <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row justify-content-center pt-2 pl-1 pr-1">
                      <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                      <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>

                {{--
                    <div class="form-group row justify-content-center pl-1 pr-1">
                      <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                          </label>
                        </div>
                      </div>
                    </div>
                --}}
                    <div class="form-group row justify-content-center pt-5 mb-5">
                      <div class="col-8">
                        <div class="d-grid gap-2 col-6 mx-auto">
                          <button type="submit" class="btn btn-danger fnt_white text-uppercase fntB">
                            entrar
                          </button>
                        </div>


                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
