<?php
	require_once('./core/controllers/AdminController.php');	$LandingVariables = AdminController::SmartBitesGato();
	$title 							= "Smart Bites® Gato";

	$description 					= "";

	$key 							= "";

	$fec_modificacion 				= "";

	$url 							= "smart-bites/gato";

	$url_mobil 						= 'smart-bites/gato-phone';

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

    	case 1://ADULTO

    		$bg_color_tab_active 			= "#DD9B00;";

    		break;

    	default://ADULTO

    		$bg_color_tab_active 			= "#DD9B00;";

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



	<body id="productspage" class="product-page-smart-bites gato ov-x-h">



		<?php require_once (TEMPLATES_API_FACEBOOK); ?>



		<?php require_once ('templates/header-v2.php'); ?>



		<div class="overay"></div>

		<div class="bg-patron-rojo position-absolute w-100 jumbotron" data-paroller-factor="0.3" data-paroller-factor-xs="0.2"></div>


		<main class="ov-x-h">

			<section id="productos-slider" class="productos-slider-v1 position-relative animatedParent" data-appear-top-offset="-300" data-sequence="1000">

				<div class="full-circle position-absolute start-50 translate-middle"></div>
				<div onClick="document.location='<?php echo URL; ?>smart-bites'" class="link-flotante btn-perro"></div>

				<div id="productos-slider-top">

					<div class="container g-0 position-relative h-100">

						<div class="box block-1">

							<div class="box-img">

								<!--<lottie-player src="<?php echo URL ?>img/lottiefiles/logo-smartbites.json" background="transparent" speed="1" loop autoplay class="position-absolute translate-middle" data-id="2"></lottie-player>-->

								<picture>

								  	<source srcset="<?php echo URL ?>img/home/productos/smart_bites_gato_slogan.webp" type="image/webp">

								  	<source srcset="<?php echo URL ?>img/home/productos/smart_bites_gato_slogan.png" type="image/png">

								  	<img src="<?php echo URL ?>img/home/productos/smart_bites_gato_slogan.png"

								  		data-src="<?php echo URL ?>img/home/productos/smart_bites_gato_slogan.png"

								  		class="lazyload img-fluid position-absolute start-50 translate-middle"

								  		data-id="2"

								  		width="251"

								  		height="240"

								  		alt="Logo Smart Bites® Gato">

								</picture>

							</div>

						</div>

						<div class="box block-2">

							<div class="box-img">

								<picture id="img-parallax-1" class="position-absolute">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/gato/smart-bites-neuro-active-gato-adulto.webp" type="image/webp">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/gato/smart-bites-neuro-active-gato-adulto.png" type="image/png">

								  	<img

								  		src="<?php echo URL ?>admin/img/productos/smart-bites/gato/smart-bites-neuro-active-gato-adulto.png"

								  		data-src="<?php echo URL ?>admin/img/productos/smart-bites/gato/smart-bites-neuro-active-gato-adulto.png"

								  		class="lazyload animated fadeInDownShort slowest"

								  		data-id="2"

								  		width="413"

								  		height="470"

								  		alt="Parallax Smart Bites® saco 1">

								</picture>

								<picture id="img-parallax-2" class="position-absolute">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/gato/gato_beneficios.webp" type="image/webp">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/gato/gato_beneficios.png" type="image/png">

								  	<img

								  		src="<?php echo URL ?>admin/img/productos/smart-bites/gato/gato_beneficios.png"

								  		data-src="<?php echo URL ?>admin/img/productos/smart-bites/gato/gato_beneficios.png"

								  		class="lazyload animated fadeInRightShort slowest"

								  		data-id="3"

								  		width="300"

								  		height="500"

								  		alt="Parallax Smart Bites® gato">

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

				<div class="row row-cols-1 row-cols-md-3 g-0 justify-content-center animatedParent" data-sequence="800">

					<div id="card-1" class="col p-0 position-relative animated fadeIn" data-id="1">

					    <div class="card h-100 bg-azul-6">

							<div class="card-header">

								<h2 class="c-blanco f-black text-center text-uppercase">

						      		ADULTO

						      	</h2>

							</div>

						    <div class="card-body position-relative">

						    	<picture>

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/gato/smart-bites-neuro-active-gato-adulto.webp" type="image/webp">

								  	<source srcset="<?php echo URL ?>admin/img/productos/smart-bites/gato/smart-bites-neuro-active-gato-adulto.png" type="image/png">

								  	<img

								  		src="<?php echo URL ?>admin/img/productos/smart-bites/gato/smart-bites-neuro-active-gato-adulto.png"

								  		data-src="<?php echo URL ?>admin/img/productos/smart-bites/gato/smart-bites-neuro-active-gato-adulto.png"

								  		class="lazyload mx-auto d-block mt-3"

								  		width="351"

								  		height="400"

								  		alt="Presentacion Smart Bites® Gato ADULTO">

								</picture>

								<img

							  		src="<?php echo URL ?>img/productos/logo_NEURO-ACTIVE.png"

							  		data-src="<?php echo URL ?>img/productos/logo_NEURO-ACTIVE.png"

							  		class="lazyload position-absolute logo_NEURO-ACTIVE"

							  		width="137"

							  		height="120"

							  		alt="NeuroACTIVE">

						      	<p class="card-text c-blanco f-medium text-center text-uppercase mt-5 mb-2">

						      		SALUD INTEGRAL

						      	</p>

						      	<div class="card-content mt-4">

						      		<div class="row g-3 g-md-2 g-xl-0 justify-content-center mb-3">

						      			<div class="card-icon col-2 col-md-3 text-center">

						      				<i class="fas fa-cat fa-fw fa-3x c-blanco"></i>

	 					      			</div>

						      			<div class="card-description col-10 col-sm-5 col-md-8 col-xl-7 col-xxl-8">

						      				<h5 class="c-blanco f-black mb-0 fs-6">Edad</h5>

						      				<p class="c-blanco f-medium fs-6">
														<?php if(isset($LandingVariables)){?>
															<?php echo utf8_encode($LandingVariables[2]->value) ?>
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

						      				<p class="c-blanco f-medium fs-6">
														<?php if(isset($LandingVariables)){?>
															<?php echo utf8_encode($LandingVariables[3]->value) ?>
														<?php } else {	?>
															15 kg
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

								      		<span class="d-block fs-6 mt-3">Autorización A-1522-561</span>

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

						<ul class="nav nav-tabs nav-tabs-v3 verde-6 justify-content-center animatedParent" data-sequence="1000" id="myTab" role="tablist">

							<li class="nav-item animated growIn" data-id="1" role="presentation">

							    <button class="nav-link nav-link-smart-bites c-blanco h-c-azul-1<?php if($id_tab == 0 || $id_tab == 1){ echo(" active"); } ?>" id="adulto-tab" data-bs-toggle="tab" data-bs-target="#adulto" type="button" role="tab" aria-controls="adulto" aria-selected="true" data-color="DD9B00">ADULTO</button>

							</li>

						</ul>

						<div class="tab-content tab-content-v1 mt-5 pe-4 pe-sm-0 ps-4 ps-sm-0" id="tabBeneficios">


							<?php require_once ('views/productos/smart-bites/gato/adulto.php'); ?>

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