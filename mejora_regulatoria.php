<?php
	$active_index="";
	$active_h_ayuntamiento="";
	$active_centralizadas="";
	$active_descentralizadas="";
	$active_comisiones="";
	$active_gaceta="";
	$active_tramites="active";
	$active_convocatorias="";
	$active_ubicacion="";
	$active_interes="";
	$active_galeria="";
	$active_tradiciones="";
	$title="Uriangato | Ubicaci&oacute;n";
	require_once ("admin/config/db.php");
	require_once ("admin/config/conexion.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <?php require_once('head.php')?>
    <style>
        .contenedora a{
			color: #000;
		}
		.contenedora a:hover{
			color: #cd1417;
		}
		
		span{
			font-size:15px;
		}
		<!--/*a{
			text-decoration:none; 
			color: #0062cc;
			border-bottom:2px solid #0062cc;
		}*/-->
		.box{
			padding:40px 0px;
		}
		.box-part{
			background-image:url('img/detalle.png');
			background-position: center bottom;
			background-repeat: no-repeat;
			background-size: 100%;
			padding-top:30px;
			border: 1px solid #CD1417;
			border-radius:10px;
			height: 180px;
		}
		.text{
			margin:20px 0px;
		}
		.faaa{
			color:#4183D7;
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
                <h1>Mejora Regulatoria</h1>
                <ul>
                    <li>Usted se encuentra en:</li>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Tr&aacute;mites y Servicios</a></li>
                    <li><a href="mejora_regulatoria.php"><strong>Mejora Regulatoria</strong></a></li>
                </ul>
            </div>
        </div>
    </section>
	<section class="feature_big_add_area">
		<div class="container">
			<div class="mr_title">
                    <h2>¿QUE ES LA MEJORA REGULATORIA?</h2>
					<p>La mejora regulatoria es una política pública que consiste en la generación de normas claras, de trámites y servicios simplificados, así como de instituciones eficaces para su creación y aplicación, que se orienten a obtener el mayor valor posible de los recursos disponibles y del óptimo funcionamiento de las actividades comerciales, industriales, productivas, de servicios y de desarrollo humano de la sociedad en su conjunto..</p>
			</div>
		</div>
    </section>
    <section class="feature_big_add_area">
        <div class="container">
            <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 contenedora" style="margin-bottom:20px;">
					<a href="">
						<div class="box-part text-center">
							<div class="title">
								<br>
								<p style="font-size:15px; font-weight: bold;">Consulta de Anteproyectos</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 contenedora" style="margin-bottom:20px;">
					<a href="">
						<div class="box-part text-center">
							<div class="title">
								<br>
								<p style="font-size:15px; font-weight: bold;">Registro Municipal de <br> Regulaciones</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 contenedora" style="margin-bottom:20px;">
					<a href="protesta_ciudadana.php">
						<div class="box-part text-center">
							<div class="title">
								<br>
								<p style="font-size:15px; font-weight: bold;">Protesta Ciudadana</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 contenedora" style="margin-bottom:20px;">
					<a href="tramitesyservicios.php">
						<div class="box-part text-center">
							<div class="title">
								<br>
								<p style="font-size:15px; font-weight: bold;">Tr&aacute;mites y Servicios</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 contenedora" style="margin-bottom:20px;">
					<a href="">
						<div class="box-part text-center">
							<div class="title">
								<br>
								<p style="font-size:15px; font-weight: bold;">Padr&oacute;n de Inspectores, Verificadores y Visitadores Domiciliarios</p>
							</div>
						</div>
					</a>
				</div>
            </div> 
        </div>
    </section>

    <!--================End Categories Banner Area =================-->
    <!--================Contact Area =================-->
    <section class="feature_big_add_area">

    </section>
    <!--================End Contact Area =================-->
    <!--================Footer Area =================-->
    <?php require_once('footer.php')?>
</body>

</html>
