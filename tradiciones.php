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
	$active_tradiciones="active";
  $title="Uriangato | Ubicaci&oacute;n";
  //require_once('administrador/config/config.php');
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <?php require_once('head.php')?>
    <style type="text/css">
    
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
                <h1>Lugares de Interés</h1>
                <ul>
                    <li>Usted se encuentra en:</li>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="lugares_interes.php"><strong>Lugares de Interés</strong></a></li>
                </ul>
                <!-- Nav tabs -->
                <br>
                <h5>"Un pueblo sin historia, es como una persona sin memoria. Debemos conocer nuestro gran pasado histórico, para saber de donde venimos y así comprenderemos mejor nuestro presente, de igual forma lograremos proyectar orgullosos el futuro de nuestro querido Uriangato"</h5>
                <br><br>
                
                <!-- Tab panes -->
             
                </div>
    </section>
    <!--================End Contact Area =================-->
    <!--================Footer Area =================-->
    <?php require_once('footer.php')?>
</body>

</html>
