<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
	}
	require_once ("config/db.php");
	require_once ("config/conexion.php");
	$title="Nueva Sesi&oacute;n de Ayuntamiento | Sistema de Gesti&oacute;n Web";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("head.php");	?>
	</head>
	<body>
		<?php	include("navbar.php");	?> 
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<center><h3>Nueva Sesi&oacute;n de Ayuntamiento </h3></center>
				</div>
				<div class="panel-body">
					<div class="col-md-6">
						<form class="form-horizontal" id="form_sesion_ayuntamiento" method="post" enctype="multipart/form-data">
							<div class="form-group row">
								<label for="no_sesion" class="col-sm-5 col-form-label">No. de Sesión</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" id="no_sesion" name="no_sesion" placeholder="No. de Sesión" required  minlength="1" pattern="[0-9]{1,100}">
								</div>
							</div>
							<div class="form-group row">
								<label for="tipo_sesion" class="col-sm-5 col-form-label">Tipo de Sesi&oacute;n</label>
								<div class="col-sm-7">
									<select class="form-control" id="tipo_sesion" name="tipo_sesion" required>
										<option value="">-- Seleccione una opcion --</option>
										<option value="ordinaria">Ordinaria</option>
										<option value="extraordinaria">Extraordinaria</option>
										<option value="solemne">Solemne</option>
										<option value="secreta">Secreta</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="fechayfora" class="col-sm-4 col-form-label">Fecha y Hora</label>
								<div class="col-sm-5">
									<input type="date" class="form-control" id="fecha" name="fecha" required>
								</div>
								<div class="col-sm-3">
									<input type="time" class="form-control" id="hora" name="hora" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="lugar" class="col-sm-4 col-form-label">Lugar de la Sesi&oacute;n</label>
								<div class="col-sm-8">
									<textarea rows="10" cols="50" class="form-control" id="lugar" name="lugar" required></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label for="archivo" class="col-sm-4 col-form-label">Seleccione el Archivo</label>
								<div class="col-sm-8">
									<input type="file" class="form-control" id="uploadImage" name="archivo" accept=".pdf" required>
								</div>
							</div>
							<input type="submit" class="btn btn-success" value="Guardar">
						<form>
					</div>
					<div class="col-md-6">
						<div id="resultados_ajax"></div>
						<div id="preview_pdf" style="margin-top:10px;">
							<object data="storage/sesion_ayuntamiento/pdf_blanco.pdf" type="application/pdf" width="100%" height="400px">
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<?php	include("footer.php");	?>
	</body>
</html>
<script>
    $(document).ready(function (e) {
		$("#form_sesion_ayuntamiento").on('submit',(function(e) {
			e.preventDefault();
			$.ajax({
				url: "./ajax/nueva_session_ayuntamiento.php",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				beforeSend : function(){
					//$("#preview_pdf").fadeOut();	
					$("#resultados_ajax").fadeOut();
				},
				success: function(data){
					if(data=='invalid'){
						// invalid file format.
						$("#resultados_ajax").html("Invalid File !").fadeIn();
					}
					else{
						// view uploaded file.
						$("#preview_pdf").html(data).fadeIn();
						$("#form_sesion_ayuntamiento")[0].reset(); 
					}
				},
				error: function(e) {
					$("#resultados_ajax").html(e).fadeIn();
				}          
			});
		}));
	});
</script>