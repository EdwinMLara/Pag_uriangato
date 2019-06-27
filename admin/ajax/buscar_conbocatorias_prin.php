<?php
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
	
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
        $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		$sTable = "convocatorias";
		$sWhere = "";
		$sWhere .= "WHERE is_public='1'";
		if ( $_GET['q'] != "" ){
			$sWhere.= " AND  titulo_convocatoria LIKE '%$q%' ";
		}
		$sWhere.=" ORDER BY created_at DESC";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 5; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = '../../index.php';
		//main query to fetch the data
		$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
		?>
			<div class="table-responsive">
				<table class="table">
					<?php
					while ($row=mysqli_fetch_array($query)){
						$id_convocatoria=$row['id_convocatoria'];
						$titulo=$row['titulo_convocatoria'];
						$archivo=$row['archivo_convocatoria'];
						$descargable=$row['descargable_convocatoria'];
						$fecha= date('d-m-Y', strtotime($row['created_at']));
						$caracteres = 150;
					?>
					<tr>
						<td>
							<div class="row">
								<div class="col-md-3">
									<img src="<?php echo 'admin/'.$archivo ?>" alt="" style='max-width: 100%; padding:10px; width:150px; height:100px;'>
								</div>
								<div class="col-md-9">
									<h4><?php echo $titulo; ?></h4>
									<p>Publicado: <?php echo $fecha; ?></p>
									<p style="font-size: 14px;">
										<?php
											if($descargable==NULL){
												echo '<a href="admin/'.$archivo.'">Ver Mas. </a>';
											}else{
												echo '<a href="admin/'.$descargable.'">Ver Mas. </a>';
											}
										?>
										<?php // echo  '<a href="#" class="btn btn-link btn-sm" data-toggle="modal" data-target="#myModal3'.$id_convocatoria.'">Ver Mas.</a>'; ?>
									</p>
									<!-- Modal -->
								</div>
							</div>
						</td>
					</tr>
					<?php } ?>
					<tr>
						<td>
							<span class="pull-right">
								<?php echo paginate($reload, $page, $total_pages, $adjacents);	?>
							</span>
						</td>
					</tr>
				</table>
			</div>
			<?php
		}else{ ?>
			<div class="alert alert-warning" role="alert">
				No se encontraron resultados.
			</div>
<?php	}
	}
?>