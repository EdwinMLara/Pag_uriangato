<?php
	if (empty($_POST['mod_id'])) {
		$errors[] = "ID vacío";
	}else if (empty($_POST['mod_titulo'])) {
		$errors[] = "Titulo vacío";
	} else if (empty($_POST['mod_descripcion'])){
		$errors[] = "Descripción vacío";
	}else if (!empty($_POST['mod_id']) && !empty($_POST['mod_titulo']) && !empty($_POST['mod_descripcion'])){
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
				
		$titulo=mysqli_real_escape_string($con,(strip_tags($_POST["mod_titulo"],ENT_QUOTES)));
		$descripcion=mysqli_real_escape_string($con,(strip_tags($_POST["mod_descripcion"],ENT_QUOTES)));
		$id_noticia=$_POST['mod_id'];
		
		$sql="UPDATE noticias SET titulo_noticia='".$titulo."', cuerpo_noticia='".$descripcion."' WHERE id_noticia='".$id_noticia."'";
		$query_update = mysqli_query($con,$sql);
		if ($query_update){
			$messages[] = "La noticia ha sido actualizado satisfactoriamente.";
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