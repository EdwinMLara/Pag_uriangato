<?php
	$active_index="";
	$active_h_ayuntamiento="";
	$active_centralizadas="";
	$active_descentralizadas="";
	$active_comisiones="";
	$active_gaceta="";
	$active_tramites="";
	$active_convocatorias="";
	$active_ubicacion="active";
	$active_interes="";
	$active_galeria="";
	$active_tradiciones="";
	$title="Uriangato | Ubicaci&oacute;n";
?>
<style type="text/css">
	
</style>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>
		<?php require_once('head.php')?>
        <link href="css/style-personas.css" rel="stylesheet">
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
                    <h1>Ubicaci&oacute;n</h1>
                    <ul>
						<li>Usted se encuentra en:</li>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="index.php">Turismo</a></li>
                        <li><a href="ubicacion.php"><strong>Ubicaci&oacute;n</strong></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        <!--================Contact Area =================-->
        <section class="feature_big_add_area">
            <div class="container">
                <div class="row">
					<div class="col-md-3 back">
						<div style="background-color:#7e8285;border-radius:5px"><strong ><h4>Contacto</h4></strong></div>
						<span>
							<strong><i class="fa fa-envelope-o"></i> Correo Electr&oacute;nico</strong>
							<p><a href="mailto:comunicacionsocial@uriangato.gob.mx">comunicacionsocial@uriangato.gob.mx</a></p>
							<strong><i class="fa fa-phone"></i> Tel&eacute;fono</strong>
							<p>01 (445) 45 75022</p>
							<strong>Fax</strong>
							<p>01 (445) 45 75032</p>
							<strong>Dirección</strong>
							<p>Morelos # 1, C.P 38980
							Uriangato, Guanajuato, M&eacute;xico.</p>
							<a style="cursor: pointer" class="wpcw-widget-contact-map" onclick="javascript:window.open('https://www.google.com/maps/@20.1411814,-101.1781068,3a,75y,146.51h,95.58t/data=!3m7!1e1!3m5!1sBWklhYK27Jl1daOjqfF1KQ!2e0!6s%2F%2Fgeo1.ggpht.com%2Fcbk%3Fpanoid%3DBWklhYK27Jl1daOjqfF1KQ%26output%3Dthumbnail%26cb_client%3Dmaps_sv.tactile.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D32.768234%26pitch%3D0%26thumbfov%3D100!7i13312!8i6656?hl=es','','width=800,height=600,left=50,top=50,toolbar=yes')"><strong>Explorar Ubicación</strong></a>
						</span>
					</div>
					<div class="col-md-9">
						<iframe src="https://www.google.com/maps?q=Morelos%20%23%201%2C%20C.P%2038980%0AUriangato%2C%20Guanajuato%2C%20M%C3%A9xico.&amp;output=embed&amp;hl=es&amp;z=14" class="wpcw-widget-contact-map" width="100%" height="80%" frameborder="1" align="top"></iframe>
						<br>
					</div>
                </div>
            </div>
        </section>
        <!--================End Contact Area =================-->
        <!--================Footer Area =================-->
        <?php require_once('footer.php')?>
    </body>
</html>