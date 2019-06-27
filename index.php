<?php
	$active_index="active";
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
	$title="Uriangato | Te Viste de Orgullo";
	require_once ("admin/config/db.php");
	require_once ("admin/config/conexion.php");
	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <?php require_once('head.php')?>
</head>

<body>
	
    <!--================Top Header Area =================-->
    <div class="header_top_area">
        <div class="container">
			<div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
					<div class="top_header_middle">
                        <img src="img/encabezado_letras_ok.png" alt="" title="Uriangato - Te Viste de Orgullo" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Top Header Area =================-->

    <!--================Menu Area =================-->
    <header class="shop_header_area">
        <div class="container">
            <?php require_once('navbar.php'); ?>
        </div>
    </header>
    <!--================End Menu Area =================-->

    <!--================Slider Area =================-->
    <section class="main_slider_area">
        <div class="container">
			<div class="owl-carousel owl-theme">
				<?php
					$sqlgaleria=mysqli_query($con,"SELECT * FROM slider_principal WHERE activa_slider='1' ORDER BY id_slider DESC LIMIT 5 ");
					while($rowgaleri=mysqli_fetch_array($sqlgaleria)){
				?>
				<div class="item">
					<img src="admin/<?php echo $rowgaleri['imagen_slider']; ?>" alt="" title="" width="100%">
					<div class="carousel-caption">
						<h3><?php echo $rowgaleri['descripcion_slider']; ?></h3>
					</div>
				</div>
				<?php } ?>
			</div>
        </div>
    </section>
    <section class="from_blog_area">
        <div class="container">
            <img src="img/banner/categories-banner.jpg" width="100%">
        </div>
    </section>
	 <!--================End Form Blog Area =================-->
    <!--================Categories Area =================-->
    <section class="categories_product_main">
        <div class="container">
            <div class="categories_main_inner">
                <div class="row row_disable">
                    <div class="col-lg-3 col-md-3 col-sm-12 float-md-right">
                        <div class="categories_sidebar">
                            <aside class="l_widgest l_p_categories_widget">
                                <div class="l_w_title">
                                    <h3>Clima</h3>
                                </div>
                                <div class="media">
									<p style="font-size: 16px; line-height: 26px; font-family: 'Poppins', sans-serif; letter-spacing: .35px; padding-bottom: 10px;">
										<script>
											var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
											var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
											var f=new Date();
											document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
										</script>
									</p>
								</div>
                                <div class="media">
									<div class="media-body">
										<div id="cont_2e13b7beb399c03f05a853410659007f"></div>
									</div>
								</div>
                            </aside>
							<aside class="l_widgest l_p_categories_widget">
                                <div class="l_w_title">
                                    <h3>Bolsa de Empleo</h3>
                                </div>
                                <div class="media">
									<div class="d-flex">
										<img src="img/bolsa.png" alt="" title="Bolsa de Empleo">
									</div>
								</div>
                            </aside>
							<aside class="l_widgest l_p_categories_widget">
                                <div class="l_w_title">
                                    <h3>Denuncia Ciudadana</h3>
                                </div>
                                <div class="media">
									<div class="d-flex">
										<a href="denuncia_anonima.php"><img src="img/denuncia_ciudadana.png" alt="" title="Denuncia Ciudadana"></a>
									</div>
								</div>
                            </aside>
                        </div>
                    </div>
					<br>
                    <div class="col-lg-9 col-md-9 col-sm-12 float-md-right">
                        <div class="categories_product_area">
                            <div class="card">
                                <div class="card-header">
                                    <form class="form-horizontal" role="form" id="datos_noticias">
                                        <div class="form-group row">
                                            <h3 for="q" class="col-md-4 control-label">Sala de Prensa</h3>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" id="q" placeholder="Buscar Noticia" onkeyup='load(1);'>
                                            </div>
                                            <div class="col-md-3">
                                                <button type="button" class="btn btn-default" onclick='load(1);'>
                                                    <span class="fa fa-search"></span> Buscar
												</button>
                                                <span id="loader"></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <div class='outer_div_noticias'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<br>
    <section class="home_carousel_area p_40">
        <div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-6 col-6">
					<img src="img/boton_rojo.png" alt="" title="911">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6 col-6">
					<img src="img/boton_amarillo.png" alt="" title="Policia Municipal">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6 col-6">
					<img src="img/boton_morado.png" alt="" title="Tr&aacute;nsito y Transporte">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6 col-6">
					<img src="img/boton_verde.png" alt="" title="Protecci&oacute;n Civil">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6 col-6">
					<img src="img/boton_rosa.png" alt="" title="Bomberos">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6 col-6">
					<img src="img/boton_azul.png" alt="" title="Ordenamiento Territorial y Medio Ambiente">
				</div>
			</div>
		</div>
    </section>
	<br>
    <!--================End Categories Area =================-->
    <!--================Footer Area =================-->
    <?php require_once('footer.php')?>
    <script>
		$(document).ready(function() {
            load(1);
        });

        function load(page) {
            var q = $("#q").val();
            $("#loader").fadeIn('slow');
            $.ajax({
                url: './admin/ajax/buscar_noticias_prin.php?action=ajax&page=' + page + '&q=' + q,
                beforeSend: function(objeto) {
                    $('#loader').html('<img src="./img/icon/ajax-loader.gif"> Cargando...');
                },
                success: function(data) {
                    $(".outer_div_noticias").html(data).fadeIn('slow');
                    $('#loader').html('');
                }
            })
        }
		/**** CLIMA ****/
		conte = document.getElementById("cont_2e13b7beb399c03f05a853410659007f");
		if (conte) {
			conte.style.cssText = "width: 200px; color: #000000; background-color:#FFFFFF; margin: 0 auto; font-family: Roboto;";
            elem = document.createElement("iframe");
            elem.style.cssText = "width:200px; color:#000000; height:172px;";
            elem.id = "2e13b7beb399c03f05a853410659007f";
            elem.src = "https://www.meteored.mx/getwid/2e13b7beb399c03f05a853410659007f";
            elem.frameBorder = 0;
            elem.allowTransparency = true;
            elem.scrolling = "no";
            elem.name = "flipe";
            conte.appendChild(elem);
		}
    </script>
</body>

</html>
