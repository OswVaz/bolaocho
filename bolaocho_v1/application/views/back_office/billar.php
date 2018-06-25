
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
                                      <input type="hidden" class="page_name page_name" value="Admin_billar">
                                      <input type="hidden" class = "seccion" value="1">
                                    <div class="form-group">
                                        <label>Selecciona la imagen a cambiar</label>
                                        <input type="file" name = "img_fondo" id = "img_fondo">
                                    </div>
                                    <div class="form-group">
                                        <label>Titulo de la pagina</label>
                                        <input class="form-control input-lg" type="text" name = "param2" value="<?= (isset($data_section1))? $data_section1['param2'] : '' ;?>"> 
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción de la pagina</label>
                                        <input class="form-control" type="text" name = "param3" value="<?= (isset($data_section1))? $data_section1['param3'] : '' ;?>">
                                    </div>
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                </form>
                            </div>
                            <div class="col-lg-6">
                              <img id = "img_s1" src="<?= (isset($data_section1))? $data_section1['param1'] : '' ;?>" alt="" class="img-responsive center-block">
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
                <form id="img" method="post" enctype="multipart/form-data">
                        <input type="hidden" class="page_name page_name" value="Admin_billar">
                        <input type="hidden" class = "seccion" value="2">
                        <div class="form-group">
                            <label>Cambiar Imagen</label>
                            <input type="file" class="form-control" name = "img_fondo" id = "img_fondo1">
                        </div>
                        <div class="form-group">
                            <img src="<?= (isset($data_section2))? $data_section2['param1'] : '' ;?>" alt="" id = "img1" class="img-responsive">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Guardar</button>
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
                          <th>Orden a mostrar</th>
                          <th></th>
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

<div class="row">
    <div class = "col-sm-12"><h1 class="page-header"></h1></div>
    <div class = "col-xs-12 col-sm-5">
        <h3 class="page-header2">Sección "Galeria"</h3>
        <form action="Admin_billar/upload_multiple_images" id = "dropzone1" class="dropzone">
            <input type="hidden" name= "seccion" value="99">
            <div class = "hidden_images">
                <?= $gallery_dropzone?>
            </div>
        </form>
    </div>
    <div class = "col-xs-12 col-sm-7">
        <h3>Imágenes actuales</h3>
        <form id="delete_pictures" method = "post">
            <div class = "row prev_gallery">
                <?=$gallery?>
            </div>
            <button type ="submit" class="btn btn-default">Eliminar</button>
            <input type= "checkbox" onchange="select_all(this.checked);"><span> Seleccionar todos</span>
        </form>
    </div>
</div>
        