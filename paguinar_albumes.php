<?php
  $num_paguinas = ceil($len / 3);

  $out = '<ul class="pagination">';
  if($pag==0)
    $out .=  '<li class="disabled" id="an"onclick="">Anterior</li>';
  else
    $out .=  '<li id="an" onclick="paguinacion('.($pag-1).','.$num_paguinas.','.$len.');">Anterior</li>';

  
  
  for ($i = 1; $i<=$num_paguinas;$i++){
      $out .= '<li id="pag'.$i.'" onclick="paguinacion('.$i.','.$num_paguinas.','.$len.');">'.$i.'</li>'; 
  }    
                
  if($pag>= $num_paguinas)
    $out .=  '<li id="sig" class="disabled" onclick="">Siguiente</li>';
  else
    $out .=  '<li id="sig" onclick="paguinacion('.($pag+1).','.$num_paguinas.','.$len.');">Siguiente</li>';

  $out.='</ul>';

  echo $out;
  
?>