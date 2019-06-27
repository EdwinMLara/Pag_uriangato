<?php
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
	include('is_logged.php');
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if (isset($_GET['id'])){
		$id_sesion_a=intval($_GET['id']);
		$query=mysqli_query($con, "SELECT * FROM sesion_ayuntamiento WHERE id_sesion_a='".$id_sesion_a."'");
		$rw_user=mysqli_fetch_array($query);
		$count=$rw_user['id_sesion_a'];
		if ($id_sesion_a!=1){
			if ($delete1=mysqli_query($con,"DELETE FROM sesion_ayuntamiento WHERE id_sesion_a='".$id_sesion_a."'")){	?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Aviso!</strong> Datos eliminados exitosamente.
			</div><?php 
			}else {	?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Error!</strong> Lo siento algo ha salido mal intenta nuevamente.
			</div><?php
			}
		} else {	?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Error!</strong> No se puede borrar el usuario administrador. 
			</div><?php
		}
	}
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
        $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));		
		$aColumns = array('no_sesion_a', 'lugar_sesion_a', 'tipo_sesion_a');//Columnas de busqueda
		$sTable = "sesion_ayuntamiento";
		$sWhere = "";
		if ( $_GET['q'] != "" ){
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ ){
				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		$sWhere.=" ORDER BY fecha_sesion_a DESC";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 10; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM sesion_ayuntamiento $sWhere");
		$row = mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './sesiones_ayuntamiento.php';
		//main query to fetch the data
		$sql="SELECT * FROM sesion_ayuntamiento $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){	?>
		<div class="table-responsive">
			<table class="table">
				<tr class="info">
					<th>No Sesi&oacute;n</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Lugar</th>
					<th>Archivo</th>
					<th>Tipo Sesi&oacute;n</th>
					<th><span class="pull-right">Acciones</span></th>
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
					$id_sesion=$row['id_sesion_a'];
					$no_sesion=$row['no_sesion_a'];
					$fecha_sesion=date('d/m/Y', strtotime($row['fecha_sesion_a']));
					$hora_sesion=$row['hora_sesion_a'];
					$lugar_sesion=$row['lugar_sesion_a'];
					$archivo_sesion=$row['archivo_sesion_a'];
					$tipo_sesion=$row['tipo_sesion_a'];
				?>
					<tr>
						<td><?php echo $no_sesion; ?></td>
						<td><?php echo $fecha_sesion; ?></td>
						<td><?php echo $hora_sesion; ?></td>
						<td><?php echo $lugar_sesion; ?></td>
						<td><?php echo $archivo_sesion; ?></td>
						<td><?php echo $tipo_sesion; ?></td>
						<td>
							<span class="pull-right">
								<a href="cargar_archivos_sesiona.php?id=<?php echo $id_sesion ?>" class='btn btn-warning btn-sm' title='Cargar Archivos de Sesion de Ayuntamiento'><i class="glyphicon glyphicon-upload"></i></a> 
								<!--<a href="#" class='btn btn-warning btn-sm' title='Editar Noticia' onclick="obtener_datos('< ?php echo $id_sesion;?>');" data-toggle="modal" data-target="#myModal2"><i class="glyphicon glyphicon-edit"></i></a> 
								<a href="#" class='btn btn-danger btn-sm' title='Borrar Noticia' onclick="eliminar('< ?  echo $id_sesion; ?>')"><i class="glyphicon glyphicon-trash"></i> </a>
								-->
							</span>
						</td>
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan="7">
						<span class="pull-right">
							<?php	echo paginate($reload, $page, $total_pages, $adjacents);?>
						</span>
					</td>
				</tr>
			</table>
		</div><?php
		}
	}
?>