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
    <div class="well intro-eventos">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5">
            <div class="Zing-Rust margin-0 h2">Que tipo de evento quieres llevar a cabo...?</div>
            <div class="Bebas-bold text-primary margin-0 h3">Nosotros somos una gran opción</div>
            <div class="Bebas-bold text-warning margin-0 h1">Solicita tu cotización</div>
          </div>
          <div class="col-md-6 col-sm-6">
            <p class="Mukta-Malar h4">llena el siguiente formulario y envianos tus datos para darte respuesta lo antes posible:</p>
            <form class="form-b8" action = "/mailer/send.php" method = "post">
              <input type="hidden" name="redireccion" value="/eventos.php"/>
                <input type="hidden" name="company" value="Formulario de Cotización desde el sitio - > BolaOcho.com.mx"/><!-- Empresa del cliente -->
    <!--<input type="hidden" name="to" value="administracion@bolaocho.com.mx"/>  -->  <!--Quien recibira el mail -->
    <input type="hidden" name="to" value="administracion@bolaocho.com.mx"/>
    <input type="hidden" name="enviar" value=""/>
    <input type="hidden" name="subject" value="Cotización de BolaOcho.com.mx"/> <!-- Asunto -->

    <!-- evento -->
    <div class="form-group">

      <select class="form-control" name = "Evento">
        <option value = "Tipo de Evento">Tipo de Evento</option>
        <option value = "Cumpleaños">Cumpleaños</option>
        <option value = "Posada de amistad">Posada de amistad</option>
        <option value = "Reunión familiar">Reunión familiar</option>
        <option value = "Posada empresarial">Posada empresarial</option>
        <option value = "Otro">Otro</option>
      </select>
    </div>

    <!-- nombre -->
    <div class="form-group">
        <input type="text" class="form-control" id="name" name="Nombre" placeholder="Nombre">
    </div>

    <!-- email -->
    <div class="form-group">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>


    <!-- telefono -->
    <div class="form-group">
        <input type="number" class="form-control" id="telefono" name = "Telefono" placeholder="Telefono">
    </div>

    <!-- personas -->
    <div class="form-group">
        <input type="number" class="form-control" id="personas" placeholder="Numero de personas" name = "Personas">
    </div>


    <!-- fecha -->
    <div class="form-group">
      <div id="datetimepicker3" class="input-append input-group">
        <div id="datetimepicker4" class="input-append input-group">
        <input class="form-control" data-format="hh:mm:ss" type="text"  name = "Hora" placeholder="Selecciona una hora">
        <span class="input-group-btn add-on">
          <button class="btn btn-warning" type="button">
              <i class="fa fa-clock-o" aria-hidden="true"></i>
          </button>
        </span>
      </div>
    </div>

    <!-- hora -->
    <div class="form-group">
      <div id="datetimepicker4" class="input-append input-group">
        <input class="form-control" data-format="yyyy-MM-dd" name = "Fecha" type="text" placeholder="Selecciona una fecha">
        <span class="input-group-btn add-on">
          <button class="btn btn-warning" type="button">
              <i class="fa fa-calendar" aria-hidden="true"></i>
          </button>
        </span>
      </div>
    </div>

    <!-- instrucciones -->
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
    </div>

    <div class="container">
      <div class="row">
        <? if( $data_section2['param1'] == 'on'){?>
          <div class="col-md-6">
            <h3 class="Zing-Rust">Ultimas fotos de instagram</h3>
            <!-- LightWidget Instagram -->
            <script src="//lightwidget.com/widgets/lightwidget.js"></script>
            <iframe src="//lightwidget.com/widgets/ae3d3b9c5ecc5caf8d04c707daee92a1.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
          </div>
        <? }?>
        <div class="col-md-6">
          <img alt = "Bolaocho" src = "<?= (isset($data_section3))? $data_section3['param1'] : '' ;?>" class="img-responsive">
          <img alt = "Bolaocho" src = "<?= (isset($data_section44))? $data_section44['param1'] : '' ;?>" class="img-responsive">
        </div>
      </div>
    </div>

    <hr class="puntos">
    
    <section class="back-fixed back5">
      <div class="container paquetes">
        <h2 class="text-center text-uppercase">• Paquetes •</h2>
        <h4 class="text-center">¿Qué esperas para experimentar nuestros productos y servicios?</h4>
        <br>
          <!-- paquetes -->
          <div class="row">
              <!-- paquete 1 -->
              <div class="col-md-4 col-sm-6">
                <div class="panel panel-default paquete-amigo">
                  <div class="panel-heading">
                    <h3><?= (isset($data_section4))? $data_section4['param1'] : '' ;?></h3>
                  </div>
                  <div class="panel-body">
                      <ul class="list-unstyled">
                        <li><?= (isset($data_section4))? $data_section4['param2'] : '' ;?></li>
                        <li><?= (isset($data_section4))? $data_section4['param3'] : '' ;?></li>
                        <li><?= (isset($data_section4))? $data_section4['param4'] : '' ;?></li>
                        <li><?= (isset($data_section4))? $data_section4['param5'] : '' ;?></li>
                        <li><?= (isset($data_section4))? $data_section4['param6'] : '' ;?></li>
                        <li><?= (isset($data_section4))? $data_section4['param7'] : '' ;?></li>
                      </ul>
                  </div>
                  <div class="panel-footer">
                    <span><?= (isset($data_section4))? $data_section4['param8'] : '' ;?></span>
                    <p class="precio"><?= (isset($data_section4))? $data_section4['param9'] : '' ;?></p>
                  </div>
                </div>
              </div>

              <!-- paquete 2 -->
              <div class="col-md-4 col-sm-6">
                <div class="panel panel-default paquete-amigo">
                  <div class="panel-heading">
                    <h3><?= (isset($data_section5))? $data_section5['param1'] : '' ;?></h3>
                  </div>
                  <div class="panel-body">
                      <ul class="list-unstyled">
                        <li><?= (isset($data_section5))? $data_section5['param2'] : '' ;?></li>
                        <li><?= (isset($data_section5))? $data_section5['param3'] : '' ;?></li>
                        <li><?= (isset($data_section5))? $data_section5['param4'] : '' ;?></li>
                        <li><?= (isset($data_section5))? $data_section5['param5'] : '' ;?></li>
                        <li><?= (isset($data_section5))? $data_section5['param6'] : '' ;?></li>
                        <li><?= (isset($data_section5))? $data_section5['param7'] : '' ;?></li>
                        
                      </ul>
                      <small class="nota-adicional hidden">(Nachos con queso, panachos, papas búfalo)</small>
                  </div>
                  <div class="panel-footer">
                    <span><?= (isset($data_section5))? $data_section5['param8'] : '' ;?></span>
                    <p class="precio"><?= (isset($data_section5))? $data_section5['param9'] : '' ;?></p>
                  </div>
                </div>
              </div> 
              <div class="clearfix visible-sm"></div>

              <!-- paquete 3 -->
              <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                <div class="panel panel-default paquete-invites">
                  <div class="panel-heading">
                      <h3><?= (isset($data_section6))? $data_section6['param1'] : '' ;?></h3>
                  </div>
                  <div class="panel-body">
                      <ul class="list-unstyled">
                        <li><?= (isset($data_section6))? $data_section6['param2'] : '' ;?></li>
                        <li><?= (isset($data_section6))? $data_section6['param3'] : '' ;?></li>
                        <li><?= (isset($data_section6))? $data_section6['param4'] : '' ;?></li>
                        <li><?= (isset($data_section6))? $data_section6['param5'] : '' ;?></li>
                        <li><?= (isset($data_section6))? $data_section6['param6'] : '' ;?></li>
                        <li><?= (isset($data_section6))? $data_section6['param7'] : '' ;?></li>
                      </ul>
                      
                  </div>
                  <div class="panel-footer">
                    <span><?= (isset($data_section6))? $data_section6['param8'] : '' ;?></span>
                    <p class="precio"><?= (isset($data_section6))? $data_section6['param9'] : '' ;?></p>
                  </div>
                </div>
              </div>
          </div>

          <!-- paquete fiestas -->
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
              <div class="panel panel-default cumpleanos">
                  <div class="panel-heading">
                    <h3><?= (isset($data_section7))? $data_section7['param1'] : '' ;?></h3>
                  </div>
                  <div class="panel-body">
                      <ul class="list-unstyled">
                        <li><?= (isset($data_section7))? $data_section7['param2'] : '' ;?></li>
                        <li><?= (isset($data_section7))? $data_section7['param3'] : '' ;?></li>
                        <li><?= (isset($data_section7))? $data_section7['param4'] : '' ;?></li>
                        <li><?= (isset($data_section7))? $data_section7['param5'] : '' ;?></li>
                        <li><?= (isset($data_section7))? $data_section7['param6'] : '' ;?></li>
                        <li><?= (isset($data_section7))? $data_section7['param7'] : '' ;?></li>
                      </ul>
                  </div>
                  <div class="panel-footer">
                    <span><?= (isset($data_section7))? $data_section7['param8'] : '' ;?></span>
                    <p class="precio"><?= (isset($data_section7))? $data_section7['param9'] : '' ;?></p>
                  </div>
              </div>
            </div>
          </div>
      </div>    </section>
 