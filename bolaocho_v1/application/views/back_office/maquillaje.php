<div class="row">
	<div class = "col-sm-12"><h1 class="page-header">Maquillaje <span class = "pull-right glyphicon glyphicon-info" data-toggle="modal" data-target="#help_modal"></span></h1></div>
	<div class = "col-xs-12 col-sm-5">
		<label class = "hidden page_name" >admin_maquillaje</label>
		<h3 class="page-header2">Sección "Maquillaje"</h3>
		<form id="seccion1" method = "post" enctype="multipart/form-data">
			<input type="hidden" name= "seccion" value="1">
			<div class="form-group">
				<label >Imagen de fondo</label>
				<input type="file" name = "back_img" >
			</div>
			<div class="form-group">
				<label>Descripción</label>
				<textarea class="form-control" rows="3"  name="description" placeholder="Texto de la sección"><?=$text_1 ?></textarea>
			</div>
			<button type="submit" class="btn btn-default upd_seccion">Guardar</button>
		</form>
	</div>
	<div class = "col-xs-12 col-sm-7">
		<section id="maquillaje_sec_1">
			<div class="vifio">
				<div class="rel11">
					<div class="rel011 text-center center-block">
							<br><h1 class="rel21 tx2">Maquillaje</h1>
							<p class="rel3"><?=$text_1?></p>
							<a class="ghost-button-thick-border2" href="tel:+8111920367">Llamar</a>
							<br><br><br>
					</div>
				</div>
				<br><br>
			</div>
		</section>
	</div>
</div>
<br>
<br>
<div class="row">
	<div class = "col-sm-12"><h1 class="page-header"></h1></div>
	<div class = "col-xs-12 col-sm-5">
		<h3 class="page-header2">Banner "Solo lo mejor"</h3>
		<form id="seccion2" method = "post" enctype="multipart/form-data">
			<input type="hidden" name= "seccion" value="2">
			<div class="form-group">
				<label >Imagen de fondo</label>
				<input type="file" name = "back_img" >
			</div>
			<div class="form-group">
				<label>Descripción</label>
				<textarea class="form-control" rows="3" name="description" placeholder="Texto de la sección"><?=$text_2 ?></textarea>
			</div>
			<button type="submit" class="btn btn-default upd_seccion">Guardar</button>
		</form>
	</div>
	<div class = "col-xs-12 col-sm-7">
		<section id="maquillaje_sec_2">
			<div class="divserv text-center center-block">
				<br><p class="rel3"><?=$text_2?></p>
				<div class="row">
					<div class="col-md-12  scrollflow -slide-right -opacity">
						<img src="https://dl.dropboxusercontent.com/s/g18214vd21cuu32/mejor.png?dl=0" width="400" alt = "anamar">
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<br>
<br>
<div class="row">
	<div class = "col-sm-12"><h1 class="page-header"></h1></div>
		<div class = "col-xs-12">
		<h3 class="page-header2">Sección "Galeria"</h3>
		<div class="row files">
			<?= $gallery?>
		</div>
	</div>
		<div class="row pull-right">
			<div class="col-sm-12">
				<button type="button" class="btn btn-default" onclick="draw_new_img();"><span class="glyphicon glyphicon-plus"></span></button>
			</div>
		</div>
	</div>
</div>
