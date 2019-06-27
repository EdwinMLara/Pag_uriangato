<?php
	require_once ("../../admin/config/db.php");
	require_once ("../../admin/config/conexion.php");
	$con_sesiones="SELECT * FROM calendario_gaceta cg JOIN comision_gaceta cmg ON cg.titulo_evento = cmg.id_comision JOIN sesion_comision sc ON sc.codigo_evento = cg.codigo_evento WHERE cg.fecha_evento BETWEEN '2019-03-01' AND '2019-03-31' ORDER BY cg.fecha_evento DESC";
	$res_sesiones = mysqli_query($con, $con_sesiones);
	while($row_sesiones=mysqli_fetch_array($res_sesiones)){
        $codigo_evento=$row_sesiones['codigo_evento'];
		$comision_sesion=$row_sesiones['nombre_comision'];
		$fecha_sesion=$row_sesiones['fecha_evento'];
		$hora_sesion=$row_sesiones['hora_evento'];
        $descripcion_sesion=$row_sesiones['descripcion_evento'];
		$archivo_orden=$row_sesiones['archivo_orden'];
		$date = strtotime($fecha_sesion);
		setlocale(LC_ALL,"es_ES");
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");  
?>
<div class="row row-striped">
    <div class="col-2 text-right">
        <h3 class="display-4"><span class="badge badge-secondary"><?php echo date("d", $date);?></span></h3>
        <h4><?php echo $meses[date('n', $date)-1]?></h4>
		<h5><?php echo date("Y", $date);?></h5>
    </div>
    <div class="col-10">
        <h5 class="text-uppercase"><strong><?php echo $comision_sesion?></strong></h5>
        <ul class="list-inline">
            <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date('h:i A', strtotime($hora_sesion));?></li>
        </ul>
        <p style="font-size: 14px;"><?php echo $descripcion_sesion;?></p>
        <a href="detalle_sesionc.php?id=<?php echo $codigo_evento; ?>" class="btn btn-link">Ver Detalles</a>

    </div>
</div>
<hr>
<?php
															}
														?>
