
            <h1 class="page-header">Pagina de Eventos</h1>
            
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
                                      <input type="hidden" class="page_name" name="page_name" value="Admin_eventos">
                                      <input type="hidden" name="seccion" value="1">
                                      <div class="form-group">
                                          <label>Selecciona la imagen a cambiar</label>
                                          <input type="file" name = "img_fondo" id = "img_fondo">
                                      </div>
                                      <div class="form-group">
                                          <label>Titulo de la pagina</label>
                                          <input class="form-control input-lg" name = "param2" type="text" value="<?= (isset($data_section1))? $data_section1['param2'] : '' ;?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Descripción de la pagina</label>
                                          <input class="form-control input-lg" name = "param3" type="text" value="<?= (isset($data_section1))? $data_section1['param3'] : '' ;?>">
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
            <!-- modificar redes sociales -->
            <h3 class="sub-header">Redes sociales</h3>
            <div class="well">
              <form id="socialnet" method="post">
                <input type="hidden" class="page_name" name="page_name" value="Admin_eventos">
                <input type="hidden" name="seccion" value="2" >
              <p>Activar o desactiva el <code>iframe</code> de las siguiente redes sociales:</p>
              <p class="lead">Instagram <input class="toggle botonEstado" name="param1" type="checkbox" data-toggle="toggle">
              </p>
              <button type="submit" class="btn btn-success">Actualizar</button>
              </form>
            </div>

            <!-- imagenes -->
            <div class="bs-docs-section">
              <h3 class="sub-header">Images extras</h3>
              <div class="row">
                <div class="col-sm-6 col-xs-12">
                  <div class="well">
                    <form id="img" method="post" enctype="multipart/form-data">
                        <input type="hidden" class="page_name" name="page_name" value="Admin_eventos">
                        <input type="hidden" name="seccion" value="3">
                        <div class="form-group">
                            <label>Imagen extra 1</label>
                            <input type="file" class="form-control" name = "img_fondo" id = "img_fondo1">
                        </div>
                        <div class="form-group">
                            <img src="<?= (isset($data_section3))? $data_section3['param1'] : '' ;?>" alt="" id = "img1" class="img-responsive">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </form>
                  </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                  <div class="well">
                      <form id="imagen" method="post" enctype="multipart/form-data">
                        <input type="hidden" class="page_name" name="page_name" value="Admin_eventos">
                        <input type="hidden" name="seccion" value="4">
                        <div class="form-group">
                            <label>Imagen extra 2</label>
                            <input type="file" class="form-control" name = "img_fondo" id = "img_fondo1">
                        </div>

                        <div class="form-group">
                            <img src="<?= (isset($data_section4))? $data_section4['param1'] : '' ;?>" alt="" id = "img2" class="img-responsive">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

        