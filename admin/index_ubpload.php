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
				<form class="form-signin" action="upload.php" method="post" enctype="multipart/form-data">
					<label for="imagenes">Selecciona las imaganes a cargar</label>
					<input class="form-control-file" type="file" name="fileToUpload[]" id="fileToUpload" multiple=""><br>
					<label for="album">Nombre del album</label>
				    <input class="form-control" onkeypress="activar()" type="text" name="Nombre" id="nombre"><br>
				    <label for="categoria">Categoria</label>
				    <input class="form-control" onkeypress="activar()" type="text" name="Categoria" id="categoria" placeholder="Puede ser el nombre del album"><br>
				    <input class="btn btn-primary" type="submit" value="Crear Album" name="submit" id="submit">
				</form>
			</div>
			<?php
				$cadena_impresion = "se ha creado el album";
				require_once("comprobar_imagen.php");
			?>
		</div>
		<script type="text/javascript">
			document.getElementById("submit").disabled = true;

			function activar(){
				if(!document.getElementById("nombre").value == "" && !document.getElementById("categoria").value == ""){
					if(document.getElementById("nombre").value.length > 3 && document.getElementById("categoria").value.length > 3){
						if ( /^\S{3,}/g.test(document.getElementById("nombre").value) && /^\S{3,}/g.test(document.getElementById("categoria").value)){
							document.getElementById("submit").disabled = false;
						}else{
							document.getElementById("submit").disabled = true;
						}
					}else{
						document.getElementById("submit").disabled = true;	
					}
				}else{
					document.getElementById("submit").disabled = true;
				}
			}
		</script>

		<script type="text/javascript" src="js/jQuery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>