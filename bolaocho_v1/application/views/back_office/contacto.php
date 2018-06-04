
            <h1 class="page-header">Pagina de Eventos</h1>
            
            <!-- modificar banner  -->
            <div class="bs-docs-section">
              <h3 class="sub-header">Modificar el banner</h3>
                <!-- img de banner -->
                <div class="panel panel-default">
                    <div class="panel-heading">Imagen del banner</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Selecciona la imagen a cambiar</label>
                                        <input type="file">
                                    </div>
                                    <div class="form-group">
                                        <label>Titulo de la pagina</label>
                                        <input class="form-control input-lg" type="text" value="Contactanos">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción de la pagina</label>
                                        <input class="form-control" type="text" value="Dejanos tus comentarios, sugerencias. Estamos a tus ordenes">
                                    </div>
                                    <button type="reset" class="btn btn-success">Actualizar</button>
                                    <button type="reset" class="btn btn-danger">Restablecer</button>
                                </form>
                            </div>
                            <div class="col-lg-6">
                              <img src="../img/banner5.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                </div>  
            </div>

            <!-- modificar titulos de la seccion -->
            <div class="bs-docs-section">
              <h3 class="sub-header">Sección de Reclutamiento</h3>
                <div class="well">
                 <form>
                    <div class="form-group">
                        <label>Slogan amarillo</label>
                        <input type="text" class="form-control form-group" value="Trabaja donde te gusta jugar">
                    </div>
                    <div class="form-group">
                        <label>Titulo de la sección</label>
                        <input type="text" class="form-control form-group input-lg" value="UNETE A NUESTRO EQUIPO">
                    </div>
                    <p>Mostrar la tabla de vacantes <input type="checkbox" checked data-toggle="toggle" data-size="mini"></p>
                    <div class="form-group">
                          <button type="reset" class="btn btn-success">Guardar</button>
                          <button type="reset" class="btn btn-warning">Limpiar</button>
                          <a href="#"> <strong>Restaurar</strong></a>
                    </div>
                 </form> 
                </div>
            </div>

            <!-- modificar vacantes -->
            <div class="bs-docs-section">
              <h3 class="sub-header">Agregar vacantes</h3>
              <div class="table-responsive">
                <div class="row">
                  <div class="col-xs-12">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Vacante</th> 
                          <th>Descripción</th>
                          <th>Horarios</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td>
                            <input type="text" value="" class="form-control">
                          </td>
                          <td>
                            <textarea class="form-control"></textarea>
                          </td>
                          <td>
                            <input type="text" value="" class="form-control">
                          </td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Limpieza
                          </td>
                          <td>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                          </td>
                          <td>
                            8:00 am - 5:00pm
                          </td>
                          <td class="text-center">
                            <a href="#" class="btn btn-danger"><i class="fa fa-minus"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            
        