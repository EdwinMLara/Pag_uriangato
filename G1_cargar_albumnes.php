<?php
    require_once ("admin/config/db.php");
    require_once ("admin/config/conexion.php");	
    $consulta = "SELECT * FROM album";
    
    if($res = mysqli_query($con,$consulta)){

        $len = mysqli_num_rows($res);
        $aux = $len;
        $Nombres_album = array();
        $Rutas = array();
        $Filtros = array();
        $Nombres_imagen = array();
        $pag = 0;

        while($filas = mysqli_fetch_array($res)){
            array_push($Nombres_album, $filas["Nombre"]);
            array_push($Rutas, $filas["Ruta"]);
            array_push($Filtros, $filas["Filtro"]);  

            $consulta = "SELECT * FROM image WHERE Filtro='".$filas["Filtro"]."' LIMIT 0,1";
            
            $res2 = mysqli_query($con,$consulta);
            $filas2 = mysqli_fetch_array($res2);
            array_push($Nombres_imagen, $filas2["Nombre"]);
        }

        if(!isset($_GET["page"])){
            if($len>3){
                $aux = 3;
            }
            for ($i=0; $i < $aux; $i++) {
                echo "
                    <div class='box_frame'>
                    <a href='G3_album_fotos.php?Filtro=".$Filtros[$i]."&Ruta=".$Rutas[$i]."&Nombre-Album=".$Nombres_album[$i]."'>
                        <div class='marco'>
                            <img src='admin/".$Rutas[$i]."/".$Nombres_imagen[$i]."' alt='Lights' style='width:100%'> 
                        </div>
                        <div class='nombre_album'> 
                            <p>".$Nombres_album[$i]."</p> 
                        </div>
                        </a> 
                    </div> 
                    ";
            }
        }else{

            $final_array = NULL;

            if(!is_object($final_array)){
                $final_array = new stdClass;
            }

            $final_array->Album = $Nombres_album;
            $final_array->Rutas = $Rutas;
            $final_array->Imaganes = $Nombres_imagen;
            $final_array->Filtros = $Filtros;
            $final_array->Page = $_GET["page"];
            echo json_encode($final_array);
        }
        
    }else{
        $len = 0;
        echo "No hay Ningun albumnes";
    }
    mysqli_close($con);
?>

