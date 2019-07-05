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
	$title="Uriangato | Galería de Imágenes";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <?php require_once('head.php')?>
    <link rel="stylesheet" href="css/estilo_galeria.css">
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/filtro.js"></script>
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
                <h1>Galería de Imágenes</h1>
                <ul>
                    <li>Usted se encuentra en:</li>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Galería de Imágenes</a></li>
                    <li><a href="galeria_new.php"><strong>Galería de Imágenes</strong></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->
    <!--================Contact Area =================-->

    <div class="container">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4><i class='glyphicon glyphicon-search'></i> Buscar Galeria de Imágenes</h4>
                </div>          
                <div class="panel-body">
                    <form class="form-horizontal" role="form" id="datos_cotizacion">
                        <div class="form-group row">
                            <label for="q" class="col-md-2 control-label">Galerias:</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="q" placeholder="Galerias de imágenes" onkeyup=''>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-default" onclick='load(1);'>
                                <span class="glyphicon glyphicon-search" ></span> Buscar</button>
                                <span id="loader"></span>
                            </div>
                        </div>
                    </form>
                    <div id="resultados"></div><!-- Carga los datos ajax -->
                    <div class='outer_div'></div><!-- Carga los datos ajax -->
                </div>
            </div>
        </div>


        <div class="galeria">
            <div class="container">
              <div class="row">
                <div class="col-xd-3 col-md-4">
                  <div class="box-img">
                    <a href="admin/img/uploads/abcd/2.JPG" target="_blank">
                      <img src="admin/img/uploads/abcd/2.JPG" alt="Lights" style="width:100%">
                      <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-xd-3 col-md-4">
                  <div class="box-img">
                    <a href="admin/img/uploads/abcd/1.JPG" target="_blank">
                      <img src="admin/img/uploads/abcd/1.JPG" alt="Nature" style="width:100%">
                      <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-xd-3 col-md-4">
                  <div class="box-img">
                    <a href="admin/img/uploads/abcd/5.JPG" target="_blank">
                      <img src="admin/img/uploads/abcd/5.JPG" alt="Fjords" style="width:100%">
                      <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </div>
            
        



    <!--================End Contact Area =================-->
    <!--================Footer Area =================-->
    <?php require_once('footer.php')?>
</body>
</html>