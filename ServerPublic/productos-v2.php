<?php

	require_once('./core/controllers/AdminController.php');	$LandingVariables = AdminController::SmartBitesPerro();
	//var_dump($LandingVariables);
	$title 							= "Smart Bites®";

	$description 					= "";

	$key 							= "";

	$fec_modificacion 				= "";

	$url 							= "productos";

	$url_mobil 						= 'productos-phone';

	$id 							= 2;

	$header_position 				= 'fixed-top';// fixed-top | sticky-top

	$header_version 				= 1;//1 = Sin fondo inicial | 2 = Con fondo

	$header_logo_format 			= 'png';// png | svg

	$header_icon_a 					= 'c-blanco h-c-azul-6';

	$header_icon_i 					= 'c-rojo-1 h-c-blanco';

	$header_icon_a_tienda 			= 'c-blanco h-c-azul-6';

	$header_icon_i_tienda 			= 'c-rojo-1 h-c-blanco';

	$header_mobile_icon_a_tienda 	= 'c-rojo-1 h-c-azul-6';

	$header_mobile_icon_i_tienda 	= 'c-blanco h-c-blanco';

	$footer_top 					= 'bg-rojo-6';

	$footer_bottom 					= 'bg-rojo-1';

	$footer_icon_a 					= 'c-blanco h-c-azul-1';

	$footer_icon_i 					= 'c-rojo-1 h-c-blanco';

	$id_tab 						= 0;



	if(isset($_GET['id_tab']) && !empty($_GET['id_tab'])){

        $id_tab = filter_var($_GET['id_tab'], FILTER_SANITIZE_NUMBER_INT);

    }


    switch ($id_tab) {

    	case 2://ADULTO

    		$bg_color_tab_active 			= "#A78B49;";

    		break;

    	case 3://SENIOR

    		$bg_color_tab_active 			= "#5793F1;";

    		break;

    	case 4://ADULTO RAZA PEQUEÑA

    		$bg_color_tab_active 			= "#6F2276;";

    		break;

    	default://CACHORRO

    		$bg_color_tab_active 			= "#2e9297;";

    		break;

    }



	require_once (TEMPLATES_HEAD); ?>

		<link rel="preload stylesheet" href="<?php echo URL; ?>css/products.css" as="style" type="text/css" crossorigin="anonymous">

		<script>

            let url_global 				= "<?php echo URL; ?>";

            let url_mobil 				= "<?php echo $url_mobil; ?>";

            let header_icon_a 			= "<?php echo $header_icon_a; ?>";

            let header_icon_i 			= "<?php echo $header_icon_i; ?>";

            let header_icon_a_tienda 	= "<?php echo $header_icon_a_tienda; ?>";

            let header_icon_i_tienda 	= "<?php echo $header_icon_i_tienda; ?>";



            <?php if($id_tab > 0){ ?>

	            $(document).ready(function(){

				  	const hash = "#productos-beneficios-ancla";

		            // Animate html & body to the hash value position

		            $('html, body').stop(true,true).animate({

		                scrollTop: $(hash).offset().top-$('#header').outerHeight()

		            },0);

				});

			<?php } ?>

        </script>

		<script defer src="<?php echo URL.JS_APP ?>"></script>

		<script async src="<?php echo URL; ?>js/lottie-player.js"></script>

	</head>



	<?php require_once (TEMPLATES_PRELOADER); ?>



	<body id="productspage" class="product-page-smart-bites perro ov-x-h">



		<?php require_once (TEMPLATES_API_FACEBOOK); ?>



		<?php require_once ('templates/header-v2.php'); ?>



		<div class="overay"></div>

		<div class="bg-patron-rojo position-absolute w-100 jumbotron" data-paroller-factor="0.3" data-paroller-factor-xs="0.2"></div>



		<main class="ov-x-h">

			<section id="productos-slider" class="productos-slider-v1 position-relative animatedParent" data-appear-top-offset="-300" data-sequence="1000">

				<div class="full-circle position-absolute start-50 translate-middle"></div>
				<div onClick="document.location='<?php echo URL; ?>smart-bites/gato'" class="link-flotante btn-gato"></div>

				<div id="productos-slider-top">

					<div class="container g-0 position-relative h-100">

						<div class="box block-1">

							<div class="box-img">

								<lottie-player src="<?php echo URL ?>img/lottiefiles/logo-smartbites.json" background="transparent" speed="1" loop autoplay class="position-absolute translate-middle" data-id="2"></lottie-player>

								<!--<picture>

								  	<source srcset="<?php echo URL ?>img/home/productos/smart_bites_slogan.webp" type="image/webp">

								  	<source srcset="<?php echo URL ?>img/home/productos/smart_bites_slogan.png" type="image/png">

								  	<img src="<?php echo URL ?>img/home/productos/smart_bites_slogan.png"

								  		data-src="<?php echo URL ?>img/home/productos/smart_bites_slogan.png"

								  		class="lazyload img-fluid position-absolute start-50 translate-middle"

								  		data-id="2"

								  		width="276"

								  		height="240"

								  		alt="Logo Smart Bites® Perro">

								</picture>-->

							</div>

						</div>

						<div class="box block-2">

							<div class="box-img">

								<picture id="img-parallax-1" class="position-absolute">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-senior.webp" type="image/webp">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-senior.png" type="image/png">

								  	<img

								  		src="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-senior.png"

								  		data-src="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-senior.png"

								  		class="lazyload animated fadeInDownShort slowest"

								  		data-id="2"

								  		width="470"

								  		height="470"

								  		alt="Parallax Smart Bites® saco 1">

								</picture>

								<picture id="img-parallax-2" class="position-absolute">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/inicio_smart_perro.webp" type="image/webp">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/inicio_smart_perro.png" type="image/png">

								  	<img

								  		src="<?php echo URL ?>admin/img/productos/smart-bites/inicio_smart_perro.png"

								  		data-src="<?php echo URL ?>admin/img/productos/smart-bites/inicio_smart_perro.png"

								  		class="lazyload animated fadeInRightShort slowest"

								  		data-id="3"

								  		width="269"

								  		height="520"

								  		alt="Parallax Smart Bites® perro">

								</picture>

								<picture id="img-parallax-3" class="position-absolute">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-adulto.webp" type="image/webp">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-adulto.png" type="image/png">

								  	<img

								  		src="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-adulto.png"

								  		data-src="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-adulto.png"

								  		class="lazyload animated fadeInUpShort"

								  		data-id="2"

								  		width="450"

								  		height="450"

								  		alt="Parallax Smart Bites® saco 2">

								</picture>

								<picture id="img-parallax-4" class="position-absolute">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-cachorro.webp" type="image/webp">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-cachorro.png" type="image/png">

								  	<img

								  		src="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-cachorro.png"

								  		data-src="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-cachorro.png"

								  		class="lazyload animated fadeInDownShort slowest"

								  		data-id="3"

								  		width="242"

								  		height="380"

								  		alt="Parallax Smart Bites® saco 3">

								</picture>

							</div>

						</div>

					</div>

				</div>

				<div id="productos-slider-bottom">

					<div class="container g-0 position-relative zi-1 h-100">

						<div class="box block-1 pe-4 pe-sm-5 ps-4 ps-sm-5 mt-2 mt-sm-4">

							<div class="box-content">

								<p class="c-gris-3 text-center mb-4">
									<?php if(isset($LandingVariables)){?>
										<?php echo utf8_encode($LandingVariables[0]->value) ?>
									<?php } else {	?>
										<span class="f-black">Smart Bites®</span> es el alimento ideal para asegurar el bienestar y la salud que tu mascota necesita. Contiene NeuroACTIVE®, un conjunto de ingredientes cuidadosamente seleccionados para desarrollar y preservar la actividad cerebral de tu amigo durante toda su vida.
									<?php } ?>

								</p>

								<p class="c-gris-3 text-center mb-4">
									<?php if(isset($LandingVariables)){?>
										<?php echo utf8_encode($LandingVariables[1]->value) ?>
									<?php } else {	?>
										Nutrirlo con <span class="f-black">Smart Bites®</span> es nutrirlo con <span class="f-black">Smart Love®</span>.
									<?php } ?>

								</p>

							</div>

							<div class="box-img">

								<img

							  		src="<?php echo URL ?>img/productos/smart-bites/logo-smartlove-rojo.svg"

							  		data-src="<?php echo URL ?>img/productos/smart-bites/logo-smartlove-rojo.svg"

							  		class="lazyload img-fluid mx-auto d-block"

							  		width="318"

							  		height="91"

							  		alt="Logo Smart love">

							</div>

						</div>

					</div>

				</div>

			</section>



			<section id="productos-card" class="productos-card-v1 position-relative">

				<div class="row row-cols-1 row-cols-md-2 g-0 justify-content-center animatedParent" data-sequence="800">

					<div id="card-1" class="col p-0 position-relative animated fadeIn" data-id="1">

					    <div class="card h-100 bg-verde-3">

							<div class="card-header">

								<h2 class="c-blanco f-black text-center text-uppercase">

						      		Cachorro

						      	</h2>

							</div>

						    <div class="card-body position-relative">

						    	<picture>

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/render_bolsa_cachorro_SB.webp" type="image/webp">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/render_bolsa_cachorro_SB.png" type="image/png">

								  	<img

								  		src="<?php echo URL ?>admin/img/productos/smart-bites/render_bolsa_cachorro_SB.png"

								  		data-src="<?php echo URL ?>admin/img/productos/smart-bites/render_bolsa_cachorro_SB.png"

								  		class="lazyload mx-auto d-block mt-3"

								  		width="339"

								  		height="400"

								  		alt="Presentacion Smart Bites® CACHORRO">

								</picture>

								<img

							  		src="<?php echo URL ?>img/productos/logo_NEURO-ACTIVE.png"

							  		data-src="<?php echo URL ?>img/productos/logo_NEURO-ACTIVE.png"

							  		class="lazyload position-absolute logo_NEURO-ACTIVE"

							  		width="137"

							  		height="120"

							  		alt="NeuroACTIVE">

						      	<p class="card-text c-blanco f-medium text-center text-uppercase mt-5 mb-2">

						      		Aprendizaje Fácil

						      	</p>

						      	<div class="card-content mt-4">

						      		<div class="row g-3 g-md-2 g-xl-0 justify-content-center mb-3">

						      			<div class="card-icon col-2 col-md-3 text-center">

						      				<img

										  		src="<?php echo URL ?>img/productos/icon-dog.svg"

										  		data-src="<?php echo URL ?>img/productos/icon-dog.svg"

										  		class="lazyload"

										  		width="50"

										  		height="45"

										  		alt="Icono Edad">

	 					      			</div>

						      			<div class="card-description col-10 col-sm-5 col-md-8 col-xl-7 col-xxl-8">

						      				<h5 class="c-blanco f-black mb-0 fs-6">Edad</h5>

						      				<p class="c-blanco f-medium fs-6">
														<?php if(isset($LandingVariables)){?>
															<?php echo utf8_encode($LandingVariables[2]->value) ?>
														<?php } else {	?>
															Hasta 18 meses
														<?php } ?>
													</p>

						      			</div>

						      		</div>

						      		<div class="row g-3 g-md-2 g-xl-0 justify-content-center mb-3">

						      			<div class="card-icon col-2 col-md-3 text-center">

						      				<img

										  		src="<?php echo URL ?>img/productos/icon-bolsa-comida.svg"

										  		data-src="<?php echo URL ?>img/productos/icon-bolsa-comida.svg"

										  		class="lazyload"

										  		width="45"

										  		height="50"

										  		alt="Icono Edad">

	 					      			</div>

						      			<div class="card-description col-10 col-sm-5 col-md-8 col-xl-7 col-xxl-6">

						      				<h5 class="c-blanco f-black mb-0 fs-6">Presentaciones</h5>

						      				<p class="c-blanco f-medium fs-6">
														<?php if(isset($LandingVariables)){?>
															<?php echo utf8_encode($LandingVariables[3]->value) ?>
														<?php } else {	?>
															2, 4, 10 y 20 kg
														<?php } ?>
													</p>

						      			</div>

						      			<div class="card-link col-12 col-xxl-2 text-center text-xxl-end">

						      				<a rel="noopener" class="d-block c-rojo-1 h-c-rojo-6" href="<?php echo URL; ?>cerca-de-ti/comprar-en-linea" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Compra">

								                <span class="fa-stack fa-xl">

								                  	<i class="fas fa-circle fa-border" style="font-size: 2.15em;--fa-border-color: #fff; --fa-border-padding: 0; --fa-border-radius: 100%; --fa-border-width: 0.05em;"></i>

								                  	<i class="fas fa-cart-shopping fa-stack-1x c-blanco h-c-blanco" style="line-height: 2.37;"></i>

								                </span>

								            </a>

						      			</div>

						      			<h2 class="c-blanco f-light text-center text-uppercase">

								      		<span class="d-block fs-6 mt-3">Autorización A-1522-404</span>

								      	</h2>

						      		</div>

						      	</div>

						    </div>

						</div>

					</div>

					<div id="card-4" class="col p-0 position-relative animated fadeIn" data-id="2">

					    <div class="card h-100 bg-morado-2">

							<div class="card-header">

								<h2 class="c-blanco f-black text-center text-uppercase">

						      		ADULTO RAZA PEQUEÑA

						      	</h2>

							</div>

						    <div class="card-body position-relative">

						    	<picture>

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-adulto-raza-pequena.webp" type="image/webp">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-adulto-raza-pequena.png" type="image/png">

								  	<img

								  		src="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-adulto-raza-pequena.png"

								  		data-src="<?php echo URL ?>admin/img/productos/smart-bites/smart-bites-neuro-active-adulto-raza-pequena.png"

								  		class="lazyload w-auto mx-auto d-block mt-3"

								  		width=""

								  		height="400"

								  		alt="Presentacion Smart Bites® ADULTO RAZA PEQUEÑA">

								</picture>

								<img

							  		src="<?php echo URL ?>img/productos/logo_NEURO-ACTIVE.png"

							  		data-src="<?php echo URL ?>img/productos/logo_NEURO-ACTIVE.png"

							  		class="lazyload position-absolute logo_NEURO-ACTIVE"

							  		width="137"

							  		height="120"

							  		alt="NeuroACTIVE">

						      	<p class="card-text c-blanco f-medium text-center text-uppercase mt-5 mb-2">

						      		DESARROLLO CEREBRAL

						      	</p>

						      	<div class="card-content mt-4">

						      		<div class="row g-3 g-md-2 g-xl-0 justify-content-center mb-3">

						      			<div class="card-icon col-2 col-md-3 text-center">

						      				<img

										  		src="<?php echo URL ?>img/productos/icon-dog.svg"

										  		data-src="<?php echo URL ?>img/productos/icon-dog.svg"

										  		class="lazyload"

										  		width="50"

										  		height="45"

										  		alt="Icono Edad">

	 					      			</div>

						      			<div class="card-description col-10 col-sm-5 col-md-8 col-xl-7 col-xxl-8">

						      				<h5 class="c-blanco f-black mb-0 fs-6">Edad</h5>

						      				<p class="c-blanco f-medium fs-6"><?php if(isset($LandingVariables)){?>
														<?php echo utf8_encode($LandingVariables[4]->value) ?>
													<?php } else {	?>
														12 meses en adelante
													<?php } ?>
												</p>

						      			</div>

						      		</div>

						      		<div class="row g-3 g-md-2 g-xl-0 justify-content-center mb-3">

						      			<div class="card-icon col-2 col-md-3 text-center">

						      				<img

										  		src="<?php echo URL ?>img/productos/icon-bolsa-comida.svg"

										  		data-src="<?php echo URL ?>img/productos/icon-bolsa-comida.svg"

										  		class="lazyload"

										  		width="45"

										  		height="50"

										  		alt="Icono Edad">

	 					      			</div>

						      			<div class="card-description col-10 col-sm-5 col-md-8 col-xl-7 col-xxl-6">

						      				<h5 class="c-blanco f-black mb-0 fs-6">Presentaciones</h5>

						      				<p class="c-blanco f-medium fs-6"><?php if(isset($LandingVariables)){?>
														<?php echo utf8_encode($LandingVariables[5]->value) ?>
													<?php } else {	?>
														4 y 20 kg
													<?php } ?>
												</p>

						      			</div>

						      			<div class="card-link col-12 col-xxl-2 text-center text-xxl-end">

						      				<a rel="noopener" class="d-block c-rojo-1 h-c-rojo-6" href="<?php echo URL; ?>cerca-de-ti/comprar-en-linea" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Compra">

								                <span class="fa-stack fa-xl">

								                  	<i class="fas fa-circle fa-border" style="font-size: 2.15em;--fa-border-color: #fff; --fa-border-padding: 0; --fa-border-radius: 100%; --fa-border-width: 0.05em;"></i>

								                  	<i class="fas fa-cart-shopping fa-stack-1x c-blanco h-c-blanco" style="line-height: 2.37;"></i>

								                </span>

								            </a>

						      			</div>

						      			<h2 class="c-blanco f-light text-center text-uppercase">

								      		<span class="d-block fs-6 mt-3">Autorización A-1522-616</span>

								      	</h2>

						      		</div>

						      	</div>

						    </div>

						</div>

					</div>

					<div id="card-2" class="col p-0 position-relative animated fadeIn" data-id="3">

					    <div class="card h-100 bg-amarillo-1">

							<div class="card-header">

								<h2 class="c-blanco f-black text-center text-uppercase">

						      		ADULTO

						      	</h2>

							</div>

						    <div class="card-body position-relative">

						    	<picture>

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/render_bolsa_adulto_SB.webp" type="image/webp">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/render_bolsa_adulto_SB.png" type="image/png">

								  	<img

								  		src="<?php echo URL ?>admin/img/productos/smart-bites/render_bolsa_adulto_SB.png"

								  		data-src="<?php echo URL ?>admin/img/productos/smart-bites/render_bolsa_adulto_SB.png"

								  		class="lazyload img-fluid mx-auto d-block mt-3"

								  		width="460"

								  		height="400"

								  		alt="Presentacion Smart Bites® ADULTO">

								</picture>

								<img

							  		src="<?php echo URL ?>img/productos/logo_NEURO-ACTIVE.png"

							  		data-src="<?php echo URL ?>img/productos/logo_NEURO-ACTIVE.png"

							  		class="lazyload position-absolute logo_NEURO-ACTIVE"

							  		width="137"

							  		height="120"

							  		alt="NeuroACTIVE">

						      	<p class="card-text c-blanco f-medium text-center text-uppercase mt-5 mb-2">

						      		Desarrollo Cerebral

						      	</p>

						      	<div class="card-content mt-4">

						      		<div class="row g-3 g-md-2 g-xl-0 justify-content-center mb-3">

						      			<div class="card-icon col-2 col-md-3 text-center">

						      				<img

										  		src="<?php echo URL ?>img/productos/icon-dog.svg"

										  		data-src="<?php echo URL ?>img/productos/icon-dog.svg"

										  		class="lazyload"

										  		width="50"

										  		height="45"

										  		alt="Icono Edad">

	 					      			</div>

						      			<div class="card-description col-10 col-sm-5 col-md-8 col-xl-7 col-xxl-8">

						      				<h5 class="c-blanco f-black mb-0 fs-6">Edad</h5>

						      				<p class="c-blanco f-medium fs-6">
														<?php if(isset($LandingVariables)){?>
															<?php echo utf8_encode($LandingVariables[6]->value) ?>
														<?php } else {	?>
															18 meses a 7 años
														<?php } ?>
													</p>

						      			</div>

						      		</div>

						      		<div class="row g-3 g-md-2 g-xl-0 justify-content-center mb-3">

						      			<div class="card-icon col-2 col-md-3 text-center">

						      				<img

										  		src="<?php echo URL ?>img/productos/icon-bolsa-comida.svg"

										  		data-src="<?php echo URL ?>img/productos/icon-bolsa-comida.svg"

										  		class="lazyload"

										  		width="45"

										  		height="50"

										  		alt="Icono Edad">

	 					      			</div>

						      			<div class="card-description col-10 col-sm-5 col-md-8 col-xl-7 col-xxl-6">

						      				<h5 class="c-blanco f-black mb-0 fs-6">Presentaciones</h5>

						      				<p class="c-blanco f-medium fs-6">
														<?php if(isset($LandingVariables)){?>
															<?php echo utf8_encode($LandingVariables[7]->value) ?>
														<?php } else {	?>
															2, 4, 15 y 25 kg
														<?php } ?>
													</p>

						      			</div>

						      			<div class="card-link col-12 col-xxl-2 text-center text-xxl-end">

						      				<a rel="noopener" class="d-block c-rojo-1 h-c-rojo-6" href="<?php echo URL; ?>cerca-de-ti/comprar-en-linea" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Compra">

								                <span class="fa-stack fa-xl">

								                  	<i class="fas fa-circle fa-border" style="font-size: 2.15em;--fa-border-color: #fff; --fa-border-padding: 0; --fa-border-radius: 100%; --fa-border-width: 0.05em;"></i>

								                  	<i class="fas fa-cart-shopping fa-stack-1x c-blanco h-c-blanco" style="line-height: 2.37;"></i>

								                </span>

								            </a>

						      			</div>

						      			<h2 class="c-blanco f-light text-center text-uppercase">

								      		<span class="d-block fs-6 mt-3">Autorización A-1522-403</span>

								      	</h2>

						      		</div>

						      	</div>

						    </div>

						</div>

					</div>

					<div id="card-3" class="col p-0 position-relative animated fadeIn" data-id="4">

					    <div class="card h-100 bg-azul-17">

							<div class="card-header">

								<h2 class="c-blanco f-black text-center text-uppercase">

						      		SENIOR

						      	</h2>

							</div>

						    <div class="card-body position-relative">

						    	<picture>

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/render_bolsa_senior_SB.webp" type="image/webp">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/render_bolsa_senior_SB.png" type="image/png">

								  	<img

								  		src="<?php echo URL ?>admin/img/productos/smart-bites/render_bolsa_senior_SB.png"

								  		data-src="<?php echo URL ?>admin/img/productos/smart-bites/render_bolsa_senior_SB.png"

								  		class="lazyload img-fluid mx-auto d-block mt-3"

								  		width="477"

								  		height="400"

								  		alt="Presentacion Smart Bites® SENIOR">

								</picture>

								<img

							  		src="<?php echo URL ?>img/productos/logo_NEURO-ACTIVE.png"

							  		data-src="<?php echo URL ?>img/productos/logo_NEURO-ACTIVE.png"

							  		class="lazyload position-absolute logo_NEURO-ACTIVE"

							  		width="137"

							  		height="120"

							  		alt="NeuroACTIVE">

						      	<p class="card-text c-blanco f-medium text-center text-uppercase mt-5 mb-2">

						      		Máxima Vitalidad

						      	</p>

						      	<div class="card-content mt-4">

						      		<div class="row g-3 g-md-2 g-xl-0 justify-content-center mb-3">

						      			<div class="card-icon col-2 col-md-3 text-center">

						      				<img

										  		src="<?php echo URL ?>img/productos/icon-dog.svg"

										  		data-src="<?php echo URL ?>img/productos/icon-dog.svg"

										  		class="lazyload"

										  		width="50"

										  		height="45"

										  		alt="Icono Edad">

	 					      			</div>

						      			<div class="card-description col-10 col-sm-5 col-md-8 col-xl-7 col-xxl-8">

						      				<h5 class="c-blanco f-black mb-0 fs-6">Edad</h5>

						      				<p class="c-blanco f-medium fs-6">
														<?php if(isset($LandingVariables)){?>
															<?php echo utf8_encode($LandingVariables[8]->value) ?>
														<?php } else {	?>
															7 años en adelante
														<?php } ?>
													</p>

						      			</div>

						      		</div>

						      		<div class="row g-3 g-md-2 g-xl-0 justify-content-center mb-3">

						      			<div class="card-icon col-2 col-md-3 text-center">

						      				<img

										  		src="<?php echo URL ?>img/productos/icon-bolsa-comida.svg"

										  		data-src="<?php echo URL ?>img/productos/icon-bolsa-comida.svg"

										  		class="lazyload"

										  		width="45"

										  		height="50"

										  		alt="Icono Edad">

	 					      			</div>

						      			<div class="card-description col-10 col-sm-5 col-md-8 col-xl-7 col-xxl-6">

						      				<h5 class="c-blanco f-black mb-0 fs-6">Presentaciones</h5>

						      				<p class="c-blanco f-medium fs-6">
														<?php if(isset($LandingVariables)){?>
															<?php echo utf8_encode($LandingVariables[9]->value) ?>
														<?php } else {	?>
															4 y 7 kg
														<?php } ?>
													</p>

						      			</div>

						      			<div class="card-link col-12 col-xxl-2 text-center text-xxl-end">

						      				<a rel="noopener" class="d-block c-rojo-1 h-c-rojo-6" href="<?php echo URL; ?>cerca-de-ti/comprar-en-linea" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Compra">

								                <span class="fa-stack fa-xl">

								                  	<i class="fas fa-circle fa-border" style="font-size: 2.15em;--fa-border-color: #fff; --fa-border-padding: 0; --fa-border-radius: 100%; --fa-border-width: 0.05em;"></i>

								                  	<i class="fas fa-cart-shopping fa-stack-1x c-blanco h-c-blanco" style="line-height: 2.37;"></i>

								                </span>

								            </a>

						      			</div>

						      			<h2 class="c-blanco f-light text-center text-uppercase">

								      		<span class="d-block fs-6 mt-3">Autorización A-1522-422</span>

								      	</h2>

						      		</div>

						      	</div>

						    </div>

						</div>

					</div>

				</div>

			</section>



			<section id="productos-beneficios-ancla" style="background-color: <?php echo $bg_color_tab_active; ?>"></section>



			<section id="productos-beneficios" class="ov-h" style="background-color: <?php echo $bg_color_tab_active; ?>">

				<div id="top-productos-beneficios">

					<div class="container">

						<ul class="nav nav-tabs nav-tabs-v3 rojo justify-content-center animatedParent" data-sequence="1000" id="myTab" role="tablist">

							<li class="nav-item animated growIn" data-id="1" role="presentation">

							    <button class="nav-link nav-link-smart-bites c-blanco h-c-rojo-1<?php if($id_tab == 0 || $id_tab == 1){ echo(" active"); } ?>" id="cachorro-tab" data-bs-toggle="tab" data-bs-target="#cachorro" type="button" role="tab" aria-controls="cachorro" aria-selected="true" data-color="2e9297">CACHORRO</button>

							</li>

							<li class="nav-item animated growIn" data-id="2" role="presentation">

							    <button class="nav-link nav-link-smart-bites c-blanco h-c-rojo-1<?php if($id_tab == 4){ echo(" active"); } ?> animatedClick" id="adulto-raza-pequena-tab" data-bs-toggle="tab" data-bs-target="#adulto-raza-pequena" type="button" role="tab" aria-controls="adulto-raza-pequena" aria-selected="false" data-color="6F2276" data-target="clickTab2" data-sequence="1000">ADULTO RAZA PEQUEÑA</button>

							</li>

							<li class="nav-item animated growIn" data-id="3" role="presentation">

							    <button class="nav-link nav-link-smart-bites c-blanco h-c-rojo-1<?php if($id_tab == 2){ echo(" active"); } ?> animatedClick" id="adulto-tab" data-bs-toggle="tab" data-bs-target="#adulto" type="button" role="tab" aria-controls="adulto" aria-selected="false" data-color="A78B49" data-target="clickTab2" data-sequence="1000">ADULTO</button>

							</li>

							<li class="nav-item animated growIn" data-id="4" role="presentation">

							    <button class="nav-link nav-link-smart-bites c-blanco h-c-rojo-1<?php if($id_tab == 3){ echo(" active"); } ?> animatedClick" id="senior-tab" data-bs-toggle="tab" data-bs-target="#senior" type="button" role="tab" aria-controls="senior" aria-selected="false" data-color="5793F1" data-target="clickTab3" data-sequence="1000">SENIOR</button>

							</li>

						</ul>

						<div class="tab-content tab-content-v1 mt-5 pe-4 pe-sm-0 ps-4 ps-sm-0" id="tabBeneficios">



							<?php require_once ('views/productos/smart-bites/cachorro.php'); ?>


							<?php require_once ('views/productos/smart-bites/adulto-raza-pequena.php'); ?>


						  	<?php require_once ('views/productos/smart-bites/adulto.php'); ?>



						  	<?php require_once ('views/productos/smart-bites/senior.php'); ?>

						</div>

					</div>

				</div>

			</section>

			<section id="productos-testimoniales" class="bg-rojo-1 ov-h">

				<div class="container animatedParent">

					<div class="box animated fadeInDownShort delay-750">

						<div class="box-title">

							<div class="row justify-content-center">

								<div class="col-xxl-9">

									<h1 class="c-blanco f-black text-center text-md-start">Al cuidado del amor más grande</h1>

								</div>

							</div>

						</div>

						<div class="box-content">

							<div class="row justify-content-center">

								<div class="col-md-8 col-xxl-6 d-flex align-items-end">

									<p class="c-blanco f-medium">¡Conoce la experiencia de la comunidad Smart Bites®!</p>

								</div>

								<div class="col-md-4 col-xxl-3">

									<img

								  		src="<?php echo URL ?>img/productos/smart-bites/logo-smartlove-blanco.svg"

								  		data-src="<?php echo URL ?>img/productos/smart-bites/logo-smartlove-blanco.svg"

								  		class="lazyload img-fluid m-0-a"

								  		width="91"

								  		height="80"

								  		alt="Logo Smart love">

								</div>

							</div>

						</div>

					</div>

				</div>

			</section>

			<section id="productos-blog-testimoniales" class="bg-rojo-1">

				<div class="owl-carousel owl-theme owl-blog">

					<!-- 1 -->

					<div class="item col">

						<div class="row justify-content-center justify-content-md-start g-0">

							<div class="col-sm-10 col-md">

								<div class="img-wrapper">

									<div class="inner-img horizontal" style="background: url('<?php echo URL ?>img/productos/smart-bites/blog/1.jpg') no-repeat top center/cover;"></div>

						      	</div>

						    </div>

						    <div class="col-sm-10 col-md">

						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">

						    		<div class="box">

						    			<div class="box-content ico-bg ico-comillas-dobles">

						    				<p class="c-negro f-medium text-justify">

						    					A mi perrita le encantó, sus heces ya no huelen para nada, definitivamente lo seguiremos comprando.<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>

						    				</p>

						    			</div>

						    			<div class="box-autor">

						    				<p class="c-negro f-black text-end mb-0">

						    					María

						    				</p>

						    			</div>

						    			<div class="box-rating text-end mt-2">

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    			</div>

						    			<small class="c-negro f-regular text-end d-block mt-2">

					    					SENIOR

					    				</small>

						    		</div>

						      	</div>

						    </div>

						</div>

					</div>

					<!-- 2 -->

					<div class="item col">

						<div class="row justify-content-center justify-content-md-start g-0">

							<div class="col-sm-10 col-md">

								<div class="img-wrapper">

									<div class="inner-img horizontal" style="background: url('<?php echo URL ?>img/productos/smart-bites/blog/2.jpg') no-repeat top center/cover;"></div>

						      	</div>

						    </div>

						    <div class="col-sm-10 col-md">

						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">

						    		<div class="box">

						    			<div class="box-content ico-bg ico-comillas-dobles">

						    				<p class="c-negro f-medium text-justify">

						    					Excelente. A mi perrito le ha caído muy bien. Le ha ayudado a sus huesos y articulaciones.<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>

						    				</p>

						    			</div>

						    			<div class="box-autor">

						    				<p class="c-negro f-black text-end mb-0">

						    					José

						    				</p>

						    			</div>

						    			<div class="box-rating text-end mt-2">

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    			</div>

						    			<small class="c-negro f-regular text-end d-block mt-2">

					    					SENIOR

					    				</small>

						    		</div>

						      	</div>

						    </div>

						</div>

					</div>

					<!-- 3 -->

					<div class="item col">

						<div class="row justify-content-center justify-content-md-start g-0">

							<div class="col-sm-10 col-md">

								<div class="img-wrapper">

									<div class="inner-img horizontal" style="background: url('<?php echo URL ?>img/productos/smart-bites/blog/3.jpg') no-repeat top center/cover;"></div>

						      	</div>

						    </div>

						    <div class="col-sm-10 col-md">

						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">

						    		<div class="box">

						    			<div class="box-content ico-bg ico-comillas-dobles">

						    				<p class="c-negro f-medium text-justify">

						    					A mi perrita le ha caído muy bien este alimento, se lo come sin problema, ella es tamaño mediano, pero para un perro de raza pequeña puede servirle pues son croquetas pequeñas. No tuve problema cuando hice el cambio a esta marca y sus heces son firmes.<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>

						    				</p>

						    			</div>

						    			<div class="box-autor">

						    				<p class="c-negro f-black text-end mb-0">

						    					Jorge

						    				</p>

						    			</div>

						    			<div class="box-rating text-end mt-2">

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    			</div>

						    			<small class="c-negro f-regular text-end d-block mt-2">

					    					SENIOR

					    				</small>

						    		</div>

						      	</div>

						    </div>

						</div>

					</div>

					<!-- 4 -->

					<div class="item col">

						<div class="row justify-content-center justify-content-md-start g-0">

							<div class="col-sm-7 col-md-4 col-xl-3 col-xxl-4">

								<div class="img-wrapper">

									<div class="inner-img vertical" style="background: url('<?php echo URL ?>img/productos/smart-bites/blog/4.jpg') no-repeat top center/cover;"></div>

						      	</div>

						    </div>

						    <div class="col-sm-7 col-md">

						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">

						    		<div class="box">

						    			<div class="box-content ico-bg ico-comillas-dobles">

						    				<p class="c-negro f-medium text-justify">

						    					A mi perro le cayó super bien, mejoró bastante su digestión, sus heces son más firmes y él tenía reflujo y ha disminuido bastante.<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>

						    				</p>

						    			</div>

						    			<div class="box-autor">

						    				<p class="c-negro f-black text-end mb-0">

						    					Ale

						    				</p>

						    			</div>

						    			<div class="box-rating text-end mt-2">

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="far fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    			</div>

						    			<small class="c-negro f-regular text-end d-block mt-2">

					    					SENIOR

					    				</small>

						    		</div>

						      	</div>

						    </div>

						</div>

					</div>

					<!-- 5 -->

					<div class="item col">

						<div class="row justify-content-center justify-content-md-start g-0">

							<div class="col-sm-10 col-md col-lg-12 col-xl">

								<div class="img-wrapper">

									<div class="inner-img horizontal" style="background: url('<?php echo URL ?>img/productos/smart-bites/blog/5.jpg') no-repeat top center/cover;"></div>

						      	</div>

						    </div>

						    <div class="col-sm-10 col-md col-lg-12 col-xl">

						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">

						    		<div class="box">

						    			<div class="box-content ico-bg ico-comillas-dobles">

						    				<p class="c-negro f-medium text-justify">

						    					A mi perro le encantaron en cuanto se las di. Sus heces firmes y sin olor, su pelo brillante, cuando hice el cambio no tuvo ningún problema estomacal, seguiré comprándolas

						    					<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>

						    				</p>

						    			</div>

						    			<div class="box-autor">

						    				<p class="c-negro f-black text-end mb-0">

						    					Manuel

						    				</p>

						    			</div>

						    			<div class="box-rating text-end mt-2">

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="far fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    			</div>

						    			<small class="c-negro f-regular text-end d-block mt-2">

					    					CACHORRO

					    				</small>

						    		</div>

						      	</div>

						    </div>

						</div>

					</div>

					<!-- 6 -->

					<div class="item col">

						<div class="row justify-content-center justify-content-md-start g-0">

							<div class="col-sm-7 col-md-4 col-xl-3 col-xxl-4">

								<div class="img-wrapper">

									<div class="inner-img vertical" style="background: url('<?php echo URL ?>img/productos/smart-bites/blog/6.jpg') no-repeat top center/cover;"></div>

								</div>

						    </div>

						    <div class="col-sm-7 col-md">

						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">

						    		<div class="box">

						    			<div class="box-content ico-bg ico-comillas-dobles">

						    				<p class="c-negro f-medium text-justify">

						    					Le he dado este alimento a mi Malinois desde 1 mes de edad. Ya tiene 3 meses consumiéndolas. Tiene un desarrollo excelente y su pelo muy bonito, brilloso. Excelente calidad y precio. Las heces firmes.<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>

						    				</p>

						    			</div>

						    			<div class="box-autor">

						    				<p class="c-negro f-black text-end mb-0">

						    					Alberto

						    				</p>

						    			</div>

						    			<div class="box-rating text-end mt-2">

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="far fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    			</div>

						    			<small class="c-negro f-regular text-end d-block mt-2">

					    					CACHORRO

					    				</small>

						    		</div>

						      	</div>

						    </div>

						</div>

					</div>

					<!-- 7 -->

					<div class="item col">

						<div class="row justify-content-center justify-content-md-start g-0">

							<div class="col-sm-10 col-md">

								<div class="img-wrapper">

									<div class="inner-img horizontal" style="background: url('<?php echo URL ?>img/productos/smart-bites/blog/7.jpg') no-repeat top center/cover;"></div>

						      	</div>

						    </div>

						    <div class="col-sm-10 col-md">

						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">

						    		<div class="box">

						    			<div class="box-content ico-bg ico-comillas-dobles">

						    				<p class="c-negro f-medium text-justify">

						    					A mis perros les gusto mucho, tengo 6 perritos y ninguno ha tenido problemas con el alimento. Sus heces son firmes y no tuvieron problemas con el cambio de alimento. Su primer ingrediente es harina de carne de pollo, tiene 27% de proteínas y las croquetas huelen muy bien.<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>

						    				</p>

						    			</div>

						    			<div class="box-autor">

						    				<p class="c-negro f-black text-end mb-0">

						    					Minerva

						    				</p>

						    			</div>

						    			<div class="box-rating text-end mt-2">

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    			</div>

						    			<small class="c-negro f-regular text-end d-block mt-2">

					    					CACHORRO

					    				</small>

						    		</div>

						      	</div>

						    </div>

						</div>

					</div>

					<!-- 8 -->

					<div class="item col">

						<div class="row justify-content-center justify-content-md-start g-0">

							<div class="col-sm-10 col-md">

								<div class="img-wrapper">

									<div class="inner-img horizontal" style="background: url('<?php echo URL ?>img/productos/smart-bites/blog/8.jpg') no-repeat top center/cover;"></div>

						      	</div>

						    </div>

						    <div class="col-sm-10 col-md">

						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">

						    		<div class="box">

						    			<div class="box-content ico-bg ico-comillas-dobles">

						    				<p class="c-negro f-medium text-justify">

						    					A mis cachorros de pastor alemán les encantó este alimento. Lo recomiendo mucho por la calidad y sobre todo el precio.<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>

						    				</p>

						    			</div>

						    			<div class="box-autor">

						    				<p class="c-negro f-black text-end mb-0">

						    					Rodrigo

						    				</p>

						    			</div>

						    			<div class="box-rating text-end mt-2">

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    			</div>

						    			<small class="c-negro f-regular text-end d-block mt-2">

					    					CACHORRO

					    				</small>

						    		</div>

						      	</div>

						    </div>

						</div>

					</div>

					<!-- 9 -->

					<div class="item col">

						<div class="row justify-content-center justify-content-md-start g-0">

							<div class="col-sm-10 col-md">

								<div class="img-wrapper">

									<div class="inner-img horizontal" style="background: url('<?php echo URL ?>img/productos/smart-bites/blog/9.jpg') no-repeat top center/cover;"></div>

						      	</div>

						    </div>

						    <div class="col-sm-10 col-md">

						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">

						    		<div class="box">

						    			<div class="box-content ico-bg ico-comillas-dobles">

						    				<p class="c-negro f-medium text-justify">

						    					Buena relación calidad-precio. A mis perros parece gustarles lo suficiente. Las croquetas son de tamaño pequeño por lo que perros de talla chica no tendrán problema. La cantidad de proteína y otros valores es buena.<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>

						    				</p>

						    			</div>

						    			<div class="box-autor">

						    				<p class="c-negro f-black text-end mb-0">

						    					Luz

						    				</p>

						    			</div>

						    			<div class="box-rating text-end mt-2">

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="far fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    			</div>

						    			<small class="c-negro f-regular text-end d-block mt-2">

					    					ADULTO

					    				</small>

						    		</div>

						      	</div>

						    </div>

						</div>

					</div>

					<!-- 10 -->

					<div class="item col">

						<div class="row justify-content-center justify-content-md-start g-0">

							<div class="col-sm-10 col-md">

								<div class="img-wrapper">

									<div class="inner-img horizontal" style="background: url('<?php echo URL ?>img/productos/smart-bites/blog/10.jpg') no-repeat top center/cover;"></div>

						      	</div>

						    </div>

						    <div class="col-sm-10 col-md">

						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">

						    		<div class="box">

						    			<div class="box-content ico-bg ico-comillas-dobles">

						    				<p class="c-negro f-medium text-justify">

						    					Buen producto, lo acepto bien mi dogo de burdeos. Heces firmes y sin olor. No se ha enflacado y su pelo bastante bien. En general lo recomiendo.<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>

						    				</p>

						    			</div>

						    			<div class="box-autor">

						    				<p class="c-negro f-black text-end mb-0">

						    					Carlos

						    				</p>

						    			</div>

						    			<div class="box-rating text-end mt-2">

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    			</div>

						    			<small class="c-negro f-regular text-end d-block mt-2">

					    					ADULTO

					    				</small>

						    		</div>

						      	</div>

						    </div>

						</div>

					</div>

					<!-- 11 -->

					<div class="item col">

						<div class="row justify-content-center justify-content-md-start g-0">

							<div class="col-sm-10 col-md">

								<div class="img-wrapper">

									<div class="inner-img horizontal" style="background: url('<?php echo URL ?>img/productos/smart-bites/blog/11.jpg') no-repeat top center/cover;"></div>

						      	</div>

						    </div>

						    <div class="col-sm-10 col-md">

						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">

						    		<div class="box">

						    			<div class="box-content ico-bg ico-comillas-dobles">

						    				<p class="c-negro f-medium text-justify">

						    					Excelente producto, los perros en muy buena condición, pelo brillante, heces firmes, muy activos.<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>

						    				</p>

						    			</div>

						    			<div class="box-autor">

						    				<p class="c-negro f-black text-end mb-0">

						    					Bernardo

						    				</p>

						    			</div>

						    			<div class="box-rating text-end mt-2">

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    			</div>

						    			<small class="c-negro f-regular text-end d-block mt-2">

					    					ADULTO

					    				</small>

						    		</div>

						      	</div>

						    </div>

						</div>

					</div>

					<!-- 12 -->

					<div class="item col">

						<div class="row justify-content-center justify-content-md-start g-0">

							<div class="col-sm-10 col-md">

								<div class="img-wrapper">

									<div class="inner-img horizontal" style="background: url('<?php echo URL ?>img/productos/smart-bites/blog/12.jpg') no-repeat top center/cover;"></div>

						      	</div>

						    </div>

						    <div class="col-sm-10 col-md">

						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">

						    		<div class="box">

						    			<div class="box-content ico-bg ico-comillas-dobles">

						    				<p class="c-negro f-medium text-justify">

						    					A mis mascotas les encantó esta croqueta, sin mencionar que está a un buen precio. Sin duda la volvería a comprar.<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>

						    				</p>

						    			</div>

						    			<div class="box-autor">

						    				<p class="c-negro f-black text-end mb-0">

						    					Guadalupe

						    				</p>

						    			</div>

						    			<div class="box-rating text-end mt-2">

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    				<i class="far fa-star fa-fw fa-xl" style="color: #ffc400;"></i>

						    			</div>

						    			<small class="c-negro f-regular text-end d-block mt-2">

					    					ADULTO

					    				</small>

						    		</div>

						      	</div>

						    </div>

						</div>

					</div>

				</div>

			</section>



		</main>



   		<?php require_once (TEMPLATES_FOOTER); ?>



  		<script async src="<?php echo URL ?>js/products.js"></script>

  		<script src="<?php echo URL ?>js/jquery.paroller.js"></script>

		<script>

            $(".paroller-text-bottom-top").paroller({

                factor: 		0.3,            // multiplier for scrolling speed and offset

                type: 			'foreground',     // background, foreground

                direction: 		'vertical', // vertical, horizontal

                transition: 	'transform 0.2s ease' // CSS transition, added on elements where type:'foreground'

            });

            $(".paroller-text-left-right").paroller({

            	factor: -0.4,

                factorXs: 0.1,

				factorSm: 0.1,

				factorMd: -0.4,

				factorLg: -0.5,

                type: 			'foreground',     // background, foreground

                direction: 		'horizontal', // vertical, horizontal

                transition: 	'transform 0.2s ease' // CSS transition, added on elements where type:'foreground'

            });

            $(".paroller-text-right-left").paroller({

                factor: -0.2,            // multiplier for scrolling speed and offset

                factorXs: -0.2,          // multiplier for scrolling speed and offset if window width is <576px

                factorSm: -0.1,          // multiplier for scrolling speed and offset if window width is <=768px

                factorMd: -0.1,          // multiplier for scrolling speed and offset if window width is <=1024px

                factorLg: -0.1,

                type: 			'foreground',     // background, foreground

                direction: 		'horizontal', // vertical, horizontal

                transition: 	'transform 0.2s ease' // CSS transition, added on elements where type:'foreground'

            });

            $(".paroller-img-right-left").paroller({

                factor: 		-0.1,            // multiplier for scrolling speed and offset

                type: 			'background',     // background, foreground

                direction: 		'vertical', // vertical, horizontal

                transition: 	'transform 0.2s ease' // CSS transition, added on elements where type:'foreground'

            });

            $('[data-paroller-factor]').paroller();

		</script>

	</body>

</html>