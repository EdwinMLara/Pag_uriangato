<?php	
 $inicio = 0;
        $fin = $inicio + 2;

        for ($i=$inicio; $i < $fin; $i++) {
            $consulta = "SELECT * FROM image WHERE Filtro='".$Filtros[$i]."' LIMIT 0,1";
            $res = mysqli_query($con,$consulta);
            $filas = mysqli_fetch_array($res);

            echo "<div class='col-xd-3 col-md-4'>
                    <div class='box-img'>
                        <a href='admin/".$Rutas[$i]."/".$filas["Nombre"]."' target='_blank'> 
                        <img src='admin/".$Rutas[$i]."/".$filas["Nombre"]."' alt='Lights' style='width:100%'> 
                        <div class='caption'> 
                            <p>".$Nombres[$i]."</p> 
                        </div> </a> 
                    </div> 
                </div>";
        }

    if(isset($_GET["pag"])){

       
    }
?>

