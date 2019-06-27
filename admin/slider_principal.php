<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
	}
	require_once ("config/db.php");
	require_once ("config/conexion.php");
	$active_slider_p="active";	
	$title="Slider Principal | Sistema de Gesti&oacute;n Web";
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
					<div class="btn-group pull-right">
						<button type='button' class="btn btn-info" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus" ></span> Nuevo Slider</button>
					</div>
					<h4><i class='glyphicon glyphicon-search'></i> Buscar Slider</h4>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" id="datos_cotizacion">
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Slider:</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Slider" onkeyup='load(1);'>
							</div>
							<div class="col-md-3">
								<button type="button" class="btn btn-default" onclick='load(1);'>
								<span class="glyphicon glyphicon-search" ></span> Buscar</button>
								<span id="loader"></span>
							</div>
						</div>
					</form>
					<div id="resultados"></div><!-- Carga los datos ajax -->
					<div class='outer_div'></div><!-- Carga los datos ajax -->
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
					url:'./ajax/buscar_slider.php?action=ajax&page='+page+'&q='+q,
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