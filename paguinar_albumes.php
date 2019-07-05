<?php
  $out = "<ul class='pagination pagination-sm'>";
  if($pag==0)
    $out .=  "<li class='disabled'>Anterior</li>";
  else
    $out .=  "<li>Anterior</li>";

  $num_paguinas = (int) $len / 3;
  
  for ($i = 1; $i<$num_paguinas;$i++){
      $out .= "<li>$i</li>"; 
  }    
                
  if($pag>= $num_paguinas)
    $out .=  "<li class='disabled'>Siguiente</li>";
  else
    $out .=  "<li>Siguiente</li>";

  echo $out;
?>