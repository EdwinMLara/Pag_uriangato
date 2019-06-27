<?php
	$active_index="";
	$active_h_ayuntamiento="";
	$active_centralizadas="";
	$active_descentralizadas="";
	$active_comisiones="";
	$active_gaceta="";
	$active_tramites="";
	$active_convocatorias="";
	$active_ubicacion="";
	$active_interes="";
	$active_galeria="";
	$active_tradiciones="";
	$title="Uriangato | Directorio";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <?php require_once('head.php')?>
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
                <h1>Directorio Municipal</h1>
                <ul>
                    <li>Usted se encuentra en:</li>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Tramites y Servicios</a></li>
                    <li><a href="directorio.php"><strong>Directorio Municipal</strong></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->
    <!--================Contact Area =================-->
    <section class="contact_area p_100">
        <div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-12">
					<table class="table table-hover table-responsive" style="font-size: 14px">
						<thead>
							<tr>
								<th>Dependencia</th>
								<th>Tel&eacute;fono y Extensi&oacute;n</th>
							</tr>
						</thead>
						<tbody>
							<!--<tr>
								<td>Archivo Municipal</td>
								<td>457 50 22 Ext. 128</td>
							</tr>-->
							<tr>
								<td>Atenci&oacute;n Ciudadana</td>
								<td><b>Nacional:</b> 01 800 831 5717, <br><b>Internacional:</b> 1 866 418 4133 <br>457 50 22 Ext. 100</td>
							</tr>
							<tr>
								<td>Atenci&oacute;n para la mujer</td>
								<td>457 53 56</td>
							</tr>
							<tr>
								<td>Casa de la Cultura</td>
								<td>457 56 20</td>
							</tr>
							<tr>
								<td>Catastro</td>
								<td>457 50 22 Ext. 110</td>
							</tr>
							<tr>
								<td>COMUDAJ</td>
								<td>458 60 07</td>
							</tr>
							<tr>
								<td>Comunicaci&oacute;n Social</td>
								<td>45 7 50 22 Ext. 105</td>
							</tr>
							<tr>
								<td>Contralor&iacute;a</td>
								<td>45 7 50 22 Ext. 114</td>
							</tr>
							<tr>
								<td>Desarrollo Econ&oacute;mico</td>
								<td>458 84 28</td>
							</tr>
							<tr>
								<td>Desarrollo Rural</td>
								<td>45 7 50 22 Ext. 107</td>
							</tr>
							<tr>
								<td>Desarrollo Social</td>
								<td>45 7 50 22 Ext. 112</td>
							</tr>
							<tr>
								<td>Desarrollo Urbano</td>
								<td>457 50 22 Ext. 115</td>
							</tr>
							<tr>
								<td>DIF Municipal</td>
								<td>458 09 75 y 45 8 61 02</td>
							</tr>
							<tr>
								<td>Educaci&oacute;n y Civismo</td>
								<td>457 50 22 Ext. 113</td>
							</tr>
							<tr>
								<td>Inform&aacute;tica</td>
								<td>457 50 22 Ext. 116</td>
							</tr>
							<tr>
								<td>Juez Administrativo</td>
								<td>45 7 96 28 y 45 7 93 86 Ext. 5</td>
							</tr>
							<tr>
								<td>Obras P&uacute;blicas</td>
								<td>457 50 22 Ext. 111</td>
							</tr>
							<tr>
								<td>Medio Ambiente y Ordenamiento Territorial</td>
								<td>45 7 96 28 y 45 7 93 86 Ext. 3</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-lg-6 col-md-12 col-12">
					<table class="table table-hover" style="font-size: 14px">
						<thead>
							<tr>
								<th>Dependencia</th>
								<th>Tel&eacute;fono y Extensi&oacute;n</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<td>Planeaci&oacute;n Municipal</td>
								<td>45 7 96 28 y 45 7 93 86 Ext. 1</td>
							</tr>
							<tr>
								<td>Presidente Municipal</td>
								<td>45 7 50 22 Ext. 101</td>
							</tr>
							<tr>
								<td>Protecci&oacute;n Civil</td>
								<td>457 60 77</td>
							</tr>
							<tr>
								<td>Fiscalizaci&oacute;n de Alcoholes y Comercio</td>
								<td>457 50 22 Ext. 117</td>
							</tr>
							<tr>
								<td>Secretario del H. Ayuntamiento</td>
								<td>45 7 50 22 Ext. 104</td>
							</tr>
							<tr>
								<td>Seguridad P&uacute;blica</td>
								<td>457 70 01 y 45 8 53 16</td>
							</tr>
							<tr>
								<td>Servicios Administrativos</td>
								<td>457 50 22 Ext. 119</td>
							</tr>
							<tr>
								<td>Servicios P&uacute;blicos</td>
								<td>457 50 22 Ext. 118</td>
							</tr>
							<tr>
								<td>S&iacute;ndico Municipal</td>
								<td>45 7 50 22 Ext. 106</td>
							</tr>
							<tr>
								<td>SMAPAU</td>
								<td>457 54 24 y 45 7 61 21</td>
							</tr>
							<tr>
								<td>Tesorer&iacute;a Municipal</td>
								<td>457 50 22 Ext. 109 y 108</td>
							</tr>
							<tr>
								<td>Tr&aacute;nsito y Transporte</td>
								<td>457 80 00</td>
							</tr>
							<tr>
								<td>Unidad de Transparencia</td>
								<td>45 7 96 28 y 45 7 93 86 Ext. 2</td>
							</tr>
							<tr>
								<td>Rastro Municipal</td>
								<td>457 54 68</td>
							</tr>
							<!--<tr>
								<td>Regidores</td>
								<td>457 50 22 Ext. 131</td>
							</tr>-->
							<tr>
								<td>UVEG</td>
								<td>453 27 32</td>
							</tr>
							<!--<tr>
								<td>Ventanilla de 65 y M&aacute;s</td>
								<td>457 52 92</td>
							</tr>-->
						</tbody>
					</table>
				</div>
			</div>
        </div>
    </section>
    <!--================End Contact Area =================-->
    <!--================Footer Area =================-->
    <?php require_once('footer.php')?>
</body>

</html>
