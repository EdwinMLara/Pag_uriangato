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
                    <li><a href="galeria_new.php" ><strong>Galería de Imágenes</strong></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->
    <!--================Contact Area =================-->
    
        <div class="container">    
        	<div class="galeria" id="ga"> 
                <?php
                    $pag = 0;
                    require_once("cargar_albumnes.php");
                ?>
            </div>
        </div>
        
        <div class="container">
            <?php
                require_once("paguinar_albumes.php");
            ?>
        </div>
            
        <script type="text/javascript">

            function paguinacion(pag,num_max_pag,num_max_album){
                var class_an = document.getElementById("an");
                var class_sig = document.getElementById("sig");

                var onclick_att_an = document.getElementById("anA");
                var onclick_att_si = document.getElementById("sigS");

                if(pag != 0){
                    class_an.className = "";
                    onclick_att_an.setAttribute( "onClick", "paguinacion(".concat((pag-1),",",num_max_pag,",",num_max_album,")"));
                }else{
                    class_an.className = "disabled";
                }

                if(pag>=(num_max_pag-1)){
                    class_sig.className = "disabled";
                }else{
                    class_sig.className = "";
                    onclick_att_si.setAttribute( "onClick", "paguinacion(".concat((pag+1),",",num_max_pag,",",num_max_album,")"));
                }
                
                cargar_album(pag,num_max_album);
            }


            function cargar_album(paguina,num_max_album){
                var aux_album = [];
                var aux_rutas = []; 
                var aux_imaganes = [];

                var eliminar_div = document.getElementById("ga");
                eliminar_div.innerHTML = "";

                $.ajax({
                    url:"cargar_albumnes.php?page=".concat(paguina),
                    dataType: "json",
                    type: "get",
                    success: function(datos){
                        $(datos.Album).each(function(index,value){
                            aux_album.push(value);
                        });
                        $(datos.Rutas).each(function(index,value){
                            aux_rutas.push(value);
                        });
                        $(datos.Imaganes).each(function(index,value){
                            aux_imaganes.push(value);
                        });
                        
                        var inicio = paguina*3;
                        var fin = inicio + 2;
                        if (fin >= num_max_album){    
                            fin = num_max_album-1;
                        }

                        for (var i = inicio; i <= fin; i++){
                           crear_caja_album(i,aux_album[i],aux_rutas[i],aux_imaganes[i]);
                           console.log(aux_album[i],aux_rutas[i],aux_imaganes[i]);
                        }
                    }
                });
            }

           
            function crear_caja_album(num_album,nombre_album,rutas,nombre_imagen){
                var div_pri = document.createElement("div");
                var div_pri_att_class = document.createAttribute("class");
                div_pri_att_class.value = "col-xd-3 col-md-4";
                var div_pri_att_id = document.createAttribute("id");
                var div_pri_att_id_value = "div_album".concat(num_album);  
                div_pri_att_id.value = div_pri_att_id_value;
                div_pri.setAttributeNode(div_pri_att_class);
                div_pri.setAttributeNode(div_pri_att_id);
                document.getElementById("ga").appendChild(div_pri);


                var div_sec = document.createElement("div");
                var div_sec_att_class = document.createAttribute("class");
                div_sec_att_class.value = "box-img";
                var div_sec_att_id = document.createAttribute("id");
                var div_sec_att_id_value = "div_sec_album".concat(num_album);
                div_sec_att_id.value = div_sec_att_id_value;
                div_sec.setAttributeNode(div_sec_att_class);
                div_sec.setAttributeNode(div_sec_att_id);
                document.getElementById(div_pri_att_id_value).appendChild(div_sec);

                var link = document.createElement("a");
                var link_att_href = document.createAttribute("href");
                link_att_href.value = "admin/".concat(rutas,"/",nombre_imagen);
                var link_att_id = document.createAttribute("id");
                link_att_id.value = "img_link".concat(nombre_imagen);
                link.setAttributeNode(link_att_href);
                link.setAttributeNode(link_att_id);
                

                var img = document.createElement("img");
                var img_att_src = document.createAttribute("src");
                img_att_src.value = "admin/".concat(rutas,"/",nombre_imagen);
                var img_att_style = document.createElement("style");
                img_att_style.value = "width:100%";
                img.setAttributeNode(img_att_src,img_att_style);

                var div_ter = document.createElement("div");
                var div_ter_att_class = document.createAttribute("class");
                div_ter_att_class.value = "caption";
                var div_ter_att_id = document.createAttribute("id");
                var div_ter_att_id_value = "div_cap".concat(num_album); 
                div_ter_att_id.value = div_ter_att_id_value;
                div_ter.setAttributeNode(div_ter_att_class);
                div_ter.setAttributeNode(div_ter_att_id);

                var p = document.createElement("p");
                var p_att_id = document.createAttribute("id");
                p_att_id.value = "parrafo".concat(num_album);
                p.setAttributeNode(p_att_id);

                document.getElementById(div_sec_att_id_value).appendChild(link);
                document.getElementById(div_sec_att_id_value).appendChild(img);
                document.getElementById(div_sec_att_id_value).appendChild(div_ter);                
                document.getElementById(div_ter_att_id_value).appendChild(p).innerHTML = nombre_album;                 

            }   

            
        </script>
	
    <!--================End Contact Area =================-->
    <!--================Footer Area =================-->
    <?php require_once('footer.php')?>
</body>
</html>