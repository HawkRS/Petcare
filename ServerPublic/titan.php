<?php
	require_once('./core/controllers/AdminController.php');	$LandingVariables = AdminController::Titan();
	$title 							= "Titán®";
	$description 					= "";
	$key 							= "";
	$fec_modificacion 				= "";
	$url 							= "titan";
	$url_mobil 						= 'titan-phone';
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
    	case 2://GATO
    		$bg_color_tab_active 			= "#e2b6eb;";
    		break;
    	default://PERRO
    		$bg_color_tab_active 			= "#99d9a3;";
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

	<body id="productspage" class="product-page-titan ov-x-h">

		<?php require_once (TEMPLATES_API_FACEBOOK); ?>

		<?php require_once ('templates/header-v2.php'); ?>

		<div class="overay"></div>
		<div class="bg-patron-naranja position-absolute w-100 jumbotron" data-paroller-factor="0.3" data-paroller-factor-xs="0.2"></div>

		<main class="ov-x-h">
			<section id="productos-slider" class="productos-slider-v1 position-relative animatedParent" data-appear-top-offset="-300" data-sequence="1000">
				<div class="full-circle position-absolute start-50 translate-middle"></div>
				<div id="productos-slider-top">
					<div class="container g-0 position-relative h-100">
						<div class="box block-1">
							<div class="box-img">
								<lottie-player src="<?php echo URL ?>img/lottiefiles/logo-titan.json" background="transparent" speed="1" loop autoplay class="position-absolute translate-middle" data-id="2"></lottie-player>
								<?php /*<picture>
								  	<source srcset="<?php echo URL ?>img/productos/titan/gato/logo.webp" type="image/webp">
								  	<source srcset="<?php echo URL ?>img/productos/titan/gato/logo.png" type="image/png">
								  	<img src="<?php echo URL ?>img/productos/titan/gato/logo.png"
								  		data-src="<?php echo URL ?>img/productos/titan/gato/logo.png"
								  		class="lazyload img-fluid position-absolute start-50 translate-middle"
								  		data-id="2"
								  		width="201"
								  		height="100"
								  		alt="Logo Smart Bites®">
								</picture>*/ ?>
							</div>
						</div>
						<div class="box block-2">
							<div class="box-img">
								<picture id="img-parallax-1" class="position-absolute">
								  	<source srcset="<?php echo URL ?>admin/img/productos/titan/titan-perro.webp" type="image/webp">
									<source srcset="<?php echo URL ?>admin/img/productos/titan/titan-perro.png" type="image/png">
								  	<img
								  		src="<?php echo URL ?>admin/img/productos/titan/titan-perro.png"
										data-src="<?php echo URL ?>admin/img/productos/titan/titan-perro.png"
								  		class="lazyload animated fadeInDownShort slowest"
								  		data-id="2"
								  		width="287"
								  		height="500"
								  		alt="Parallax Titán® saco 1">
								</picture>
								<picture id="img-parallax-2" class="position-absolute">
								  	<source srcset="<?php echo URL ?>admin/img/productos/titan/perro_gato.webp" type="image/webp">
								  	<source srcset="<?php echo URL ?>admin/img/productos/titan/perro_gato.png" type="image/png">
								  	<img
								  		src="<?php echo URL ?>admin/img/productos/titan/perro_gato.png"
								  		data-src="<?php echo URL ?>admin/img/productos/titan/perro_gato.png"
								  		class="lazyload animated fadeInRightShort slowest"
								  		data-id="3"
								  		width="269"
								  		height="370"
								  		alt="Parallax Titán® perro y gato">
								</picture>
								<picture id="img-parallax-3" class="position-absolute">
								  	<source srcset="<?php echo URL ?>admin/img/productos/titan/titan-gato.webp" type="image/webp">
								  	<source srcset="<?php echo URL ?>admin/img/productos/titan/titan-gato.png" type="image/png">
								  	<img
								  		src="<?php echo URL ?>admin/img/productos/titan/titan-gato.png"
								  		data-src="<?php echo URL ?>admin/img/productos/titan/titan-gato.png"
								  		class="lazyload animated fadeInUpShort"
								  		data-id="2"
								  		width="305"
								  		height="500"
								  		alt="Parallax Titán® saco 2">
								</picture>
							</div>
						</div>
					</div>
				</div>
				<div id="productos-slider-bottom">
					<div class="container g-0 position-relative zi-1 h-100">
						<div class="box block-1 mt-2 mt-sm-4">
							<div class="box-content">

								<p class="c-gris-3 text-center mb-4">
								<?php if(isset($LandingVariables)){?>
									<?php echo utf8_encode($LandingVariables[0]->value) ?>
								<?php } else {	?>
										<span class="f-black">Titán®</span> es el alimento para tu súper mascota que lo mantendrá sano de adentro hacia afuera. Ahora con <span class="f-black">NutriPOW®</span> compuesto por prebióticos, probióticos y sus ingredientes en conjunto que le dan la nutrición que necesita para ser tu súper héroe favorito y estar fuerte en todo momento.
								<?php } ?>
							</p>



								<p class="c-gris-3 text-center mb-4">
									<?php if(isset($LandingVariables)){?>
										<?php echo utf8_encode($LandingVariables[1]->value) ?>
									<?php } else {	?>
											Una mascota <span class="f-black">Titán®</span> es una mascota sana.
									<?php } ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="productos-card" class="productos-card-v1 position-relative">
				<div class="row row-cols-1 row-cols-md-2 g-0 justify-content-center animatedParent" data-sequence="800">
					<div id="card-1" class="col p-0 position-relative animated fadeIn" data-id="1">
					    <div class="card h-100 bg-verde-4">
							<div class="card-header">
								<h2 class="c-blanco f-black text-center text-uppercase">
						      		PERRO
						      	</h2>
							</div>
						    <div class="card-body">
						    	<div class="d-flex align-items-center">
							    	<picture class="position-relative" style="left: -45px;">
									  	<source srcset="<?php echo URL ?>admin/img/productos/titan/perro/render_bolsa_adulto_TT_perro.webp" type="image/webp">
									  	<source srcset="<?php echo URL ?>admin/img/productos/titan/perro/render_bolsa_adulto_TT_perro.png" type="image/png">
									  	<img
									  		src="<?php echo URL ?>admin/img/productos/titan/perro/render_bolsa_adulto_TT_perro.png"
									  		data-src="<?php echo URL ?>admin/img/productos/titan/perro/render_bolsa_adulto_TT_perro.png"
									  		class="lazyload mx-auto d-block mt-3"
									  		width="229"
									  		height="400"
									  		alt="Presentacion Titan® perro ADULTO">
									</picture>
									<picture class="position-relative" style="left: -85px;">
									  	<source srcset="<?php echo URL ?>admin/img/productos/titan/perro/perro.webp" type="image/webp">
									  	<source srcset="<?php echo URL ?>admin/img/productos/titan/perro/perro.png" type="image/png">
									  	<img
									  		src="<?php echo URL ?>admin/img/productos/titan/perro/perro.png"
									  		data-src="<?php echo URL ?>admin/img/productos/titan/perro/perro.png"
									  		class="lazyload mx-auto d-block mt-3"
									  		width="228"
									  		height="400"
									  		alt="Presentacion Titan® perro ADULTO 2">
									</picture>
								</div>
						      	<h4 class="card-title c-blanco f-black text-center text-uppercase mt-5 mb-3">
						      		ENERGÍA EXPLOSIVA
						      	</h4>
						      	<p class="card-text c-blanco f-medium text-center mb-2">
						      		Titán® es el alimento para tu perro, formulado con los nutrientes necesarios para estar fuerte y sano en todo momento.
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
										  		alt="Icono Etapa">
	 					      			</div>
						      			<div class="card-description col-10 col-sm-5 col-md-8 col-xl-7 col-xxl-8">
						      				<h5 class="c-blanco f-black mb-0 fs-6">Etapa</h5>
						      				<p class="c-blanco f-medium fs-6">
														<?php if(isset($LandingVariables)){?>
															<?php echo utf8_encode($LandingVariables[2]->value) ?>
														<?php } else {	?>
																Adulto
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
																2, 4, 15 y 25 kg
														<?php } ?>
													</p>
						      			</div>
						      			<div class="card-link col-12 col-xxl-2 text-center text-xxl-end">
						      				<a rel="noopener" class="d-block c-rojo-1 h-c-rojo-6" href="<?php echo URL; ?>cerca-de-ti/comprar-en-linea" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tienda">
								                <span class="fa-stack fa-xl">
								                  	<i class="fas fa-circle fa-border" style="font-size: 2.15em;--fa-border-color: #fff; --fa-border-padding: 0; --fa-border-radius: 100%; --fa-border-width: 0.05em;"></i>
								                  	<i class="fas fa-cart-shopping fa-stack-1x c-blanco h-c-blanco" style="line-height: 2.37;"></i>
								                </span>
								            </a>
						      			</div>
						      			<h2 class="c-blanco f-light text-center text-uppercase">
								      		<span class="d-block fs-6 mt-3">Autorización A-1522-405</span>
								      	</h2>
						      		</div>
						      	</div>
						    </div>
						</div>
					</div>
					<div id="card-2" class="col p-0 position-relative animated fadeIn" data-id="2">
					    <div class="card h-100 bg-morado-1">
							<div class="card-header">
								<h2 class="c-blanco f-black text-center text-uppercase">
						      		GATO
						      	</h2>
							</div>
						    <div class="card-body">
						    	<picture>
								  	<source srcset="<?php echo URL ?>admin/img/productos/titan/gato/cat_prod.webp" type="image/webp">
								  	<source srcset="<?php echo URL ?>admin/img/productos/titan/gato/cat_prod.png" type="image/png">
								  	<img
								  		src="<?php echo URL ?>admin/img/productos/titan/gato/cat_prod.png"
								  		data-src="<?php echo URL ?>admin/img/productos/titan/gato/cat_prod.png"
								  		class="lazyload img-fluid mx-auto d-block mt-3"
								  		width="466"
								  		height="410"
								  		alt="Presentacion Titan® gato ADULTO">
								</picture>
						      	<h4 class="card-title c-blanco f-black text-center text-uppercase mt-5 mb-3">
						      		VISIÓN NOCTURNA
						      	</h4>
						      	<p class="card-text c-blanco f-medium text-center mb-2">
						      		Titán® Gato es el alimento para tu encantador felino que le da la energía y salud que necesita para su vida activa.
						      	</p>
						      	<div class="card-content mt-4">
						      		<div class="row g-3 g-md-2 g-xl-0 justify-content-center mb-3">
						      			<div class="card-icon col-2 col-md-3 text-center">
						      				<i class="fas fa-cat fa-fw fa-3x c-blanco"></i>
	 					      			</div>
						      			<div class="card-description col-10 col-sm-5 col-md-8 col-xl-7 col-xxl-8">
						      				<h5 class="c-blanco f-black mb-0 fs-6">Etapa</h5>
						      				<p class="c-blanco f-medium fs-6">
														<?php if(isset($LandingVariables)){?>
															<?php echo utf8_encode($LandingVariables[4]->value) ?>
														<?php } else {	?>
																Adulto
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
										  		alt="Icono Etapa">
	 					      			</div>
						      			<div class="card-description col-10 col-sm-5 col-md-8 col-xl-7 col-xxl-6">
						      				<h5 class="c-blanco f-black mb-0 fs-6">Presentaciones</h5>
						      				<p class="c-blanco f-medium fs-6">
														<?php if(isset($LandingVariables)){?>
															<?php echo utf8_encode($LandingVariables[5]->value) ?>
														<?php } else {	?>
																15 kg
														<?php } ?>
													</p>
						      			</div>
						      			<div class="card-link col-12 col-xxl-2 text-center text-xxl-end">
						      				<a rel="noopener" class="d-block c-rojo-1 h-c-rojo-6" href="<?php echo URL; ?>cerca-de-ti/comprar-en-linea" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tienda">
								                <span class="fa-stack fa-xl">
								                  	<i class="fas fa-circle fa-border" style="font-size: 2.15em;--fa-border-color: #fff; --fa-border-padding: 0; --fa-border-radius: 100%; --fa-border-width: 0.05em;"></i>
								                  	<i class="fas fa-cart-shopping fa-stack-1x c-blanco h-c-blanco" style="line-height: 2.37;"></i>
								                </span>
								            </a>
						      			</div>
						      			<h2 class="c-blanco f-light text-center text-uppercase">
								      		<span class="d-block fs-6 mt-3">Autorización A-1522-562</span>
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
						<ul class="nav nav-tabs nav-tabs-v3 verde-4 justify-content-center animatedParent" data-sequence="1000" id="myTab" role="tablist">
							<li class="nav-item animated growIn" data-id="1" role="presentation">
							    <button class="nav-link nav-link-smart-bites c-blanco h-c-verde-4<?php if($id_tab == 0 || $id_tab == 1){ echo(" active"); } ?>" id="perro-tab" data-bs-toggle="tab" data-bs-target="#perro" type="button" role="tab" aria-controls="perro" aria-selected="true" data-color="99d9a3">PERRO</button>
							</li>
							<li class="nav-item animated growIn" data-id="2" role="presentation">
							    <button class="nav-link nav-link-smart-bites c-blanco h-c-morado-1<?php if($id_tab == 2){ echo(" active"); } ?> animatedClick" id="gato-tab" data-bs-toggle="tab" data-bs-target="#gato" type="button" role="tab" aria-controls="gato" aria-selected="false" data-color="e2b6eb" data-target="clickTab2" data-sequence="1000">GATO</button>
							</li>
						</ul>
						<div class="tab-content tab-content-v1 mt-5 pe-sm-4 pe-sm-0 ps-sm-4 ps-sm-0" id="tabBeneficios">

							<?php require_once ('views/productos/titan/perro.php'); ?>

						  	<?php require_once ('views/productos/titan/gato-v3.php'); ?>
						</div>
					</div>
				</div>
			</section>

			<section id="slider-productos-blog-testimoniales" class="slider-encabezado pt-5 bg-rojo-1 ov-h">
				<div class="container animatedParent">
					<div class="box animated fadeInDownShort delay-750">
						<div class="box-title">
							<h1 class="c-blanco f-black text-center">Su salud es muy importante</h1>
						</div>
						<div class="box-content">
							<p class="c-blanco f-medium text-center">¡Conoce la experiencia de la comunidad Titán®!</p>
						</div>
					</div>
				</div>
			</section>

			<section id="productos-blog-testimoniales" class="bg-rojo-1">
				<div class="owl-carousel owl-theme owl-blog">
					<div class="item col">
						<div class="row justify-content-center justify-content-md-start g-0">
							<div class="col-sm-10 col-md">
								<div class="img-wrapper">
									<div class="inner-img horizontal" style="background: url('<?php echo URL ?>img/productos/titan/blog/1.jpg') no-repeat top center/cover;"></div>
						      	</div>
						    </div>
						    <div class="col-sm-10 col-md">
						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">
						    		<div class="box">
						    			<div class="box-content ico-bg ico-comillas-dobles">
						    				<p class="c-negro f-medium text-justify">
						    					Es un buen producto nacional que le gusto a mi mascota y que cumple con mi expectativa; es un buen producto y sobre todo considerando el costo/beneficio.
						    					<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>
						    				</p>
						    			</div>
						    			<div class="box-autor">
						    				<p class="c-negro f-black text-end mb-0">
						    					Julián
						    				</p>
						    			</div>
						    			<div class="box-rating text-end mt-2">
						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    			</div>
						    		</div>
						      	</div>
						    </div>
						</div>
					</div>
					<div class="item col">
						<div class="row justify-content-center justify-content-md-start g-0">
							<div class="col-sm-10 col-md">
								<div class="img-wrapper">
									<div class="inner-img horizontal" style="background: url('<?php echo URL ?>img/productos/titan/blog/2.jpg') no-repeat top center/cover;"></div>
						      	</div>
						    </div>
						    <div class="col-sm-10 col-md">
						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">
						    		<div class="box">
						    			<div class="box-content ico-bg ico-comillas-dobles">
						    				<p class="c-negro f-medium text-justify">
						    					Buen producto, las heces las hace bien, se le cae menos el cabello.
						    					<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>
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
						    				<i class="far fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    			</div>
						    		</div>
						      	</div>
						    </div>
						</div>
					</div>
					<div class="item col">
						<div class="row justify-content-center justify-content-md-start g-0">
							<div class="col-sm-10 col-md">
								<div class="img-wrapper">
									<div class="inner-img horizontal" style="background: url('<?php echo URL ?>img/productos/titan/blog/3.jpg') no-repeat top center/cover;"></div>
						      	</div>
						    </div>
						    <div class="col-sm-10 col-md">
						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">
						    		<div class="box">
						    			<div class="box-content ico-bg ico-comillas-dobles">
						    				<p class="c-negro f-medium text-justify">
						    					Muy buen producto! la relación calidad-precio es justa! mis peludos están contentos!
						    					<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>
						    				</p>
						    			</div>
						    			<div class="box-autor">
						    				<p class="c-negro f-black text-end mb-0">
						    					Mariana
						    				</p>
						    			</div>
						    			<div class="box-rating text-end mt-2">
						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    			</div>
						    		</div>
						      	</div>
						    </div>
						</div>
					</div>
					<div class="item col">
						<div class="row justify-content-center justify-content-md-start g-0">
							<div class="col-sm-10 col-md">
								<div class="img-wrapper">
									<div class="inner-img horizontal" style="background: url('<?php echo URL ?>img/productos/titan/blog/4.jpg') no-repeat top center/cover;"></div>
						      	</div>
						    </div>
						    <div class="col-sm-10 col-md">
						    	<div class="txt-wrapper bg-white h-100 pe-3 pe-sm-4 ps-2 ps-md-4 pt-5 pt-sm-4 pb-4 d-flex justify-content-center align-items-center position-relative">
						    		<div class="box">
						    			<div class="box-content ico-bg ico-comillas-dobles">
						    				<p class="c-negro f-medium text-justify">
						    					Excelente producto, sus heces muy firmes y buena consistencia, no son aguadas ni duras cómo rocas, pero si firmes y se recogen muy bien, ya se le cae menos el pelo, y al otro perro que tengo de pelo negro se le está pidiendo el pelo brilloso.
						    					<span class="d-inline-flex"><img src="<?php echo URL ?>img/comillas.svg" width="30" height="30" alt=""></span>
						    				</p>
						    			</div>
						    			<div class="box-autor">
						    				<p class="c-negro f-black text-end mb-0">
						    					Jessica
						    				</p>
						    			</div>
						    			<div class="box-rating text-end mt-2">
						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    				<i class="fas fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    				<i class="far fa-star fa-fw fa-xl" style="color: #ffc400;"></i>
						    			</div>
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