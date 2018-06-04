
            <h1 class="page-header">Pagina de Billar</h1>
            
            <!-- modificar banner  -->
            <div class="bs-docs-section">
              <h3 class="sub-header">Modificar el banner</h3>
                <!-- img de banner -->
                <div class="panel panel-default">
                    <div class="panel-heading">Imagen del banner</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" id="baner">
                                      <input type="hidden" class="page_name" name="page_name" value="Admin_billar">
                                      <input type="hidden" name="seccion" value="1">
                                    <div class="form-group">
                                        <label>Selecciona la imagen a cambiar</label>
                                        <input type="file">
                                    </div>
                                    <div class="form-group">
                                        <label>Titulo de la pagina</label>
                                        <input class="form-control input-lg" type="text" value="Billar">
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
                              <img src="../img/banner4.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                </div>  
            </div>

            <!-- modificar horarios y indicaciones -->
            <h3 class="sub-header">Horarios</h3>
            <div class="bs-docs-section">
              <div class="form-group">
                <label>Cambiar imagen</label>
                <input type="file" class="form-control">
              </div>
              <div class="row">
                  <form action="">
                      <div class="col-sm-4 col-xs-6">
                          <label>Días</label>
                          <div class="form-group">
                              <input type="text" class="form-control form-group" value="Lunes a Viernes">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control form-group" value="Sábados">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control form-group" value="Domingos">
                          </div>
                      </div>
                      <div class="col-sm-4 col-xs-6">
                          <label>Horarios</label>
                          <div class="form-group">
                                <input type="text" class="form-control form-group" value="10:00 am - 11:00 pm">
                          </div>
                          <div class="form-group">
                                <input type="text" class="form-control form-group" value="10:00 am - 11:00 pm">
                          </div>
                          <div class="form-group">
                                <input type="text" class="form-control form-group" value="10:00 am - 11:00 pm">
                          </div>
                      </div>
                  </form>
              </div> 
            
            <!-- modificar horarios y indicaciones -->
            <h3 class="sub-header">Tabla de competencia</h3>
            <div class="bs-docs-section">
              <div class="table-responsive">
                <div class="row">
                  <div class="col-xs-12">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Lugar</th>
                          <th>Nombre</th>
                          <th>Edad</th>
                          <th>Jornadas</th>
                          <th>JG</th>
                          <th>JP</th>
                          <th>Jugados</th>
                          <th>JG</th>
                          <th>JP</th>
                          <th>DF</th>
                          <th>Puntos</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <input type="number" value="" class="form-control">
                          </td>
                          <td>
                            <input type="text" value="" class="form-control">
                          </td>
                          <td>
                            <input type="number" value="" class="form-control"> 
                          </td>
                          <td>
                            <input type="number" value="" class="form-control">
                          </td>
                          <td>
                            <input type="number" value="" class="form-control">
                          </td>
                          <td>
                            <input type="number" value="" class="form-control"> 
                          </td>
                          <td>
                            <input type="number" value="" class="form-control">
                          </td>
                          <td>
                            <input type="number" value="" class="form-control">
                          </td>
                          <td>
                            <input type="number" value="" class="form-control">
                          </td> 
                          <td>
                            <input type="number" value="" class="form-control">
                          </td>
                          <td class="text-center">
                            <strong>00</strong>
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
                            Aron
                          </td>
                          <td>
                            23 
                          </td>
                          <td>
                            25
                          </td>
                          <td>
                            13
                          </td>
                          <td>
                            12 
                          </td>
                          <td>
                            25
                          </td>
                          <td>
                            126
                          </td>
                          <td>
                            58
                          </td>
                          <td>
                            68
                          </td> 
                          <td class="text-center">
                            <strong>100</strong>
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

            <!-- Galeria de bebidas -->
            <h3 class="sub-header">Galería de imágenes</h3>
            <div class="bs-docs-section">
              <div class="form-group">
                  <label>Cargar imagenes</label>
                  <div class="alert alert-info">Aquí va el componente de carga de imagenes</div>
              </div>
            </div>

            
        