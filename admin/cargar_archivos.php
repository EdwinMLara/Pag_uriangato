<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
	}
	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	$title="Carga de Tramites y Servicios | Sistema de Gesti&oacute;n Web";
	$dependencia=$_GET['depto'];
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
					<h4 class="text-center">Cargar Múltiple Archivos</h4>
				</div>
				<div class="panel-body">
					<form name="MiForm" id="MiForm" method="post" action="cargar_archivos2.php" enctype="multipart/form-data">
						<div class="form-group">
							<label for="descripcion">Descripci&oacute;n</label>
							<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripci&oacute;n">
							<input type="hidden" class="form-control" id="dependencia" name="dependencia" value="<?php echo $dependencia; ?>">
						</div>
						<div class="form-group">
							<label for="file">Archivos</label>
							<input type="file" class="form-control" id="miarchivo[]" name="miarchivo[]" multiple="">
						</div>
						<button type="submit" class="btn btn-primary">Subir Archivos</button>
					</form>
				</div>
			</div>
		</div>
		<hr>
		<?php	include("footer.php");	?>
	</body>
</html>