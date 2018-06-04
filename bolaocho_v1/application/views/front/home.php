<style type="text/css">
	#inicio_sec_1 {background-image: url("<?= base_url($img_1)?>");}
	#inicio_sec_2 {background-image: url("<?= base_url($img_2)?>");}
	#inicio_sec_3 {background-image: url("<?= base_url($img_3)?>");}
	#inicio_sec_4 {background-image: url("<?= base_url($img_4)?>");}
</style>
    <section id="inicio_sec_1">
		<div class = "container">
			<div class = "row">
				<div class = "col-sm-10 col-xs-12">
					<div class="mainTable_image">
						<div class="TableInner">
							<img class="img-responsive" src="<?= base_url("img/logo3full.png")?>" alt = "Anamar">
						</div>
					</div>
                </div>
                <div class = "col-sm-2 col-xs-12">
					<div class="mainTable_button">
						<div class="TableInner">
							<a class="ghost-button-thick-border scrollflow -slide-right -opacity animated flipInY" href="nosotras">Que es Anamar? <span class="icon-arrow-right "></span></a>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>

    <section id="inicio_sec_2">
		<div class = "container-fluid">
			<div class = "row">
				<div class = "col-sm-12">
					<div class="diventre12">
						<img class="img-responsive center-block" src="https://dl.dropboxusercontent.com/s/1cwa1ef2tjms15j/peinados.png?dl=0" alt = "Anamar">
					</div>
				</div>
			</div>

			<div class = "row">
				<div class = "col-sm-12">
					<div class="bloque01 selectionTable">
						<div class="TableInner">
							<p class="scrollflow -slide-left -opacity tex3"><?= $text_2?></p>
							<a class="scrollflow -slide-left -opacity ghost-button-thick-border" href="peinados">Ver Mas</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

    <section id="inicio_sec_3">
		<div class = "container-fluid">
			<div class = "row">
				<div class = "col-sm-12">
					<div class="diventre12">
						<img class="img-responsive center-block" src="https://dl.dropboxusercontent.com/s/95pibe0x841ar2c/maquillaje.png?dl=0" alt = "Anamar">
					</div>
				</div>
			</div>
			<div class = "row">
				<div class = "col-sm-12">
					<div class="bloque01 selectionTable">
						<div class="TableInner">
							<p class="scrollflow -slide-left -opacity texto1"><?= $text_3?></p>
							<a class="ghost-button-thick-border scrollflow -slide-right -opacity" href="maquillaje">Ver Mas</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>


    <section id="inicio_sec_4">
		<div class = "container-fluid">
			<div class = "row">
				<div class = "col-sm-12">
					<div class="diventre12">
						<img class="img-responsive center-block" src="https://dl.dropboxusercontent.com/s/yuv3maqc8fimjol/novias.png?dl=0" alt = "Anamar">
					</div>
				</div>
			</div>
			<div class = "row">
				<div class = "col-sm-12">
					<div class="bloque01 selectionTable">
						<div class="TableInner">
							<p class="texto1 scrollflow -slide-left -opacity"><?= $text_4?></p>
							<a class="ghost-button-thick-border scrollflow -slide-right -opacity" href="novias">Ver Mas</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
	<?= $modal_add ?>
