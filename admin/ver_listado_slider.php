<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
	}
	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
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
						<button type='button' class="btn btn-info" data-toggle="modal" data-target="#myModalSlider"><span class="glyphicon glyphicon-plus" ></span> Cargar a Slider</button>
					</div>
					<h4><i class='glyphicon glyphicon-search'></i> Buscar Slider</h4>
				</div>			
				<div class="panel-body">
				<?php
					include("modal/registro_slider.php");
					include("modal/editar_slider.php");
				?>
					<form class="form-horizontal" role="form" id="datos_cotizacion">
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Descripci&oacute;n:</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Descripci&oacute;n" onkeyup='load(1);'>
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
		<script type="text/javascript" src="js/ver_slider.js"></script>
	</body>
</html>
<script>
    $(document).ready(function (e) {
		$("#form_slider").on('submit',(function(e) {
			e.preventDefault();
			$.ajax({
				url: "./ajax/nuevo_slider.php",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				beforeSend : function(){
					//$("#preview_slider").fadeOut();	
					$("#resultados_ajax_slider").fadeOut();
				},
				success: function(data){
					if(data=='invalid'){
						// invalid file format.
						$("#resultados_ajax_slider").html("Invalid File !").fadeIn();
					}
					else{
						// view uploaded file.
						$("#preview_slider").html(data).fadeIn();
						$("#form_slider")[0].reset(); 
					}
				},
				error: function(e) {
					$("#resultados_ajax_slider").html(e).fadeIn();
				}          
			});
		}));
	});
	/******/
	function obtener_datos(id){
		var descripcion = $("#descripcion_slider"+id).val();
		var activo = $("#activo_slider"+id).val();
			
		$("#mod_id").val(id);
		$("#mod_descripcion").val(descripcion);
		$("#mod_activo").val(activo);
	}
	
	/********/
	$( "#editar_slider" ).submit(function( event ) {
		$('#actualizar_datos2').attr("disabled", true);
		var parametros = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "ajax/editar_slider.php",
			data: parametros,
			beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			},
			success: function(datos){
				$("#resultados_ajax2").html(datos);
				$('#actualizar_datos2').attr("disabled", false);
				load(1);
			}
		});
		event.preventDefault();
	})
</script>