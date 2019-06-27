<?php
	
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
	include('is_logged.php');
	/*****/
	$no_sesion= mysqli_real_escape_string($con,(strip_tags($_POST['no_sesion'],ENT_QUOTES)));
	$descripcion= mysqli_real_escape_string($con,(strip_tags($_POST['descripcion'],ENT_QUOTES)));
	/*****/
	$valid_extensions = array('pdf'); // valid extensions
	$path = '../storage/sesion_ayuntamiento/anexos/'; // upload directory
	$path2 ='storage/sesion_ayuntamiento/anexos/';
	/****/
	if($_POST['no_sesion'] || $_POST['descripcion'] || $_FILES['archivo']){
		//
		$img = trim($_FILES['archivo']['name']);
		$img= ereg_replace (" ", "_", $img);
		$tmp = trim($_FILES['archivo']['tmp_name']);
		$tmp= ereg_replace (" ", "_", $tmp);
		
		// verificamos el tamaño del archivo para mandar una alerta
		$tamanio = $_FILES['archivo']['size'];
		/*if($tamanio > 3145729‬){ //3MB 3145728‬
			echo 'El archivo as mayor a 3MB';
		} else{ */
			$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
			$final_image = rand(1000,1000000).$img;
			// check's valid format
			if(in_array($ext, $valid_extensions)){ 
				$path = $path.strtolower($final_image);
				$path2 =$path2.strtolower($final_image);
				if(move_uploaded_file($tmp,$path)) {
					echo '
						<div class="alert alert-success" role="alert">
							Archivo cargado con exito!
						</div>';
					echo "<object data='$path2' type='application/pdf' width='100%' height='400px'>";
					//insert form data in the database
					$int_se="INSERT INTO archivos_sesiona (descripcion_archivoa, nombre_archivoa, id_sesiona, urla) VALUES ('$descripcion','$img','$no_sesion','$path2')";
					$query_new_insertse = mysqli_query($con,$int_se);
				}
			} 
			else {
				echo '
					<div class="alert alert-danger" role="alert">
						Archivo Invalido
					</div>';
			}
		/*}*/
	}
?>