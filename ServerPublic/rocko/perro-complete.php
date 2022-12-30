<div class="tab-pane fade<?php if($id_tab == 0 || $id_tab == 1){ echo(" show active"); } ?>" id="perro-complete" role="tabpanel" aria-labelledby="perro-complete-tab">
	<div class="row justify-content-center animatedParent" data-sequence="1000">
		<div class="col-md-12 offset-lg-1 col-lg col-xl-3 order-1">
			<div class="box block-1 row justify-content-center">
				<div class="box-column col-sm-6 col-md-4 col-lg-12 animated fadeInLeftShort" data-id="1">
					<div class="box-img mb-3">
						<picture>
					  	<source srcset="<?php echo URL ?>admin/img/productos/rocko/complete/iconos/icon_pollo.webp" type="image/webp">
					  	<source srcset="<?php echo URL ?>admin/img/productos/rocko/complete/iconos/icon_pollo.png" type="image/png">
					  	<img
					  		src="<?php echo URL ?>admin/img/productos/rocko/complete/iconos/icon_pollo.png"
					  		data-src="<?php echo URL ?>admin/img/productos/rocko/complete/iconos/icon_pollo.png"
					  		class="lazyload img-fluid mx-auto d-block"
					  		width="120"
					  		height="120"
					  		alt="Con proteína de pollo">
					</picture>
					</div>
					<div class="box-title">
						<h4 class="c-blanco f-black text-center">
							<?php if(isset($LandingVariables)){?>
								<?php echo utf8_encode($LandingVariables[6]->value) ?>
							<?php } else {	?>
								Con proteína de pollo
							<?php } ?>
						</h4>
					</div>
					<div class="box-content">
						<p class="c-blanco f-medium text-center">
							<?php if(isset($LandingVariables)){?>
								<?php echo utf8_encode($LandingVariables[7]->value) ?>
							<?php } else {	?>
								Fuente principal de aminoácidos.
							<?php } ?>
						</p>
					</div>
				</div>
				<div class="box-column col-sm-6 col-md-4 col-lg-12 animated fadeInLeftShort" data-id="2">
					<div class="box-img mb-3">
						<picture>
					  	<source srcset="<?php echo URL ?>admin/img/productos/rocko/complete/iconos/icon_vitaminas.webp" type="image/webp">
					  	<source srcset="<?php echo URL ?>admin/img/productos/rocko/complete/iconos/icon_vitaminas.png" type="image/png">
					  	<img
					  		src="<?php echo URL ?>admin/img/productos/rocko/complete/iconos/icon_vitaminas.png"
					  		data-src="<?php echo URL ?>admin/img/productos/rocko/complete/iconos/icon_vitaminas.png"
					  		class="lazyload img-fluid mx-auto d-block"
					  		width="120"
					  		height="120"
					  		alt="Vitaminas y minerales esenciales">
					</picture>
					</div>
					<div class="box-title">
						<h4 class="c-blanco f-black text-center">
							<?php if(isset($LandingVariables)){?>
								<?php echo utf8_encode($LandingVariables[10]->value) ?>
							<?php } else {	?>
								Vitaminas y minerales esenciales
							<?php } ?>
						</h4>
					</div>
					<div class="box-content">
						<p class="c-blanco f-medium text-center">
							<?php if(isset($LandingVariables)){?>
								<?php echo utf8_encode($LandingVariables[11]->value) ?>
							<?php } else {	?>
								Para una nutrición completa y balanceada.
							<?php } ?>
						</p>
					</div>
				</div>
				<div class="box-column col-sm-6 col-md-4 col-lg-12 animated fadeInRightShort" data-id="3">
					<div class="box-img mb-3">
						<img
					  		src="<?php echo URL ?>admin/img/productos/rocko/complete/iconos/delicioso_sabor_icon.svg"
					  		data-src="<?php echo URL ?>admin/img/productos/rocko/complete/iconos/delicioso_sabor_icon.svg"
					  		class="lazyload img-fluid mx-auto d-block"
					  		width="120"
					  		height="120"
					  		alt="Delicioso sabor">
					</div>
					<div class="box-title">
						<h4 class="c-blanco f-black text-center">
							<?php if(isset($LandingVariables)){?>
								<?php echo utf8_encode($LandingVariables[12]->value) ?>
							<?php } else {	?>
								Delicioso sabor
							<?php } ?>
						</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 offset-lg-1 col-lg col-xl-6 order-3 order-lg-2 d-flex justify-content-center align-items-center">
			<div class="box block-2">
				<div class="box-img">
					<picture>
				  	<source srcset="<?php echo URL ?>img/productos/rocko/complete/complete_perro_beneficios.webp" type="image/webp">
				  	<source srcset="<?php echo URL ?>img/productos/rocko/complete/complete_perro_beneficios.png" type="image/png">
				  	<img
				  		src="<?php echo URL ?>img/productos/rocko/complete/complete_perro_beneficios.png"
				  		data-src="<?php echo URL ?>img/productos/rocko/complete/complete_perro_beneficios.png"
				  		class="lazyload img-fluid mx-auto d-block"
				  		width="494"
				  		height="700"
				  		alt="Tab Perro">
				</picture>
				</div>
			</div>
		</div>
	</div>
	<!-- TAB LISTA DETALLES PERRO -->
	<ul class="nav nav-tabs nav-tabs-v3 justify-content-center mt-5 mt-lg-0 verde-4 animatedParent" data-sequence="1000" id="TabListaDetallesPerro" role="tablist">
		<li class="nav-item animated growIn" data-id="1" role="presentation">
		    <button class="nav-link c-blanco h-c-verde-4 active" id="perro-rocko-complete-analisis-tab" data-bs-toggle="tab" data-bs-target="#perro-rocko-complete-analisis" type="button" role="tab" aria-controls="perro-rocko-complete-analisis" aria-selected="true">Análisis Garantizado</button>
		</li>
		<li class="nav-item animated growIn" data-id="2" role="presentation">
		    <button class="nav-link c-blanco h-c-verde-4" id="perro-rocko-complete-ingredientes-tab" data-bs-toggle="tab" data-bs-target="#perro-rocko-complete-ingredientes" type="button" role="tab" aria-controls="perro-rocko-complete-ingredientes" aria-selected="false">Ingredientes</button>
		</li>
		<li class="nav-item animated growIn" data-id="3" role="presentation">
		    <button class="nav-link c-blanco h-c-verde-4" id="perro-rocko-complete-guia-tab" data-bs-toggle="tab" data-bs-target="#perro-rocko-complete-guia" type="button" role="tab" aria-controls="perro-rocko-complete-guia" aria-selected="false">Guía de Alimentación</button>
		</li>
	</ul>
	<div class="tab-content tab-content-v1 tab-detalles p-4 animatedParent" id="TabDetallesPerro">
	  	<div class="tab-pane fade show active animated fadeInUpShort delay-1000" id="perro-rocko-complete-analisis" role="tabpanel" aria-labelledby="perro-rocko-complete-analisis-tab">
	  		<table class="table table-bordered table-hover table-analisis text-center mt-0">
				<tbody>
				    <tr>
				      	<td class="bg-azul-14">Proteína cruda, mín.</td>
				      	<td class="bg-azul-15">16.0%</td>
				    </tr>
				    <tr>
				      	<td class="bg-azul-14">Grasa cruda, mín.</td>
				      	<td class="bg-azul-15">6.0%</td>
				    </tr>
				    <tr>
				      	<td class="bg-azul-14">Fibra cruda, máx.</td>
				      	<td class="bg-azul-15">4.0%</td>
				    </tr>
				    <tr>
				      	<td class="bg-azul-14">Humedad, máx.</td>
				      	<td class="bg-azul-15">12.0%</td>
				    </tr>
				    <tr>
				      	<td class="bg-azul-14">Cenizas, máx.</td>
				      	<td class="bg-azul-15">9.0%</td>
				    </tr>
				</tbody>
			</table>
			<p class="c-blanco f-black text-center mt-4">Autorización A-1522-614</p>
	  	</div>
	  	<div class="tab-pane fade" id="perro-rocko-complete-ingredientes" role="tabpanel" aria-labelledby="perro-rocko-complete-ingredientes-tab">
	  		<div class="box">
	  			<div class="box-content">
	  				<p class="c-blanco f-medium text-justify">
	  					Granos de cereales (maíz), granos secos de destilería, derivados de cereales (salvado de trigo y/o germen de trigo), derivados de oleaginosas, grasa de pollo (conservada con BHA/BHT y/o TBHQ), carbonato de calcio, fosfato monodicálcico, palatante natural (hígado, caramelo), sal, antioxidante (BHA y/o BHT), inhibidor de hongos (propionato de calcio), conservador (sorbato de potasio), cloruro de colina, extracto de yucca, sulfato ferroso, sulfato de zinc, sulfato de cobre, sulfato de manganeso, selenito de sodio, vitamina B12, tiamina (B1), riboflavina (B2), niacina (B3), ácido pantoténico (B5), piridoxina (B6), acido fólico, iodo (EDDI), vitamina A, vitamina E, vitamina D3, colorante artificial (caramelo).
	  				</p>
	  			</div>
	  		</div>
	  	</div>
	  	<div class="tab-pane fade" id="perro-rocko-complete-guia" role="tabpanel" aria-labelledby="perro-rocko-complete-guia-tab">
	  		<div class="box">
	  			<div class="box-table">
			  		<table class="table table-bordered table-hover table-guia text-center">
						<thead>
							<tr class="f-black bg-azul-15">
								<th colspan="3">Ración de alimento de acuerdo al peso del perro</th>
							</tr>
						    <tr class="f-black bg-azul-14">
						      	<th>Peso del perro, kg</th>
						      	<th>Gramos (g)</th>
						      	<th>Tazas*</th>
						    </tr>
						</thead>
						<tbody class="bg-white">
						    <tr>
						      	<th class="f-light">1 a 5</th>
						      	<th class="f-light">44 a 129</th>
						      	<td> ½ a 1 1/3</td>
						    </tr>
						    <tr>
						      	<th class="f-light"><span class="f-black d-block">5 a 12</th>
						      	<th class="f-light">129 a 232</th>
						      	<td>1 1/3 a 2 1/3</td>
						    </tr>
						    <tr>
						      	<th class="f-light"><span class="f-black d-block">12 a 25</th>
						      	<th class="f-light">232 a 379</th>
						      	<td>2 1/3 a 3 2/3</td>
						    </tr>
						    <tr>
						      	<th class="f-light"><span class="f-black d-block">25 a 45</th>
						      	<th class="f-light">379 a 561</th>
						      	<td>3 2/3 a 5 1/2</td>
						    </tr>
						    <tr>
						      	<th class="f-light"><span class="f-black d-block">45 o 50</th>
						      	<th class="f-light">561 a 602</th>
						      	<td>5 1/2 a 6</td>
						    </tr>
						    <tr>
						      	<th class="f-light"><span class="f-black d-block">50 o más</th>
						      	<td>602 o más<br>(+ 45 gr por cada 5 kg de peso extra)</td>
						      	<td>6 o más<br>(+ media taza por cada 5 kg de peso extra)</td>
						    </tr>
						</tbody>
					</table>
				</div>
				<div class="box-content">
					<p class="c-blanco f-medium">
						*1 taza (8 oz) = 90 g aprox.
					</p>
					<p class="c-blanco f-black">
						Las necesidades nutricionales pueden variar dependiendo de la raza, sexo, edad, actividad, estado fisiológico o de salud de tu perro.
					</p>
				</div>
			</div>
	  	</div>
	</div>
	<!-- END TAB LISTA DETALLES PERRO -->
</div>