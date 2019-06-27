<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
	}
	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	$title="Inspectores, Verificadores y Visitadores Domiciliarios";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("head.php");?>
	</head>
	<body>
		<?php	include("navbar.php");	?> 
		<div class="container">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4><i class="glyphicon glyphicon-search"></i> Inspectores, Verificadores y Visitadores Domiciliarios</h4>
				</div>			
				<div class="panel-body">
					
				</div>
			</div>
		</div>
		<hr>
		<?php	include("footer.php");	?>
		<script>
			$(document).ready(function(){
				load(1);
			});

			function load(page){
				var q= $("#q").val();
				$("#loader").fadeIn('slow');
				$.ajax({
					url:'./ajax/buscar_ins_ver.php?action=ajax&page='+page+'&q='+q,
					beforeSend: function(objeto){
						$('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
					},
					success:function(data){
						$(".outer_div").html(data).fadeIn('slow');
						$('#loader').html('');					
					}
				})
			}
			
		</script>
	</body>
</html>