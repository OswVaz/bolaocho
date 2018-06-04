<h1 class="page-header">
    Pagina de Servicios</h1>

<!-- modificar banner  -->
<div class="bs-docs-section">
    <h3 class="sub-header">Modificar el banner</h3>
    <div>
        <!-- img de banner -->
        <div class="panel panel-default">
            <div class="panel-heading">Imagen del banner</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" id="baner">
                            <input type="hidden" class="page_name" name="page_name" value="Admin_servicios">
                            <input type="hidden" name="seccion" value="1">
                            <div class="form-group">
                                <label>Selecciona la imagen a cambiar</label>
                                <input type="file" name="img_fondo4" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Titulo de la pagina</label>
                                <input class="form-control input-lg" type="text" name="param2" value="<?= (isset($data_section1))? $data_section1['param2'] : '' ;?>">
                            </div>
                            <div class="form-group">
                                <label>Descripción de la pagina</label>
                                <input class="form-control" type="text" name="param3" value="<?= (isset($data_section1))? $data_section1['param3'] : '' ;?>">
                            </div>
                            <button type="submit" class="btn btn-success">Actualizar</button>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <img id="img1" src="<?= (isset($data_section1))? $data_section1['param1'] : '' ;?>" alt="" class="img-responsive center-block">
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
        </div>
    </div>
</div>

<!-- modificar titulos de la seccion -->
<div class="bs-docs-section">
    <h3 class="sub-header">Sección de Nosotros</h3>
    <div class="row">
        <div class="col-sm-6">
            <div class="well">
                <form role="form" id="nosotros">
                    <input type="hidden" class="page_name" name="page_name" value="Admin_servicios">
                    <input type="hidden" name="seccion" value="2">
                    <div class="form-group">
                        <label>Titulo 1</label>
                        <input type="text" class="form-control form-group input-lg" name="param1" value="<?= (isset($data_section2))? $data_section2['param1'] : '' ;?>">
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea rows="3" name="param2" class="form-control"><?= (isset($data_section2))? $data_section2['param2'] : '' ;?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="well">
                <form role="form" id="titulo1">
                    <input type="hidden" class="page_name" name="page_name" value="Admin_servicios">
                    <input type="hidden" name="seccion" value="3">
                    <div class="form-group">
                        <label>Titulo 1</label>
                        <input type="text" class="form-control form-group input-lg" name="param1" value="<?= (isset($data_section3))? $data_section3['param1'] : '' ;?>">
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea rows="3" name="param2" class="form-control"><?= (isset($data_section3))? $data_section3['param2'] : '' ;?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- alerta de cambios -->
    <div class="alert alert-info">Para cambiar el logotipo es desde la pagina de <a href="index.php"><strong>Dashboard</strong></a></div>
</div>

<!-- modificar Sección #1 -->
<h3 class="sub-header">Sección #1</h3>
<div class="bs-docs-section">
    <form method="post" id="seccionuno" enctype="multipart/form-data">
        <input type="hidden" class="page_name" name="page_name" value="Admin_servicios">
        <input type="hidden" name="seccion" value="4">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control form-group input-lg" name="param1" value="<?= (isset($data_section4))? $data_section4['param1'] : '' ;?>">
                    <textarea rows="3" class="form-control" name="param2"><?= (isset($data_section4))? $data_section4['param2'] : '' ;?></textarea>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Imagen</label>
                    <code>Medidas de (714 x 672) formato .JPG o .PNG</code>
                    <input type="file" name="img_fondo" class="form-control">
                </div>
                <div class="form-group">
                    <label>Cambiar imagen de fondo</label>
                    <code>Medidas de (1680 x 558) formato .JPG o .PNG</code>
                    <input type="file" name="img_fondo1" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</div>

<!-- modificar Sección #2 -->
<h3 class="sub-header">Sección #2</h3>
<div class="bs-docs-section">
    <form method="post" id="secciondos" enctype="multipart/form-data">
        <input type="hidden" class="page_name" name="page_name" value="Admin_servicios">
        <input type="hidden" name="seccion" value="5">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control form-group input-lg" name="param1" value="<?= (isset($data_section5))? $data_section5['param1'] : '' ;?>">
                    <textarea rows="3" class="form-control" name="param2"><?= (isset($data_section5))? $data_section5['param2'] : '' ;?></textarea>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Imagen</label>
                    <code>Medidas de (714 x 672) formato .JPG o .PNG</code>
                    <input type="file" name="img_fondo" class="form-control">
                </div>
                <div class="form-group">
                    <label>Cambiar imagen de fondo</label>
                    <code>Medidas de (1680 x 558) formato .JPG o .PNG</code>
                    <input type="file" name="img_fondo1" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">

            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</div>

<!-- modificar Sección #3 -->
<h3 class="sub-header">Sección #3</h3>
<div class="bs-docs-section">
    <form method="post" id="secciontres" enctype="multipart/form-data">
        <input type="hidden" class="page_name" name="page_name" value="Admin_servicios">
        <input type="hidden" name="seccion" value="6">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control form-group input-lg" name="param1" value="<?= (isset($data_section6))? $data_section6['param1'] : '' ;?>">
                    <textarea rows="3" class="form-control" name="param2"><?= (isset($data_section6))? $data_section6['param2'] : '' ;?></textarea>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Imagen</label>
                    <code>Medidas de (714 x 672) formato .JPG o .PNG</code>
                    <input type="file" name="img_fondo" class="form-control">
                </div>
                <div class="form-group">
                    <label>Cambiar imagen de fondo</label>
                    <code>Medidas de (1680 x 558) formato .JPG o .PNG</code>
                    <input type="file" name="img_fondo1" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</div>

<!-- modificar Sección #4 -->
<h3 class="sub-header">Sección #4</h3>
<div class="bs-docs-section">
    <form method="post" id="seccioncuatro" enctype="multipart/form-data">
        <input type="hidden" class="page_name" name="page_name" value="Admin_servicios">
        <input type="hidden" name="seccion" value="7">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control form-group input-lg" value="<?= (isset($data_section7))? $data_section7['param1'] : '' ;?>" name="param1">
                    <textarea rows="3" class="form-control" name="param2"><?= (isset($data_section7))? $data_section7['param2'] : '' ;?></textarea>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Imagen</label>
                    <code>Medidas de (714 x 672) formato .JPG o .PNG</code>
                    <input type="file" name="img_fondo" class="form-control">
                </div>
                <div class="form-group">
                    <label>Cambiar imagen de fondo</label>
                    <code>Medidas de (1680 x 558) formato .JPG o .PNG</code>
                    <input type="file" name="img_fondo1" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</div>