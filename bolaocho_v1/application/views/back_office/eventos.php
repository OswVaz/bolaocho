
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
                                          <input type="file">
                                      </div>
                                      <div class="form-group">
                                          <label>Titulo de la pagina</label>
                                          <input class="form-control input-lg" type="text" value="Eventos">
                                      </div>
                                      <div class="form-group">
                                          <label>Descripción de la pagina</label>
                                          <input class="form-control" type="text" value="Organiza tus eventos con nosotros">
                                      </div>
                                      <button type="reset" class="btn btn-success">Actualizar</button>
                                      <button type="reset" class="btn btn-danger">Restablecer</button>
                                  </form>
                              </div>
                              <div class="col-lg-6">
                                <img src="../img/banner3.jpg" alt="" class="img-responsive">
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
              <p>Activar o desactiva el <code>iframe</code> de las siguiente redes sociales:</p>
              <p class="lead">Facebook <input class="toggle botonEstado" name="my-checkbox" type="checkbox" data-toggle="toggle" checked="">
              </p>
              <p class="lead">Instagram <input class="toggle botonEstado" name="my-checkbox" type="checkbox" data-toggle="toggle" checked="">
              </p>
            </div>

            <!-- imagenes -->
            <div class="bs-docs-section">
              <h3 class="sub-header">Images extras</h3>
              <div class="row">
                <div class="col-sm-6 col-xs-12">
                  <div class="well">
                    <div class="form-group">
                        <label>Imagen extra 1</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <img src="../img/eventos/evento1.JPG" alt="" class="img-responsive">
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-success">Guardar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <div class="well">
                    <div class="form-group">
                        <label>Imagen extra 2</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <img src="../img/eventos/evento2.JPG" alt="" class="img-responsive">
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-success">Guardar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- alerta de cambios -->
            <div class="alert alert-info">La modificación del contenido de los paquetes aplicara tambien en la pagina de <a href="../eventos.php" target="_blank"><strong>Eventos</strong></a></div> 
            
        