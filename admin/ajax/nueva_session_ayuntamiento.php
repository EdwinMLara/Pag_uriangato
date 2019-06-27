<?php
	
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
	include('is_logged.php');
	$valid_extensions = array('pdf'); // valid extensions
	$path = '../storage/sesion_ayuntamiento/'; // upload directory
	$path2 ='storage/sesion_ayuntamiento/';
	/*****/
	$no_sesion= mysqli_real_escape_string($con,(strip_tags($_POST['no_sesion'],ENT_QUOTES)));
	$tipo_sesion= mysqli_real_escape_string($con,(strip_tags($_POST['tipo_sesion'],ENT_QUOTES)));
	$fecha= mysqli_real_escape_string($con,(strip_tags($_POST['fecha'],ENT_QUOTES)));
	$hora= mysqli_real_escape_string($con,(strip_tags($_POST['hora'],ENT_QUOTES)));
	$lugar= mysqli_real_escape_string($con,(strip_tags($_POST['lugar'],ENT_QUOTES)));
	/*****/
	if($_POST['no_sesion'] || $_POST['tipo_sesion'] || $_POST['fecha'] || $_POST['hora'] || $_POST['lugar'] || $_FILES['archivo']){
		$img = $_FILES['archivo']['name'];
		$tmp = $_FILES['archivo']['tmp_name'];
		// get uploaded file's extension
		$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
		// can upload same image using rand function
		$final_image = rand(1000,1000000).$img;
		// check's valid format
		if(in_array($ext, $valid_extensions)) { 
			$path = $path.strtolower($final_image);
			$path2 =$path2.strtolower($final_image);
			if(move_uploaded_file($tmp,$path)) {
				echo "<object data='$path2' type='application/pdf' width='100%' height='400px'>";
				//insert form data in the database
				$int_se="INSERT INTO sesion_ayuntamiento (no_sesion_a, fecha_sesion_a, hora_sesion_a, lugar_sesion_a, archivo_sesion_a, tipo_sesion_a) VALUES ('$no_sesion','$fecha','$hora','$lugar','$path2','$tipo_sesion')";
				$query_new_insertse = mysqli_query($con,$int_se);
			}
		} 
		else {
			echo 'invalid';
		}
	}
?>