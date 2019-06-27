<?php
	if (empty($_POST['mod_id'])) {
		$errors[] = "ID vacío";
	}else if (empty($_POST['mod_descripcion'])){
		$errors[] = "Descripción vacío";
	}else if (!empty($_POST['mod_id']) && !empty($_POST['mod_descripcion'])){
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
				
		$descripcion=mysqli_real_escape_string($con,(strip_tags($_POST["mod_descripcion"],ENT_QUOTES)));
		$activo=mysqli_real_escape_string($con,(strip_tags($_POST["mod_activo"],ENT_QUOTES)));
		$id=$_POST['mod_id'];
		
		$sql="UPDATE slider_principal SET descripcion_slider='".$descripcion."', activa_slider='".$activo."' WHERE id_slider='".$id."'";
		$query_update = mysqli_query($con,$sql);
		if ($query_update){
			$messages[] = "Registro actualizado satisfactoriamente.";
		} else{
			$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
		}
	} else {
		$errors []= "Error desconocido.";
	}
		
	if (isset($errors)){	?>
		<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Error!</strong> <?php
				foreach ($errors as $error) {
					echo $error;
				}	?>
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
	}
?>