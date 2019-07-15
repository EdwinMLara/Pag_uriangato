<?php
	$Filtro = $_GET["Filtro"];
	$Ruta = $_GET["Ruta"];

	require_once ("admin/config/db.php");
	require_once ("admin/config/conexion.php");
	$consulta = "SELECT Nombre FROM image WHERE Filtro ='".$_GET["Filtro"]."'";
	$res = mysqli_query($con,$consulta);
	$len = mysqli_num_rows($res);
     
	while($filas = mysqli_fetch_array($res)){
        echo '<div class="box-img">
            <a href="admin/'.$Ruta.'/'.$filas["Nombre"].'" target="_blank">
              <img src="admin/'.$Ruta.'/'.$filas["Nombre"].'" alt="Fjords" style="width:100%">
            </a>
          </div>
        </div>';	
	}
	mysqli_close($con);
          
?>