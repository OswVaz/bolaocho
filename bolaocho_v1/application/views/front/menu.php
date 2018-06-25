

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img alt = "Bolaocho" src = "<?= (isset($data_section1))? $data_section1['param1'] : '' ;?>">
        <div class="carousel-caption">
          <h1 class="text-center Bebas-bold"><img alt = "Bolaocho" src = "<?= (isset($data_section1))? $data_section1['param2'] : '' ;?>"></h1>
          <h3 class="Bebas-bold text-warning"><img alt = "Bolaocho" src = "<?= (isset($data_section1))? $data_section1['param3'] : '' ;?>"></h3>
        </div>
      </div>
    </div> 
  </div>

  <hr class="puntos">

  <section class="alimentos-bebidas">
    <div class="container">
      <h2 class="Bebas-bold text-center text-primary">Ven y comprueba nuestros suculentos platillos</h2>
      <h3 class="text-center Bebas-bold hidden">Tenemos más de 30 platillos disponibles para ti</h3>
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
      </div>    </div>
  </section>
  
  <!-- menu pdf -->
  <div class="container-fluid menus-pdf">
    <div class="row">
      <div class="col-md-4">
        <h2 class="Bebas-bold">Revisa nuestro Menu de Alimentos</h2>
        <p>ó descargalo desde aqui</p>
        <a href="docs/menu-comida.pdf" target="_blank" class="btn btn-info btn-lg">Menu alimentos</a>
      </div>
      <div class="col-md-8 hidden-xs">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="docs/menu-comida.pdf"></iframe>
        </div>
      </div>
    </div>
  </div>
  
  <!-- separador menu -->
  <hr class="puntos">
  <div class="well alimento-promo hidden">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="img/alimentos-promo.jpg" alt="" class="img-responsive">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="h2 text-uppercase nombre-promo">Hamburguesa + Cerveza + Papas</div>
          <div class="h1 text-warning precio-promo">$200</div>
          <p>
            <a href="#" class="btn-lg btn-info btn-promo" data-toggle="modal" data-target=".modal-promo">Ver más</a>
          </p>
          <div class="descrip-promo">
              <hr>
              <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade modal-promo" abindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-center" id="myModalLabel">Hamburguesa + Cerveza + Papas</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <img src="img/alimentos-promo.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-md-6">
              <h3>Detalles</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
            </div>
            <div class="col-md-6">
                <div class="h1 text-warning precio-promo text-center">$200</div>
                <hr>
                <small>Aclarando Lorem ipsum dolor sit amet, consectetur adipisicing elit,</small>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-danger" data-dismiss="modal">Cerrar</a>
        </div>
      </div>
    </div>
  </div>



<!-- <div class="page-header">
  <h3>Galeria</h3>
  <p>Novias</p>
</div>
<div class="container-fluid container-fluid-galeria">
    <div class="main">
        <ul id="og-grid" class="og-grid hide-bullets row">
      <?=$gallery?>
        </ul>
        <center><a class="btn btn-mini" href="contacto">Contactar</a></center><br>
    </div>
</div>
 -->

  <section class="back-fixed back2">
    
    <div class="container">
      <h2 class="Bebas-bold">Siempre innovando <br> en el servicio de cerveza, <br>¡Solo aquí!</h2>
      <ul id="og-grid" class="og-grid hide-bullets row">
            <?=$gallery?>
        </ul>
    </div>

    <br>
    <br>

    <!-- section de promo -->
    <div class="well bebida-promo hidden">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 text-right">
            <div class="h2 text-uppercase nombre-promo">Tarro + Alitas</div>
            <div class="h1 text-warning precio-promo">$200</div>
            <p>
              <a href="#" class="btn-lg btn-info btn-promo" data-toggle="modal" data-target=".modal-promo">Ver más</a>
            </p>
            <div class="descrip-promo">
                <hr>
                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</small>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <img src="img/bebidas/cerveza3.jpg" alt="" class="img-responsive">
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <img src="img/bebidas/cerveza4.jpg" alt="" class="img-responsive">
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    
     <!-- menu pdf -->
    <div class="container-fluid menus-pdf">
      <div class="row"> 
        <div class="col-md-8 hidden-xs">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="docs/menu-bebidas.pdf"></iframe>
          </div>
        </div>
        <div class="col-md-4">
          <h2 class="Bebas-bold">Revisa nuestro Menu de Bebidas</h2>
          <p>ó descargalo desde aqui</p>
          <a href="docs/menu-bebidas.pdf" target="_blank" class="btn btn-info btn-lg">Menu bebidas</a>
        </div>
      </div>
    </div>

  </section>