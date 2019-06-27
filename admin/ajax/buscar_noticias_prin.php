<?php
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
	
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
        $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		$sTable = "noticias";
		$sWhere = "";
		$sWhere .= "WHERE is_public='1'";
		if ( $_GET['q'] != "" ){
			$sWhere.= " AND ( titulo_noticia LIKE '%$q%' OR cuerpo_noticia LIKE '%$q%')";
		}
		$sWhere.=" ORDER BY id_noticia DESC";
		include 'pagination2.php'; //include pagination file
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
						$id_noticia=$row['id_noticia'];
						$titulo=$row['titulo_noticia'];
						$cuerpo=$row['cuerpo_noticia'];
						$image1=$row['imagen1'];
						$fecha= date('d-m-Y', strtotime($row['create_at']));
						$caracteres = 150;
					?>
					<tr>
						<td>
							<div class="row">
								<div class="col-md-3">
									<img src="<?php echo 'admin/'.$image1 ?>" alt="" style='max-width: 100%; padding:10px; width:150px; height:100px;'>
								</div>
								<div class="col-md-9">
									<h4><?php echo $titulo; ?></h4>
									<p>Publicado: <?php echo $fecha; ?></p>
									<p style="font-size: 14px;">
										<?php 
											echo substr($cuerpo, 0, $caracteres).
											'<a href="sala_prensa.php?noticia='.$id_noticia.'" class="btn btn-link btn-sm">Ver Mas.</a>';
										?>
									</p>
									<!-- Modal -->
									<div class="modal fade" id="myModal3<?php echo $id_noticia; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg-xl" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="exampleModalLabel"><?php echo $titulo ?></h4>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-md-3">
															<img src="<?php echo 'admin/'.$image1 ?>" width="100%" style='max-width: 100%; padding:5px; width:300px; height:190px; border-radius: 10px;'>
														</div>
														<div class="col-md-9">
															<p style="font-size:18px; text-align: justify; ">
																<?php echo $cuerpo ?>
															</p>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-admon" data-dismiss="modal">Cerrar</button>
												</div>
											</div>
										</div>
									</div>
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
