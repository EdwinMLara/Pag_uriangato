<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
    $(document).ready(function(){
        load(1);
    });

    

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
    
</body>
</html>

