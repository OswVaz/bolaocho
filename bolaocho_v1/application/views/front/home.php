    <!-- slider -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner carrusel-index">
    <div class="item active">      
       <img alt = "Bolaocho" src = "<?= (isset($data_section1))? $data_section1['param1'] : '' ;?>">
      <div class="carousel-caption">
        <h1 class="Bebas-bold"><?= (isset($data_section1))? $data_section1['param2'] : '' ;?></h1>
      </div>
    </div>
    <div class="item">
      <img alt = "Bolaocho" src = "<?= (isset($data_section2))? $data_section2['param1'] : '' ;?>">
      <div class="carousel-caption">
        <h1 class="Bebas-bold"><?= (isset($data_section2))? $data_section2['param2'] : '' ;?></h1>
      </div>
    </div>
    <div class="item">
      <img alt = "Bolaocho" src = "<?= (isset($data_section3))? $data_section3['param1'] : '' ;?>">
      <div class="carousel-caption">
        <h1 class="Bebas-bold"><?= (isset($data_section2))? $data_section2['param2'] : '' ;?></h1>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
        <i class="fa fa-angle-double-left" aria-hidden="true"></i>
    </span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
    </span>
    <span class="sr-only">Next</span>
  </a>
</div>	
	<!-- intro -->
	<hr class="puntos">
	<div class="container">
		<div class="row">
			<!-- horarios -->
			<div class="col-md-5 col-sm-6">
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
	<div class="h3"><i class="fa fa-birthday-cake" aria-hidden="true"></i> <?= (isset($data_section5))? $data_section5['param1'] : '' ;?></div>
  <?= (isset($data_section5))? $data_section5['param2'] : '' ;?>
	<br>Todo por solo <div class="text-warning h3 margin-0"><?= (isset($data_section5))? $data_section5['param3'] : '' ;?></div>
	
</div>			</div>
			<!-- formulario de reservas -->
			<div class="col-md-6 col-sm-6">
				<h3>Solicita una reservación</h3>
				<p>Llena el siguiente formulario y reserva tu mesa</p>
				<form class="form-b8" action = "/mailer/send.php" method = "post">
						<input type="hidden" name="redireccion" value="/index.php"/>
					<input type="hidden" name="company" value="Formulario de Reservación desde el sitio - > BolaOcho.com.mx"/><!-- Empresa del cliente -->
	<!--<input type="hidden" name="to" value="administracion@bolaocho.com.mx"/>  -->  <!--Quien recibira el mail -->
	<input type="hidden" name="to" value="administracion@bolaocho.com.mx"/>
	<input type="hidden" name="enviar" value=""/>
	<input type="hidden" name="subject" value="Reservación de BolaOcho.com.mx"/> <!-- Asunto -->
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
        <input type="number" class="form-control" id="telefono" name="Telefono" placeholder="Telefono">
    </div>

    <!-- personas -->
    <div class="form-group">

      <select class="form-control" name = "Numero">
        <option value = "2 Personas">2 Personas</option>
        <option value = "3 Personas">3 Personas</option>
        <option value = "4 Personas">4 Personas</option>
        <option value = "5 Personas">5 Personas</option>
        <option value = "6 a 10 Personas">6 a 10 Personas</option>
        <option value = "+ de 10 Personas">+ de 10 Personas</option>
      </select>
    </div>

    <!-- fecha -->
    <div class="form-group">
      <div id="datetimepicker3" class="input-append input-group">

        <input class="form-control" data-format="hh:mm:ss" type="text" name = "Hora" placeholder="Selecciona una hora">
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

    <!-- billar -->
    <div class="form-group">
        <div class="checkbox">
          <label>
            <input type="checkbox" name = "Si" value = "requiere mesa de Billar"> Requiero mesa de Billar
          </label>
        </div>
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
    
    <!-- promoción actual -->
	<hr class="puntos">
    <div class="temp_promocional alert alert-warning margin-b0">
  <h3 class="text-center text-uppercase"><?= (isset($data_section6))? $data_section6['param1'] : '' ;?></h3>
</div>		
	<!-- video -->
	<div class="video-section">
	<video id="video-elem" preload="auto" autoplay="true" loop="loop" muted="muted" poster="img/Pool-2.mp4"> 
		<source src="img/Pool-2.mp4" type="video/mp4">Video not supported
	</video> 
    <div class="video-overlay">
        <h2>En bola ocho tu pones el ambiente</h2>
        <div class="container text-center video-icons hidden-xs hidden-sm">
        	<div class="row">
        		<div class="col-md-2 col-lg-offset-2 col-md-offset-2">
        			<img src="img/amigable.svg" alt="amigable" class="img-responsive center-block">
        			<h3>Amigable</h3>
        		</div>
        		<div class="col-md-2">
        			<img src="img/cerveza.svg" alt="cerveza" class="img-responsive center-block">
        			<h3>Divertido</h3>
        		</div>
        		<div class="col-md-2">
        			<img src="img/pelota.svg" alt="pelota" class="img-responsive center-block">
        			<h3>Deportista</h3>
        		</div>
        		<div class="col-md-2">
        			<img src="img/hamburguesa.svg" alt="hamburguesa" class="img-responsive center-block">
        			<h3>Delicioso</h3>
        		</div>
        		<div class="col-md-2">
        			<img src="img/chec.svg" alt="chec" class="img-responsive center-block">
        			<h3>Confiable</h3>
        		</div>
        	</div>
        </div>
    </div>
</div>
	<!-- section menu left de prueba 
	   < ?php include 'php/temp_tabs_left.php'; ?> -->
	
	<!-- billar -->
	<hr class="puntos">
	<section class="back-fixed billar back1">
		<div class="container-fluid">
			
			<!-- titulo -->
			<h2 class="text-center">
				<i class="fa fa-angle-double-left" aria-hidden="true"></i>
				<span class="Bebas-bold">Somos tu mejor opción para <br> la practica del billar</span>
				<i class="fa fa-angle-double-right" aria-hidden="true"></i>
			</h2>

			<!-- caracteres -->
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<img src="img/Chevillotte.svg" alt="Chevillotte" class="center-block">
					<h3><?= (isset($data_section7))? $data_section7['param1'] : '' ;?></h3>
					<p><?= (isset($data_section7))? $data_section7['param2'] : '' ;?></p>
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="img/billiards-table.svg" alt="billiards" class="center-block">
					<h3><?= (isset($data_section8))? $data_section8['param1'] : '' ;?></h3>
					<p><?= (isset($data_section8))? $data_section8['param2'] : '' ;?></p>
				</div>
				<div class="clearfix visible-sm"></div>
				<div class="col-md-3 col-sm-6">
					<img src="img/competencia.svg" alt="competencia" class="center-block">
					<h3><?= (isset($data_section9))? $data_section9['param1'] : '' ;?></h3>
					<p><?= (isset($data_section9))? $data_section9['param2'] : '' ;?></p>
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="img/trofeo.svg" alt="trofeo" class="center-block">
					<h3><?= (isset($data_section10))? $data_section10['param1'] : '' ;?></h3>
					<p><?= (isset($data_section10))? $data_section10['param2'] : '' ;?></p>
				</div>
			</div>
			
			<!-- imagen central -->
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<!-- instagram 
					<hr class="puntos">
						<script src="//lightwidget.com/widgets/lightwidget.js"></script>
						<iframe src="//lightwidget.com/widgets/ae3d3b9c5ecc5caf8d04c707daee92a1.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
					<hr class="puntos">
					-->
					<hr class="puntos">
				</div>
			</div>
			
			<!-- tabla e imagen -->
			<div class="row">
				<div class="col-md-6 col-sm-6 hidden">
					<h3>Tabla de competencia</h3>
					<div class="table-responsive">          
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
 </div>				</div>
				<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
					<img src="img/billar2.JPG" alt="" class="img-responsive img-border-bla">
					<p class="billar-descripcion">Felicidades a nuestra <strong>Ultima ganadora</strong> de nuestra competición 2018</p>
				</div>
				<div class="col-sm-12">
					<div class="h3 text-center">
						<a href="billar.php#competencia" class="btn-lg btn-info Bebas-bold">Entrar en la competencia</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- alimentos -->
	<section class="alimentos-bebidas">
		<div class="container">
			<h2 class="Bebas-bold text-center text-warning"><?= (isset($data_section12))? $data_section12['param1'] : '' ;?></h2>
		    <div id="galeria_alimentos">
    <!-- galeria -->
    <div class="row">
        <div class="col-sm-6" id="slider-thumbs">
            <!-- Bottom switcher of slider -->
            <ul class="hide-bullets">
                <li class="col-sm-3 hidden">
                    <a class="thumbnail" id="carousel-selector-0">
                        <img src="img/alimentos/comida1.jpg" alt="carrusel comida">
                    </a>
                </li>

                <li class="col-sm-3 hidden">
                    <a class="thumbnail" id="carousel-selector-1">
                    	<img src="img/alimentos/comida2.jpg" alt="carrusel comida">
                    </a>
                </li>

                <li class="col-sm-3 hidden">
                    <a class="thumbnail" id="carousel-selector-2">
                    	<img src="img/alimentos/comida3.jpg" alt="carrusel comida">
                    </a>
                </li>

                <li class="col-sm-3 hidden">
                    <a class="thumbnail" id="carousel-selector-3">
                    	<img src="img/alimentos/comida4.jpg" alt="carrusel comida">
                    </a>
                </li>

                <li class="col-sm-3 hidden">
                    <a class="thumbnail" id="carousel-selector-4">
                    	<img src="img/alimentos/comida5.jpg" alt="carrusel comida">
                    </a>
                </li>

                <li class="col-sm-6">
                    <a class="thumbnail" id="carousel-selector-5">
                    	<img src="img/alimentos/comida6.jpg" alt="carrusel comida">
                    </a>
                </li>
                <li class="col-sm-3 hidden">
                    <a class="thumbnail" id="carousel-selector-6">
                    	<img src="img/alimentos/comida7.jpg" alt="carrusel comida">
                    </a>
                </li>

                <li class="col-sm-3 hidden">
                    <a class="thumbnail" id="carousel-selector-7">
                    	<img src="img/alimentos/comida8.jpg" alt="carrusel comida">
                    </a>
                </li>

                <li class="col-sm-3 hidden">
                    <a class="thumbnail" id="carousel-selector-8">
                    	<img src="img/alimentos/comida9.jpg" alt="carrusel comida">
                    </a>
                </li>

                <li class="col-sm-3 hidden">
                    <a class="thumbnail" id="carousel-selector-9">
                    	<img src="img/alimentos/comida10.jpg" alt="carrusel comida">
                    </a>
                </li>
                <li class="col-sm-6">
                    <a class="thumbnail" id="carousel-selector-10">
                    	<img src="img/alimentos/comida11.jpg" alt="carrusel comida">
                    </a>
                </li>

                <li class="col-sm-3 hidden">
                    <a class="thumbnail" id="carousel-selector-11">
                    	<img src="img/alimentos/comida12.jpg" alt="carrusel comida">
                    </a>
                </li>

                <li class="col-sm-3 hidden">
                    <a class="thumbnail" id="carousel-selector-12">
                    	<img src="img/alimentos/comida13.jpg" alt="carrusel comida">
                    </a>
                </li>

                <li class="col-sm-6">
                    <a class="thumbnail" id="carousel-selector-13">
                    	<img src="img/alimentos/comida14.jpg" alt="carrusel comida">
                    </a>
                </li>
                <li class="col-sm-3 hidden">
                    <a class="thumbnail" id="carousel-selector-14">
                    	<img src="img/alimentos/comida15.jpg" alt="carrusel comida">
                    </a>
                </li>

                <li class="col-sm-6">
                    <a class="thumbnail" id="carousel-selector-15">
                    	<img src="img/alimentos/comida16.jpg" alt="carrusel comida">
                    </a>
                </li> 
            </ul>
        </div>
        <div class="col-sm-6 hidden-xs">
            <div class="col-xs-12" id="slider">
                <!-- Top part of the slider -->
                <div class="row">
                    <div class="col-sm-12" id="carousel-bounding-box">
                        <div class="carousel slide" id="myCarousel">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item" data-slide-number="0">
                                    <img src="img/alimentos/comida1.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="item" data-slide-number="1">
                                    <img src="img/alimentos/comida2.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="item" data-slide-number="2">
                                    <img src="img/alimentos/comida3.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="item" data-slide-number="3">
                                    <img src="img/alimentos/comida4.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="item" data-slide-number="4">
                                    <img src="img/alimentos/comida5.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="item" data-slide-number="5">
                                    <img src="img/alimentos/comida6.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                                
                                <div class="item" data-slide-number="6">
                                    <img src="img/alimentos/comida7.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                                
                                <div class="item" data-slide-number="7">
                                    <img src="img/alimentos/comida8.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                                
                                <div class="item" data-slide-number="8">
                                    <img src="img/alimentos/comida9.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                                
                                <div class="item" data-slide-number="9">
                                    <img src="img/alimentos/comida10.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                                
                                <div class="item" data-slide-number="10">
                                    <img src="img/alimentos/comida11.jpg" alt="carrusel comida"></div>
                                
                                <div class="item" data-slide-number="11">
                                    <img src="img/alimentos/comida12.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                                
                                <div class="item" data-slide-number="12">
                                    <img src="img/alimentos/comida13.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="item" data-slide-number="13">
                                    <img src="img/alimentos/comida14.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="item" data-slide-number="14">
                                    <img src="img/alimentos/comida15.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="item" data-slide-number="15">
                                    <img src="img/alimentos/comida16.jpg" alt="carrusel comida">
                                    <div class="caption hidden">
                                        <h4>Nombre del platillo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel nav -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Slider-->
    </div> 
</div>		</div>
	</section>

	<!-- enlace a menu -->
	<hr class="puntos">
		<div class="container-fluid enlaces-menu">
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center"><?= (isset($data_section12))? $data_section12['param2'] : '' ;?></h3>
					<p class="text-center">
						<a href="docs/menu-comida.pdf" target="_blank" class="btn btn-lg btn-info text-uppercase">Menú de Alimentos</a>
						<a href="docs/menu-bebidas.pdf" target="_blank" class="btn btn-lg btn-info text-uppercase">Menú de Bebidas</a>
					</p>
				</div>
			</div>
		</div>
	<hr class="puntos">
	
	<!-- eventos -->
	<section class="eventos index">
		<h2><?= (isset($data_section13))? $data_section13['param1'] : '' ;?><br>
			<a href="eventos.php" class="btn btn-success text-center text-uppercase">Más información</a>
		</h2>
		<img src="img/eventos.jpg" alt="" class="img-responsive">
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