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
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
    
            
    	<div class="galeria" id="ga">
            <div class="container">
                <div class="row" id="ga2">
                    <?php
                        $pag = 0;  
                        require_once ("admin/config/db.php");
                        require_once ("admin/config/conexion.php");
                        //require_once("cargar_albumnes.php?pag=$pag");
                        mysqli_close($con);
                    ?>  
                </div>
            </div>
        </div>
        
        <div class="container">
            <?php
                require_once("paguinar_albumes.php");
            ?>
        </div>
            
        <script type="text/javascript">

            function cargar_albumnes(pag){
                var ruta = "admin/img/uploads/";
                var url = 'admin/cargar_albumnes.php?pag=';
                url = url.concat(pag);

                var eliminar_div = document.getElementById("ga2");
                eliminar_div.innerHTML = "";

                $ajax({
                    url:url,
                    success: function(){

                    }
                });
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

            function crear_caja_album(num_album,rutas,nombre){
                var div_pri = document.createElement("div");
                var div_pri_att_class = document.createAttribute("class");
                div_pri_att_class.value = "col-xd-3 col-md-4";
                var div_pri_att_id = document.createAttribute("id");
                div_pri_att_id.value = "div_album".concat(num_album); 
                div_pri.setAttributeNode(div_pri_att_class,div_pri_att_id);
                document.getElementById("ga2").appendChild(div_pri);


                var div_sec = document.createElement("div");
                var div_sec_att_class = document.createAttribute("class");
                div_sec_att_class.value = "box-img";
                var div_sec_att_id = document.createAttribute("id");
                div_sec_att_id.value = "div_sec_album".concat(num_album);
                div_sec.setAttributeNode(div_sec_att_class,div_sec_att_id);
                document.getElementById(div_pri_att_id).appendChild(div_sec);

                var link = document.createElement("a");
                var link_att_href = document.createAttribute("href");
                link_att_href.value = "admin".concat(rutas,nombre);
                var link_att_id = document.createAttribute("id");
                link_att_id.value = "img_link".concat(nombre);
                link.setAttributeNode(link_att_href,link_att_id);
                

                var img = document.createElement("img");
                var img_att_src = document.createAttribute("src");
                img_att_src.value = "admin/".concat(rutas,nombre);
                var img_att_style = document.createElement("style");
                img_att_style.value = "width:100%";
                img.setAttributeNode(img_att_src,img_att_style);

                var div_ter = document.createElement("div");
                var div_ter_att_class = document.createAttribute("class");
                div_ter_att_class.value = "caption";
                div_ter_att_id = document.createAttribute("id");
                div_ter_att_id.value = "div_cap".concat(num_album); 
                div_ter.setAttributeNode(div_tec_att_class,div_sec_att_id);

                var p = document.createElement(p);
                var p_att_id = document.createAttribute("id");
                p_att_id.value = "parrafo".concat(num_album);
                p.setAttributeNode(p_att_id);

                var aux_p = document.getElementById(div_ter_att_id);
                aux_p.appendChild(p);
                aux_p.innerHTML = nombre; 

                document.getElementById(div_sec_att_id).appendChild(link,img,div_ter);

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
	
    <!--================End Contact Area =================-->
    <!--================Footer Area =================-->
    <?php require_once('footer.php')?>
</body>
</html>