<?php
  $out = "<ul class='pagination pagination-sm'>";
  if($pag==0)
    $out .=  "<li class='disabled'>Anterior</li>";
  else
    $out .=  "<li onclick=\"cargar_albumnes(1);\">Anterior</li>";

  $num_paguinas = (int) $len / 3;
  
  for ($i = 1; $i<$num_paguinas;$i++){
      $out .= "<li onclick=\"cargar_albumnes(1);\">$i</li>"; 
  }    
                
  if($pag>= $num_paguinas)
    $out .=  "<li class='disabled'>Siguiente</li>";
  else
    $out .=  "<li onclick=\"cargar_albumnes(1);\">Siguiente</li>";

  echo $out."</ul>";
?>