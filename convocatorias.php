<?php
	$active_index="";
	$active_h_ayuntamiento="";
	$active_centralizadas="";
	$active_descentralizadas="";
	$active_comisiones="";
	$active_gaceta="";
	$active_tramites="";
	$active_convocatorias="active";
	$active_ubicacion="";
	$active_interes="";
	$active_galeria="";
	$active_tradiciones="";
	$title="Uriangato | Convocatorias";
	require_once ("admin/config/db.php");
	require_once ("admin/config/conexion.php");
?>
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
                    <h1>Convocatorias</h1>
                    <ul>
						<li>Usted se encuentra en:</li>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="">Tr&aacute;mites y Servicios</a></li>
                        <li><a href="convocatorias.php"><strong>Convocatorias</strong></a></li>
                    </ul>
                </div>
            </div>
        </section>
		<br>
        <!--================End Categories Banner Area =================-->
        <!--================Convocatorias Area =================-->
        <section class="shopping_cart_area p_70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart_product_list">
							<div class="card">
								<div class="card-body">
									<form class="form-horizontal" role="form" id="datos_cotizacion">
										<div class="form-group row">
											<div class="col-md-5">
												<input type="text" class="form-control" id="q" placeholder="Buscar" onkeyup='load(1);'>
											</div>
											<div class="col-md-3">
												<button type="button" class="btn btn-default" onclick='load(1);'>
												<span class="fa fa-search" ></span> Buscar</button>
												<span id="loader"></span>
											</div>
										</div>
									</form>
									<div id="resultados"></div>
									<div class='outer_div'></div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Convocatorias Area =================-->
        <!--================Footer Area =================-->
        <?php require_once('footer.php')?>
		<script>
			$(document).ready(function(){
				load(1);
			});

			function load(page){
				var q= $("#q").val();
				$("#loader").fadeIn('slow');
				$.ajax({
					url:'./admin/ajax/buscar_conbocatorias_prin.php?action=ajax&page='+page+'&q='+q,
					beforeSend: function(objeto){
						$('#loader').html('<img src="./img/icon/ajax-loader.gif"> Cargando...');
					},
					success:function(data){
						$(".outer_div").html(data).fadeIn('slow');
						$('#loader').html('');
					}
				})
			}
		</script>
    </body>
</html>