<?php
	$s_a=mysqli_query($con,"SELECT * FROM sesion_ayuntamiento");
	while($row_sa=mysqli_fetch_array($s_a)){
		$id=$row_sa['id_sesion_a'];
		$no=$row_sa['no_sesion_a'];
		$fecha=$row_sa['fecha_sesion_a'];
		
		$datesa =strtotime($fecha);
		setlocale(LC_ALL,"es_ES");
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");  
		/***********/
		$hora=$row_sa['hora_sesion_a'];
		$lugar=$row_sa['lugar_sesion_a'];
		$archivo=$row_sa['archivo_sesion_a'];
		$tipo=$row_sa['tipo_sesion_a'];
?>
<div class="row row-striped">
    <div class="col-3 text-right">
        <h3 class="display-4"><span class="badge badge-secondary"><?php echo date("d", $datesa);?></span></h3>
        <h4><?php echo $meses[date('n', $datesa)-1]?></h4>
		<h5><?php echo date("Y", $datesa);?></h5>
    </div>
    <div class="col-9">
        <h5 class="text-uppercase"><strong><?php echo 'SESI&Oacute;N '.$tipo.' '.$no.' - HONORABLE AYUNTAMIENTO DE URIANGATO'; ?></strong></h5>
        <ul class="list-inline">
            <li class="list-inline-item" style="font-size:16px"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date('h:i A', strtotime($hora));?></li>
        </ul>
        <p style="font-size: 18px;"><?php echo $lugar;?></p>
        <a href="detalle_sesiona.php?id=<?php echo $id; ?>" class="btn btn-link">Ver Detalles</a>

    </div>
</div>
<hr>
<?php } ?>