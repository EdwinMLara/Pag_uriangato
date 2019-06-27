<?php
	include('is_logged.php');
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
	$path = '../images/slider_principal/'; // upload directory
	$path2 ='images/slider_principal/';
	if($_POST['descripcion'] || $_FILES['image']){
		$img = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];
		// get uploaded file's extension
		$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
		// can upload same image using rand function
		$final_image = rand(1000,1000000).$img;
		// check's valid format
		if(in_array($ext, $valid_extensions)) { 
			$path = $path.strtolower($final_image);
			$path2 =$path2.strtolower($final_image);
			if(move_uploaded_file($tmp,$path)) {
				echo "<img src='$path2' style='max-width: 100%; border: solid #cdcdcd 1px; padding:5px; border-radius: 3px; -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .2); box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .2); overflow: hidden; width:200px; height:220px;'>";
				$descripcion = $_POST['descripcion'];
				$date_added=date("Y-m-d");
				//$estado=intval($_POST['estado']);
				$estado=1;
				//include database configuration file
				require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
				require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
				//insert form data in the database
				$sql="INSERT INTO slider_principal (imagen_slider, descripcion_slider, activa_slider, fecha_slider) VALUES ('$path2','$descripcion','$estado','$date_added')";
				$query_new_insert = mysqli_query($con,$sql);
				
				//$insert = $db->query("INSERT uploading (name,email,file_name) VALUES ('".$name."','".$email."','".$path."')");
				//echo $insert?'ok':'err';
			}
		} 
		else {
			echo 'invalid';
		}
	}
?>
	
	
	
	
<?php	
	/*
	include "class.upload.php";
	
	if (empty($_POST['titulo'])){
		$errors[] = "No hay titulo";
	} elseif (empty($_POST['descripcion'])){
		$errors[] = "No hay descripci&oacute;n";
	} elseif (!empty($_POST['titulo'])&& !empty($_POST['descripcion'])){
		include "../config/config.php";
		
		$titulo = mysqli_real_escape_string($con,(strip_tags($_POST["titulo"],ENT_QUOTES)));
		$descripcion = mysqli_real_escape_string($con,(strip_tags($_POST["descripcion"],ENT_QUOTES)));
		$date_added=date("Y-m-d ");
		$estado=intval($_POST['estado']);
		
		$handle = new Upload($_FILES['filename']);
		if ($handle->uploaded) {
			$url="../images/noticias/";
			$handle->Process($url);
			if($handle->processed){
				$filename = $handle->file_dst_name;
				
				$sql="INSERT INTO noticias (titulo_noticia, cuerpo_noticia, imagen1, create_at, is_public) VALUES ('$titulo','$descripcion','$filename','$date_added','$estado')";
				$query_new_insert = mysqli_query($con,$sql);
				if ($query_new_insert){
					$messages[] = "La noticia ha sido ingresada satisfactoriamente.";
				} else{
					$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
				}
			}else{
				$errors[] = "El archivo no se subio por peso maximo.";
			}
		}else{
			$errors[] = "El archivo no se subio por peso maximo 2.";
		}
	}else {
		$errors[] = "Un error desconocido ocurrió.";
	}
	
	/*********************** /
	if (isset($errors)){	?>
		<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Error!</strong> 
			<?php
				foreach ($errors as $error) {
					echo $error;
				}
			?>
		</div>
		<?php
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
		</div>
<?php
	}*/
?>