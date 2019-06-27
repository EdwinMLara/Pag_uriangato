<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
	}
	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	$active_usuarios="active";	
	$title="Noticias | Sistema de Gesti&oacute;n Web";
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
						<button type='button' class="btn btn-info" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus" ></span> Nueva Noticia</button>
					</div>
					<h4><i class='glyphicon glyphicon-search'></i> Buscar Noticias</h4>
				</div>			
				<div class="panel-body">
					<?php
						include("modal/registro_noticia.php");
						include("modal/editar_noticia.php");
					?>
					<form class="form-horizontal" role="form" id="datos_cotizacion">
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Noticia:</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Noticia" onkeyup='load(1);'>
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
		<script type="text/javascript" src="js/noticias.js"></script>
	</body>
</html>
<script>
	/******************/
	$( "#editar_noticia" ).submit(function( event ) {
		$('#actualizar_datos2').attr("disabled", true);
		var parametros = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "ajax/editar_noticia.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html('<img src="../img/icon/ajax-loader.gif"> Cargando...');
			  },
			success: function(datos){
				$("#resultados_ajax2").html(datos);
				$('#actualizar_datos2').attr("disabled", false);
				load(1);
			}
		});
		event.preventDefault();
	})
	/******************/
	function obtener_datos(id){
		var titulo = $("#titulo"+id).val();
		var descripcion = $("#descripcion"+id).val();
			
		$("#mod_id").val(id);
		$("#mod_titulo").val(titulo);
		$("#mod_descripcion").val(descripcion);
	}
</script>
<script>
    $(document).ready(function (e) {
		$("#form").on('submit',(function(e) {
			e.preventDefault();
			$.ajax({
				url: "./ajax/nueva_noticia.php",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				beforeSend : function(){
					//$("#preview").fadeOut();	
					$("#resultados_ajax").fadeOut();
				},
				success: function(data){
					if(data=='invalid'){
						// invalid file format.
						$("#resultados_ajax").html("Invalid File !").fadeIn();
					}
					else{
						// view uploaded file.
						$("#preview").html(data).fadeIn();
						$("#form")[0].reset(); 
					}
				},
				error: function(e) {
					$("#resultados_ajax").html(e).fadeIn();
				}          
			});
		}));
	});
</script>