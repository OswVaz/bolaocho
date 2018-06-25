
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
                                <form role="form" id="baner">
                                    <input type="hidden" class="page_name" name="page_name" value="Admin_contacto">
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

            <!-- modificar titulos de la seccion -->
            <div class="bs-docs-section">
              <h3 class="sub-header">Sección de Reclutamiento</h3>
                <div class="well">
                 <form role="form" id="vacantes">
                    <input type="hidden" class="page_name" name="page_name" value="Admin_contacto">
                    <input type="hidden" name="seccion" value="2">
                    <div class="form-group">
                        <label>Slogan amarillo</label>
                        <input type="text" class="form-control form-group" name = 'param1' value="<?= (isset($data_section2))? $data_section2['param1'] : '' ;?>">
                    </div>
                    <div class="form-group">
                        <label>Titulo de la sección</label>
                        <input type="text" class="form-control form-group input-lg" name = 'param2' value="<?= (isset($data_section2))? $data_section2['param2'] : '' ;?>">
                    </div>
                    
                    <div class="form-group">
                          <button type="submit" class="btn btn-success">Guardar</button>
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
                          <th>Vacante</th>
                          <th>Descripción</th>
                          <th>Horarios</th>
                          <th>Estatus</th> 
                          <th></th>
                        </tr>
                      </thead>
                      <tbody class = "borrar">
                        <?= (isset($tabla))? $tabla : '';?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            
        