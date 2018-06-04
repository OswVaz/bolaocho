
            <h1 class="page-header text-center">Pagina de inicio</h1>

            <!-- modificar img de carrusel  -->
            <h3 class="sub-header">Carrusel principal</h3>
            
            <div>
                <!-- carrusel 1 -->
                <div class="panel panel-default">
                    <div class="panel-heading">Carrusel 1</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form id = "carousel_1" method = "post">
                                  <input type="hidden" class = "page_name" name = "page_name" value="Admin_inicio">
                                  <input type="hidden" name = "seccion" value="1">
                                    <div class="form-group">
                                       <label>Selecciona la imagen</label>
                                        <input type="file" name = "img_fondo" id = "img_fondo">
                                    </div>
                                    <div class="form-group">
                                        <label>Texto en carrusel</label>
                                        <textarea class="form-control" rows="3" name = "param2"><?= (isset($data_section1))? $data_section1['param2'] : '' ;?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                </form>
                            </div>
                            <div class="col-lg-6">
                              <img alt = "Bolaocho" id = "carousel_1_img" class="img-responsive center-block" src = "<?= (isset($data_section1))? $data_section1['param1'] : '' ;?>">
                            </div>  
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                </div>

                <!-- carrusel 2 -->
                <div class="panel panel-default">
                    <div class="panel-heading">Carrusel 2</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form id = "carousel_2" method = "post">
                                  <input type="hidden" class = "page_name" name = "page_name" value="Admin_inicio">
                                  <input type="hidden" name = "seccion" value="2">
                                    <div class="form-group">
                                        <label>Selecciona la imagen</label>
                                        <input type="file" name = "img_fondo" id = "img_fondo">
                                    </div>
                                    <div class="form-group">
                                        <label>Texto en carrusel</label>
                                        <textarea class="form-control" rows="3" name = "param2"><?= (isset($data_section2))? $data_section2['param2'] : '' ;?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                </form>
                            </div>
                            <div class="col-lg-6">
                              <img alt = "Bolaocho" id = "carousel_2_img" class="img-responsive center-block" src = '<?= (isset($data_section2))? $data_section2['param1'] : '' ;?>'>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                </div>

                <!-- carrusel 2 -->
                <div class="panel panel-default">
                    <div class="panel-heading">Carrusel 3</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form id = "carousel_3" method = "post">
                                  <input type="hidden" class = "page_name" name = "page_name" value="Admin_inicio">
                                  <input type="hidden" name = "seccion" value="3">
                                    <div class="form-group">
                                        <label>Selecciona la imagen</label>
                                        <input type="file" name = "img_fondo" id = "img_fondo">
                                    </div>
                                    <div class="form-group">
                                        <label>Texto en carrusel</label>
                                        <textarea class="form-control" rows="3" name = "param2"><?= (isset($data_section3))? $data_section3['param2'] : '' ;?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                </form>
                            </div>
                            <div class="col-lg-6">
                              <img alt = "Bolaocho" id = "carousel_3_img" class="img-responsive center-block" src = "<?= (isset($data_section3))? $data_section3['param1'] : '' ;?>">
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                </div>
            </div>
            
            <!-- modificar horarios y promocion -->
            <h3 class="sub-header">Horarios</h3>
            <form id="horarios" method="post">
                <input type="hidden" class="page_name" name="page_name" value="Admin_inicio">
                <input type="hidden" name="seccion" value="4">
                <div class="row">
                    <div class="col-sm-4 col-xs-6">
                        <label>Días</label>
                        <input type="text" class="form-control form-group" value="<?= (isset($data_section4))? $data_section4['param1'] : '' ;?>" name="param1">
                        <label>Días especial o cerrado</label>
                        <input type="text" class="form-control form-group" value="<?= (isset($data_section4))? $data_section4['param2'] : '' ;?>" name="param2">
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <label>Horarios</label>
                        <input type="text" class="form-control form-group" value="<?= (isset($data_section4))? $data_section4['param3'] : '' ;?>" name="param3">
                        <label>Horario especial</label>
                        <input type="text" class="form-control form-group" value="<?= (isset($data_section4))? $data_section4['param4'] : '' ;?>" name="param4">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                </div>
            </form>

            <div class="clearfix"></div>
            <form id="promos" method="post">
                <input type="hidden" class="page_name" name="page_name" value="Admin_inicio">
                <input type="hidden" name="seccion" value="5">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <br>
                        <label>Promoción especial</label>
                        <div class="has-success">
                            <input type="text" class="form-control form-group" value="<?= (isset($data_section5))? $data_section5['param1'] : '' ;?>" name="param1">
                        </div>
                    </div>
                    <div class="clearfix visible-md visible-lg"></div>
                    <div class="col-sm-4 col-xs-6">
                        <label>Descripción</label>
                        <input type="text" class="form-control form-group" value="<?= (isset($data_section5))? $data_section5['param2'] : '' ;?>" name="param2">
                        <label>Descripción</label>
                        <input type="text" class="form-control form-group" value="<?= (isset($data_section5))? $data_section5['param3'] : '' ;?>" name="param3">
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <label>Texto amarillo</label>
                        <input type="text" class="form-control form-group" value="<?= (isset($data_section5))? $data_section5['param4'] : '' ;?>" name="param4">
                        <label>Texto amarillo</label>
                        <input type="text" class="form-control form-group" value="<?= (isset($data_section5))? $data_section5['param5'] : '' ;?>" name="param5">
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Actualizar</button>
                        </div>
                    </div>
                </div>
            </form>
            
            <!-- modificar cinta de promoción -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <form id="video" method="post">
                          <input type="hidden" class="page_name" name="page_name" value="Admin_inicio">
                          <input type="hidden" name="seccion" value="6">
                          <div class="row">
                            <div class="col-sm-12">
                                <label>Promoción permanente amarilla / aviso importante</label>
                                <input type="text" class="form-control form-group" name = "param1" value="<?= (isset($data_section6))? $data_section6['param1'] : '' ;?>">
                            </div>
                           <!--  <div class="col-sm-6">
                                <label>Cambiar video</label>
                                <input type="file" class="form-control form-group">
                            </div> -->
                            <div class="col-sm-12">
                              <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- separado de billar -->
            <h3 class="sub-header">Sección de billar</h3>
            <div class="row">
              <div class="col-sm-3">
                <form id="calidad" method="post">
                  <input type="hidden" class="page_name" name="page_name" value="Admin_inicio">
                  <input type="hidden" name="seccion" value="7">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <input type="text" class="form-control" name = "param1" value="<?= (isset($data_section7))? $data_section7['param1'] : '' ;?>">
                    </div>
                    <div class="panel-body">
                      <textarea class="form-control" row="3" name = "param2">
                        <?= (isset($data_section7))? $data_section7['param2'] : '' ;?>">
                      </textarea>
                    </div>
                    <div class="panel-footer">
                      <div class="form-group">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-sm-3">
                <form id="profesionalismo" method="post">
                  <input type="hidden" class="page_name" name="page_name" value="Admin_inicio">
                  <input type="hidden" name="seccion" value="8">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <input type="text" class="form-control" name = "param1" value="<?= (isset($data_section8))? $data_section8['param1'] : '' ;?>">
                    </div>
                    <div class="panel-body">
                      <textarea class="form-control" row="3" name = "param2">
                        <?= (isset($data_section8))? $data_section8['param2'] : '' ;?>">
                      </textarea>
                    </div>
                    <div class="panel-footer">
                      <div class="form-group">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-sm-3">
                <form id="competencias" method="post">
                  <input type="hidden" class="page_name" name="page_name" value="Admin_inicio">
                  <input type="hidden" name="seccion" value="9">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <input type="text" class="form-control" name = "param1" value="<?= (isset($data_section9))? $data_section9['param1'] : '' ;?>">
                    </div>
                    <div class="panel-body">
                      <textarea class="form-control" row="3" name = "param2"><?= (isset($data_section9))? $data_section9['param2'] : '' ;?>"></textarea>
                    </div>
                    <div class="panel-footer">
                      <div class="form-group">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-sm-3">
                <form id="premiacion" method="post">
                  <input type="hidden" class="page_name" name="page_name" value="Admin_inicio">
                  <input type="hidden" name="seccion" value="10">                
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <input type="text" class="form-control" value="<?= (isset($data_section10))? $data_section10['param1'] : '' ;?>" name = "param1">
                    </div>
                    <div class="panel-body">
                      <textarea class="form-control" row="3" name = "param2"><?= (isset($data_section10))? $data_section10['param2'] : '' ;?></textarea>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <div class="form-group">
                      <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                  </div>
                </form>
            </div>

            <!-- modificar redes sociales -->
            <h3 class="sub-header">Redes sociales</h3>
            <div class="well">
              <form id="socialnet" method="post">
                <input type="hidden" class="page_name" name="page_name" value="Admin_inicio">
                <input type="hidden" name="seccion" value="11" >
              <p>Activar o desactiva el <code>iframe</code> de las siguiente redes sociales:</p>
              <p class="lead">Facebook <input class="toggle botonEstado" name="param1" type="checkbox" data-toggle="toggle">
              </p>
              <p class="lead">Instagram <input class="toggle botonEstado" name="param2" type="checkbox" data-toggle="toggle">
              </p>
              <button type="submit" class="btn btn-success">Actualizar</button>
              </form>
            </div>

             <!-- enlace a billar -->
            <h3 class="sub-header">Billar y competidores</h3>
            <a href="admin_billar" class="btn btn-success">Modifica contenido de <strong>billar</strong> desde aquí</a>
            <br>

            <!-- modificar a comida -->
            <h3 class="sub-header">Sección de alimentos</h3>
              <form id="alimentos" method="post">
                <input type="hidden" class="page_name" name="page_name" value="Admin_inicio">
                <input type="hidden" name="seccion" value="12">
                <label>Titulo de la sección</label>
                <input type="text" class="form-control form-group" name = "param1" value="<?= (isset($data_section12))? $data_section12['param1'] : '' ;?>">
                <label>Titulo de la sección</label>
                <input type="text" class="form-control form-group" name = "param2" value="<?= (isset($data_section12))? $data_section12['param2'] : '' ;?>">
              <div class="form-group">   
                <button type="submit" class="btn btn-success">Actualizar</button>
              </div>
            </form>
            <a href="admin_menu">Para modificar la galería de imagenes de alimentos, en la pagina del <strong>menú</strong> se puede hacer, de clic aquí</a>
            
            <!-- modificar a comida -->
            <h3 class="sub-header">Sección de Eventos</h3>
            <form id="evento" method="post">
                <input type="hidden" class="page_name" name="page_name" value="Admin_inicio">
                <input type="hidden" name="seccion" value="13">
                <label>Titulo de la sección</label>
                <input type="text" class="form-control form-group" name = "param1" value="<?= (isset($data_section13))? $data_section13['param1'] : '' ;?>">
                <div class="form-group">   
                  <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </form>
            <a href="admin_eventos">Para modificar contenido de la pagina de <strong>eventos</strong> de clic aquí</a>
            
        