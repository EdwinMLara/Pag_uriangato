<?php
	$css = 0;
	$album_dir = $target_dir.$Nombre;

	if (!mkdir($album_dir)) { ?>
		<script type="text/javascript">
			alert("El Album ya existe");
		</script>
	<?php
		header('Location: /uriangato.gob.mx/admin/index_ubpload.php?Hecho=0');
		die('Ya existe');

	}else{

		$sql_css = "SELECT id, Tipo_css FROM album ORDER BY id DESC";
		$res_css = mysqli_query($con,$sql_css);

		if($filas = mysqli_fetch_array($res_css)){
			echo "<script>alert('si hay')</script>";
			$css = $filas["Tipo_css"];
			switch ($css) {
				case 'Convivencia':
					$Tipo_css = "Eventos";
					break;
				case 'Eventos':
					$Tipo_css = "nombramiento";
					break;
				case 'nombramiento':
					$Tipo_css = "ruta";
					break;
				case 'ruta':
					$Tipo_css = "Convivencia";
					break;
			}

		}else{
			$Tipo_css = "Convivencia";
			echo "<script>alert('si hay')</script>";
		}

		$sql_album = "INSERT INTO album (Nombre, Filtro, Ruta, Tipo_css,Mostrar)
		VALUES ('".$Nombre."', '".$Categoria."', '".$album_dir."','".$Tipo_css."', '1')";

		if ($con->query($sql_album) === TRUE) {
	    	echo "Se ha creado un nuevo album"."<br>";
		} else {
	    	echo "Error: " . $sql_album . "<br>" . $con->error;
		}
	}
?>