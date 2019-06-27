<?php
	$active_index="";
	$active_h_ayuntamiento="";
	$active_centralizadas="";
	$active_descentralizadas="";
	$active_comisiones="";
	$active_gaceta="";
	$active_tramites="active";
	$active_convocatorias="";
	$active_ubicacion="";
	$active_interes="";
	$active_galeria="";
	$active_tradiciones="";
	$title="Uriangato | Ubicaci&oacute;n";
	require_once ("admin/config/db.php");
	require_once ("admin/config/conexion.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <?php require_once('head.php')?>
    <style>
        .contenedora a{
			color: #000;
		}
		.contenedora a:hover{
			color: #cd1417;
		}
		
		span{
			font-size:15px;
		}
		<!--/*a{
			text-decoration:none; 
			color: #0062cc;
			border-bottom:2px solid #0062cc;
		}*/-->
		.box{
			padding:40px 0px;
		}
		.box-part{
			background-image:url('img/detalle.png');
			background-position: center bottom;
			background-repeat: no-repeat;
			background-size: 100%;
			padding-top:30px;
			border: 1px solid #CD1417;
			border-radius:10px;
			height: 180px;
		}
		.text{
			margin:20px 0px;
		}
		.faaa{
			color:#4183D7;
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
            <?php require_once('navbar.php')?>
        </div>
    </header>
    <!--================End Menu Area =================-->
    <!--================Categories Banner Area =================-->
    <section class="solid_banner_area">
        <div class="container">
            <div class="solid_banner_inner">
                <h1>Tr&aacute;mites y Servicios</h1>
                <ul>
                    <li>Usted se encuentra en:</li>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="tramitesyservicios.php"><strong>Tr&aacute;mites y Servicios</strong></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="feature_big_add_area">
        <div class="container">
            <div class="row">
				<?php
					$suma=0;
					$quertra=mysqli_query($con,"SELECT * FROM dependencias WHERE tramites='1'");
					while($rowtra=mysqli_fetch_array($quertra)){
						$id=$rowtra['id_dep'];
						$departamento=$rowtra['name'];
						/*$sqltrami=mysqli_query($con,"SELECT * FROM tramites_uri WHERE id_dep='$id'");
						while($rowtrami=mysqli_fetch_array($sqltrami)){*/
				?>
				<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 contenedora" style="margin-bottom:20px;">
					<a href="micrositio.php?id=<?php echo $id; ?>&departamento=<?php echo $departamento; ?>">
					<div class="box-part text-center">
						<!--<i class="fa fa-instagram fa-3x" aria-hidden="true"></i>-->
						<div class="title">
							<p style="font-size:15px; font-weight: bold;"><?php echo $departamento; ?></p>
						</div>
						<div class="text">
							<?php
								$sqltotal=mysqli_query($con, "SELECT COUNT(*) AS total_registros FROM tramites_uri WHERE id_dep='$id'");
								$rowsqltotal=mysqli_fetch_array($sqltotal);
							?>
							<span>Tr&aacute;mites / Servicios:  <?php echo $rowsqltotal['total_registros'] ?></span><br>
						</div>
					</div>
					</a>
				</div>
				<?php
						/*}*/
					}
				?>
            </div> 
        </div>
    </section>

    <!--================End Categories Banner Area =================-->
    <!--================Contact Area =================-->
    <section class="feature_big_add_area">

    </section>
    <!--================End Contact Area =================-->
    <!--================Footer Area =================-->
    <?php require_once('footer.php')?>
</body>

</html>
