<?php
	$title 							= "Rocko Plus®";
	$description 					= "";
	$key 							= "";
	$fec_modificacion 				= "";
	$url 							= "rocko";
	$url_mobil 						= 'rocko-phone';
	$id 							= 3;
	$header_position 				= 'sticky-top';// fixed-top | sticky-top
	$header_version 				= 2;//1 = Sin fondo inicial | 2 = Con fondo
	$header_logo_format 			= 'svg';// png | svg
	$header_icon_a 					= 'c-azul-6 h-c-rojo-1';
	$header_icon_i 					= 'c-blanco h-c-blanco';
	$header_icon_a_tienda 			= 'c-blanco h-c-azul-6';
	$header_icon_i_tienda 			= 'c-rojo-1 h-c-blanco';
	$header_mobile_icon_a_tienda 	= 'c-rojo-1 h-c-azul-6';
	$header_mobile_icon_i_tienda 	= 'c-blanco h-c-blanco';
	$footer_top 					= 'bg-azul-5';
	$footer_bottom 					= 'bg-azul-1';
	$footer_icon_a 					= 'c-blanco h-c-rojo-1';
	$footer_icon_i 					= 'c-azul-1 h-c-blanco';

	require_once (TEMPLATES_HEAD); ?>
		<link rel="preload stylesheet" href="<?php echo URL; ?>css/products.css" as="style" type="text/css" crossorigin="anonymous">
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

	<body id="productspage" class="product-page-titan ov-x-h">

		<?php require_once (TEMPLATES_API_FACEBOOK); ?>

		<?php require_once ('templates/header-v2.php'); ?>

		<main class="ov-x-h">
			<section id="productos-slider" class="productos-slider-v2 bg-white pt-4 pb-4">
				<div class="container">
					<div class="box">
						<div class="box-img">
							<picture>
							  	<source srcset="<?php echo URL ?>img/productos/rocko/banner.webp" type="image/webp">
							  	<source srcset="<?php echo URL ?>img/productos/rocko/banner.png" type="image/png">
							  	<img
							  		src="<?php echo URL ?>img/productos/rocko/banner.png"
							  		data-src="<?php echo URL ?>img/productos/rocko/banner.png"
							  		class="lazyload img-fluid m-0-a"
							  		width=""
							  		height=""
							  		alt="Slider Titán®">
							</picture>
						</div>
						<div class="box-content mt-4">
							<p class="c-negro f-bold text-justify mb-3">
								Rocko Plus® es el alimento que brinda una nutrición completa y balanceada para perros adultos. Calidad Plus al mejor precio para ver a tu can ¡Radiante y Feliz!®
							</p>
						</div>
					</div>
				</div>
			</section>

			<section id="productos-card" class="productos-card-v2 bg-verde-8">
				<div class="row row-cols-1 g-0">
					<div class="col">
						<div class="row">
							<div class="mx-auto col-md-9 col-lg-8 col-xl-7 col-xxl-6">
								<div class="card p-relative">
								    <div class="card-body" data-paroller-factor="0.1" data-paroller-type="foreground">
								    	<picture>
										  	<source srcset="<?php echo URL ?>img/productos/rocko/render_bolsa_adulto_RP.webp" type="image/webp">
										  	<source srcset="<?php echo URL ?>img/productos/rocko/render_bolsa_adulto_RP.png" type="image/png">
										  	<img
										  		src="<?php echo URL ?>img/productos/rocko/render_bolsa_adulto_RP.png"
										  		data-src="<?php echo URL ?>img/productos/rocko/render_bolsa_adulto_RP.png"
										  		class="lazyload img-fluid m-0-a mt-3"
										  		width="313"
										  		height="400"
										  		alt="Presentacion Rocko Plus® perro ADULTO">
										</picture>
								      	<h4 class="card-title c-blanco f-black text-center text-uppercase mt-5 mb-3">
								      		Lorem ipsum dolor sit amet
								      	</h4>
								      	<p class="card-text c-blanco f-medium text-justify mb-0">
								      		Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quas, tenetur aperiam blanditiis sequi similique vitae voluptatibus dolorem et dicta, pariatur neque cum maxime impedit excepturi corrupti veritatis. Voluptatum, vero.
								      	</p>
								      	<div class="card-content mt-4">
								      		<div class="d-flex justify-content-center mb-3">
								      			<div class="card-icon">
								      				<i class="fas fa-dog fa-fw fa-3x c-blanco me-2"></i>
			 					      			</div>
								      			<div class="card-description">
								      				<h5 class="c-blanco f-black mb-0 fs-6">Edad</h5>
								      				<p class="c-blanco f-medium fs-6">Adulto</p>
								      			</div>
								      		</div>
								      		<div class="d-flex justify-content-center mb-3">
								      			<div class="card-icon">
								      				<i class="fas fa-dog fa-fw fa-3x c-blanco me-2"></i>
			 					      			</div>
								      			<div class="card-description ms-2 me-3">
								      				<h5 class="c-blanco f-black mb-0 fs-6">Presentaciones</h5>
								      				<p class="c-blanco f-medium fs-6">20 y 25 kg</p>
								      			</div>
								      			<div class="card-link">
								      				<a rel="noopener" class="d-block c-rojo-1 h-c-rojo-6" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tienda">
										                <span class="fa-stack fa-xl">
										                  	<i class="fas fa-circle fa-border" style="font-size: 2.15em;--fa-border-color: #fff; --fa-border-padding: 0; --fa-border-radius: 100%; --fa-border-width: 0.05em;"></i>
										                  	<i class="fas fa-cart-shopping fa-stack-1x c-blanco h-c-blanco" style="line-height: 2.37;"></i>
										                </span>
										            </a>
								      			</div>
								      		</div>
								      	</div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="productos-beneficios" class="bg-white pt-5">
				<div id="top-productos-beneficios">
					<div class="container">
						<?php require_once ('views/productos/rocko/perro.php'); ?>
					</div>
				</div>
			</section>

			<section id="slider-productos-blog-testimoniales" class="slider-encabezado bg-white ov-h">
				<div class="container">
					<div class="box">
						<div class="box-title animatedParent">
							<h1 class="c-negro f-black d-flex justify-content-center align-items-center text-uppercase animated fadeInDownShort delay-750">Testimoniales</h1>
						</div>
					</div>
				</div>
			</section>

			<section id="productos-blog-testimoniales" class="bg-white animatedParent">
				<div class="row row-cols-1 row-cols-lg-2 g-3 animated bounceIn delay-1000">
					<div class="col">
						<div class="row g-0">
							<div class="col-4">
								<div class="img-wrapper">
									<picture>
									  	<source srcset="<?php echo URL ?>img/productos/blog/376x432.webp" type="image/webp">
									  	<source srcset="<?php echo URL ?>img/productos/blog/376x432.png" type="image/png">
									  	<img
									  		src="<?php echo URL ?>img/productos/blog/376x432.png"
									  		data-src="<?php echo URL ?>img/productos/blog/376x432.png"
									  		class="lazyload w-100 inner-img"
									  		width=""
									  		height=""
									  		alt="Blog testimoniales 1">
									</picture>
						      	</div>
						    </div>
						    <div class="col-8">
						    	<div class="img-wrapper">
						    		<picture>
									  	<source srcset="<?php echo URL ?>img/productos/blog/822x432.webp" type="image/webp">
									  	<source srcset="<?php echo URL ?>img/productos/blog/822x432.png" type="image/png">
									  	<img
									  		src="<?php echo URL ?>img/productos/blog/822x432.png"
									  		data-src="<?php echo URL ?>img/productos/blog/822x432.png"
									  		class="lazyload w-100 inner-img"
									  		width=""
									  		height=""
									  		alt="Blog testimoniales 2">
									</picture>
						      	</div>
						    </div>
						</div>
					</div>
					<div class="col">
						<div class="row g-0">
							<div class="col-4">
								<div class="img-wrapper">
									<picture>
									  	<source srcset="<?php echo URL ?>img/productos/blog/376x432.webp" type="image/webp">
									  	<source srcset="<?php echo URL ?>img/productos/blog/376x432.png" type="image/png">
									  	<img
									  		src="<?php echo URL ?>img/productos/blog/376x432.png"
									  		data-src="<?php echo URL ?>img/productos/blog/376x432.png"
									  		class="lazyload w-100 inner-img"
									  		width=""
									  		height=""
									  		alt="Blog testimoniales 3">
									</picture>
						      	</div>
						    </div>
						    <div class="col-8">
						    	<div class="img-wrapper">
						    		<picture>
									  	<source srcset="<?php echo URL ?>img/productos/blog/822x432.webp" type="image/webp">
									  	<source srcset="<?php echo URL ?>img/productos/blog/822x432.png" type="image/png">
									  	<img
									  		src="<?php echo URL ?>img/productos/blog/822x432.png"
									  		data-src="<?php echo URL ?>img/productos/blog/822x432.png"
									  		class="lazyload w-100 inner-img"
									  		width=""
									  		height=""
									  		alt="Blog testimoniales 4">
									</picture>
						      	</div>
						    </div>
						</div>
					</div>
					<div class="col">
						<div class="row g-0">
							<div class="col-4">
								<div class="img-wrapper">
									<picture>
									  	<source srcset="<?php echo URL ?>img/productos/blog/376x432.webp" type="image/webp">
									  	<source srcset="<?php echo URL ?>img/productos/blog/376x432.png" type="image/png">
									  	<img
									  		src="<?php echo URL ?>img/productos/blog/376x432.png"
									  		data-src="<?php echo URL ?>img/productos/blog/376x432.png"
									  		class="lazyload w-100 inner-img"
									  		width=""
									  		height=""
									  		alt="Blog testimoniales 5">
									</picture>
						      	</div>
						    </div>
						    <div class="col-8">
						    	<div class="img-wrapper">
						    		<picture>
									  	<source srcset="<?php echo URL ?>img/productos/blog/822x432.webp" type="image/webp">
									  	<source srcset="<?php echo URL ?>img/productos/blog/822x432.png" type="image/png">
									  	<img
									  		src="<?php echo URL ?>img/productos/blog/822x432.png"
									  		data-src="<?php echo URL ?>img/productos/blog/822x432.png"
									  		class="lazyload w-100 inner-img"
									  		width=""
									  		height=""
									  		alt="Blog testimoniales 6">
									</picture>
						      	</div>
						    </div>
						</div>
					</div>
					<div class="col">
						<div class="row g-0">
							<div class="col-4">
								<div class="img-wrapper">
									<picture>
									  	<source srcset="<?php echo URL ?>img/productos/blog/376x432.webp" type="image/webp">
									  	<source srcset="<?php echo URL ?>img/productos/blog/376x432.png" type="image/png">
									  	<img
									  		src="<?php echo URL ?>img/productos/blog/376x432.png"
									  		data-src="<?php echo URL ?>img/productos/blog/376x432.png"
									  		class="lazyload w-100 inner-img"
									  		width=""
									  		height=""
									  		alt="Blog testimoniales 7">
									</picture>
						      	</div>
						    </div>
						    <div class="col-8">
						    	<div class="img-wrapper">
						    		<picture>
									  	<source srcset="<?php echo URL ?>img/productos/blog/822x432.webp" type="image/webp">
									  	<source srcset="<?php echo URL ?>img/productos/blog/822x432.png" type="image/png">
									  	<img
									  		src="<?php echo URL ?>img/productos/blog/822x432.png"
									  		data-src="<?php echo URL ?>img/productos/blog/822x432.png"
									  		class="lazyload w-100 inner-img"
									  		width=""
									  		height=""
									  		alt="Blog testimoniales 8">
									</picture>
						      	</div>
						    </div>
						</div>
					</div>
				</div>
			</section>

		</main>

   		<?php require_once (TEMPLATES_FOOTER); ?>

  		<script src="<?php echo URL ?>js/products.js"></script>
  		<script src="<?php echo URL ?>js/jquery.paroller.js"></script>
		<script>
            $(".paroller-text-bottom-top").paroller({
                factor: 		0.3,            // multiplier for scrolling speed and offset
                type: 			'foreground',     // background, foreground
                direction: 		'vertical', // vertical, horizontal
                transition: 	'transform 0.2s ease' // CSS transition, added on elements where type:'foreground'
            });
            $(".paroller-text-left-right").paroller({
                factorXs: 0.1,
				factorSm: 0.1,
				factorMd: -0.4,
				factorLg: -0.5,
				factorXl: -0.6,
				factor: -0.4,
                type: 			'foreground',     // background, foreground
                direction: 		'horizontal', // vertical, horizontal
                transition: 	'transform 0.2s ease' // CSS transition, added on elements where type:'foreground'
            });
            $(".paroller-text-right-left").paroller({
                factor: 0.4,            // multiplier for scrolling speed and offset
                factorXs: -0.1,          // multiplier for scrolling speed and offset if window width is <576px
                factorSm: -0.2,          // multiplier for scrolling speed and offset if window width is <=768px
                factorMd: 0.3,          // multiplier for scrolling speed and offset if window width is <=1024px
                factorLg: 0.3,
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