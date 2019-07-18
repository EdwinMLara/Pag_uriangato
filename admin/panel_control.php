<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
	}
	$title="Panel de Control | Sistema de Gesti&oacute;n Web";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("head.php");	?>
	</head>
	<body>
		<?php	include("navbar.php");	?> 
		<div class="container">
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">Slider Principal</div>
						<div class="panel-body">
							<a href="ver_listado_slider.php" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus" ></span> Ver Listado del Slider</a>
						</div>
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">Convocatorias</div>
						<div class="panel-body">
							<a href="ver_listado_convocatorias.php" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus" ></span> Ver Listado de Convocatorias</a>
						</div>
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">Noticias</div>
						<div class="panel-body">
							<a href="noticias.php" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus" ></span> Ver Noticias</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">Gaceta Municipal</div>
						<div class="panel-body">
							<a href="sesiones_comisiones.php" class="btn">Sesiones de Comisiones</a>
							<br>
							<a href="sesiones_ayuntamiento.php" class="btn">Sesiones de Ayuntamiento</a>
						</div>
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">Mejora Regulatoria</div>
						<div class="panel-body">
							<a href="tramyser.php" class="btn">Tramites y Servicios</a>
							<br>
							<a href="ins_ver.php" class="btn">Inspectores, Verificadores</a>
						</div>
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">Galeria de imagenes</div>
						<div class="panel-body">
							<a href="G5_albumnes.php" class="btn">Albumes</a><br>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<?php	include("footer.php");	?>
	</body>
</html>