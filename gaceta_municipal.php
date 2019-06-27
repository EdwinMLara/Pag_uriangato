<?php	
	date_default_timezone_set("America/Mexico_City");
	$active_index="";
	$active_h_ayuntamiento="";
	$active_centralizadas="";
	$active_descentralizadas="";
	$active_comisiones="";
	$active_gaceta="active";
	$active_tramites="";
	$active_convocatorias="";
	$active_ubicacion="";
	$active_interes="";
	$active_galeria="";
	$active_tradiciones="";
	$title="Uriangato | Gaceta Municipal";
	require_once ("admin/config/db.php");
	require_once ("admin/config/conexion.php");
	$con_cal="SELECT * FROM calendario_gaceta cg JOIN comision_gaceta cmg ON cg.titulo_evento = cmg.id_comision JOIN sesion_comision sc ON sc.codigo_evento = cg.codigo_evento";
	$res_cal = mysqli_query($con, $con_cal);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <?php require_once('head.php')?>
    <link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet">
</head>
<body>
    <!--================Top Header Area =================-->
    <div class="header_top_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top_header_middle">
                        <img src="img/encabezado_letras_ok.png" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Top Header Area =================-->
    <!--================Menu Area =================-->
    <header class="shop_header_area">
        <div class="container">
            <?php require_once('navbar.php')?>
        </div>
    </header>
    <!--================End Menu Area =================-->
    <!--================Categories Banner Area =================-->
    <section class="solid_banner_area">
        <div class="container">
            <div class="solid_banner_inner">
                <img src="img/gaceta/logo_gaceta.png" alt="" title="Gaceta Municipal" style="opacity: 0.5" />
                <br>
				<h1>Gaceta Municipal</h1>
                <ul>
                    <li>Usted se encuentra en:</li>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Gobierno</a></li>
                    <li><a href="gaceta_municipal.php"><strong>Gaceta Municipal</strong></a></li>
                </ul>
                <p>Apartado para dar cumplimiento al artículo 74 - 1 de la Ley Orgánica Municipal para el Estado de Guanajuato</p>
            </div>
        </div>
    </section>
    <br>
    <section class="shopping_cart_area p_70">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
					<nav class="nav-justified">
                        <div class="nav nav-tabs " id="nav-tab-principal" role="tablist">
                            <a class="nav-item nav-link active" id="calendario-tab" data-toggle="tab" href="#calendario" role="tab" aria-controls="calendario" aria-selected="true" style="font-size:16px"><img src="img/gaceta/agenda.png" atl="" title="Agenda" /> AGENDA SEMANAL DE COMISIONES</a>
                            <a class="nav-item nav-link" id="secomisiones-tab" data-toggle="tab" href="#secomisiones" role="tab" aria-controls="secomisiones" aria-selected="false" style="font-size:16px"><img src="img/gaceta/sesiones.png" atl="" title="Agenda" /> SESIONES DE COMISIONES</a>
                            <a class="nav-item nav-link" id="sehayuntamiento-tab" data-toggle="tab" href="#sehayuntamiento" role="tab" aria-controls="sehayuntamiento" aria-selected="false" style="font-size:16px"><img src="img/gaceta/actas.png" atl="" title="Agenda" /> SESIONES DE H. AYUNTAMIENTO</a>
                        </div>
						<br>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="calendario" role="tabpanel" aria-labelledby="calendario-tab">
								<div id="calendar-gaceta"></div>
							</div>
							<div class="tab-pane fade" id="secomisiones" role="tabpanel" aria-labelledby="secomisiones-tab">
								<div class="row">
									<div class="col-md-3 col-xs-1" id="sidebar">
										<div class="list-group">
											<a href="#2019" class="list-group-item active" data-toggle="collapse" data-parent="#sidebar">
												<i class="fa fa-calendar"></i> 
												<span class="hidden-sm-down">2019 <i class="fa fa-caret-down"></i></span> 
											</a>
											<div class="collapse" id="2019">
												<a href="#" class="list-group-item" data-parent="#2019" id="btnjun19">Junio</a>
												<a href="#" class="list-group-item" data-parent="#2019" id="btnmay19">Mayo</a>
												<a href="#" class="list-group-item" data-parent="#2019" id="btnabr19">Abril</a>
												<a href="#" class="list-group-item" data-parent="#2019" id="btnmar19">Marzo</a>
												<a href="#" class="list-group-item" data-parent="#2019" id="btnfeb19">Febrero</a>
												<a href="#" class="list-group-item" data-parent="#2019" id="btnene19">Enero</a>
											</div>
											<a href="#2018" class="list-group-item" data-toggle="collapse" data-parent="#sidebar">
												<i class="fa fa-calendar"></i> 
												<span class="hidden-sm-down">2018 <i class="fa fa-caret-down"></i></span> 
											</a>
											<div class="collapse" id="2018">
												<a href="#" class="list-group-item" data-parent="#2018" id="btndic18">Diciembre</a>
												<a href="#" class="list-group-item" data-parent="#2018" id="btnnov18">Noviembre</a>
												<a href="#" class="list-group-item" data-parent="#2018" id="btnoct18">Octubre</a>
											</div>
										</div>
									</div>
									<div class="col-md-9">
										<div id="div-results"></div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="sehayuntamiento" role="tabpanel" aria-labelledby="sehayuntamiento-tab">
								<?php include_once("gaceta/ayuntamiento/algo.php");?>
							</div>
						</div>
						<div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content ">
									<div class="modal-header">
										<h4 class="modal-title" id="title"></h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p style="font-size: 20px;" id="start"></p>
										<hr>
										<p style="font-size: 16px;" id="descripcion"></p>
										<hr>
										<object id="archivo" type="application/pdf" width="100%" height="400px"></object>
									</div>
								</div>
							</div>
						</div>
                    </nav>
				</div>
			</div>
		</div>
    </section>
    <br>
    <!--================End Contact Area =================-->
    <!--================Footer Area =================-->
    <?php require_once('footer.php')?>
    <script src="vendors/fullcalendar/lib/moment.min.js"></script>
    <script src="vendors/fullcalendar/fullcalendar.js"></script>
    <script src="vendors/fullcalendar/locale/es-us.js"></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar-gaceta').fullCalendar({
                header: {
                    language: 'es-us',
                    left: 'prev,next',
                    center: 'title',
                    right: 'month,basicWeek,basicDay',
                },
                height: 700,
                defaultDate: Date(),
                navLinks: true,
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                eventClick: function(event) {
                    //$('#visualizar #id').text(event.id);
                    $('#visualizar #title').text(event.title);
                    $('#visualizar #descripcion').text(event.descripcion);
                    $('#visualizar #archivo').attr('data', event.archivo);
                    $('#visualizar #archivo').attr('src', event.archivo);
                    $('#visualizar #start').text(event.start.format('DD/MM/YYYY HH:mm:ss'));
                    $('#visualizar').modal('show');
                    return false;
                },
                events: [<?php
					while($reg_cal = mysqli_fetch_array($res_cal)){	
					
					?> {
                    id: '<?php echo $reg_cal['id_evento']; ?>',
                    title: '<?php echo $reg_cal['nombre_comision']; ?>',
                    descripcion: '<?php echo $reg_cal['descripcion_evento']; ?>',
                    archivo: 'admin/<?php echo $reg_cal['archivo_orden']; ?>',
                    start: '<?php echo $reg_cal['fecha_evento'].'T'.$reg_cal['hora_evento']; ?>',
                    color: '<?php echo $reg_cal['color_evento']; ?>',
                }, <?php 
					}	?>]
            });
        });

    </script>
	<script>
		$(document).ready(function() {
			$('#btndic18').on('click', function(){
				$.ajax({
					type: "POST",
					url: "gaceta/2018/diciembre.php",
					success: function(response) {
						$('#div-results').html(response);
					}
				});
			});

			$('#btnnov18').on('click', function(){
				$.ajax({
					type: "POST",
					url: "gaceta/2018/noviembre.php",
					success: function(response) {
						$('#div-results').html(response);
					}
				});
			});
			
			$('#btnoct18').on('click', function(){
				$.ajax({
					type: "POST",
					url: "gaceta/2018/octubre.php",
					success: function(response) {
						$('#div-results').html(response);
					}
				});
			});
			//enero
			$('#btnene19').on('click', function(){
				$.ajax({
					type: "POST",
					url: "gaceta/2019/enero.php",
					success: function(response) {
						$('#div-results').html(response);
					}
				});
			});
			//febrero
			$('#btnfeb19').on('click', function(){
				$.ajax({
					type: "POST",
					url: "gaceta/2019/febrero.php",
					success: function(response) {
						$('#div-results').html(response);
					}
				});
			});
			//marzo
			$('#btnmar19').on('click', function(){
				$.ajax({
					type: "POST",
					url: "gaceta/2019/marzo.php",
					success: function(response) {
						$('#div-results').html(response);
					}
				});
			});
			//abril
			$('#btnabr19').on('click', function(){
				$.ajax({
					type: "POST",
					url: "gaceta/2019/abril.php",
					success: function(response) {
						$('#div-results').html(response);
					}
				});
			});
			//Mayo
			$('#btnmay19').on('click', function(){
				$.ajax({
					type: "POST",
					url: "gaceta/2019/mayo.php",
					success: function(response) {
						$('#div-results').html(response);
					}
				});
			});
			//Junio
			$('#btnjun19').on('click', function(){
				$.ajax({
					type: "POST",
					url: "gaceta/2019/junio.php",
					success: function(response) {
						$('#div-results').html(response);
					}
				});
			});
		});
</script>
</body>

</html>
