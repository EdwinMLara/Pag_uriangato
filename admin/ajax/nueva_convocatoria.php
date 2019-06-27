<?php
	include('is_logged.php');
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
	$path = '../images/convocatorias/'; // upload directory
	$path2 ='images/convocatorias/';
	
	$pathdes = '../descargables/convocatorias/'; // upload directory
	$path2des ='descargables/convocatorias/';
	$var = $_FILES['descargable']['name'];
	if(!empty($var)){
		//echo $var;
		if($_POST['titulo_convocatoria'] || $_FILES['image'] || $_FILES['descargable']){
			$img = $_FILES['image']['name'];
			$tmp = $_FILES['image']['tmp_name'];
			/****/
			$imgdes = $_FILES['descargable']['name'];
			$tmpdes = $_FILES['descargable']['tmp_name'];
			// get uploaded file's extension
			$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
			$extdes = strtolower(pathinfo($imgdes, PATHINFO_EXTENSION));
			// can upload same image using rand function
			$final_image = rand(1000,1000000).$img;
			$final_imagedes = rand(1000,1000000).$imgdes;
			// check's valid format
			if(in_array($ext, $valid_extensions) && in_array($extdes, $valid_extensions)) { 
				$path = $path.strtolower($final_image);
				$path2 =$path2.strtolower($final_image);
				$pathdes = $pathdes.strtolower($final_imagedes);
				$path2des =$path2des.strtolower($final_imagedes);
				
				if(move_uploaded_file($tmp,$path) && move_uploaded_file($tmpdes,$pathdes)) {
					echo "<img src='$path2' style='max-width: 100%; border: solid #cdcdcd 1px; padding:5px; border-radius: 3px; -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .2); box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .2); overflow: hidden; width:200px; height:220px;'>";
					$titulo_convocatoria = $_POST['titulo_convocatoria'];
					$date_added=date("Y-m-d");
					//$estado=intval($_POST['estado']);
					$estado=1;
					//include database configuration file
					require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
					require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
					//insert form data in the database
					$sql="INSERT INTO convocatorias (titulo_convocatoria, archivo_convocatoria, is_public, descargable_convocatoria, created_at) VALUES ('$titulo_convocatoria','$path2','$estado','$path2des','$date_added')";
					$query_new_insert = mysqli_query($con,$sql);
				}
			} 
			else {
				echo 'invalid';
			}
		}
	}else{
		if($_POST['titulo_convocatoria'] || $_FILES['image']){
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
					$titulo_convocatoria = $_POST['titulo_convocatoria'];
					$date_added=date("Y-m-d");
					//$estado=intval($_POST['estado']);
					$estado=1;
					//include database configuration file
					require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
					require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
					//insert form data in the database
					$sql="INSERT INTO convocatorias (titulo_convocatoria, archivo_convocatoria, is_public, created_at) VALUES ('$titulo_convocatoria','$path2','$estado','$date_added')";
					$query_new_insert = mysqli_query($con,$sql);
				}
			} 
			else {
				echo 'invalid';
			}
		}
	}
	
	
?>