<?php
	$title="Panel de Control | Sistema de Gesti&oacute;n Web";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<?php include("head.php");	?>
	</head>
	<body>
		<?php	include("navbar.php");	?>
		<div class="container">
			<div class="form-group"> 
				<form action="update_album.php" method="post" enctype="multipart/form-data">
				    <label for="imagenes">Selecciona las imaganes a cargar</label>
				    <input class="form-control-file" type="file" name="fileToUpload[]" id="fileToUpload" multiple=""><br>
				    <label for="imagenes">Selecciona el album a editar</label> 
				    <select class="form-control form-control-sm" name="album" id="album">
						<?php  
							require_once("config/db.php");
							require_once ("config/conexion.php");
							$consulta = "SELECT * FROM album WHERE 1";
							$res = mysqli_query($con,$consulta);

							while($filas = mysqli_fetch_array($res)){
								echo "<option value='".$filas["Nombre"]."'>".$filas["Nombre"]."</option>"; 
							}
							mysqli_close($con);
						?>	
					</select><br>
					<input class="btn btn-primary"  type="submit" value="Actualizar Album" name="submit">
				</form>
			</div>
			<?php
				$cadena_impresion = "se ha actulizado el album";
				require_once("comprobar_imagen.php");
			?>
		</div>
	</body>
</html>