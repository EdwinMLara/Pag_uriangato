<?php
	$active_index="";
	$active_h_ayuntamiento="";
	$active_centralizadas="";
	$active_descentralizadas="active";
	$active_comisiones="";
	$active_gaceta="";
	$active_tramites="";
	$active_convocatorias="";
	$active_ubicacion="";
	$active_interes="";
	$active_galeria="";
	$active_tradiciones="";
	$title="Uriangato | H. Ayuntamiento";
	require_once ("admin/config/db.php");
	require_once ("admin/config/conexion.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>
		<?php require_once('head.php')?>
        <link href="css/style-personas.css" rel="stylesheet">
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
                    <h1>Direcciones Descentralizadas</h1>
                    <ul>
						<li>Usted se encuentra en:</li>
                        <li><a href="index.php">Inicio</a></li>
						<li><a href="">Gobierno</a></li>
                        <li><a href="descentralizadas.php"><strong>Descentralizadas</strong></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        <!--================Contact Area =================-->
        <section class="contact_area p_100">
            <div class="container mt-40">
				<div class="row mt-30">
					<?php
						$nums=1;
						$query=mysqli_query($con,"SELECT * FROM users u, dependencias d WHERE u.id_dep=d.id_dep AND d.nivel='3' ORDER BY d.name ASC");
						while($row=mysqli_fetch_array($query)){
					?>
					<div class="col-lg-3 col-md-3 col-xs-3" style="margin-bottom:20px;">
						<div class="box16">
							<img class="img-fluid" src="admin/images/profiles/<?php echo $row['image']; ?>">
							<div class="box-content">
								<h3 class="title"><?php echo $row['name']; ?></h3>
								<span class="post"><?php echo $row['firstname'].' '.$row['lastname']; ?></span>
								<div class="social">
									<i class="fa fa-envelope-o"></i> <?php echo $row['user_email']; ?> <br>
								</div>
								<br>
							</div>
						</div>
					</div>
					<?php
							if ($nums%3==0){
								echo '<div class="clearfix"></div>';
							}
							$nums++;
						} ?>
				</div>
            </div>
        </section>
        <!--================End Contact Area =================-->
        <!--================Footer Area =================-->
        <?php require_once('footer.php')?>
    </body>
</html>