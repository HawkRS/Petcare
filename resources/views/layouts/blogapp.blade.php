<?php
$temp 		= $_SERVER["REQUEST_URI"];
/*CAPTCHA*/

define('SITE_KEY','6Lfvsi8fAAAAALW8RZBFoKOKkUTmYwuT5cuZJ80c');

define('SECRET_KEY','6Lfvsi8fAAAAAH6CsCJJXTyVUxb_9dKo8GiObhbX');

/*TWITTER*/

define('USERNAME_TWITTER','@RED_SOCIAL');
$title 							= "Blog";
$description 					= "";
$key 							= "";
$fec_modificacion 				= "";
$url 							= "";
$url_mobil 						= 'inicio-movil';
$id 							= 1;
$header_position 				= 'fixed-top';// fixed-top | sticky-top
$header_version 				= 1;//1 = Sin fondo inicial | 2 = Con fondo
$header_logo_format 			= 'png';// png | svg
$header_icon_a 					= 'c-blanco h-c-rojo-1';
$header_icon_i 					= 'c-negro h-c-blanco';
$header_icon_a_tienda 			= 'c-blanco h-c-rojo-1';
$header_icon_i_tienda 			= 'c-azul-1 h-c-blanco';
$header_mobile_icon_a_tienda 	= 'c-blanco h-c-rojo-1';
$header_mobile_icon_i_tienda 	= 'c-azul-1 h-c-blanco';
$footer_top 					= 'bg-azul-5';
$footer_bottom 					= 'bg-azul-1';
$footer_icon_a 					= 'c-blanco h-c-rojo-1';
$footer_icon_i 					= 'c-azul-1 h-c-blanco';
define('TEMPLATES_HEAD','templates/head.php');
define('TEMPLATES_HEADER','templates/header.php');
define('TEMPLATES_FOOTER','templates/footer.php');
define('TEMPLATES_PRELOADER','templates/preloader.php');
define('TEMPLATES_API_FACEBOOK','templates/api-facebook.php');
define('JS_APP','js/app.js');
define('RUTA_CONTROLLER_DIR_DEFAULT','Controller.php');
define('RUTA_CONTROLLER_DIR','core/controllers');
define('RUTA_ERROR_DIR','core/controllers/error404Controller.php');
define('RUTA_DEFAULT_DIR','core/controllers/inicioController.php');
define('WEBSITE','Vimifos Petcare');
define('COPYRIGHT','Copyright &copy; ' . date('Y',time()) . ' nombre de la web.');
define('URL','https://vimifospetcare.com/');
define('URL_FRONT','https://vimifospetcare.com/');
define('URL_SIN_DIAGONAL','https://vimifospetcare.com');
define('DOMINIO','vimifospetcare.com');


 ?>

<!doctype html>

<html lang="es">

<head>
	<base href="<?php echo URL_SIN_DIAGONAL ?>">
	<link rel="canonical" href="<?php echo URL_SIN_DIAGONAL . $temp; ?>" />
	<link rel="alternate" href="<?php echo URL_SIN_DIAGONAL . $temp; ?>" hreflang="es-mx" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="es-MX" http-equiv="content-language"/>
	<title><?php echo WEBSITE.' :: '.$title; ?></title>
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $key; ?>">
	<meta name="author" content="Iridizen">
    <!-- Inicio meta etiquetas SEO -->
    <meta name="AdsBot-Google" content="index, follow" />
	<meta name="keyphrases" content="<?php echo $key; ?>"/>
	<meta name="generator" content="<?php echo $description; ?>"/>
    <meta name="<?php echo $description; ?>" content="<?php echo URL_SIN_DIAGONAL . $temp; ?>"/>
    <meta name="classification" content="<?php echo $description; ?>"/>
	<meta name="subject" content="<?php echo $description; ?>"/>
	<meta name="googlebot" content="index, follow" />
    <meta name="robots" content="index, follow"/>
    <meta name="geo.region" content="MX" />
    <meta name="geo.placename" content="Mexico"/>
    <meta name="geo.region" content="Mexico"/>
    <meta name="mobile-web-app-capable" content="yes"/>

    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <meta name="distribution" content="global"/>

    <meta name="revisit-after" content="1 days"/>

    <meta name="referrer" content="origin"/>

    <!-- Fin meta etiquetas SEO -->

    <!-- Inicio meta etiquetas twitter -->

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:site" content="<?php echo USERNAME_TWITTER; ?>" />

	<meta name="twitter:title" content="<?php echo $title; ?>" />

    <meta name="twitter:description" content="<?php echo $description; ?>" />

    <meta name="twitter:image" content="<?php echo URL; ?>img/logo-head.jpg" />

	<!-- Fin meta etiquetas twitter -->

    <!-- Inicio meta etiquetas facebook -->

    <meta name="facebook-domain-verification" content="5hnrc45yal6bq79d00w5bafvum4a6y" />

    <meta property="og:locale" content="es_MX" />

	<meta property="og:type" content="website" />

	<meta property="og:title" content="<?php echo $title; ?>" />

	<meta property="og:description" content="<?php echo $description; ?>" />

	<meta property="fb:app_id" content=""/>

	<meta property="fb:pages" content="" />

	<meta property="og:updated_time" content="<?php echo $fec_modificacion; ?>">

	<meta property="og:site_name" content="<?php echo WEBSITE; ?>" />

	<meta property="og:url" content="<?php echo URL.$url; ?>" />

	<meta property="og:image" content="<?php echo URL; ?>img/logo-head.jpg" />

	<meta property="og:image:type" content="image/jpeg" />

	<meta property="og:image:width" content="350" />

	<meta property="og:image:height" content="350" />

	<meta property="og:image:alt" content="<?php echo WEBSITE.' :: '.$title; ?>" />

	<!-- Fin meta etiquetas facebook -->

	<!-- Inicio meta etiquetas favicon -->

	<meta name="msapplication-TileColor" content="#ffffff" />

	<meta name="msapplication-TileImage" content="<?php echo URL; ?>img/favicon/ms-icon-144x144.png" />

	<meta name="theme-color" content="#ffffff" />

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo URL; ?>img/favicon/apple-icon-57x57.png" />

	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo URL; ?>img/favicon/apple-icon-60x60.png" />

	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL; ?>img/favicon/apple-icon-72x72.png" />

	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL; ?>img/favicon/apple-icon-76x76.png" />

	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL; ?>img/favicon/apple-icon-114x114.png" />

	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo URL; ?>img/favicon/apple-icon-120x120.png" />

	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo URL; ?>img/favicon/apple-icon-144x144.png" />

	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo URL; ?>img/favicon/apple-icon-152x152.png" />

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL; ?>img/favicon/apple-icon-180x180.png" />

	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo URL; ?>img/favicon/android-icon-192x192.png" />

	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL; ?>img/favicon/favicon-32x32.png" />

	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo URL; ?>img/favicon/favicon-96x96.png" />

	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL; ?>img/favicon/favicon-16x16.png" />

	<link rel="manifest" href="<?php echo URL; ?>img/favicon/manifest.json" />

	<!-- Fin meta etiquetas favicon -->

	<link rel="preconnect" href="https://www.gstatic.com">

	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="preconnect" href="https://maps.googleapis.com">

	<link rel="preconnect" href="https://maps.gstatic.com">

	<!-- Inicio Microdata -->

	<!-- Fin Microdata -->

	<!-- Meta Pixel Code -->


  <link rel="preload stylesheet" href="{{ asset('css/blog.css')}}" as="style" type="text/css" crossorigin="anonymous">


  <script>

          let url_global 				= "<?php echo URL; ?>";

          let url_mobil 				= "<?php echo $url_mobil; ?>";

          let header_icon_a 			= "<?php echo $header_icon_a; ?>";

          let header_icon_i 			= "<?php echo $header_icon_i; ?>";

          let header_icon_a_tienda 	= "<?php echo $header_icon_a_tienda; ?>";

          let header_icon_i_tienda 	= "<?php echo $header_icon_i_tienda; ?>";

      </script>

  <script defer src="<?php echo URL.JS_APP ?>"></script>

  <script async src="<?php echo URL; ?>js/lottie-player.js"></script>



	<script>

		!function(f,b,e,v,n,t,s)

		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

		n.callMethod.apply(n,arguments):n.queue.push(arguments)};

		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

		n.queue=[];t=b.createElement(e);t.async=!0;

		t.src=v;s=b.getElementsByTagName(e)[0];

		s.parentNode.insertBefore(t,s)}(window, document,'script',

		'https://connect.facebook.net/en_US/fbevents.js');

		fbq('init', '3164414800494226');

		fbq('track', 'PageView');

	</script>

	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=3164414800494226&ev=PageView&noscript=1"/></noscript>

	<!-- End Meta Pixel Code -->

	<!-- Global site tag (gtag.js) - Google Analytics -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-195866232-1"></script>

	<script>

	  window.dataLayer = window.dataLayer || [];

	  function gtag(){dataLayer.push(arguments);}

	  gtag('js', new Date());



	  gtag('config', 'UA-195866232-1');

	</script>

	<script type="text/javascript">

		document.addEventListener("DOMContentLoaded", function() {

			var lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazy-background"));

			if ("IntersectionObserver" in window) {

			    let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {

			      entries.forEach(function(entry) {

			        if (entry.isIntersecting) {

			          entry.target.classList.add("visible");

			          lazyBackgroundObserver.unobserve(entry.target);

			        }

			      });

			    });

			    lazyBackgrounds.forEach(function(lazyBackground) {

			      lazyBackgroundObserver.observe(lazyBackground);

			    });

			}

		});

	</script>
	<script async src="<?php echo URL; ?>js/lazysizes.min.js"></script>
	<script async src="<?php echo URL; ?>js/modernizr-custom.js"></script>
	<script src="<?php echo URL; ?>js/jquery.min.js"></script>
</head>

  	<body id="blogpage" class="ov-x-h">
      {{-- HEADER --}}
      <div id="header" class="header-v<?php echo $header_version.($id == 1 || $id == 2 || $id == 4 ? ' header-home ' : ' ').$header_position; ?>">

      <div id="top-header" class="<?php echo ($header_version == 1 ? 'bg-transparent' : 'bg-white'); ?>">

        <div class="container-fluid ps-md-4 pe-md-4 ps-lg-5 pe-lg-5">

          <div class="row d-flex align-items-center">

            <div class="col-8 col-md-4 block-1">

              <div id="gap-brand" class="gap-md-3 gap-xl-4 d-grid d-md-flex justify-content-md-start">

                <a rel="noopener" class="navbar-brand" href="<?php echo URL; ?>">

            <?php if($header_version == 1){

                    if($id == 1 || $id == 2 || $id == 4){

                      echo('<lottie-player id="logo-header-blanco-v2" class="d-block" src="'.URL.'img/lottiefiles/logo-vimifos-petcare-blanco.json" background="transparent" speed="1" loop autoplay></lottie-player>');

                      echo('<lottie-player id="logo-header-rojo-v2" class="d-none" src="'.URL.'img/lottiefiles/logo-vimifos-petcare-rojo.json" background="transparent" speed="1" loop autoplay></lottie-player>');

                    }else{

                            echo('<lottie-player id="logo-header-blanco-v2" src="'.URL.'img/lottiefiles/logo-vimifos-petcare-blanco.json" background="transparent" speed="1" loop autoplay></lottie-player>');

                         }

                  }else{

                          echo('<lottie-player id="logo-header-rojo-v2" src="'.URL.'img/lottiefiles/logo-vimifos-petcare-rojo.json" background="transparent" speed="1" loop autoplay></lottie-player>');

                       } ?>

                <?php

                  /*//NO BORRAR

                    <img

                      src="<?php echo URL.'img/'.($header_version == 1 ? 'logo-vimifos-petcare-blanco' : 'logo-vimifos-petcare-rojo').'.'.$header_logo_format; ?>"

                      data-src="<?php echo URL.'img/'.($header_version == 1 ? 'logo-vimifos-petcare-blanco' : 'logo-vimifos-petcare-rojo').'.'.$header_logo_format; ?>"

                      id="logo-header-v2"

                      class="lazyload img-fluid"

                      width="221"

                      height="80"

                      alt="Logo Header <?php echo WEBSITE; ?>">*/ ?>

                </a>

              </div>

            </div>

            <div class="col-12 col-md-8 block-3">

              <div class="gap-md-2 d-md-flex justify-content-md-end align-items-md-center d-none d-md-block">

                <a rel="noopener" id="ico-facebook-header-v2" class="ico-header-v2 d-inline-block <?php echo (!empty($header_icon_a) ? $header_icon_a : 'c-azul-6 h-c-rojo-1'); ?>" href="https://www.facebook.com/VimifosPetcare" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook">

                  <span class="fa-stack">

                    <i class="fas fa-circle fa-stack-2x"></i>

                    <i class="fab fa-facebook-f fa-stack-1x fa-header-v2 <?php echo (!empty($header_icon_i) ? $header_icon_i : 'c-blanco h-c-blanco'); ?>"></i>

                  </span>

                </a>

                <a rel="noopener" id="ico-youtube-header-v2" class="ico-header-v2 d-inline-block <?php echo (!empty($header_icon_a) ? $header_icon_a : 'c-azul-6 h-c-rojo-1'); ?>" href="https://www.youtube.com/channel/UCoQ90z7EX6Gx6gcDZh66UqQ" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Youtube">

                  <span class="fa-stack">

                    <i class="fas fa-circle fa-stack-2x"></i>

                    <i class="fab fa-youtube fa-stack-1x fa-header-v2 <?php echo (!empty($header_icon_i) ? $header_icon_i : 'c-blanco h-c-blanco'); ?>"></i>

                  </span>

                </a>

                <a rel="noopener" href="tel:+8008464367" class="ico-header-v2  <?php echo (!empty($header_icon_a) ? $header_icon_a : 'c-azul-6 h-c-rojo-1'); ?> f-black text-decoration-none">800 84 64 367</a>

              <?php if($header_version == 1){ ?>

                <li class="d-none d-md-block">

                  <a rel="noopener" class="ico-tienda-header-v2 ico-header-v2 d-inline-block <?php echo (!empty($header_icon_a) ? $header_icon_a : 'c-azul-6 h-c-rojo-1'); ?>" href="<?php echo URL; ?>cerca-de-ti/comprar-en-linea" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comprar">

                    <span class="fa-stack">

                      <i class="fas fa-circle fa-stack-2x"></i>

                      <i class="fas fa-cart-shopping fa-stack-1x fa-header-v2 <?php echo (!empty($header_icon_i) ? $header_icon_i : 'c-blanco h-c-blanco'); ?>"></i>

                    </span>

                  </a>

                </li>

          <?php } ?>

              </div>

            </div>

          </div>

        </div>

      </div>

      <nav id="bottom-header" class="navbar navbar-expand-md navbar-dark navbar-v<?php echo $header_version.($header_version == 1 ? ' bg-sin-color p-0' : ' bg-color'); ?>">

        <div class="container-fluid ps-0 ps-md-4 ps-lg-5 pe-0 pe-md-4 pe-lg-5">

          <div class="w-100 text-end d-md-flex justify-md-content-end align-md-items-end flex-md-column">

            <div id="botonera-header" class="d-flex justify-content-end align-items-center">

              <a rel="noopener" id="ico-shopping-mobile" class="d-inline-block d-md-none <?php echo (isset($header_mobile_icon_a_tienda) && !empty($header_mobile_icon_a_tienda) ? $header_mobile_icon_a_tienda : 'c-blanco h-c-rojo-1'); ?>" href="<?php echo URL; ?>cerca-de-ti/comprar-en-linea" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comprar">

                <span class="fa-stack" style="font-size: 1.5em;">

                  <i class="fas fa-circle fa-stack-2x"></i>

                  <i class="fas fa-cart-shopping fa-stack-1x <?php echo (isset($header_mobile_icon_i_tienda) && !empty($header_mobile_icon_i_tienda) ? $header_mobile_icon_i_tienda : 'c-rojo-1 h-c-blanco'); ?>"></i>

                </span>

              </a>

              <button class="navbar-toggler nav-trigger me-2 me-md-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                <span></span>

              </button>

            </div>

            <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">

              <div class="navbar-collapse-complete">

                <ul class="navbar-nav">

                  <li class="nav-item">

                    <a rel="noopener" class="nav-link f-bold<?php if($id == 1){ echo " active";} ?>" aria-current="page" href="<?php echo URL; ?>">Inicio</a>

                  </li>

                  <li class="nav-item dropdown">

                    <a id="navbarDropdownMenuLink" class="nav-link f-bold<?php if($id == 2){ echo " active";} ?> dropdown-toggle animatedClick" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-target="clickDropdownAnimation" data-sequence="1000">

                      Productos

                    </a>

                    <div class="dropdown-menu animated bounceIn clickDropdownAnimation" data-id="1">

                      <div class="dropdown-menu-top dropdown-menu-separator mb-2 mb-md-0 animated fadeInDownShort clickDropdownAnimation" data-id="2">

                        <?php /*<h5 class="f-black text-center text-uppercase mb-3 mb-md-2 title">POR MARCA</h5>*/ ?>

                        <div class="row g-3 g-md-0 block-1 justify-content-center">

                        <?php /*<div class="row g-0 pb-md-3 mb-md-3 block-1 justify-content-center">*/ ?>

                          <div class="col-4">

                            <div class="box">

                              <div class="box-img d-flex justify-content-center align-items-center" onClick="document.location='<?php echo URL; ?>smart-bites'">

                                <picture>

                                  <source srcset="<?php echo URL ?>img/header/smart_bites.webp" type="image/webp">

                                  <source srcset="<?php echo URL ?>img/header/smart_bites.png" type="image/png">

                                  <img

                                    src="<?php echo URL ?>img/header/smart_bites.png"

                                    data-src="<?php echo URL ?>img/header/smart_bites.png"

                                    class="lazyload mx-auto d-block"

                                    width="78"

                                    height="65"

                                    alt="Logo Smart Bites®">

                                </picture>

                              </div>

                              <?php /*<div class="box-content mt-2 mt-md-0">

                                <a href="<?php echo URL; ?>smart-bites" class="h-c-rojo-1 f-bold text-center d-block text-decoration-none">(PERROS)</a>

                              </div>*/ ?>

                            </div>

                          </div>

                          <div class="col-4">

                            <div class="box">

                              <div class="box-img d-flex justify-content-center align-items-center" onClick="document.location='<?php echo URL; ?>titan'">

                                <picture>

                                  <source srcset="<?php echo URL ?>img/header/titan.webp" type="image/webp">

                                  <source srcset="<?php echo URL ?>img/header/titan.png" type="image/png">

                                  <img

                                    src="<?php echo URL ?>img/header/titan.png"

                                    data-src="<?php echo URL ?>img/header/titan.png"

                                    class="lazyload mx-auto d-block"

                                    width="95"

                                    height="55"

                                    alt="Logo Titán®">

                                </picture>

                              </div>

                              <?php /*<div class="box-content mt-2 mt-md-0">

                                <a href="<?php echo URL; ?>titan" class="h-c-rojo-1 f-bold text-center d-block text-decoration-none">(PERROS Y GATOS)</a>

                              </div>*/ ?>

                            </div>

                          </div>

                          <div class="col-4">

                            <div class="box">

                              <div class="box-img d-flex justify-content-center align-items-center" onClick="document.location='<?php echo URL; ?>rocko'">

                                <picture>

                                  <source srcset="<?php echo URL ?>img/header/rocko.webp" type="image/webp">

                                  <source srcset="<?php echo URL ?>img/header/rocko.png" type="image/png">

                                  <img

                                    src="<?php echo URL ?>img/header/rocko.png"

                                    data-src="<?php echo URL ?>img/header/rocko.png"

                                    class="lazyload mx-auto d-block"

                                    width="97"

                                    height="50"

                                    alt="Logo Rocko Plus®">

                                </picture>

                              </div>

                              <?php /*<div class="box-content mt-2 mt-md-0">

                                <a href="<?php echo URL; ?>rocko" class="h-c-rojo-1 f-bold text-center d-block text-decoration-none">(PERROS)</a>

                              </div>*/ ?>

                            </div>

                          </div>

                        </div>

                      </div>

                      <?php /*<div class="dropdown-menu-bottom dropdown-menu-separator animated fadeInUpShort clickDropdownAnimation" data-id="3">

                        <h5 class="f-black text-center text-uppercase mb-3 mb-md-2 title">POR ESPECIE</h5>

                        <div class="row g-0 block-2 justify-content-center">

                          <div class="col-8 col-md-7">

                            <div class="row justify-content-center">

                              <div class="box">

                                <div class="box-title">

                                  <h5 class="f-black text-center text-uppercase mb-1 mb-md-3 subtitle interlineado">PERROS</h5>

                                </div>

                              </div>

                              <div class="col-4 col-md-3 p-0">

                                <div class="box">

                                  <div class="box-img d-flex justify-content-center align-items-end" onClick="document.location='<?php echo URL; ?>smart-bites'">

                                    <picture>

                                      <source srcset="<?php echo URL ?>img/header/smart_bites.webp" type="image/webp">

                                      <source srcset="<?php echo URL ?>img/header/smart_bites.png" type="image/png">

                                      <img

                                        src="<?php echo URL ?>img/header/smart_bites.png"

                                        data-src="<?php echo URL ?>img/header/smart_bites.png"

                                        class="lazyload mx-auto d-block"

                                        width=""

                                        height="47"

                                        alt="Logo Smart Bites®">

                                    </picture>

                                  </div>

                                </div>

                              </div>

                              <div class="col-4 col-md-3 p-0">

                                <div class="box">

                                  <div class="box-img d-flex justify-content-center align-items-end" onClick="document.location='<?php echo URL; ?>titan/perro'">

                                    <picture>

                                      <source srcset="<?php echo URL ?>img/header/titan.webp" type="image/webp">

                                      <source srcset="<?php echo URL ?>img/header/titan.png" type="image/png">

                                      <img

                                        src="<?php echo URL ?>img/header/titan.png"

                                        data-src="<?php echo URL ?>img/header/titan.png"

                                        class="lazyload mx-auto d-block"

                                        width=""

                                        height="37"

                                        alt="Logo Titán®">

                                    </picture>

                                  </div>

                                </div>

                              </div>

                              <div class="col-4 col-md-3 p-0">

                                <div class="box">

                                  <div class="box-img d-flex justify-content-center align-items-center" onClick="document.location='<?php echo URL; ?>rocko'">

                                    <picture>

                                      <source srcset="<?php echo URL ?>img/header/rocko.webp" type="image/webp">

                                      <source srcset="<?php echo URL ?>img/header/rocko.png" type="image/png">

                                      <img

                                        src="<?php echo URL ?>img/header/rocko.png"

                                        data-src="<?php echo URL ?>img/header/rocko.png"

                                        class="lazyload mx-auto d-block"

                                        width=""

                                        height="37"

                                        alt="Logo Rocko Plus®">

                                    </picture>

                                  </div>

                                </div>

                              </div>

                            </div>

                          </div>

                          <div class="col-4 col-md-5">

                            <div class="row">

                              <div class="box">

                                <div class="box-title">

                                  <h5 class="f-black text-center text-uppercase mb-1 mb-md-3 subtitle">GATOS</h5>

                                </div>

                              </div>

                              <div class="mx-auto col-sm-4 p-0">

                                <div class="box">

                                  <div class="box-img d-flex justify-content-center align-items-end" onClick="document.location='<?php echo URL; ?>titan/gato'">

                                    <picture>

                                      <source srcset="<?php echo URL ?>img/header/titan.webp" type="image/webp">

                                      <source srcset="<?php echo URL ?>img/header/titan.png" type="image/png">

                                      <img

                                        src="<?php echo URL ?>img/header/titan.png"

                                        data-src="<?php echo URL ?>img/header/titan.png"

                                        class="lazyload mx-auto d-block"

                                        width=""

                                        height="40"

                                        alt="Logo Titán®">

                                    </picture>

                                  </div>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>*/ ?>

                    </div>

                  </li>

                  <li class="nav-item">

                    <a rel="noopener" class="nav-link f-bold<?php if($id == 3){ echo " active";} ?>" aria-current="page" href="<?php echo URL; ?>cerca-de-ti">Encuéntranos</a>

                  </li>

                  <li class="nav-item">

                    <a rel="noopener" class="nav-link f-bold<?php if($id == 4){ echo " active";} ?>" aria-current="page" href="<?php echo URL; ?>blog">Blog</a>

                  </li>

                  <li class="nav-item">

                    <a rel="noopener" class="nav-link f-bold<?php if($id == 7){ echo " active";} ?>" aria-current="page" href="<?php echo URL; ?>contactanos">Contacto</a>

                  </li>

                  <?php if($header_version == 2){ ?>

                    <li class="d-none d-md-block">

                      <a rel="noopener" class="d-inline-block ico-tienda-header-v2 <?php echo ($header_version == 1 ? 'c-blanco h-c-rojo-1' : 'c-rojo-1 h-c-rojo-1'); ?>" href="<?php echo URL; ?>cerca-de-ti/comprar-en-linea" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comprar">

                        <span class="fa-stack">

                          <i class="fas fa-circle fa-stack-2x"></i>

                          <i class="fas fa-cart-shopping fa-stack-1x fa-tienda-header-v2 <?php echo ($header_version == 1 ? 'c-negro h-c-blanco' : 'c-blanco h-c-blanco'); ?>"></i>

                        </span>

                      </a>

                    </li>

              <?php } ?>

                </ul>

                <div class="box text-center pt-3 pb-1 d-md-none">

                  <div class="box-social-network">

                    <div class="gap-md-2 d-md-flex justify-content-md-start align-items-md-center">

                      <a rel="noopener" class="d-inline-block c-blanco h-c-rojo-1" href="https://www.facebook.com/VimifosPetcare" target="_blank" data-bs-toggle="tooltip" title="Facebook">

                        <span class="fa-stack">

                            <i class="fas fa-circle fa-stack-2x"></i>

                            <i class="fab fa-facebook-f fa-stack-1x c-azul-1 h-c-blanco"></i>

                        </span>

                      </a>

                      <a rel="noopener" class="d-inline-block c-blanco h-c-rojo-1" href="https://www.youtube.com/channel/UCoQ90z7EX6Gx6gcDZh66UqQ" target="_blank" data-bs-toggle="tooltip" title="Youtube">

                        <span class="fa-stack">

                          <i class="fas fa-circle fa-stack-2x"></i>

                          <i class="fab fa-youtube fa-stack-1x c-azul-1 h-c-blanco"></i>

                        </span>

                      </a>

                      <a rel="noopener" href="tel:+8008464367" class="c-blanco h-c-rojo-1 f-bold text-decoration-none d-block d-sm-inline-block mt-2 mt-sm-0">800 84 64 367</a>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </nav>

    </div>

<main>
  @yield('content')
</main>


    <footer>

    	<div id="footer-top" class="<?php echo (isset($footer_top) && !empty($footer_top) ? $footer_top : 'bg-azul-5'); ?>">

    		<div class="container-fluid">

    			<div class="box">

    				<div class="box-content text-center c-blanco">

    					<a rel="noopener" href="<?php echo URL; ?>aviso-de-privacidad" class="c-blanco h-c-azul-1 f-light text-decoration-none text-uppercase">AVISO DE PRIVACIDAD</a> |

    					<a rel="noopener" href="<?php echo URL; ?>politica-integral" class="c-blanco h-c-azul-1 f-light text-decoration-none text-uppercase">POLÍTICA INTEGRAL</a>

    				</div>

    			</div>

    		</div>

    	</div>

    	<div id="footer-bottom" class="<?php echo (isset($footer_bottom) && !empty($footer_bottom) ? $footer_bottom : 'bg-azul-1'); ?>">

    		<div class="container-fluid">

    			<div class="row d-flex align-items-center">

    				<div class="col block-1">

    					<div class="box">

    						<div class="box-content mb-3 mb-md-4">

    							<a rel="noopener" href="<?php echo URL; ?>contacto" class="c-blanco h-c-rojo-1 f-light text-decoration-none text-uppercase">CONTACTO</a>

    						</div>

    						<div class="box-social-network">

    							<div class="gap-md-2 d-md-flex justify-content-md-start align-items-md-center">

    					            <a rel="noopener" class="d-inline-block <?php echo (isset($footer_icon_a) && !empty($footer_icon_a) ? $footer_icon_a : ' c-blanco h-c-rojo-1'); ?>" href="https://www.facebook.com/VimifosPetcare" target="_blank" data-bs-toggle="tooltip" title="Facebook">

    						            <span class="fa-stack fa-xl">

    						                <i class="fas fa-circle fa-stack-2x"></i>

    						                <i class="fab fa-facebook-f fa-stack-1x <?php echo (isset($footer_icon_i) && !empty($footer_icon_i) ? $footer_icon_i : ' c-azul-1 h-c-blanco'); ?>"></i>

    						            </span>

    					            </a>

    					            <a rel="noopener" class="d-inline-block c-blanco <?php echo (isset($footer_icon_a) && !empty($footer_icon_a) ? $footer_icon_a : ' c-blanco h-c-rojo-1'); ?>" href="https://www.youtube.com/channel/UCoQ90z7EX6Gx6gcDZh66UqQ" target="_blank" data-bs-toggle="tooltip" title="Youtube">

    					              <span class="fa-stack fa-xl">

    					                <i class="fas fa-circle fa-stack-2x"></i>

    					                <i class="fab fa-youtube fa-stack-1x <?php echo (isset($footer_icon_i) && !empty($footer_icon_i) ? $footer_icon_i : ' c-azul-1 h-c-blanco'); ?>"></i>

    					              </span>

    					            </a>

    					            <a rel="noopener" href="tel:+8008464367" class="c-blanco <?php echo (isset($footer_icon_a) && !empty($footer_icon_a) ? $footer_icon_a : ' c-blanco h-c-rojo-1'); ?> f-bold text-decoration-none d-block d-sm-inline-block mt-2 mt-sm-0">800 84 64 367</a>

    					        </div>

    						</div>

    					</div>

    				</div>

    				<div class="col col-sm-3 col-md-2 col-lg block-2">

    					<div class="box">

    						<div class="box-img text-end pe-5 me-3">

    							<img

    						  		src="<?php echo URL ?>img/logo.svg"

    						  		data-src="<?php echo URL ?>img/logo.svg"

    						  		class="lazyload img-fluid"

    						  		width="85"

    						  		height="100"

    						  		alt="Logo Footer">

    						</div>

    					</div>

    				</div>

    			</div>

    		</div>

    	</div>

    </footer>

    <script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/17f94222-8570-4d2f-8e6a-faf678d36d4b-loader.js" ></script>
  </body>
</html>