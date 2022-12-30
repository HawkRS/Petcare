<?php	require_once('./core/controllers/AdminController.php');	$LandingVariables = AdminController::LandingPage();
	$title 							= "Inicio";
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

	require_once (TEMPLATES_HEAD); ?>
		<!--<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>-->
		<link rel="preload stylesheet" href="<?php echo URL; ?>css/home.css" as="style" type="text/css" crossorigin="anonymous">
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
	</head>

	<?php require_once (TEMPLATES_PRELOADER); ?>

	<body id="homepage" class="ov-x-h">

		<?php require_once (TEMPLATES_API_FACEBOOK); ?>

		<?php require_once ('templates/header-v2.php'); ?>

		<main class="ov-x-h">
		<?php
			/*<section id="slider-home" class="slider-general slider-general-v1 d-flex justify-content-center align-items-end align-items-md-center jumbotron" data-paroller-factor="0.5" data-paroller-factor-xs="0.2">
				<div class="container-fluid">
					<div class="row justify-content-center justify-content-md-end">
						<div class="col-11 col-md-6 col-xl-5 col-xxl-4">
							<div class="box animatedParent pb-4 pb-md-0 pt-5" data-sequence="1000">
								<div class="box-title animated bounceIn" data-id="1">
									<h1 class="c-blanco f-black mb-3"><span class="d-xl-block">Nutrición</span> para una vida mejor.</h1>
								</div>
								<div class="box-content animated fadeInDownShort" data-id="2">
									<p class="c-blanco f-regular">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, quo facere natus sapiente similique dolor, sed! Sed ducimus et, maxime!
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>*/ ?>

			<div id="carouselHome" class="carousel slider-general slider-general-v2 slide ov-h position-relative zi-1" data-bs-ride="carousel">
				<div class="carousel-indicators">
				    <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				    <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
				    <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
			  	<div class="carousel-inner">
			    	<div id="slider-home-1" class="carousel-item jumbotron active" data-paroller-factor="0.3" data-paroller-factor-xs="0.4">
			    	<?php
				    	/*<picture>
				    		<source
				    			srcset="<?php echo URL; ?>img/sliders/banner-home-1-desktop.jpg"
				    			data-srcset="<?php echo URL; ?>img/sliders/banner-home-1-desktop.jpg"
				    			type="image/jpeg"
				    			media="(min-width: 1200px)">
				    		<source
				    			srcset="<?php echo URL; ?>img/sliders/banner-home-1-1200.jpg"
				    			data-srcset="<?php echo URL; ?>img/sliders/banner-home-1-1200.jpg"
				    			type="image/jpeg"
				    			media="(min-width: 992px)">
				    		<source
				    			src="<?php echo URL; ?>img/sliders/banner-home-1-992.jpg"
				    			data-src="<?php echo URL; ?>img/sliders/banner-home-1-992.jpg"
				    			type="image/jpeg"
				    			media="(min-width: 768px)">
				    		<source
				    			src="<?php echo URL; ?>img/sliders/banner-home-1-768.jpg"
				    			data-src="<?php echo URL; ?>img/sliders/banner-home-1-768.jpg"
				    			type="image/jpeg"
				    			media="(min-width: 576px)">
				    		<source
				    			src="<?php echo URL; ?>img/sliders/banner-home-1-banner-home-1-576.jpg"
				    			data-src="<?php echo URL; ?>img/sliders/banner-home-1-banner-home-1-576.jpg"
				    			type="image/jpeg"
				    			media="(max-width: 575px)">
				    		<img
				    			src="<?php echo URL; ?>img/sliders/banner-home-1-desktop.jpg"
				    			data-src="<?php echo URL; ?>img/sliders/banner-home-1-desktop.jpg"
				    			class="lazyload w-100 d-block"
				    			alt="<?php echo WEBSITE; ?> Slide 1">
						</picture>*/ ?>
				      	<div class="container-fluid">
							<div class="row">
						    	<div class="col-11 offset-md-2 col-md-8 offset-xl-6 col-xl-5 offset-xxl-8 col-xxl-4 pe-xxl-5 position-relative">
							      	<div class="box block-1 pt-4 pt-lg-0 pb-5 pb-lg-0">
							      		<div class="box-title" data-animation="animated bounceIn delay-500 go">
													<?php if(isset($LandingVariables)){?>
														<h1 class="c-blanco f-black mb-3"><?php echo utf8_encode($LandingVariables[0]->value) ?></h1>
													<?php } else {	?>
														<h1 class="c-blanco f-black mb-3"><span class="d-xl-block">Nutrición</span> para una vida en amor</h1>
													<?php } ?>
												</div>
												<div class="box-content" data-animation="animated fadeInDownShort delay-1000 go">
														<?php if(!isset($LandingVariables)){?>
															<p class="c-blanco f-regular">
																Estamos comprometidos para brindarle salud y bienestar a nuestras mascotas a través de alimentos de calidad, elaborados con la experiencia de 45 años en nutrición animal y con todo el amor que se merecen.
															</p>
														<?php } else {	?>
															<p class="c-blanco f-regular"><?php echo utf8_encode($LandingVariables[1]->value) ?> </p>
														<?php } ?>
												</div>
							      	</div>
								</div>
							</div>
						</div>
			    	</div>
			    	<div id="slider-home-2" class="carousel-item jumbotron" data-paroller-factor="0.3" data-paroller-factor-xs="0.4">
				      	<div class="container-fluid">
							<div class="row">
						    	<div class="col-11 offset-md-2 col-md-8 offset-xl-6 col-xl-5 offset-xxl-8 col-xxl-4 pe-xxl-5 position-relative">
							      	<div class="box block-1 pt-4 pt-lg-0 pb-5 pb-lg-0 animatedParent">
										<div class="box-title" data-animation="animated bounceIn delay-500 go">
											<?php if(!isset($LandingVariables)){?>
												<h1 class="c-blanco f-black mb-3"><span class="d-xl-block">Alimentos</span> seguros de alta calidad</h1>
											<?php } else {	?>
												<h1 class="c-blanco f-black mb-3"><?php echo utf8_encode($LandingVariables[2]->value) ?></h1>
											<?php } ?>
										</div>
										<div class="box-content" data-animation="animated fadeInDownShort delay-1000 go">
												<?php if(!isset($LandingVariables)){?>
													<p class="c-blanco f-regular">
															En VIMIFOS® contamos con un Sistema de Gestión Integral conforme a estrictos estándares de calidad y normas internacionales, que soportan a la línea Pet Care gracias a la Certificación en Seguridad Alimentaria FSSC 22000 en planta El Salto (Food Safety System Certification), la cual nos dirige a trabajar con un nuevo enfoque en la gestión de riesgos de inocuidad alimentaria en toda la cadena de suministro.
													</p>
												<?php } else {	?>
													<p class="c-blanco f-regular"><?php echo utf8_encode($LandingVariables[3]->value) ?> </p>
												<?php } ?>
										</div>
										<div class="box-logos d-flex align-items-sm-center" data-animation="animated fadeInDownShort delay-1250 go">
											<img
												src="<?php echo URL; ?>img/sliders/certif_GlobalSTD.png"
												data-src="<?php echo URL; ?>img/sliders/certif_GlobalSTD.png"
				    							class="lazyload img-fluid"
				    							width="136"
				    							height="70"
												alt="certificado Global STD">
											<img
												src="<?php echo URL; ?>img/sliders/certif_FSSC.png"
												data-src="<?php echo URL; ?>img/sliders/certif_FSSC.png"
				    							class="lazyload img-fluid"
				    							width="136"
				    							height="70"
												alt="certificado FSSC">
										</div>
							      	</div>
								</div>
							</div>
						</div>
			    	</div>
			    	<div id="slider-home-3" class="carousel-item jumbotron" data-paroller-factor="0.3" data-paroller-factor-xs="0.4">
				      	<div class="container-fluid">
							<div class="row">
						    	<div class="col-11 offset-md-2 col-md-8 offset-xl-6 col-xl-5 offset-xxl-8 col-xxl-4 pe-xxl-3 position-relative">
							      	<div class="box block-1 pt-4 pt-lg-0 pb-5 pb-lg-0 animatedParent">
							      		<div class="box-title" data-animation="animated bounceIn delay-500 go">
													<?php if(!isset($LandingVariables)){?>
														<h1 class="c-blanco f-black mb-3"><span class="d-xl-block">Confianza</span> y versatilidad</h1>
													<?php } else {	?>
														<h1 class="c-blanco f-black mb-3"><?php echo utf8_encode($LandingVariables[4]->value) ?></h1>
													<?php } ?>
										</div>
										<div class="box-content" data-animation="animated fadeInDownShort delay-1000 go">
											<?php if(!isset($LandingVariables)){?>
												<p class="c-blanco f-regular">
													Trabajamos día a día para atender las necesidades de nuestros clientes, buscando siempre brindar la mejor experiencia a través del desarrollo de nuevas tecnologías que nos lleven a mantener felices a nuestro motor principal: los animales de compañía.
												</p>
											<?php } else {	?>
												<p class="c-blanco f-regular"><?php echo utf8_encode($LandingVariables[5]->value) ?> </p>
											<?php } ?>
										</div>
							      	</div>
								</div>
							</div>
						</div>
			    	</div>
				</div>
				<button class="carousel-control-prev d-none d-xl-block" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next d-none d-xl-block" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				</button>
			</div>

		<?php
			/*<section class="slider-encabezado bg-white position-relative zi-1">
				<div class="container-fluid">
					<div class="box">
						<div class="box-title animatedParent">
							<h1 class="c-azul-2 f-bold d-flex justify-content-center align-items-center animated fadeInDownShort"><span class="line-azul-2">Nuestros productos</span></h1>
						</div>
					</div>
				</div>
			</section>*/ ?>

			<section id="productos-home" class="bg-white">
				<div id="disenio-producto-smart-bites" class="disenio-producto disenio-producto-1 position-relative" onClick="document.location='<?php echo URL; ?>smart-bites'">
					<div class="container-fluid h-100">
						<div class="row h-100">
							<div class="col-6 col-md-4 position-relative zi-3 order-1 d-none d-md-block">
								<div class="box block-1">
									<div class="box-img"
										data-paroller-factor="0.2"
										data-paroller-factor-xs="0.4"
										data-paroller-type="foreground"
										data-paroller-direction="horizontal"
										data-paroller-transition="transform .1s linear">
										<picture>
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/smart_bites_neuro_active_adulto.webp" type="image/webp">
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/smart_bites_neuro_active_adulto.png" type="image/png">
										  	<img
										  		src="<?php echo URL ?>admin/img/home/productos/smart_bites_neuro_active_adulto.png"
										  		data-src="<?php echo URL ?>admin/img/home/productos/smart_bites_neuro_active_adulto.png"
										  		class="lazyload mx-auto d-block"
										  		width="460"
										  		height="460"
										  		alt="Producto Smart Bites®">
										</picture>
									</div>
								</div>
							</div>
							<div class="col-12 g-0 g-sm-4 col-sm-11 col-md-4 mt-3 mt-md-4 mt-lg-3 order-3 order-md-2 position-relative">
								<div class="circle-top position-absolute start-50 translate-middle"></div>
								<div class="box block-2 pb-3 pb-sm-0 text-center position-relative animatedParent">
									<div class="box-img">
										<lottie-player src="<?php echo URL ?>img/lottiefiles/logo-smartbites.json" background="transparent" speed="1" loop autoplay style="height:199px;"></lottie-player>
									</div>
									<div class="box-content mt-5 mb-3 mb-md-4 pe-xl-4 pe-xxl-5 ps-xl-4 ps-xxl-5">
										<?php if(!isset($LandingVariables)){?>
											<p class="c-gris-3 f-medium mb-0">
												<span class="f-black">Smart Bites®</span> es el alimento ideal para asegurar el bienestar y la salud que tu mascota necesita. Contiene <span class="f-black">NeuroACTIVE®</span> con ingredientes especiales que le benefician específicamente para cada etapa de su vida.<br>
												Nutrirlo con <span class="f-black">Smart Bites®</span>, es nutrirlo con <span class="f-black">Smart Love®</span>.
											</p>
										<?php } else {	?>
											<p class="c-gris-3 f-medium mb-0"><?php echo utf8_encode($LandingVariables[6]->value) ?></p>
										<?php } ?>
									</div>
									<div class="box-img-mobile d-md-none">
										<picture>
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/composite_smartbites.webp" type="image/webp">
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/composite_smartbites.jpg" type="image/jpeg">
										  	<img
										  		src="<?php echo URL ?>admin/img/home/productos/composite_smartbites.jpg"
										  		data-src="<?php echo URL ?>admin/img/home/productos/composite_smartbites.jpg"
										  		class="lazyload img-fluid animated bounceIn delay-250 slowest"
										  		width="382"
										  		height="250"
										  		alt="">
										</picture>
									</div>
									<div class="box-link text-center">
										<a rel="noopener" class="ico-tienda-header-v2 ico-header-v2 d-inline-block c-rojo-1 h-c-negro" href="<?php echo URL; ?>cerca-de-ti/comprar-en-linea">
						                  	<span class="fa-stack fa-2x">
						                    	<i class="fas fa-circle fa-stack-2x"></i>
						                    	<i class="fas fa-cart-shopping fa-stack-1x fa-header-v2 c-blanco h-c-blanco"></i>
						                  	</span>
						                </a>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 position-relative zi-3 order-2 order-md-3 d-none d-md-block position-relative">
								<div class="box-img-top">
									<img
										src="<?php echo URL ?>img/home/productos/logo-smart-love.svg"
										data-src="<?php echo URL ?>img/home/productos/logo-smart-love.svg"
										class="lazyload mx-auto d-block"
										width="252"
										height="65"
										alt="Logo Smart love">
								</div>
								<div class="box block-3">
									<div class="box-img"
										data-paroller-factor="-0.1"
										data-paroller-type="foreground"
										data-paroller-direction="horizontal"
										data-paroller-transition="transform .1s linear">
										<picture>
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/perro-smart-bites.webp" type="image/webp">
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/perro-smart-bites.png" type="image/png">
										  	<img
										  		src="<?php echo URL ?>admin/img/home/productos/perro-smart-bites.png"
										  		data-src="<?php echo URL ?>admin/img/home/productos/perro-smart-bites.png"
										  		class="lazyload"
										  		width="339"
										  		height="420"
										  		alt="Producto Smart Bites®">
										</picture>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="disenio-producto-titan" class="disenio-producto disenio-producto-2 position-relative" onClick="document.location='<?php echo URL; ?>titan'">
					<div class="container-fluid h-100">
						<div class="row h-100">
							<div class="col-6 col-md-4 position-relative zi-4 order-2 order-md-1 mt-2 mt-md-3">
								<div class="box block-1">
									<div class="box-img d-flex justify-content-start align-items-end"
										data-paroller-factor="0.2"
										data-paroller-factor-xs="0.4"
										data-paroller-type="foreground"
										data-paroller-direction="horizontal"
										data-paroller-transition="transform .1s linear">
										<picture>
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/titan-perro.webp" type="image/webp">
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/titan-perro.png" type="image/png">
										  	<img
										  		src="<?php echo URL ?>admin/img/home/productos/titan-perro.png"
										  		data-src="<?php echo URL ?>admin/img/home/productos/titan-perro.png"
										  		id="costal-titan-perro"
										  		class="lazyload costal"
										  		width="258"
										  		height="450"
										  		alt="Producto Titán® perro">
										</picture>
										<picture>
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/perro-titan.webp" type="image/webp">
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/perro-titan.png" type="image/png">
										  	<img
										  		src="<?php echo URL ?>admin/img/home/productos/perro-titan.png"
										  		data-src="<?php echo URL ?>admin/img/home/productos/perro-titan.png"
										  		id="titan-left-perro"
										  		class="lazyload"
										  		width="235"
										  		height="330"
										  		alt="">
										</picture>
									</div>
								</div>
							</div>
							<div class="col-12 g-0 g-sm-4 col-sm-11 col-md-4 mt-0 mt-sm-4 mt-lg-3 order-1">
								<div class="circle-bottom position-absolute start-50 translate-middle"></div>
								<div class="box block-2 text-center position-relative animatedParent">
									<div class="box-img pt-4 pt-sm-0">
										<lottie-player src="<?php echo URL ?>img/lottiefiles/logo-titan.json" background="transparent" speed="1" loop autoplay style="height:165px;"></lottie-player>
									</div>
									<div class="box-content mt-4 mb-4 pe-xl-4 pe-xxl-5 ps-xl-4 ps-xxl-5">
										<?php if(!isset($LandingVariables)){?>
											<p class="c-negro f-medium mb-0">
												<span class="f-black">Titán®</span> es <span class="f-black">salud al mejor precio.</span><br>
												Formulado con los mejores nutrientes para mantener a tu mascota sana de adentro hacia afuera.
											</p>
										<?php } else {	?>
											<p class="c-gris-3 f-medium mb-0"><?php echo utf8_encode($LandingVariables[7]->value) ?></p>
										<?php } ?>
									</div>
									<div class="box-link text-center">
										<a rel="noopener" class="ico-tienda-header-v2 ico-header-v2 d-inline-block c-rojo-1 h-c-negro" href="<?php echo URL; ?>cerca-de-ti/comprar-en-linea">
						                  	<span class="fa-stack fa-2x">
						                    	<i class="fas fa-circle fa-stack-2x"></i>
						                    	<i class="fas fa-cart-shopping fa-stack-1x fa-header-v2 c-blanco h-c-blanco"></i>
						                  	</span>
						                </a>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 position-relative order-2 order-md-3 zi-3">
								<div class="box block-3">
									<div class="box-img d-flex justify-content-start align-items-end"
										data-paroller-factor="0.2"
										data-paroller-factor-xs="0.4"
										data-paroller-type="foreground"
										data-paroller-direction="horizontal"
										data-paroller-transition="transform .1s linear">
										<picture>
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/gato-titan.webp" type="image/webp">
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/gato-titan.png" type="image/png">
										  	<img
										  		src="<?php echo URL ?>admin/img/home/productos/gato-titan.png"
										  		data-src="<?php echo URL ?>admin/img/home/productos/gato-titan.png"
										  		id="titan-right-gato"
										  		class="lazyload position-relative"
										  		width="450"
										  		height="300"
										  		alt="">
										</picture>
										<picture>
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/titan-gato.webp" type="image/webp">
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/titan-gato.png" type="image/png">
										  	<img
										  		src="<?php echo URL ?>admin/img/home/productos/titan-gato.png"
										  		data-src="<?php echo URL ?>admin/img/home/productos/titan-gato.png"
										  		id="costal-titan-gato"
										  		class="lazyload costal"
										  		width="252"
										  		height="450"
										  		alt="Producto Titán® gato">
										</picture>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="disenio-producto-rocko" class="disenio-producto disenio-producto-2 v1 position-relative ov-h" onClick="document.location='<?php echo URL; ?>rocko'">
					<div class="container-fluid h-100">
						<div class="row h-100">
							<div class="col-6 col-md-4 position-relative zi-6 order-2 order-md-1 mt-2 mt-md-3">
								<div class="box block-1">
									<div class="box-img d-flex justify-content-start align-items-end"
										data-paroller-factor="0.2"
										data-paroller-factor-xs="0.4"
										data-paroller-type="foreground"
										data-paroller-direction="horizontal"
										data-paroller-transition="transform .1s linear">
										<picture>
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/perro-rocko.webp" type="image/webp">
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/perro-rocko.png" type="image/png">
										  	<img
										  		src="<?php echo URL ?>admin/img/home/productos/perro-rocko.png"
										  		data-src="<?php echo URL ?>admin/img/home/productos/perro-rocko.png"
										  		id="rocko-left-perro"
										  		class="lazyload"
										  		width="235"
										  		height="330"
										  		alt="">
										</picture>
										<picture>
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/rocko-plus-complete.webp" type="image/webp">
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/rocko-plus-complete.png" type="image/png">
										  	<img
										  		src="<?php echo URL ?>admin/img/home/productos/rocko-plus-complete.png"
										  		data-src="<?php echo URL ?>admin/img/home/productos/rocko-plus-complete.png"
										  		id="costal-rocko-complete"
										  		class="lazyload costal"
										  		width="259"
										  		height="450"
										  		alt="Producto Rocko Plus® complete perro">
										</picture>
									</div>
								</div>
							</div>
							<div class="col-12 g-0 g-sm-4 col-sm-11 col-md-4 mt-0 mt-sm-4 mt-lg-3 order-1 position-relative zi-5">
								<div class="circle-bottom position-absolute start-50 translate-middle"></div>
								<div class="box block-2 text-center position-relative animatedParent">
									<div class="box-img pt-5 pt-sm-0">
										<lottie-player src="<?php echo URL ?>img/lottiefiles/logo-rocko.json" background="transparent" speed="1" loop autoplay class="animated bounceInDown delay-500 slowest mt-5 mt-md-3 mt-lg-0 mb-2 mb-md-0 position-relative" style="left: -34px;"></lottie-player>
									</div>
									<div class="box-content mt-lg-4 mb-4 pe-xl-4 pe-xxl-5 ps-xl-4 ps-xxl-5">
										<?php if(!isset($LandingVariables)){?>
											<p class="c-negro f-medium mb-2">
												<span class="f-black">Rocko Plus®</span> es el alimento que brinda una nutrición completa y balanceada para perros adultos.
											</p>
											<p class="c-negro f-medium mb-0">
												Calidad Plus al mejor precio para ver a tu can <span class="f-black">¡Radiante y Feliz!®</span>
											</p>
										<?php } else {	?>
											<p class="c-negro f-medium mb-2">
												<?php echo utf8_encode($LandingVariables[8]->value) ?>
											</p>
											<p class="c-negro f-medium mb-0">
												<?php echo utf8_encode($LandingVariables[9]->value) ?>
											</p>
										<?php } ?>

									</div>
									<div class="box-link text-center">
										<a rel="noopener" class="ico-tienda-header-v2 ico-header-v2 d-inline-block c-rojo-1 h-c-negro" href="<?php echo URL; ?>cerca-de-ti/comprar-en-linea">
						                  	<span class="fa-stack fa-2x">
						                    	<i class="fas fa-circle fa-stack-2x"></i>
						                    	<i class="fas fa-cart-shopping fa-stack-1x fa-header-v2 c-blanco h-c-blanco"></i>
						                  	</span>
						                </a>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 position-relative order-2 order-md-3 zi-5">
								<div class="box block-3">
									<div class="box-img d-flex justify-content-start align-items-end"
										data-paroller-factor="0.2"
										data-paroller-factor-xs="0.4"
										data-paroller-type="foreground"
										data-paroller-direction="horizontal"
										data-paroller-transition="transform .1s linear">
										<picture>
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/rocko-perro.webp" type="image/webp">
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/rocko-perro.png" type="image/png">
										  	<img
										  		src="<?php echo URL ?>admin/img/home/productos/rocko-perro.png"
										  		data-src="<?php echo URL ?>admin/img/home/productos/rocko-perro.png"
										  		id="costal-rocko-plus"
										  		class="lazyload costal"
										  		width="326"
										  		height="455"
										  		alt="Producto Rocko Plus® perro">
										</picture>
										<picture>
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/perro-rocko-cafe.webp" type="image/webp">
										  	<source srcset="<?php echo URL ?>admin/img/home/productos/perro-rocko-cafe.png" type="image/png">
										  	<img
										  		src="<?php echo URL ?>admin/img/home/productos/perro-rocko-cafe.png"
										  		data-src="<?php echo URL ?>admin/img/home/productos/perro-rocko-cafe.png"
										  		id="rocko-right-perro-cafe"
										  		class="lazyload"
										  		width=""
										  		height=""
										  		alt="">
										</picture>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php /*<div id="disenio-producto-rocko" class="disenio-producto disenio-producto-3 v2 position-relative" onClick="document.location='<?php echo URL; ?>rocko'">
					<div class="container-fluid h-100 ov-h">
						<div class="row h-100 d-flex justify-content-center align-items-center">
							<div class="col-12 col-sm-11 col-md-4 ov-h">
								<div class="box block-1 h-100 d-flex justify-content-center align-items-center flex-column mb-3 mb-md-5 mb-lg-0">
									<div class="box-img animatedParent">
										<lottie-player src="<?php echo URL ?>img/lottiefiles/logo-rocko.json" background="transparent" speed="1" loop autoplay class="animated bounceInDown delay-500 slowest"></lottie-player>
									</div>
									<div class="box-link text-center mt-md-1 mt-lg-4 zi-5">
										<a rel="noopener" class="ico-tienda-header-v2 ico-header-v2 d-inline-block c-rojo-1 h-c-negro" href="<?php echo URL; ?>cerca-de-ti/comprar-en-linea">
						                  	<span class="fa-stack fa-2x">
						                    	<i class="fas fa-circle fa-stack-2x"></i>
						                    	<i class="fas fa-cart-shopping fa-stack-1x fa-header-v2 c-blanco h-c-blanco"></i>
						                  	</span>
						                </a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-5 col-xl-4 position-relative">
								<div class="full-circle position-absolute translate-middle"></div>
								<div class="box block-2 position-relative zi-2">
									<div class="box-img d-flex justify-content-center align-items-center">
										<picture>
										  	<source srcset="<?php echo URL ?>img/home/productos/rocko-perro.webp" type="image/webp">
										  	<source srcset="<?php echo URL ?>img/home/productos/rocko-perro.png" type="image/png">
										  	<img
										  		src="<?php echo URL ?>img/home/productos/rocko-perro.png"
										  		data-src="<?php echo URL ?>img/home/productos/rocko-perro.png"
										  		id="costal-rocko-perro"
										  		class="lazyload"
										  		width="373"
										  		height="520"
										  		alt="Producto Rocko Plus®">
										</picture>
										<picture>
										  	<source srcset="<?php echo URL ?>img/home/productos/perro-rocko.webp" type="image/webp">
										  	<source srcset="<?php echo URL ?>img/home/productos/perro-rocko.png" type="image/png">
										  	<img
										  		src="<?php echo URL ?>img/home/productos/perro-rocko.png"
										  		data-src="<?php echo URL ?>img/home/productos/perro-rocko.png"
										  		id="perro-sobre-costal-rocko"
										  		class="lazyload"
										  		width="219"
										  		height="315"
										  		alt="">
										</picture>
									</div>
								</div>
							</div>
							<div class="col-11 offset-sm-1 col-sm-8 offset-md-0 col-md-3 mt-4 mt-lg-3 ov-h">
								<div class="box block-3 paroller-text-bottom-top">
									<div class="box-content mt-5 mb-4 mb-sm-5">
										<p class="c-blanco f-medium mb-5">
											<span class="f-black">Rocko Plus®</span> es el alimento que brinda una nutrición completa y balanceada para perros adultos.
										</p>
										<p class="c-blanco f-medium">
											Calidad Plus al mejor precio para ver a tu can <span class="f-black">¡Radiante y Feliz!®</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>*/ ?>
			</section>

			<section id="encuentra-su-alimento" class="ov-h">
				<div id="top-encuentra-su-alimento" class="container-lg container-box bg-cual-es-el-alimento-idea-para-mascota">
					<div class="box block-1">
						<div class="row justify-content-center justify-content-md-start">
							<div class="col-12 col-sm-11 col-md-8 col-lg-7 col-xl-5 col-xxl-6">
								<div class="box-title animatedParent">
									<h2 class="c-azul-4 f-black mb-4 text-center text-sm-start animated fadeInDownShort">¿Conoces cuál es el alimento ideal para tu mascota?</h2>
								</div>
							</div>
						</div>
						<div class="row justify-content-center justify-content-md-start">
							<div class="col-sm-10 col-md-5 col-xl-4 col-xxl-3">
								<div class="box-form animatedParent" data-sequence="400">
									<div class="form-floating animated bounceInUp" data-id="1">
									  	<select class="form-select" id="floatingSelectEspecie" aria-label="Especie">
									  		<option value="" selected>Selecciona una opción</option>
										    <option value="Perro">Perro</option>
										    <option value="Gato">Gato</option>
									  	</select>
									  	<label for="floatingSelectEspecie" class="c-blanco f-bold text-uppercase bg-azul-4">Especie</label>
									</div>
								<?php
									/*<div class="form-floating animated bounceInUp" data-id="2">
									  	<select class="form-select" id="floatingSelectUbicacion" aria-label="Ubicación">
									  		<option>Selecciona una opción</option>
									  		<option value="Aguascalientes">Aguascalientes</option>
									  		<option value="Chiapas">Chiapas</option>
									  		<option value="Chihuahua">Chihuahua</option>
									  		<option value="Coahuila">Coahuila</option>
									  		<option value="Hidalgo">Hidalgo</option>
									  		<option value="Jalisco">Jalisco</option>
									  		<option value="CDMX-EDOMEX">CDMX Y Área Metropolitana</option>
									  		<option value="Michoacán">Michoacán</option>
									  		<option value="Morelos">Morelos</option>
										    <option value="Nayarit">Nayarit</option>
										    <option value="Nuevo León">Nuevo León</option>
										    <option value="Puebla">Puebla</option>
										    <option value="Querétaro">Querétaro</option>
										    <option value="San Luis Potosí">San Luis Potosí</option>
										    <option value="Sonora">Sonora</option>
										    <option value="Tlaxcala">Tlaxcala</option>
										    <option value="Veracruz">Veracruz</option>
									  	</select>
									  	<label for="floatingSelectUbicacion" class="c-blanco f-bold text-uppercase bg-azul-4">Ubicación</label>
									</div>*/ ?>
									<div class="form-floating animated bounceInUp" data-id="3">
									  	<select class="form-select" id="floatingSelectEtapa" aria-label="Etapa">
									  		<option value="" selected>Selecciona una especie primero</option>
									  	</select>
									  	<label for="floatingSelectEtapa" class="c-blanco f-bold text-uppercase bg-azul-4">Etapa</label>
									</div>
									<div class="form-floating animated bounceInUp" data-id="4">
									  	<select class="form-select" id="floatingSelectNutricion" aria-label="Nutrición">
									  		<option value="" selected>Selecciona una etapa primero</option>
									  	</select>
									  	<label for="floatingSelectNutricion" class="c-blanco f-bold text-uppercase bg-azul-4">Nutrición</label>
									</div>
									<button type="button" class="btn btn-danger btn-encontrar text-center text-uppercase f-bold mx-auto d-block d-md-inline-block mt-4">ENCONTRAR</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="bottom-encuentra-su-alimento-ancla" class="pt-5 mt-4 ov-h"></div>
				<div id="bottom-encuentra-su-alimento" class="container-lg"></div>
				<!--<div id="bottom-encuentra-su-alimento" class="container">
					<div class="row justify-content-center">
						<div class="col-md-9 col-lg-8 col-xl-6 mb-4">
							<div class="box block-2">
								<div class="box-title">
									<h4 class="c-azul-4 f-black mb-3 text-center text-sm-start">Te recomendamos el siguiente producto</h4>
								</div>
								<div class="d-sm-flex text-center align-items-sm-center">
									<div class="box-img me-sm-4 mb-4 mb-sm-0">
										<img src="http://vimifos_petcare.test/img/home/Rocko Plus.png" height="250" alt="">
									</div>
									<div class="box-result">
										<p class="c-gris-9 f-medium text-center">Rocko Plus</p>
										<div class="btn-group">
											<a rel="noopener" href="http://vimifos_petcare.test/rocko/adulto" class="btn btn-primary f-bold text-uppercase active" aria-current="page">Conoce más</a>
											<a rel="noopener" href="http://vimifos_petcare.test/cerca-de-ti/comprar-en-linea" class="btn btn-danger f-bold text-uppercase">COMPRA AHORA</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-12 col-xxl-10">
							<div class="box block-2">
								<div class="box-title">
									<h5 class="c-blanco bg-azul-4 p-2 mt-0 mb-4 f-medium text-center text-md-start">Otros relacionados</h5>
								</div>
							</div>
						</div>
						<div class="col-md-9 col-lg-8 col-xl-6 mb-4 mb-xl-0">
							<div class="box block-2">
								<div class="d-sm-flex text-center align-items-sm-center">
									<div class="box-img me-sm-4 mb-4 mb-sm-0">
										<img src="http://vimifos_petcare.test/img/home/Rocko Plus.png" height="250" alt="">
									</div>
									<div class="box-result">
										<p class="c-gris-9 f-medium text-center">Titán Perro</p>
										<div class="btn-group">
											<a rel="noopener" href="http://vimifos_petcare.test/rocko/adulto" class="btn btn-primary f-bold text-uppercase active" aria-current="page">Conoce más</a>
											<a rel="noopener" href="http://vimifos_petcare.test/cerca-de-ti/comprar-en-linea" class="btn btn-danger f-bold text-uppercase">COMPRA AHORA</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-9 col-lg-8 col-xl-6">
							<div class="box block-2">
								<div class="d-sm-flex text-center align-items-sm-center">
									<div class="box-img me-sm-4 mb-4 mb-sm-0">
										<img src="http://vimifos_petcare.test/img/home/Rocko Plus.png" height="250" alt="">
									</div>
									<div class="box-result">
										<p class="c-gris-9 f-medium text-center">Smart Bites Adulto</p>
										<div class="btn-group">
											<a rel="noopener" href="http://vimifos_petcare.test/rocko/adulto" class="btn btn-primary f-bold text-uppercase active" aria-current="page">Conoce más</a>
											<a rel="noopener" href="http://vimifos_petcare.test/cerca-de-ti/comprar-en-linea" class="btn btn-danger f-bold text-uppercase">COMPRA AHORA</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>-->

			</section>

			<div class="modal fade" id="modalCamposVacios" tabindex="-1" aria-labelledby="modalLabelCamposVacios" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
				    <div class="modal-content">
					    <div class="modal-header bg-azul-4">
					        <h5 class="modal-title c-blanco f-bold" id="modalLabelCamposVacios">Notificacion</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					    </div>
					    <div class="modal-body c-negro f-medium">
					        Es necesario llenar todos los campos del formulario.
					    </div>
				    </div>
				</div>
			</div>

		</main>

   		<?php require_once (TEMPLATES_FOOTER); ?>

		<script async src="<?php echo URL ?>js/home.js"></script>
		<script src="<?php echo URL ?>js/jquery.paroller.js"></script>
		<script>
            $(".paroller-text-bottom-top").paroller({
                factor: 0.2,            // multiplier for scrolling speed and offset
                factorXs: -0.2,          // multiplier for scrolling speed and offset if window width is <576px
                factorMd: -0.1,          // multiplier for scrolling speed and offset if window width is <=1024px
                factorLg: 0.5,
                type: 			'foreground',     // background, foreground
                direction: 		'vertical', // vertical, horizontal
                transition: 	'transform 0.1s ease' // CSS transition, added on elements where type:'foreground'
            });
            $(".paroller-text-left-right").paroller({
                factor: 0.3,            // multiplier for scrolling speed and offset
                factorXs: -0.1,          // multiplier for scrolling speed and offset if window width is <576px
                factorSm: -0.2,          // multiplier for scrolling speed and offset if window width is <=768px
                factorMd: 0.3,          // multiplier for scrolling speed and offset if window width is <=1024px
                factorLg: 0.3,
                type: 			'foreground',     // background, foreground
                direction: 		'horizontal', // vertical, horizontal
                transition: 	'transform 0.2s ease' // CSS transition, added on elements where type:'foreground'
            });
            $(".paroller-text-right-left").paroller({
                factor: 		0.10,            // multiplier for scrolling speed and offset
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