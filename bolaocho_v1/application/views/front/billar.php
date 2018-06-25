
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
    
    <!-- promocion -->
    <div class="well billar-promo hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <h3 class="Bebas-bold text-warning">Promoción del día</h3>
                    <h2 class="Bebas-bold margin-0">2 horas de mesa de billar en la compra de <span class="text">1KG ALITAS</span></h2>
                    <p class="text-uppercase h4 margin-0">A solo:</p>
                    <div class="h1 text-success Zing-Rust margin-0">$250</div>
                    <hr class="puntos">
                    <small class="Mukta-Malar hidden-sm">Aplican condiciones    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</small>
                </div>
                <div class="col-md-7 col-sm-7">
                    <br>
                    <p class="text-right Mukta-Malar">
                      <span class="label label-warning">Promoción solo aplica en el mes de Mayo</span>
                    </p>
                    <img src="img/billar/billar-promo.png" alt="" class="img-responsive">
                </div>
            </div>
            
        </div>
    </div>
    
    <br>
    <!-- horarios e indicaciones -->
    <div class="container horarios-indicadores">
        <div class="row">
            <div class="col-md-5 hidden-sm">
                <img src="<?= (isset($data_section2))? $data_section2['param1'] : '' ;?>" alt="" class="img-responsive">
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h3><i class="fa fa-clock-o" aria-hidden="true"></i> Horarios</h3>
                        <hr class="puntos">
                        <div class="horario">
                            <span class="text-warning"><?= (isset($data_section3))? $data_section3['param1'] : '' ;?></span>
                            <p><?= (isset($data_section3))? $data_section3['param3'] : '' ;?></p>
                        </div>

                        <div class="horario">
                            <span class="text-warning"><?= (isset($data_section3))? $data_section3['param2'] : '' ;?> </span>
                            <p><?= (isset($data_section3))? $data_section3['param4'] : '' ;?></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 hidden">
                        <h3><i class="fa fa-book" aria-hidden="true"></i> Indicaciones</h3>
                        <hr class="puntos">
                        <ul>
                            <li>Indicación 1</li>
                            <li>Indicación 2</li>
                            <li>Indicación 3</li>
                            <li>Indicación 4</li>
                            <li>Indicación 5</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    <hr class="puntos">
    <!-- tabla de competencia -->
    <div class="container" id="competencia">
        <h2 class="Bebas-bold text-success">Nuestros competidores</h2>
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-info">Estamos trabajando en este componente. Gracias.</div>
                <div class="hidden"> <div class="table-responsive">          
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>Country</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Anna</td>
                            <td>Pitt</td>
                            <td>35</td>
                            <td>New York</td>
                            <td>USA</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Anna</td>
                            <td>Pitt</td>
                            <td>35</td>
                            <td>New York</td>
                            <td>USA</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Anna</td>
                            <td>Pitt</td>
                            <td>35</td>
                            <td>New York</td>
                            <td>USA</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Anna</td>
                            <td>Pitt</td>
                            <td>35</td>
                            <td>New York</td>
                            <td>USA</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Anna</td>
                            <td>Pitt</td>
                            <td>35</td>
                            <td>New York</td>
                            <td>USA</td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>Anna</td>
                            <td>Pitt</td>
                            <td>35</td>
                            <td>New York</td>
                            <td>USA</td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td>Anna</td>
                            <td>Pitt</td>
                            <td>35</td>
                            <td>New York</td>
                            <td>USA</td>
                          </tr>
                        </tbody>
                      </table>
 </div> </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".modal-inscri">Entrar en la competencia</a>
        </div>
    </div>

    <div class="modal fade modal-inscri" abindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title text-center" id="myModalLabel">Gracias por inscribirse a nuestra competencia</h3>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-b8" action = "/mailer/send.php" method = "post">
                        <input type="hidden" name="redireccion" value="/billar.php"/>
                            <input type="hidden" name="company" value="Formulario de Vacantes desde el sitio - > BolaOcho.com.mx"/><!-- Empresa del cliente -->
    <!--<input type="hidden" name="to" value="administracion@bolaocho.com.mx"/>  -->  <!--Quien recibira el mail -->
    <input type="hidden" name="to" value="administracion@bolaocho.com.mx"/>
    <input type="hidden" name="enviar" value=""/>
    <input type="hidden" name="subject" value="Vacantes de BolaOcho.com.mx"/> <!-- Asunto -->

    <!-- nombre -->
    <div class="form-group">
        <input type="hidden" name="asunto" value = "Entrar en competencia">
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

    <!-- btn -->
    <div class="form-group">
      <div class="condiciones">
        <p>* Alguna condicion</p>
        <p>* Alguna condicion</p>
      </div>
      <button type="submit" class="btn btn-success">Inscribirse</button>
    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-danger" data-dismiss="modal">Cerrar</a>
            </div>
          </div>
        </div>
    </div>
     
    <div class="owl-carousel owl-theme">
        <?=$gallery?>
    </div>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            dots: false,
            autoplay:true,
            autoplayTimeout:5000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>