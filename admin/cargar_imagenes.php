<?php
    $sql = "";
    $countfiles = count($_FILES["fileToUpload"]["name"]);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][0]);
    $isthereimage = FALSE;


    if($check !== FALSE){
        
        if($accion) {
            require_once('crear_album.php');
        }
    
       
        $isthereimage = TRUE;

        for($i = 0; $i<=$countfiles;$i++){
            $filename = $_FILES["fileToUpload"]["name"][$i];
            $target_file = $album_dir."/".basename($filename);
            echo $target_file;

            if (!file_exists($target_file)){
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
                    echo "Lo sentimos, solo se permiten arhivos JPG, JPEG, PNG & GIF";
                }else{ 

                    $sql .= "INSERT INTO image (Nombre, Ext, Filtro, Mostrar) VALUES ('".$filename."', '".$imageFileType."','".$Categoria."', '1');";
                 
                    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i],$target_file); 
                    echo "El archivo ".$filename." ha sido subido correctamente <br>";
                }
                
            }else{
                echo "El archivo ya existe";
            }
        }

        if ($con->multi_query($sql) === TRUE) {
            echo "New records created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

    }
        
    $con->close();
?>