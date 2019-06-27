<?php
	if(isset($_GET["Hecho"])){

		switch ($_GET["Hecho"]) {
			case '0': ?>
				<script type="text/javascript">
					alert("El Album ya existe");
				</script>
			<?php
				break;
			case '1':
				echo "<label for='crear'>".$cadena_impresion.$_GET["Nombre"]."</label>";
				break;
			case '2':
				?>
				<script type="text/javascript">
					alert("No has Seleccionado ninguna imagen");
				</script>
			<?php
				break;
		}
			
	}
?>