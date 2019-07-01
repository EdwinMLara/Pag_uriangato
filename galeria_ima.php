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
	$title="Uriangato | Galería de Imágenes";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <?php require_once('head.php')?>
    <link rel="stylesheet" href="css/estilo_galeria.css">
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/filtro.js"></script>
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
                <h1>Galería de Imágenes</h1>
                <ul>
                    <li>Usted se encuentra en:</li>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Galería de Imágenes</a></li>
                    <li><a href="galeria_new.php"><strong>Galería de Imágenes</strong></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->
    <!--================Contact Area =================-->

        <div class="container">
		<div class="menu">
			<ul>
				<?php  
					require_once ("admin/config/db.php");
					require_once ("admin/config/conexion.php");
					$consulta = "SELECT * FROM album WHERE 1";
					$res = mysqli_query($con,$consulta);
					$len = mysqli_num_rows($res);
                    $a = array();
                    $aux_inicio  = 0;
			         
					while($filas = mysqli_fetch_array($res)){
                        $aux = '<li class="'.$filas["Tipo_css"].'" onclick="cargar_imagenes(\''.$filas["Nombre"].'\',\''.$filas["Filtro"].'\')"><a href="#" class="btn-menu">'.$filas["Nombre"].'</a></li>'; 
						echo  $aux;
                        
                        if($aux_inicio == 0){
                            $Nombre_album = $filas["Nombre"];
                            $Nombre_filtro = $filas["Filtro"];
                            $aux_inicio = $aux_inicio + 1;
                        }
                        
					}
					mysqli_close($con);
                ?>	
			</ul>
		</div>
        
            
    	<div class="galeria" id="ga"></div>
            
            <script type="text/javascript">
                function prueba_alert(aux){
                    alert(aux);
                }

                function cargar_imagenes(Nombre,filtro){
                    var ruta = "admin/img/uploads/";
                    var url = 'admin/mostrar_imagenes.php?Filtro=';
                    ruta = ruta.concat(Nombre,"/");

                    var elimnar_div =  document.getElementById("ga");
                    elimnar_div.innerHTML = "";

                    $.ajax({
                        url:url.concat(filtro),
                        success: function(msg) {
                            id_numbers = msg.split('|');
                            for(var i=0;i<id_numbers.length-1;i++){
                                crear_caja_para_imagen(i,ruta.concat(id_numbers[i]));
                            }
                            
                            
                        }
                    });   
                }   

                function crear_caja_para_imagen(imagen,ruta){

                    var para = document.createElement("div");
                    var att_class = document.createAttribute("class");
                    var att_id = document.createAttribute("id");

                    att_class.value = "box-img";
                    var id_name_value = "div_image".concat(imagen);
                    att_id.value = id_name_value;
                    para.setAttributeNode(att_class);
                    para.setAttributeNode(att_id);
                    document.getElementById("ga").appendChild(para);


                    var para_image = document.createElement("img");
                    var att_src = document.createAttribute("src");
                    para_image.setAttributeNode(att_src);
                    para_image.getAttributeNode("src").value = ruta;
                    document.getElementById(id_name_value).appendChild(para_image);

                }
            </script>
	 
        </div>

        <?php
            echo "<script>";
            echo "cargar_imagenes('".$Nombre_album."','".$Nombre_filtro."');";
            echo "</script>";
        ?>

    <!--================End Contact Area =================-->
    <!--================Footer Area =================-->
    <?php require_once('footer.php')?>
</body>
</html>