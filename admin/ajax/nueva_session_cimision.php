<?php
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
	include('is_logged.php');
	$valid_extensions = array('pdf'); // valid extensions
	$path = '../storage/sesion_comision/'; // upload directory
	$path2 ='storage/sesion_comision/';
	/*****/
	$no_sesion= $_POST['no_sesion']; 
	$id_comision= $_POST['id_comision'];
	$fecha= $_POST['fecha']; 
	$hora= $_POST['hora']; 
	$lugar= $_POST['lugar'];
	function generarCodigo($longitud, $tipo=0){
		$codigoe = "";
		$caracteres="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$max=strlen($caracteres)-1;
		for($i=0;$i < $longitud;$i++){
			$codigoe.=$caracteres[rand(0,$max)];
		}
		return $codigoe;	
	}
	$sacar_color=mysqli_query($con,"SELECT * FROM comision_gaceta WHERE id_comision='$id_comision'");	
	$res_color=mysqli_fetch_array($sacar_color);
	$color_evento=$res_color['color_comision'];
	$codigo_evento=generarCodigo(5);
	/*****/
	if($_POST['no_sesion'] || $_POST['id_comision'] || $_POST['fecha'] || $_POST['hora'] || $_POST['lugar'] || $_FILES['archivo']){
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
				/* echo "<img src='$path2' style='max-width: 100%; border: solid #cdcdcd 1px; padding:5px; border-radius: 3px; -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .2); box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .2); overflow: hidden; width:200px; height:220px;'>"; */
				echo "<object data='$path2' type='application/pdf' width='100%' height='400px'>";
				//insert form data in the database
				$int_cal="INSERT INTO calendario_gaceta (titulo_evento,descripcion_evento,color_evento,fecha_evento,hora_evento,codigo_evento) VALUES ('$id_comision','$lugar','$color_evento','$fecha','$hora','$codigo_evento')";
				$query_new_insertca = mysqli_query($con,$int_cal);
				$int_se="INSERT INTO sesion_comision (no_sesion,id_comision,archivo_orden,codigo_evento) VALUES ('$no_sesion','$id_comision','$path2','$codigo_evento')";
				$query_new_insertse = mysqli_query($con,$int_se);
			}
		} 
		else {
			echo 'invalid';
		}
	}
?>