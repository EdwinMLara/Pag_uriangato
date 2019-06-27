<?php
	if(isset($_POST["submit"])){
		require_once('config/db.php');
		require_once("config/conexion.php");
		$album = $_POST["album"];
		$consulta = "SELECT Nombre, Filtro, Ruta FROM album WHERE Nombre='".$album."' LIMIT 0,1";
		$res = mysqli_query($con, $consulta);
		$filas = mysqli_fetch_array($res);
		echo $filas["Ruta"];
		$album_dir = $filas["Ruta"];
		$Categoria = $filas["Filtro"];
		$album = $filas["Nombre"];

		$accion = FALSE;
		
		require_once('cargar_imagenes.php');

		if($isthereimage){
    		header('Location: /uriangato.gob.mx/admin/index_update_album.php?Hecho=1&Nombre='.$album);
	    }else{
	        header('Location: /uriangato.gob.mx/admin/index_update_album.php?Hecho=2');
	    }

	}
?>