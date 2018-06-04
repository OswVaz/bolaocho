<h1 class="page-header">Pagina de Menú</h1>

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
                            <input type="hidden" class="page_name" name="page_name" value="Admin_menu">
                            <input type="hidden" name="seccion" value="1">
                            <div class="form-group">
                                <label>Selecciona la imagen a cambiar</label>
                                <input type="file" name = "img_fondo" id = "img_fondo1">
                            </div>
                            <div class="form-group">
                                <label>Titulo de la pagina</label>
                                <input class="form-control input-lg" name = "param2" type="text" value="<?= (isset($data_section1))? $data_section1['param2'] : '' ;?>">
                            </div>
                            <div class="form-group">
                                <label>Descripción de la pagina</label>
                                <input class="form-control" type="text" name = "param3" value="<?= (isset($data_section1))? $data_section1['param3'] : '' ;?>">
                            </div>
                            <button type="submit" class="btn btn-success">Actualizar</button>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <img id = "img_1" src="<?= (isset($data_section1))? $data_section1['param1'] : '' ;?>" alt="" class="img-responsive center-block">
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
        </div>
    </div>
</div>

<!-- modificar titulos de la seccion -->
<div class="bs-docs-section">
    <h3 class="sub-header">Sección de paquetes</h3>
    <div class="well">
        <form role="form" id="paquetes">
            <input type="hidden" class="page_name" name="page_name" value="Admin_menu">
            <input type="hidden" name="seccion" value="2">
            <div class="form-group">
                <label>Titulo de la sección</label>
                <input type="text" class="form-control form-group input-lg" name = "param1" value="<?= (isset($data_section2))? $data_section2['param1'] : '' ;?>">
            </div>
            <div class="form-group">
                <label>Slogan de la sección</label>
                <input type="text" class="form-control form-group" name = "param2" value="<?= (isset($data_section2))? $data_section2['param2'] : '' ;?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</div>

<!-- alerta de cambios -->
<div class="alert alert-info">La modificación del contenido de los paquetes aplicara tambien en la pagina de <a href="../eventos.php" target="_blank"><strong>Eventos</strong></a></div>

<!-- modificar paquetes -->
<div class="bs-docs-section">
    <form role="form" id="paquetesdos">
        <input type="hidden" class="page_name" name="page_name" value="Admin_menu">
        <input type="hidden" name="seccion" value="3">
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control form-group input-lg" name = "param1" value="<?= (isset($data_section3))? $data_section3['param1'] : '' ;?>">
        </div>
        <div class="form-group">
            <label>Slogan</label>
            <input type="text" class="form-control form-group input-sm" name = "param2" value="<?= (isset($data_section3))? $data_section3['param2'] : '' ;?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>

    <!-- paquetes -->
    <div class="row">

        <!-- paquete 1 -->
        <div class="col-sm-4 col-xs-6">
            <form role="form" id="paquete1">
                <input type="hidden" class="page_name" name="page_name" value="Admin_menu">
                <input type="hidden" name="seccion" value="4">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <div class="form-group has-warning">
                            <label class="control-label">Nombre del paquete</label>
                            <input class="form-control" name = "param1" value="<?= (isset($data_section4))? $data_section4['param1'] : '' ;?>">
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>Elementos que incluyen:</p>
                        <div class="form-group">
                            <input class="form-control" name = "param2" value="<?= (isset($data_section4))? $data_section4['param2'] : '' ;?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name = "param3" value="<?= (isset($data_section4))? $data_section4['param3'] : '' ;?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name = "param4" value="<?= (isset($data_section4))? $data_section4['param4'] : '' ;?>">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                            <label>Texto adicional</label>
                            <input type="text" class="form-control input-sm" name = "param5" value="<?= (isset($data_section4))? $data_section4['param5'] : '' ;?>">
                        </div>
                        <div class="form-group">
                            <label>Costo</label>
                            <input type="text" name = "param6" value="<?= (isset($data_section4))? $data_section4['param5'] : '' ;?>" class="form-control input-lg">
                        </div>
                        <hr>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- paquete 2 -->
        <div class="col-sm-4 col-xs-6">
            <form role="form" id="paquete2">
                <input type="hidden" class="page_name" name="page_name" value="Admin_menu">
                <input type="hidden" name="seccion" value="5">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="form-group has-success">
                            <label class="control-label">Nombre del paquete</label>
                            <input class="form-control" name = "param1" value="<?= (isset($data_section5))? $data_section5['param1'] : '' ;?>">
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>Elementos que incluyen:</p>
                        <div class="form-group">
                            <input class="form-control" name = "param2" value="<?= (isset($data_section5))? $data_section5['param2'] : '' ;?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name = "param3" value="<?= (isset($data_section5))? $data_section5['param3'] : '' ;?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name = "param4" value="<?= (isset($data_section5))? $data_section5['param4'] : '' ;?>">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                            <label>Texto adicional</label>
                            <input type="text" class="form-control input-sm" name = "param5" value="<?= (isset($data_section5))? $data_section5['param5'] : '' ;?>">
                        </div>
                        <div class="form-group">
                            <label>Costo</label>
                            <input type="text" name = "param6" value="<?= (isset($data_section5))? $data_section5['param6'] : '' ;?>" class="form-control input-lg">
                        </div>
                        <hr>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <!-- paquete 3 -->
        <div class="col-sm-4 col-xs-6">
            <form role="form" id="paquete3">
                <input type="hidden" class="page_name" name="page_name" value="Admin_menu">
                <input type="hidden" name="seccion" value="6">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <div class="form-group has-danger">
                            <label class="control-label">Nombre del paquete</label>
                            <input class="form-control" name = "param1" value="<?= (isset($data_section6))? $data_section6['param1'] : '' ;?>">
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>Elementos que incluyen:</p>
                        <div class="form-group">
                            <input class="form-control" name = "param2" value="<?= (isset($data_section6))? $data_section6['param2'] : '' ;?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name = "param3" value="<?= (isset($data_section6))? $data_section6['param3'] : '' ;?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name = "param4" value="<?= (isset($data_section6))? $data_section6['param4'] : '' ;?>">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                            <label>Texto adicional</label>
                            <input type="text" class="form-control input-sm" name = "param5" value="<?= (isset($data_section6))? $data_section6['param5'] : '' ;?>">
                        </div>
                        <div class="form-group">
                            <label>Costo</label>
                            <input type="text" name = "param6" value="<?= (isset($data_section6))? $data_section6['param6'] : '' ;?>" class="form-control input-lg">
                        </div>
                        <hr>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div class="clearfix"></div>

        <!-- paquete 4 -->
        <div class="col-sm-6 col-sm-offset-3 col-xs-6">
            <form role="form" id="paquete4">
                <input type="hidden" class="page_name" name="page_name" value="Admin_menu">
                <input type="hidden" name="seccion" value="7">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="form-group has-primary">
                            <label class="control-label">Nombre del paquete</label>
                            <input class="form-control" name = "param1" value="<?= (isset($data_section7))? $data_section7['param1'] : '' ;?>">
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>Elementos que incluyen:</p>
                        <div class="form-group">
                            <input class="form-control" name = "param2" value="<?= (isset($data_section7))? $data_section7['param2'] : '' ;?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name = "param3" value="<?= (isset($data_section7))? $data_section7['param3'] : '' ;?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name = "param4" value="<?= (isset($data_section7))? $data_section7['param4'] : '' ;?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name = "param5" value="<?= (isset($data_section7))? $data_section7['param5'] : '' ;?>">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                            <label>Texto adicional</label>
                            <input type="text" class="form-control input-sm" name = "param6" value="<?= (isset($data_section7))? $data_section7['param6'] : '' ;?>">
                        </div>
                        <div class="form-group">
                            <label>Costo</label>
                            <input type="text" name = "param7" value="<?= (isset($data_section7))? $data_section7['param7'] : '' ;?>" class="form-control input-lg">
                        </div>
                        <hr>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- menus -->
<div class="bs-docs-section">
    <h3 class="sub-header">Sección de menús</h3>
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <div class="well">
                <form role="form" id="menu1">
                    <input type="hidden" class="page_name" name="page_name" value="Admin_menu">
                    <input type="hidden" name="seccion" value="8">
                    <div class="form-group">
                        <label>Menu de alimentos</label>
                        <input type="text" class="form-control" name = "param2" value="<?= (isset($data_section8))? $data_section8['param2'] : '' ;?>">
                    </div>
                    <div class="form-group">
                        <label>Cambie el archivo</label>
                        <input type="file" name = "img_fondo" id = "img_fondo2">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    
        <div class="col-sm-6 col-xs-12">
            <div class="well">
                <form role="form" id="menu2">
                    <input type="hidden" class="page_name" name="page_name" value="Admin_menu">
                    <input type="hidden" name="seccion" value="9">
                    <div class="form-group">
                        <label>Menu de bebidas</label>
                        <input type="text" class="form-control" name = "param2" value="<?= (isset($data_section9))? $data_section9['param2'] : '' ;?>">
                    </div>
                    <div class="form-group">
                        <label>Cambie el archivo</label>
                        <input type="file" name = "img_fondo" id = "img_fondo3">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- promocion #1 -->
<h3 class="sub-header">Configuración de promociones</h3>
<div class="bs-docs-section">
    <div class="well">
        <form role="form" id="promo_expecial1">
            <input type="hidden" class="page_name" name="page_name" value="Admin_menu">
            <input type="hidden" name="seccion" value="10">
            <p class="lead"><a href="#">Promocion Especial #1</a> <input type="checkbox" checked data-toggle="toggle" data-size="mini"></p>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label>Cargue la imagen</label>
                        <input type="file" name = "img_fondo" id = "img_fondo4">
                    </div>
                    <div class="form-group">
                        <label>Titulo de la promoción</label>
                        <input type="text" class="form-control" name = "param2" value="<?= (isset($data_section10))? $data_section10['param2'] : '' ;?>">
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label>Costo de la promoción</label>
                        <input type="text" class="form-control" name = "param3" value="<?= (isset($data_section10))? $data_section10['param3'] : '' ;?>">
                    </div>
                    <div class="form-group">
                        <label>Términos o Condiciones</label>
                        <textarea rows="3" name = "param4" class="form-control input-sm"><?= (isset($data_section10))? $data_section10['param4'] : '' ;?></textarea>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <label>Detalles (visible en ventana)</label>
                    <textarea rows="5" name = "param5" class="form-control"><?= (isset($data_section10))? $data_section10['param5'] : '' ;?></textarea>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Guardar</button>

            </div>
        </form>
    </div>
</div>

<!-- Galeria de bebidas -->
<h3 class="sub-header">Configuración de promociones</h3>
<div class="bs-docs-section">
    <form role="form" id="titulo_seccion">
        <input type="hidden" class="page_name" name="page_name" value="Admin_menu">
        <input type="hidden" name="seccion" value="11">
        <div class="form-group">
            <label>Titulo de la sección</label>
            <textarea type="text" class="form-control form-group input-lg" name = "param1" ><?= (isset($data_section11))? $data_section11['param1'] : '' ;?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <div class="alert alert-info">Aquí va el componente de carga de imagenes</div>
    </form>
</div>

<!-- promocion #2s -->
<div class="bs-docs-section">
    <div class="well">
        <form role="form" id="promo_expecial2">
            <input type="hidden" class="page_name" name="page_name" value="Admin_menu">
            <input type="hidden" name="seccion" value="12">
            <p class="lead"><a href="#">Promocion Especial #2</a> <input type="checkbox" checked data-toggle="toggle" data-size="mini"></p>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label>Cargue la imagen</label>
                        <input type="file" name = "img_fondo" id = "img_fondo5">
                    </div>
                    <div class="form-group">
                        <label>Titulo de la promoción</label>
                        <input type="text" class="form-control" name = "param2" value="<?= (isset($data_section12))? $data_section12['param2'] : '' ;?>">
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label>Costo de la promoción</label>
                        <input type="text" class="form-control" name = "param3" value="<?= (isset($data_section12))? $data_section12['param3'] : '' ;?>">
                    </div>
                    <div class="form-group">
                        <label>Términos o Condiciones</label>
                        <textarea rows="3" name = "param4" class="form-control input-sm"><?= (isset($data_section12))? $data_section12['param4'] : '' ;?></textarea>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <label>Detalles (visible en ventana)</label>
                    <textarea rows="5" name = "param5" class="form-control"><?= (isset($data_section12))? $data_section12['param5'] : '' ;?></textarea>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</div>