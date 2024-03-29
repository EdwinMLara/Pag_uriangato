<?php
	include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado

	if (empty($_POST['name2'])){
		$errors[] = "Nombre del Departamento Vacío";
	} elseif (!empty($_POST['name2'])){
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$name = mysqli_real_escape_string($con,(strip_tags($_POST["name2"],ENT_QUOTES)));
		$id_dep=intval($_POST['mod_id']);
		// write new user's data into database
		$sql = "UPDATE dependencias SET name='".$name."' WHERE id_dep='".$id_dep."';";
		$query_update = mysqli_query($con,$sql);
		// if user has been added successfully
        if ($query_update) {
			$messages[] = "El departamento ha sido modificado con éxito.";
		} else {
			$errors[] = "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
		}
	} else {
		$errors[] = "Un error desconocido ocurrió.";
	}
		
	if (isset($errors)){	?>
		<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Error!</strong> 
			<?php
				foreach ($errors as $error) {
					echo $error;
				}
			?>
		</div><?php
	}
	if (isset($messages)){	?>
		<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>¡Bien hecho!</strong>
			<?php
				foreach ($messages as $message) {
					echo $message;
				}
			?>
		</div><?php
	}	?>