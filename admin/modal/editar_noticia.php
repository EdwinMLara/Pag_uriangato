<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class='fa fa-edit'></i> Editar noticia</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="post" id="editar_noticia" name="editar_noticia">
					<div id="resultados_ajax2"></div>
					<div class="form-group">
                        <label for="mod_titulo" class="col-sm-3 control-label">Titulo Noticia</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="mod_titulo" name="mod_titulo" placeholder="Titulo Noticia" required>
							<input type="hidden" id="mod_id" name="mod_id">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="mod_descripcion" class="col-sm-3 control-label">Descripcion</label>
                        <div class="col-sm-8">
                            <textarea rows="4" cols="50" class="form-control" id="mod_descripcion" name="mod_descripcion"></textarea>
                        </div>
                    </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary" id="actualizar_datos2">Actualizar datos</button>
			</div>
				</form>
		</div>
	</div>
</div>