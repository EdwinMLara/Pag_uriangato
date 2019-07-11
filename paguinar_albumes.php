<?php
  $num_paguinas = ceil($len / 3);

  $out = '<ul class="pagination pagination">';
  if($pag==0)
    $out .=  '<li id="an" class="disabled"><a id="anA" href="javascript:void(0);" onclick="">Anterior</a></li>';
  else
    $out .=  '<li id="an"><a id="anA" href="javascript:void(0); onclick="paguinacion('.($pag-1).','.$num_paguinas.','.$len.');">Anterior</a></li>';

  
  
  for ($i = 1; $i<$num_paguinas;$i++){
      $out .= '<li><a id="pag'.$i.'" href="javascript:void(0);" onclick="paguinacion('.$i.','.$num_paguinas.','.$len.');">'.$i.'</a></li>'; 
  }    
                
  if($pag>= $num_paguinas)
    $out .=  '<li id="sig" class="disabled"><a id="sigS" ="javascript:void(0);" onclick="">Siguiente</a></li>';
  else
    $out .=  '<li id="sig"><a id="sigS" href="javascript:void(0);" onclick="paguinacion('.($pag+1).','.$num_paguinas.','.$len.');">Siguiente</a></li>';

  $out.='</ul>';

  echo $out;
  
?>