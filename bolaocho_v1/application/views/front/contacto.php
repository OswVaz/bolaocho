    <!-- banner -->
    <div class="carousel-inner">
      <div class="item active">
        <img alt = "Bolaocho" src = "<?= (isset($data_section1))? $data_section1['param1'] : '' ;?>">
        <div class="carousel-caption">
          <h1 class="text-center Bebas-bold"><?= (isset($data_section1))? $data_section1['param2'] : '' ;?></h1>
          <h3 class="Bebas-bold text-warning"><?= (isset($data_section1))? $data_section1['param3'] : '' ;?></h3>
        </div>
      </div>
    </div>

  <hr class="puntos">
  <div class="container" id="formulario">
    <div class="row">
      <div class="col-md-5 col-sm-5">
        <!-- horarios -->
        <div class="well temp_horarios">
  <!-- horarios -->
  <div class="h3"><i class="fa fa-clock-o" aria-hidden="true"></i> Horarios</div>
  <ul>
    <li><?= (isset($data_section4))? $data_section4['param1'] : '' ;?> <span class="text-warning"><?= (isset($data_section4))? $data_section4['param3'] : '' ;?></span></li>
    <li><?= (isset($data_section4))? $data_section4['param2'] : '' ;?> <span class="text-warning"><?= (isset($data_section4))? $data_section4['param4'] : '' ;?></span></li>
  </ul>
  <!-- Telefonos -->
  <div class="h3"><i class="fa fa-phone" aria-hidden="true"></i> Teléfonos</div>
  <ul>
    <li>83 33 78 16 <span class="text-warning"></span></li>
    <li>83 33 78 32 <span class="text-warning"></span></li>
  </ul>

  <hr>
  <!-- Especiales -->
  <div class="h3"><i class="fa fa-birthday-cake" aria-hidden="true"></i> Especiales de cumpleaños </div>
  <ul>
    <li>1 Botella (red label, Tradicional o Absolut)</li>
        <li>2 hora de billar</li>
        <li>2 tritones</li>
        <li>1 kg de alitas</li>
        <li>1 Combinado a elegir</li>
        <li>8 shots de cortesía</li>
        <li>Todo x solo <div class="text-warning h3 margin-0">$2,035</div></li>
  </ul>
</div>      </div>
      <div class="col-md-5 col-sm-5">
        <!-- formulario de contacto -->
          <h3>Dejanos tus comentarios</h3>
          <p>Para consultas generales, complete el siguiente formulario</p>
        <form class="form-b8" action = "/mailer/send.php" method = "post">
          <input type="hidden" name="redireccion" value="/contacto.php"/>
            <input type="hidden" name="company" value="Formulario de Contacto desde el sitio - > BolaOcho.com.mx"/><!-- Empresa del cliente -->
  <!--<input type="hidden" name="to" value="administracion@bolaocho.com.mx"/>  -->  <!--Quien recibira el mail -->
  <input type="hidden" name="to" value="administracion@bolaocho.com.mx"/>
  <input type="hidden" name="enviar" value=""/>
  <input type="hidden" name="asunto" value = "Dudas y comentarios">
  <input type="hidden" name="subject" value="Contacto de BolaOcho.com.mx"/> <!-- Asunto -->

    <!-- nombre -->
    <div class="form-group">
        <input type="text" class="form-control" name="Nombre" placeholder="Nombre">
    </div>

    <!-- email -->
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email">
    </div>

    <!-- telefono -->
    <div class="form-group">
        <input type="number" class="form-control" name="Telefono" placeholder="Telefono">
    </div>

    <!-- mensaje -->
    <div class="form-group">
        <textarea class="form-control" rows="5" name="Mensaje" placeholder="Mensaje"></textarea>
    </div>

    <!-- btn -->
    <div class="form-group">
      <div class="condiciones">
        <p>* Se le contactara en las próximas 48 horas para confirmación</p>
        <p>* Es importante estar 10 minutos antes de la hora agendada</p>
      </div>
      <button type="submit" class="btn btn-warning">Reservar</button>
    </div>
        </form>
      </div>
    </div>
  </div>

  <section id="unete" class="back2 back6">
    <div class="container">
      <div class="row">
        <br>
        <h3 class="Bebas-bold text-center text-warning margin-0"><?= (isset($data_section2))? $data_section2['param1'] : '' ;?></h3>
        <div class="Bebas-bold text-center h1 margin-0"><?= (isset($data_section2))? $data_section2['param2'] : '' ;?></div>
                <div class="alert alert-info">Estamos trabajando en este componente. Gracias.</div>
        <div class="hidden">          
          <div class="col-md-8 col-md-offset-2">
            <p class="text-center Mukta-Malar text-uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, nulla facilis vero, accusamus distinctio incidunt odio perferendis. Aperiam tempora quas aliquid, assumenda? Maiores aliquid magni harum atque porro, doloremque quam.</p>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-8 col-md-offset-2">
          <div class="table-responsive">          
            <table class="table Mukta-Malar">
              <thead>
                <tr>
                  <th>Vacante</th> 
                  <th>Descripción</th>
                  <th>Horarios</th>
                  <th>Postularse</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Limpieza</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</td>
                  <td>Matutino</td>
                  <td><a href="#" class="btn btn-primary">Postularse</a></td>
                </tr>
                <tr>
                  <td>Limpieza</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</td>
                  <td>Matutino</td>
                  <td><a href="#" class="btn btn-primary">Postularse</a></td>
                </tr>
                <tr>
                  <td>Limpieza</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</td>
                  <td>Matutino</td>
                  <td><a href="#" class="btn btn-primary">Postularse</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          </div>
        </div>
        <h2 class="text-center text-success Bebas-bold">Postulate en alguno vacante</h2>
        <p class="text-center Mukta-Malar">Llena el siguiente formulario y envianos tus datos, encontraremos un lugar adecuado  </p>
        <div class="col-md-6 col-md-offset-3">
          <form class="form-b8" action = "/mailer/send.php" method = "post" enctype="multipart/form-data">
            <input type="hidden" name="redireccion" value="/contacto.php"/>
            <input type="hidden" name="company" value="Formulario de Vacantes desde el sitio - > BolaOcho.com.mx"/><!-- Empresa del cliente -->
  <!--<input type="hidden" name="to" value="administracion@bolaocho.com.mx"/>  -->  <!--Quien recibira el mail -->
  <input type="hidden" name="to" value="administracion@bolaocho.com.mx"/>
  <input type="hidden" name="enviar" value=""/>
  <input type="hidden" name="subject" value="Vacantes"/> <!-- Asunto -->

    <!-- nombre -->
    <div class="form-group">
        <input type="text" class="form-control" name="Nombre" placeholder="Nombre">
    </div>

    <!-- edad -->
    <div class="form-group">
        <input type="number" class="form-control" name="Edad" placeholder="Edad">
    </div>

    <!-- email -->
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email">
    </div>

    <!-- telefono -->
    <div class="form-group">
        <input type="number" class="form-control" name="Telefono" placeholder="Telefono">
    </div>

    <!-- sexo -->
    <div class="form-group">
      <select class="form-control" name="Genero">
        <option>Genero</option>
        <option>Masculino</option>
        <option>Femenino</option>
      </select>
    </div>

    <!-- nombre -->
    <div class="form-group">
        <label>Adjunta tu curriculum vitae</label>
        <input type="file" class="form-control" name="back_img">
    </div>

    <!-- btn -->
    <div class="form-group">
      <div class="condiciones">
        <p>* Se le contactara en las próximas 48 horas para confirmación</p>
        <p>* Es importante estar 10 minutos antes de la hora agendada</p>
      </div>
      <button type="submit" class="btn btn-warning">Reservar</button>
    </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <hr class="puntos">
    <div class="h3 text-center Bebas-bold">Visitanos</div>
    <p class="Mukta-Malar text-center">Estamos en Av. Gonzalitos #904, Vista Hermosa, C.P. 64620,Monterrey, N.L., México</p>
  <!-- mapa -->
  <div class="map">
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3595.5113840190734!2d-100.35206128836062!3d25.68748720489664!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd5d7782686830be8!2sBola+Ocho+Restaurant+Bar+%26+Billar!5e0!3m2!1ses!2smx!4v1516204654553" style="border:0" allowfullscreen></iframe>
  </div>
</div>  
   