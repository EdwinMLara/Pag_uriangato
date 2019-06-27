<?php	if (isset($con)){	?>
<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Slider</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="post" id="editar_slider" name="editar_slider">
					<div id="resultados_ajax2"></div>
					<div class="form-group">
						<label for="mod_descripcion" class="col-sm-3 control-label">Nombres</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="mod_descripcion" name="mod_descripcion" placeholder="Descipcion" required>
							<input type="hidden" id="mod_id" name="mod_id">
						</div>
					</div>
					<div class="form-group">
						<label for="mod_activo" class="col-sm-3 control-label">Estado</label>
						<div class="col-sm-8">
							<select class="form-control" id="mod_activo" name="mod_activo" required>
								<option value="">-- Selecciona estado --</option>
								<option value="1" selected>Activo</option>
								<option value="0">Desactivado</option>
							</select>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar datos</button>
			</div>
				</form>
		</div>
	</div>
</div>
<?php	}	?>