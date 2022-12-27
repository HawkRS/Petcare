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

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Styles -->
      <link href="{{asset('libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{asset('libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{asset('libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/upzet.css') }}" rel="stylesheet">

      <!-- Bootstrap Css -->
      <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
      <!-- App Css-->
      <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

<body data-topbar="colored" id="@yield('section')" class="">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


          <header id="page-topbar">
            <div class="navbar-header">
              <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box text-center">
                  <a href="{{ url('/') }}" class="logo logo-dark">
                    <span class="logo-sm">
                      <img src="{{ asset('img/nutricion-animal.png') }}" alt="logo-sm-dark" height="22">
                    </span>


                    <span class="logo-lg">
                      <img src="{{ asset('img/nutricion-animal.png') }}" alt="logo-dark" height="24">
                    </span>
                  </a>

                  <a href="{{ url('/') }}" class="logo logo-light">
                    <span class="logo-sm">
                      <img src="{{ asset('img/nutricion-animal.png') }}" alt="logo-sm-light" height="52">
                    </span>
                    <span class="logo-lg">
                      <img src="{{ asset('img/logo-vimifos-petcare-blanco.png') }}" alt="logo-light" height="54">
                    </span>
                  </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                  <i class="ri-menu-2-line align-middle"></i>
                </button>


              </div>

                        <div class="d-flex">

                          <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-search-line"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                          aria-labelledby="page-header-search-dropdown">

                          <form class="p-3">
                            <div class="mb-3 m-0">
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ...">
                                <div class="input-group-append">
                                  <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>



                <div class="dropdown d-inline-block user-dropdown">
                  <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="rounded-circle header-profile-user" src="{{ asset('img/avatar-1.jpg') }}"
                  alt="Header Avatar">
                  <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name }}</span>
                  <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <!-- item-->
                  <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Usuarios</a>
                  {{--<a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>--}}
                  {{--<a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i class="ri-settings-2-line align-middle me-1"></i> Settings</a>--}}
                  {{--<a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i> Lock screen</a>--}}
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
                </div>
                </div>

                </div>

              </div>
          </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('landing.page') }}" class="waves-effect">
                                    <i class="mdi mdi-home-variant-outline"></i>
                                    <span>Home</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('map.index') }}" class=" waves-effect">
                                    <i class="mdi mdi-map-marker"></i>
                                    <span>Encuéntranos</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fas fa-boxes"></i>
                                    <span>Productos</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">

                                    <li><a href="javascript: void(0);" class="has-arrow">Smart Bites Perro</a>
                                        <ul class="sub-menu" aria-expanded="false">
                                            <li><a href="{{ route('smartbites.banners') }}">Banner</a></li>
                                            <li><a href="{{ route('smartbites.presentaciones') }}">Presentaciones</a></li>
                                            <li><a href="{{ route('smartbites.beneficios') }}">Beneficios</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('smartbitesgato.page') }}">Smart Bites Gato</a></li>
                                    <li><a href="{{ route('titan.page') }}">Titan</a></li>
                                    <li><a href="{{ route('rocko.page') }}">Rocko</a></li>
                                </ul>
                            </li>
                            @if( Auth::user()->type == 0 || Auth::user()->type == 1)
                            <li>
                                <a href="{{ route('users.index') }}" class=" waves-effect">
                                    <i class="fas fa-users"></i>
                                    <span>Usuarios</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
              {{-- END LEFT MENU --}}
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                        <!-- start page title -->
                        @yield('content')
                        <!-- end page title -->
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Petcare.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                     Hecho con <i class="mdi mdi-heart text-danger"></i> por Vimifos
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!-- JAVASCRIPT -->
        <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

        <!-- apexcharts js -->
        <!--script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script-->

        <!-- jquery.vectormap map -->
        <!--script src="{{ asset('libs/jqvmap/jquery.vmap.min.js') }}"></script-->
        <!--script src="{{ asset('libs/jqvmap/maps/jquery.vmap.usa.js') }}"></script-->

        <!--script src="{{ asset('js/pages/dashboard.init.js') }}"></script-->


        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/upzet.js') }}"></script>

    </body>
</html>
