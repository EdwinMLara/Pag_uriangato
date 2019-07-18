<?php
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
	include('is_logged.php');
	$action = $_REQUEST["action"];
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
        $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));		
		$aColumns = array('Nombre', 'Filtro');//Columnas de busqueda
		$sTable = "album";
		$sWhere = "";
		if ( $_GET['q'] != "" ){
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ ){
				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		$sWhere.=" ORDER BY id DESC";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 10; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM album $sWhere");
		$row = mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './albunes.php';
		//main query to fetch the data
		$sql="SELECT * FROM album $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){	?>
		<div class="table-responsive">
			<table class="table">
				<tr class="info">
					<th>Nombre</th>
					<th>Filtro</th>
					<th>Ruta</th>
					<th><span class="pull-right">Acciones</span></th>
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
					$Nombre_album=$row['Nombre'];
					$Filtro_album=$row['Filtro'];
					$Ruta_album=$row['Ruta'];
				?>
					<tr>
						<td><?php echo $Nombre_album; ?></td>
						<td><?php echo $Filtro_album; ?></td>
						<td><?php echo $Ruta_album; ?></td>
						<td>
							<span class="pull-right">
								<a href="G6_index_update_album.php" class='btn btn-warning btn-sm' title='Cargar Archivos del Album'><i class="glyphicon glyphicon-upload"></i></a> 
						
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