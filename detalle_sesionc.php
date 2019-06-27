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
	$title="Uriangato | Directorio";
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
		$codigo_evento=$_GET['id'];
		$sql=mysqli_query($con, "SELECT * FROM calendario_gaceta cg JOIN comision_gaceta cmg ON cg.titulo_evento = cmg.id_comision JOIN sesion_comision sc ON sc.codigo_evento = cg.codigo_evento WHERE cg.codigo_evento='$codigo_evento'");
		$resql=mysqli_fetch_array($sql);
		$comision=$resql['nombre_comision'];
		$fecha=$resql['fecha_evento'];
		$date = strtotime($fecha);
		setlocale(LC_ALL,"es_ES");
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");  
																
		$hora=$resql['hora_evento'];
		$lugar=$resql['descripcion_evento'];
		$no=$resql['no_sesion'];
		$archivo=$resql['archivo_orden'];
		
		$id_sesion=$resql['id_sesion']
		
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
                <h2>Comisi&oacute;n de <?php echo $comision; ?></h2>
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
					<h4>Comisi&oacute;n de <?php echo $comision;?>.</h4>
					<br>
					<br>
					<ul style="font-size:14px">
						<li><strong>Proyecto del orden del d&iacute;a y convocatoria</strong></li>
						<li> - <a href="admin/<?php echo $archivo; ?>" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Ver archio</a></li>
						<li class="dropdown-divider"></li>
						<li><strong>Documentos en que se soportan los asuntos a tratar en la Sesión de la Comisión:</strong></li>
						<?php
							$sqlarchi=mysqli_query($con,"SELECT * FROM archivos_sesion WHERE id_sesion='$id_sesion'");
							while($rowarchi=mysqli_fetch_array($sqlarchi)){
						?>
							<li> - <i class="fa fa-file-o" aria-hidden="true"></i><a href="admin/<?php echo $rowarchi['url'];?>"> <?php echo $rowarchi['nombre_archivo']; ?> </a></li>
						<?php
							}
						?>
					</ul>
				</div>
				<div class="col-3 col-md-3">
					<div class="jumbotron-admin">
						<p style="font-size: 14px"><strong><i class="fa fa-calendar" aria-hidden="true"></i> FECHA </strong> <br>
							<?php echo date("d", $date).' de '. $meses[date('n', $date)-1].' del '.date("Y", $date);?>
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