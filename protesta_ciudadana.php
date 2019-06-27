<?php
	$active_index="";
	$active_h_ayuntamiento="";
	$active_centralizadas="";
	$active_descentralizadas="";
	$active_comisiones="";
	$active_gaceta="";
	$active_tramites="";
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
        <!--/*
		.contenedora a{
			color: #000;
		}
		.contenedora a:hover{
			color: #cd1417;
		}
		
		span{
			font-size:15px;
		}
		a{
			text-decoration:none; 
			color: #0062cc;
			border-bottom:2px solid #0062cc;
		}
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
		}*/-->
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
                <h1>Protesta Ciudadana</h1>
                <ul>
                    <li>Usted se encuentra en:</li>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Tr&aacute;mites y Servicios</a></li>
                    <li><a href="mejora_regulatoria.php">Mejora Regulatoria</a></li>
                    <li><a href="protesta_ciudadana.php"><strong>Protesta Ciudadana</strong></a></li>
                </ul>
            </div>
        </div>
    </section>
	
    <section class="contact_area p_30">
        <div class="container">
			<div class="contact_title">
				<h2>Buz&oacute;n</h2>
                <p style="text-align: justify ;">
					El buzón de mejora regulatoria del Municipio de Uriangato existe ante la necesidad de obtener reportes ciudadanos de los tr&aacute;mites o servicios que brinda el municipio de Uriangato y se consideren incorrectos o mal operados por las siguientes razones:<br><br>
					<strong>1.-</strong> Cualquier dato de un tr&aacute;mite o servicio de las Instancias Municipales no corresponda al que aparece en la Ficha T&eacute;cnica publicada en el portal de Internet del Municipio.<br>
					<strong>2.-</strong> Cuando un tr&aacute;mite o servicio ponga en riesgo alg&uacute;n sector social, ambiental o econ&oacute;mico del Municipio.<br>
					<strong>3.-</strong> Inconformidad por la deficiencia en el proceso respecto a su oportunidad, accesibilidad, transparencia, calidad y econom&iacute;a administrativa. <br><br>

					<strong style="color:#cd1417">Nota. Si aunado a queja regulatoria su intenci&oacute;n es que se revise el actuar de un servidor p&uacute;blico, puede formular su planteamiento en la p&aacute;gina principal de este mismo portal oficial.</strong>
				</p>
				<br>
				<h2>Manejo de datos personales</h2>
				<p style="text-align: justify ;">
					Los datos personales recabados ser&aacute;n protegidos, incorporados y tratados en los bancos de datos que obran en la Unidad de Mejora Regulatoria de este municipio, de conformidad con la Ley de Protección de Datos Personales en Posesi&oacute;n de Sujetos Obligados para el Estado de Guanajuato y dem&aacute;s normatividad aplicable. <a href="">Ver Aviso de Privacidad</a>.
				</p>
			</div>
        </div>
    </section>
    <!--================Footer Area =================-->
    <?php require_once('footer.php')?>
</body>

</html>
