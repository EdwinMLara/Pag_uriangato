<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
	}
	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	$title="Tramites y Servicios | Sistema de Gesti&oacute;n Web";
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
					<h4><i class="glyphicon glyphicon-search"></i> Tramites y Servicios</h4>
				</div>			
				<div class="panel-body">
					Seleccione el departamento que desea subir archivos
					<?php
						$quedeptos=mysqli_query($con, "SELECT * FROM dependencias");
					?>
					<ul>
						<?php while($rowdeptos=mysqli_fetch_array($quedeptos)){ ?>
						<li><a href="cargar_archivos.php?depto=<?php echo $rowdeptos['id_dep']; ?>"><?php echo $rowdeptos['name']; ?></a></li>
						<?php	}	?>
					</ul>
					
				</div>
				<div class="panel-footer">
					Buscar Tramites
				</div>
			</div>
		</div>
		<hr>
		<?php	include("footer.php");	?>
	</body>
</html>