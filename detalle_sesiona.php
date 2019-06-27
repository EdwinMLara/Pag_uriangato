<?php
	$active_index="";
	$active_h_ayuntamiento="";
	$active_centralizadas="";
	$active_descentralizadas="";
	$active_comisiones="";
	$active_gaceta="active";
	$active_tramites="";
	$active_convocatorias="";
	$active_ubicacion="";
	$active_interes="";
	$active_galeria="";
	$active_tradiciones="";
	$title="Uriangato | Detalles de Sesi&oacute;n de Ayuntamiento ";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <?php require_once('head.php')?>
</head>

<body>
	<?php
		require_once ("admin/config/db.php");
		require_once ("admin/config/conexion.php");
		$id=$_GET['id'];
		$sql=mysqli_query($con, "SELECT * FROM sesion_ayuntamiento WHERE id_sesion_a='$id'");
		$row_sa=mysqli_fetch_array($sql);
		$idsa=$row_sa['id_sesion_a'];
		$no=$row_sa['no_sesion_a'];
		$fecha=$row_sa['fecha_sesion_a'];
		
		$datesa =strtotime($fecha);
		setlocale(LC_ALL,"es_ES");
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");  
		/***********/
		$hora=$row_sa['hora_sesion_a'];
		$lugar=$row_sa['lugar_sesion_a'];
		$archivo=$row_sa['archivo_sesion_a'];
		$tipo=$row_sa['tipo_sesion_a'];
		
	?>

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
                <h2><?php echo 'SESI&Oacute;N '.strtoupper($tipo).' '.$no.' - HONORABLE AYUNTAMIENTO DE URIANGATO'; ?></h2>
                <ul>
                    <li>Usted se encuentra en:</li>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Gobierno</a></li>
                    <li><a href="gaceta_municipal.php"><strong>Gaceta Municipal</strong></a></li>
                </ul>
				<center><a href="gaceta_municipal.php"><i class="fa fa-reply" aria-hidden="true"></i> Regresar a la Gaceta Municipal</a></center>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->
    <!--================Contact Area =================-->
    <section class="contact_area p_100">
        <div class="container">
			<div class="row">
				<div class="col-9 col-md-9">
					<h3 class="text-uppercase"><strong>Sesi&oacute;n Ordinaria <?php echo $no; ?></strong></h3>
					<h4>HONORABLE AYUNTAMIENTO DE URIANGATO.</h4>
					<br>
					<br>
					<ul style="font-size:14px">
						<li><strong>Proyecto del orden del d&iacute;a.</strong></li>
						<li> - <a href="admin/<?php echo $archivo; ?>" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Ver archio</a></li>
						<li class="dropdown-divider"></li>
						<li><strong>Documentos en que se soportan los asuntos a tratar en la Sesi&oacute;n de Ayuntamiento:</strong></li>
						<?php
							$sqlarchi=mysqli_query($con,"SELECT * FROM archivos_sesiona WHERE id_sesiona='$idsa'");
							while($rowarchi=mysqli_fetch_array($sqlarchi)){
						?>
							<li> - <i class="fa fa-file-o" aria-hidden="true"></i><a href="admin/<?php echo $rowarchi['urla'];?>"> <?php echo $rowarchi['descripcion_archivoa']; ?> </a></li>
						<?php
							}
						?>
					</ul>
				</div>
				<div class="col-3 col-md-3">
					<div class="jumbotron-admin">
						<p style="font-size: 14px"><strong><i class="fa fa-calendar" aria-hidden="true"></i> FECHA </strong> <br>
							<?php echo date("d", $datesa).' de '. $meses[date('n', $datesa)-1].' del '.date("Y", $datesa);?>
						</p>
					</div>
					<br>
					<div class="jumbotron-admin">
						<p style="font-size: 14px"><strong><i class="fa fa-clock-o" aria-hidden="true"></i> HORA</strong><br>
							<?php echo date('h:i A', strtotime($hora));?>
						</p>
					</div>
					<br>
					<div class="jumbotron-admin">
						<p style="font-size: 14px"><strong><i class="fa fa-map-marker" aria-hidden="true"></i> LUGAR </strong><br> 
							<?php echo $lugar;?>
						</p>
					</div>
				</div>
			</div>
        </div>
    </section>
    <!--================End Contact Area =================-->
    <!--================Footer Area =================-->
    <?php require_once('footer.php')?>
</body>
</html>