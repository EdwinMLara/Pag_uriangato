<?php
	date_default_timezone_set('America/Mexico_City');
	$active_index="";
	$active_h_ayuntamiento="";
	$active_centralizadas="active";
	$active_descentralizadas="";
	$active_comisiones="";
	$active_gaceta="";
	$active_tramites="";
	$active_convocatorias="";
	$active_ubicacion="";
	$active_interes="";
	$active_galeria="";
	$active_tradiciones="";
	$title="Uriangato | Denuncia An&oacute;nima";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>
		<?php require_once('head.php')?>
		<style>
			.wizard {
				margin: 20px auto;
				background: #fff;
			}

			.wizard .nav-tabs {
				position: relative;
				margin: 40px auto;
				margin-bottom: 0;
				border-bottom-color: #e0e0e0;
			}

			.wizard > div.wizard-inner {
				position: relative;
			}

			.connecting-line {
				height: 2px;
				background: #e0e0e0;
				position: absolute;
				width: 80%;
				margin: 0 auto;
				left: 0;
				right: 0;
				top: 50%;
				z-index: 1;
			}

			.wizard .nav-tabs > li.active > a,
			.wizard .nav-tabs > li.active > a:hover,
			.wizard .nav-tabs > li.active > a:focus {
				color: #555555;
				cursor: default;
				border: 0;
				border-bottom-color: transparent;
			}

			span.round-tab {
				width: 70px;
				height: 70px;
				line-height: 70px;
				display: inline-block;
				border-radius: 100px;
				background: #fff;
				border: 2px solid #e0e0e0;
				z-index: 2;
				position: absolute;
				left: 0;
				text-align: center;
				font-size: 25px;
			}

			span.round-tab i {
				color: #555555;
			}

			.wizard li a.active span.round-tab {
				background: #fff;
				border: 2px solid #cd1417;

			}

			.wizard li a.active span.round-tab i {
				color: #cd1417;
			}

			span.round-tab:hover {
				color: #333;
				border: 2px solid #333;
			}

			.wizard .nav-tabs > li {
				width: 19%;
			}

			.wizard li a:after {
				content: " ";
				position: relative;
				left: 46%;
				top: -20px;
				opacity: 0;
				margin: 0 auto;
				bottom: 0px;
				border: 5px solid transparent;
				border-bottom-color: #cd1417;
				transition: 0.1s ease-in-out;
			}

			.wizard li.active.nav-item:after {
				content: " ";
				position: relative;
				left: 46%;
				top: -20px;
				opacity: 1;
				margin: 0 auto;
				bottom: 0px;
				border: 10px solid transparent;
				border-bottom-color: #cd1417;
			}

			.wizard .nav-tabs > li a {
				width: 70px;
				height: 70px;
				margin: 20px auto;
				border-radius: 100%;
				padding: 0;
				position: relative;
			}

			.wizard .nav-tabs > li a:hover {
				background: transparent;
			}

			.wizard .tab-pane {
				position: relative;
				padding-top: 50px;
			}

			.wizard h3 {
				margin-top: 0;
			}

			@media( max-width: 585px) {

				.wizard {
					width: 90%;
					height: auto !important;
				}

				span.round-tab {
					font-size: 16px;
					width: 50px;
					height: 50px;
					line-height: 50px;
				}

				.wizard .nav-tabs > li a {
					width: 50px;
					height: 50px;
					line-height: 50px;
				}

				.wizard li.active:after {
					content: " ";
					position: absolute;
					left: 35%;
				}
			}
			/************************/
			.bg {
				height: 100%;
				display: flex;
				align-items: center;
				justify-content: center;
				flex-direction: column;
			}

			.chiller_cb span:before, .chiller_cb span:after {
				content: "";
				display: inline-block;
				background: #fff;
				width: 0;
				height: 0.2rem;
				position: absolute;
				transform-origin: 0% 0%;
			}

			.chiller_cb {
				position: relative;
				height: 2rem;
				display: flex;
				align-items: center;
			}
			
			.chiller_cb input {
				display: none;
			}
			
			.chiller_cb input:checked ~ span {
				background: #fd2727;
				border-color: #fd2727;
			}
			
			.chiller_cb input:checked ~ span:before {
				width: 1rem;
				height: 0.15rem;
				transition: width 0.1s;
				transition-delay: 0.3s;
			}
			
			.chiller_cb input:checked ~ span:after {
				width: 0.4rem;
				height: 0.15rem;
				transition: width 0.1s;
				transition-delay: 0.2s;
			}
			
			.chiller_cb input:disabled ~ span {
				background: #ececec;
				border-color: #dcdcdc;
			}
			
			.chiller_cb input:disabled ~ label {
				color: #dcdcdc;
			}
			
			.chiller_cb input:disabled ~ label:hover {
				cursor: default;
			}
			
			.chiller_cb label {
				padding-left: 2rem;
				position: relative;
				z-index: 2;
				cursor: pointer;
				margin-bottom:0;
			}
			
			.chiller_cb span {
				display: inline-block;
				width: 1.2rem;
				height: 1.2rem;
				border: 2px solid #ccc;
				position: absolute;
				left: 0;
				transition: all 0.2s;
				z-index: 1;
				box-sizing: content-box;
			}
			
			.chiller_cb span:before {
				transform: rotate(-55deg);
				top: 1rem;
				left: 0.37rem;
			}
			
			.chiller_cb span:after {
				transform: rotate(35deg);
				bottom: 0.35rem;
				left: 0.2rem;
			}
		</style>
		
    </head>
    <body>
        <!--================Top Header Area =================-->
        <div class="header_top_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top_header_middle">
                            <img src="img/encabezado_letras_ok.png" alt="" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Top Header Area =================-->
        
        <!--================Menu Area =================-->
        <header class="shop_header_area">
            <div class="container">
                <?php require_once('navbar.php')?>
            </div>
        </header>
        <!--================End Menu Area =================-->
		<!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h1>Denuncia Ciudadana</h1>
                    <ul>
						<li>Usted se encuentra en:</li>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="denuncia_anonima.php"><strong>Denuncia Ciudadana</strong></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        <!--================Contact Area =================-->
        <section class="contact_area p_50">
            <div class="container">
                <div class="contact_title">
                    <h2>Sistema en Línea Denuncia Ciudadana Uriangato</h2>
                    <p>El sistema Denuncia Ciudadana es un medio electr&oacute;nico de comunicaci&oacute;n, mediante el cual se fortalece la participación ciudadana a través de una queja y/o denuncia, en la que se pone en manifiesto la inconformidad de la ciudadanía en relación con el servicio recibido por parte de algún servidor público u oficina de la administración pública municipal.</p>
                </div>
                <div class="row contact_details">
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <p>Blvd. Juan Pablo II #40,<br> Col. L&aacute;zaro C&aacute;rdenas<br />Uriangato, Guanajuato, M&eacute;xico.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="tel:+524454577001">445 45 7 70 01</a>
                                <a href="tel:+524454585316">445 45 8 53 16</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="mailto:seguridadpublica@uriangato.gob.mx">seguridadpublica@uriangato.gob.mx</a>
                                <a href="mailto:contralor@uriangato.gob.mx">contralor@uriangato.gob.mx</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact_form_inner">
                    <h3></h3>
                    <form name="enviar_email" id="enviar_email" onsubmit="enviarMail(); return false" method="POST" accept-charset="utf-8" class="form cf contact_us_form">
						<div class="wizard">
							<div class="wizard-inner">
								<div class="connecting-line"></div>
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="nav-item"></li>
									<li role="presentation" class="nav-item">
										<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Manejo de datos personales" class="nav-link active"><span class="round-tab"><i class="fa fa-lock"></i></span></a>
									</li>
									<li role="presentation" class="nav-item">
										<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="" class="nav-link disabled"><span class="round-tab"><i class="fa fa-users"></i></span></a>
									</li>
									<li role="presentation" class="nav-item">
										<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Dinos quien eres" class="nav-link disabled"><span class="round-tab"><i class="fa fa-commenting-o"></i></span></a>
									</li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane active text-center" role="tabpanel" id="step1">
									<h1 class="text-md-center">Manejo de datos personales</h1>
									<div class="row">
										<p style="text-align: center center;">
											En el marco de la nueva Ley de Transparencia y Acceso a la Información Pública para el Estado de Guanajuato, publicada en el Periódico Oficial del Gobierno del Estado de Guanajuato el 13 de mayo del año 2016, es responsabilidad de los sujetos obligados hacer transparente su gestión, mediante la publicidad de la información pública establecida en los términos de las cincuenta fracciones del artículo 26 de esta Ley. Se entiende por información pública todo documento público, que se recopile, procesen o posean los sujetos obligados en esta Ley.
											<div class="chiller_cb">
												<input type="checkbox" class="checkbox" name="checkbox" id="checkbox" onclick="btTutorial.disabled = !this.checked">
												<label for="checkbox">Estoy de acuerdo</label>
												<span></span>
											</div>
										</p>
									</div>
									<ul class="list-inline text-md-center">
										<li>
											<input type="button" class="btn btn-lg btn-common next-step next-button" value="Siguiente" name="btTutorial" disabled>
										</li>
									</ul>
								</div>
								<div class="tab-pane" role="tabpanel" id="step2">
									<h1 class="text-md-center">Dinos quien eres:</h1>
									<br>
									<h3>Si tu denuncia es anonima da clic en continuar.</h3>
									<br>
									<div class="row">
										<div class="form-group col-lg-4">
											<input type="text" class="form-control" id="name" name="name" placeholder="Nombre Completo">
										</div>
										<div class="form-group col-lg-4">
											<input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
										</div>
										<div class="form-group col-lg-4">
											<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
										</div>
										
									</div>
									<br>
									<ul class="list-inline text-md-center">
										<li><button type="button" class="btn btn-lg btn-common next-step next-button">Continuar</button></li>
									</ul>
								</div>
								<div class="tab-pane" role="tabpanel" id="step3">
									<h1 class="text-md-center">Descripci&oacute;n de los hechos</h1>
									<div id="resultados_ajax"></div>
									<div class="row">
										<div class="form-group col-lg-12">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Describe los hechos y datos del servidor público (indica la circunstancia y como se dieron las cosas, así como el lugar y los tiempos)"></textarea>
										</div>
										<div class="form-group col-lg-4">
											<input type="text" class="form-control" id="fecha" name="fecha" value="<?php echo date("d-m-Y h:i:s A"); ?>" readonly>
										</div>
									</div>
									<br>
									<ul class="list-inline text-md-center">
										<li><button type="submit" class="btn btn-lg btn-common next-step next-button" id="enviar_datos">Enviar denuncia</button></li>
									</ul>
								</div>
								<div class="clearfix"></div>
								
							</div>
						</div>
					</form>
                </div>
            </div>
        </section>
        <!--================End Contact Area =================-->
        <!--================Footer Area =================-->
        <?php require_once('footer.php')?>
		<script>
			//Initialize tooltips
			$('.nav-tabs > li a[title]').tooltip();

			//Wizard
			$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
				var $target = $(e.target);
				if ($target.hasClass('disabled')) {
					return false;
				}
			});

			$(".next-step").click(function (e) {
				var $active = $('.wizard .nav-tabs .nav-item .active');
				var $activeli = $active.parent("li");

				$($activeli).next().find('a[data-toggle="tab"]').removeClass("disabled");
				$($activeli).next().find('a[data-toggle="tab"]').click();
			});


			$(".prev-step").click(function (e) {
				var $active = $('.wizard .nav-tabs .nav-item .active');
				var $activeli = $active.parent("li");

				$($activeli).prev().find('a[data-toggle="tab"]').removeClass("disabled");
				$($activeli).prev().find('a[data-toggle="tab"]').click();
			});

			/********************************/
			$( "#enviar_email" ).submit(function( event ) {
				$('#enviar_datos').attr("disabled", true);
				var parametros = $(this).serialize();
				$.ajax({
					type: "POST",
					url: "admin/ajax/enviar_correo.php",
					data: parametros,
					beforeSend: function(objeto){
						$("#resultados_ajax").html('<img src="./img/ajax-loader.gif">');
					},
					success: function(datos){
						$("#resultados_ajax").html(datos);
						$('#enviar_datos').attr("disabled", false);
						load(1);
					}
				});
				event.preventDefault();
			})
		</script>
    </body>
</html>