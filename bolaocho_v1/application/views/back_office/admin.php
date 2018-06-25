<?php if($login){ ?>

<div class="container ">
	<h1 class="text-center col-sm-12">Login</h1>
	<div class = "modal_error col-md-6 col-md-offset-3"></div>
	<div class="col-md-6 col-md-offset-3">
		<input type = "hidden" name = "page_name" value = "Admin" >
		<form  id = "login" method = "post">
			<div class="input-group">
				<span class="input-group-addon glyphicon glyphicon-she1"><i class="fa fa-unlock-alt"></i></span>
				<input type="text" name="mail" class="form-control input-lg" placeholder="Usuario">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon glyphicon glyphicon-pwd2"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
				<input type="password" name="pass" class="form-control input-lg" placeholder="Contraseña">
			</div><br>
			<input class="btn btn-lg btn-primary btn-block" value="Entrar" type="submit">
		</form>
	</div>
</div>
<div>

<?php }else{ ?>

	<h1 class="page-header text-center">Dashboard</h1>
	
	            <!-- modificar vacantes -->
            <div class="bs-docs-section">
              <h3 class="sub-header">Correos</h3>
              <div class="table-responsive">
                <div class="row">
                  <div class="col-xs-12">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Nombre</th>
                          <th>Edad</th>
                          <th>Telefono</th>
                          <th>asunto</th>
                          <th>mensaje</th>
                          <th>adjunto</th>
                        </tr>
                      </thead>
                      <tbody class = "borrar">
                        <?= (isset($correos))? $correos : '';?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
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
                        </tr>
                      </thead>
                      <tbody class = "borrar">
                        <?= (isset($competencia))? $competencia : '';?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- modificar vacantes -->
            <div class="bs-docs-section">
              <h3 class="sub-header">Vacantes Activas</h3>
              <div class="table-responsive">
                <div class="row">
                  <div class="col-xs-12">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Vacante</th>
                          <th>Descripción</th>
                          <th>Horarios</th>
                        </tr>
                      </thead>
                      <tbody class = "borrar">
                        <?= (isset($vacantes))? $vacantes : '';?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>



<?php } ?>