<?php

	require_once ("config/db.php");
	require_once ("config/conexion.php");
	$consulta = "SELECT Nombre FROM image WHERE Filtro ='".$_GET["Filtro"]."'";
	$res = mysqli_query($con,$consulta);
	$len = mysqli_num_rows($res);
     
	while($filas = mysqli_fetch_array($res)){
        
        echo $filas["Nombre"];
        echo "|";	
	}
	mysqli_close($con);

   
          
?>