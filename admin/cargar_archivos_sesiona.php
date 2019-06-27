<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
	}
	$title="Carga de Archivos de Sesi&oacute;n de Ayuntamiento | Sistema de Gesti&oacute;n Web";
	$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("head.php"); ?>
		<link rel="stylesheet" type="text/css" href="css/progressbar.css">
	</head>
	<body>
		<?php include("navbar.php");	?> 
		<div class="container">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="text-center">Cargar Archivos</h4>
				</div>
				<div class="panel-body">
					<div class="col-md-6">
						<form class="form-horizontal" id="form_sesion_ayuntamiento" method="post" enctype="multipart/form-data">
							<div class="form-group row">
								<label for="no_sesion" class="col-sm-5 col-form-label">No. de Sesión</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" id="no_sesion" name="no_sesion" placeholder="No. de Sesión" required  minlength="1" pattern="[0-9]{1,100}" value="<?php echo $_GET['id']?>" readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="descripcion" class="col-sm-4 col-form-label">Descripci&oacute;n del Archivo</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="descripcion" name="descripcion" required>
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
				url: "./ajax/nuevo_archivoa.php",
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
						$("#resultados_ajax").html().fadeIn();
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