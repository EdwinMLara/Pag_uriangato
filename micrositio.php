<?php
$active_index = "";
$active_h_ayuntamiento = "";
$active_centralizadas = "";
$active_descentralizadas = "";
$active_comisiones = "";
$active_gaceta = "";
$active_tramites = "active";
$active_convocatorias = "";
$active_ubicacion = "";
$active_interes = "";
$active_galeria = "";
$active_tradiciones = "";

$title = "Uriangato | Tramites y Servicios";
require_once("admin/config/db.php");
require_once("admin/config/conexion.php");
$id = $_GET['id'];
$nombre = $_GET['departamento'];
$query = mysqli_query($con, "SELECT u.firstname, u.lastname,u.user_email, u.image, u.extencion, u.tel1, u.tel2, u.mision, u.vision, u.objetivo, u.valores, d.name FROM users u JOIN dependencias d ON u.id_dep = d.id_dep WHERE u.id_dep='$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
	<?php require_once('head.php') ?>
	<link href="css/animate.css" rel="stylesheet">
	<style>
		.emp-profile {
			padding: 3%;
			margin-top: 3%;
			margin-bottom: 3%;
			border-radius: 0.5rem;
			background: #F7F7F7;
			/*background: -webkit-linear-gradient(left, #3931af, #00c6ff);*/
		}

		.profile-img {
			text-align: center;
		}

		.profile-img img {
			width: 70%;
			height: 100%;
		}

		.profile-img .file {
			position: relative;
			overflow: hidden;
			margin-top: -20%;
			width: 70%;
			border: none;
			border-radius: 0;
			font-size: 15px;
			background: #212529b8;
		}

		.profile-img .file input {
			position: absolute;
			opacity: 0;
			right: 0;
			top: 0;
		}

		.profile-head h3 {
			color: #333;
		}

		.profile-head h5 {
			color: #cd1417;
		}

		.profile-edit-btn {
			border: none;
			border-radius: 1.5rem;
			width: 70%;
			padding: 2%;
			font-weight: 600;
			color: #6c757d;
			cursor: pointer;
		}

		.profile-rating {
			font-size: 12px;
			color: #818182;
			margin-top: 5%;
		}

		.profile-rating span {
			color: #495057;
			font-size: 15px;
			font-weight: 600;
		}

		.profile-head .nav-tabs {
			margin-bottom: 5%;
		}

		.profile-head .nav-tabs .nav-link {
			font-weight: 600;
			border: none;
		}

		.profile-head a {
			color: #000000;
			font-size: 14px;
		}

		.profile-head a:hover {
			color: #cd1417;
		}

		.profile-head .nav-tabs .nav-link.active {
			border: none;
			border-bottom: 2px solid #cd1417;
		}

		.profile-work {
			padding: 14%;
			margin-top: -15%;
		}

		.profile-work p {
			font-size: 12px;
			color: #818182;
			font-weight: 600;
			margin-top: 10%;
		}

		.profile-work a {
			text-decoration: none;
			color: #495057;
			font-weight: 600;
			font-size: 14px;
		}

		.profile-work ul {
			list-style: none;
		}

		.profile-tab label {
			font-weight: 600;
		}

		.profile-tab p {
			font-size: 16px;
			font-weight: 600;
			color: #000000;
		}

		.table {
			font-size: 16px;
		}
	</style>
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
			<?php require_once('navbar.php') ?>
		</div>
	</header>
	<!--================End Menu Area =================-->
	<!--================Categories Banner Area =================-->
	<section class="solid_banner_area">
		<div class="container">
			<div class="solid_banner_inner">
				<h1>Tr&aacute;mites y Servicios de: <br><?php echo $nombre ?></h1>
				<ul>
					<li>Usted se encuentra en:</li>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="tramitesyservicios.php"><strong>Tr&aacute;mites y Servicios</strong></a></li>
				</ul>
			</div>
		</div>
	</section>
	<section class="feature_big_add_area">
		<div class="container emp-profile">
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="profile-img">
						<img src="admin/images/profiles/<?php echo $row['image'] ?>" class="rounded" alt="" />
					</div>
				</div>
				<div class="col-md-7 col-sm-7">
					<div class="profile-head">
						<h3><?php echo $row['name']; ?></h3>
						<h5><?php echo $row['firstname'] . ' ' . $row['lastname']; ?></h5>
						<p class="proile-rating"></p><br>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="tamites-tab" data-toggle="tab" href="#tramites" role="tab" aria-controls="tramites" aria-selected="true">Tramites y/o Servicios</a>
							</li>
							<!--
							<li class="nav-item">
                                <a class="nav-link" id="mision-tab" data-toggle="tab" href="#mision" role="tab" aria-controls="mision" aria-selected="false">Misi&oacute;n</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" id="vision-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision" aria-selected="false">Visi&oacute;n</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" id="objetivo-tab" data-toggle="tab" href="#objetivo" role="tab" aria-controls="objetivo" aria-selected="false">Objetivo</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" id="valores-tab" data-toggle="tab" href="#valores" role="tab" aria-controls="valores" aria-selected="false">Valores</a>
                            </li>
							-->
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-2">
					<img src="img/escudo_uriangato.png" width="50%">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<br>
					<div class="profile-work">
						<h4>Contacto</h4><br>
						<p style="font-size:13px">
							<i class="fa fa-phone"></i> <?php echo $row['tel1']; ?> <?php echo $row['extencion'] ?><br>
							<i class="fa fa-envelope-o"></i> <?php echo $row['user_email']; ?>
						</p>
					</div>
				</div>
				<div class="col-md-8 col-sm-8">
					<div class="tab-content profile-tab" id="myTabContent">
						<div class="tab-pane fade show active" id="tramites" role="tabpanel" aria-labelledby="tramites-tab">
							<div class="row">
								<div class="col-md-12">
									<div class="table-responsive">
										<table class="table table-striped table-bordered" width="100%">
											<tr>
												<td width="70%">Descripci&oacute;n</td>
												<td width="30%">Archivo</td>
											</tr>
											<?php
											$sqlarchi = mysqli_query($con, "SELECT * FROM tramites_uri WHERE id_dep='$id'");
											while ($rowarchi = mysqli_fetch_array($sqlarchi)) {
												?>
												<tr>
													<td width="70%"><?php echo $rowarchi['descripcion']; ?></td>
													<td width="30%">
														<a href="admin/<?php echo $rowarchi['src'];?>" hidden>Ver Archivo</a>
														<a data-toggle="modal" style="cursor:pointer" data-target="#myModal_<?php echo $rowarchi['id_tramite']; ?>">Ver Archivo</a>
													</td>
												</tr>
												<div class="modal fade bd-example-modal-lg" id="myModal_<?php echo $rowarchi['id_tramite']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog modal-lg" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title"><?php echo $rowarchi['descripcion']; ?></h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
															<span id="loader"></span>
															<object data="http://uriangato.gob.mx/admin/<?php echo $rowarchi['src']; ?>" type="application/pdf" width="100%" height="400px"></object>	
															</div>
														</div>
													</div>
												</div>
											<?php
										}
										?>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--
                        <div class="tab-pane fade" id="mision" role="tabpanel" aria-labelledby="mision-tab">
							<div class="row">
								<div class="col-md-6">
									<p>< ?php echo $row['mision'];?></p>
								</div>
                            </div>
                        </div>
						<div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">
							<div class="row">
								<div class="col-md-6">
									<p>< ?php echo $row['vision'];?></p>
								</div>
                            </div>
                        </div>
						<div class="tab-pane fade" id="objetivo" role="tabpanel" aria-labelledby="objetivo-tab">
							<div class="row">
								<div class="col-md-6">
									<p>< ?php echo $row['objetivo'];?></p>
								</div>
                            </div>
                        </div>
						<div class="tab-pane fade" id="valores" role="tabpanel" aria-labelledby="valores-tab">
							<div class="row">
								<div class="col-md-6">
									<p>< ?php echo $row['valores'];?></p>
								</div>
                            </div>
                        </div>
						-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php require_once('footer.php') ?>
</body>

</html>