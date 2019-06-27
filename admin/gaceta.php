<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
	}
	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	$active_usuarios="active";	
	$title="Gaceta Municipal | Sistema de Gesti&oacute;n Web";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("head.php");?>
	</head>
	<body>
		<?php	include("navbar.php");	?> 
		<div class="container">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3>Gaceta Municipal</h3>
				</div>			
				<div class="panel-body">
					<div class="col-md-3">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<h3>Sesiones de Comisiones</h3>
							</div>
							<div class="panel-body">
								<a href="sesiones_comisiones.php">Entrar</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<h3>Sesiones de Ayuntamiento</h3>
							</div>
							<div class="panel-body">
								<a href="sesiones_ayuntamiento.php">Entrar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<?php	include("footer.php");	?>
	</body>
</html>