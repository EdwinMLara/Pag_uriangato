<!-- Modal -->
<div class="modal fade" id="myModalConvocatoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Convocatoria</h4>
            </div>
            <div class="modal-body">
				<form class="form-horizontal" id="form_convocatoria" method="post" enctype="multipart/form-data">
					<div id="resultados_ajax_convocatoria"></div>
					<div class="form-group">
                        <label for="titulo_convocatoria" class="col-sm-3 control-label">Titulo Convocatoria</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="titulo_convocatoria" name="titulo_convocatoria" placeholder="Titulo Convocatoria" required>
                        </div>
                    </div>
					<div class="form-group">
                        <label for="image" class="col-sm-3 control-label">Portada</label>
                        <div class="col-sm-8">
                            <input id="uploadImage" class="form-control" type="file" accept="image/*" name="image" />
                        </div>
                    </div>
					<div class="form-group">
                        <label for="descargable" class="col-sm-3 control-label">Archivo Descargable</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="descargable" name="descargable" placeholder="Archivo Descargable" />
                        </div>
                    </div>
					<div id="preview_convocatoria" style="margin-top:10px;">
						<img src="images/convocatorias/filed.png" style="max-width: 100%; border: solid #cdcdcd 1px; padding:5px; border-radius: 3px; -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .2); box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .2); overflow: hidden; width:200px; height:220px;">
					</div>
					<br>
					<input class="btn btn-success" type="submit" value="Publicar Convocatoria">
				</form>
			</div>	
        </div>
    </div>
</div>
