<?php
$target_dir = "img/uploads/";


if(isset($_POST["submit"])) {

    $Nombre = $_POST["Nombre"];
    $Categoria = $_POST["Categoria"];
        
    require_once('config/db.php');
    require_once('config/conexion.php');

    $accion = TRUE;
    require_once('G3_cargar_imagenes.php');

    if($isthereimage){
    	header('Location: /uriangato.gob.mx/admin/G0_index_upload.php?Hecho=1&Nombre='.$Nombre);
    }else{
        header('Location: /uriangato.gob.mx/admin/G0_index_upload.php?Hecho=2');
    }

} ?>