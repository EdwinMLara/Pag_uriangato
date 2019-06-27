<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
	}
	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	$title="Convocatorias | Sistema de Gesti&oacute;n Web";
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
						<button type='button' class="btn btn-info" data-toggle="modal" data-target="#myModalConvocatoria"><span class="glyphicon glyphicon-plus" ></span> Cargar Convocatoria</button>
					</div>
					<h4><i class='glyphicon glyphicon-search'></i> Buscar Convocatoria</h4>
				</div>			
				<div class="panel-body">
				<?php
					include("modal/registro_convocatoria.php");
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
		<script type="text/javascript" src="js/convocatorias.js"></script>
	</body>
</html>
<script>
    $(document).ready(function (e) {
		$("#form_convocatoria").on('submit',(function(e) {
			e.preventDefault();
			$.ajax({
				url: "./ajax/nueva_convocatoria.php",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				beforeSend : function(){
					//$("#preview_slider").fadeOut();	
					$("#resultados_ajax_convocatoria").fadeOut();
				},
				success: function(data){
					if(data=='invalid'){
						// invalid file format.
						$("#resultados_ajax_convocatoria").html("Invalid File !").fadeIn();
					}
					else{
						// view uploaded file.
						$("#preview_convocatoria").html(data).fadeIn();
						$("#form_convocatoria")[0].reset(); 
					}
				},
				error: function(e) {
					$("#resultados_ajax_convocatoria").html(e).fadeIn();
				}          
			});
		}));
	});
</script>