<!-- Modal -->
<div class="modal fade" id="myModalSlider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar a Slider</h4>
            </div>
            <div class="modal-body">
				<form class="form-horizontal" id="form_slider" method="post" enctype="multipart/form-data">
					<div id="resultados_ajax_slider"></div>
					<div class="form-group">
                        <label for="descripcion" class="col-sm-3 control-label">Descripcion del Slider</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion del Slider" required>
                        </div>
                    </div>
					<input id="uploadImage" type="file" accept="image/*" name="image" />
					<div id="preview_slider" style="margin-top:10px;">
						<img src="images/slider_principal/filed.png" style="max-width: 100%; border: solid #cdcdcd 1px; padding:5px; border-radius: 3px; -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .2); box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .2); overflow: hidden; width:200px; height:220px;">
					</div>
					<br>
					<input class="btn btn-success" type="submit" value="Cargar Slider">
				</form>
			</div>	
        </div>
    </div>
</div>
