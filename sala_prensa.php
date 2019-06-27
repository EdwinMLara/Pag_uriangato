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
	$title="Uriangato | Sala de Prensa";
	require_once ("admin/config/db.php");
	require_once ("admin/config/conexion.php");
	$id_noticia=$_GET['noticia'];
	$query=mysqli_query($con,"SELECT * FROM noticias WHERE id_noticia=$id_noticia");
	$row=mysqli_fetch_array($query);
	
	$titulo=$row['titulo_noticia'];
	$cuerpo=$row['cuerpo_noticia'];
	$image1=$row['imagen1'];
	$fecha= date('d-m-Y', strtotime($row['create_at']));
?>
<!DOCTYPE html>
<htmlxmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>
		<?php require_once('head.php')?>
		
    </head>
    <body>
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
        <header class="shop_header_area">
            <div class="container">
                <?php require_once('navbar.php')?>
            </div>
        </header>
		<section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h1><?php echo $titulo; ?></h1>
                    <ul>
						<li>Regresar a Principal</li>
                        <li><a href="index.php">Inicio</a></li>
                    </ul>
                </div>
            </div>
        </section>
		<section class="feature_big_add_area">
            <div class="container">
                <div class="row">
					<div class="col-md-4">
						<img src="<?php echo 'admin/'.$image1 ?>" width="100%" style='max-width: 100%; padding:5px; width:400px; height:290px; border-radius: 10px;'><br>
						<p style="font-size:14px;">Publicado: <?php echo $fecha; ?></p>
					</div>
					<div class="col-md-8">
						<p style="font-size:18px; text-align: justify; ">
							<?php echo $cuerpo ?>
						</p>
					</div>
				</div>
			</div>
        </section>
		<?php require_once('footer.php')?>
		
	</body>
</html>