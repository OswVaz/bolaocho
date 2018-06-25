<style type="text/css">
 .back1{
    background: linear-gradient(to right, rgba(0,0,0,.70) 50%, rgba(0,0,0,.70) 50%), url(<?= (isset($data_section4))? $data_section4['param4'] : '' ;?>) no-repeat center center fixed; 
  }
  .back3{
    background: linear-gradient(to right, rgba(0,0,0,.70) 50%, rgba(0,0,0,.70) 50%), url(<?= (isset($data_section5))? $data_section5['param4'] : '' ;?>) no-repeat center center fixed; 
  }
  .back2{
      background: linear-gradient(to right, rgba(0,0,0,.50) 50%, rgba(0,0,0,.50) 50%), url(<?= (isset($data_section6))? $data_section6['param4'] : '' ; ?>) no-repeat center center fixed; 
    }  
  .back4{
    background: linear-gradient(to right, rgba(0,0,0,.70) 30%, rgba(0,0,0,.70) 30%), url(<?= (isset($data_section7))? $data_section7['param4'] : '' ; ?>) no-repeat center center fixed; 
  }  
</style>


<!-- banner -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class =  "img-responsive center-block" alt = "Bolaocho" src = "<?= (isset($data_section1))? $data_section1['param1'] : '' ;?>">
        <div class="carousel-caption">
          <h1 class="text-center Bebas-bold"><?= (isset($data_section1))? $data_section1['param2'] : '' ;?></h1>
          <h3 class="Bebas-bold text-warning"><?= (isset($data_section1))? $data_section1['param3'] : '' ;?></h3>
        </div>
      </div>
    </div>

    <div class="well">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <span class=""></span>
            <h2 class="Bebas-bold"><?= (isset($data_section2))? $data_section2['param1'] : '' ;?></h2>
            <?= (isset($data_section2))? $data_section2['param2'] : '' ;?>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/logo.svg" alt="" class="img-responsive center-block">
          </div>
          <div class="col-md-4 col-sm-4 text-right">
            <h2 class="Bebas-bold"><?= (isset($data_section3))? $data_section3['param1'] : '' ;?></h2>
           <?= (isset($data_section3))? $data_section3['param2'] : '' ;?>
          </div>
        </div>
      </div>
    </div>

    <hr class="puntos">
      <div class="h3 text-center Bebas-bold">Los servicios que ofrecemos son:</div>
    <hr class="puntos">

    <section class="back-fixed billar back1">
        <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <h2 class="Bebas-bold"><?= (isset($data_section4))? $data_section4['param1'] : '' ;?></h2>
                <p class="h3 Mukta-Malar"><?= (isset($data_section4))? $data_section4['param2'] : '' ;?></p>
              </div>
              <div class="col-md-6 col-sm-6">
                <img class = "img-responsive" alt = "Bolaocho" src = "<?= (isset($data_section4))? $data_section4['param3'] : '' ;?>">
              </div>
            </div>
        </div>
    </section>

    <section class="back-fixed food back3">
        <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <img  class = "img-responsive" alt = "Bolaocho" src = "<?= (isset($data_section5))? $data_section5['param3'] : '' ;?>">
              </div>
              <div class="col-md-6 col-sm-6 text-right">
                <h2 class="Bebas-bold"><?= (isset($data_section5))? $data_section5['param1'] : '' ;?></h2>
                <p class="h3 Mukta-Malar"><?= (isset($data_section5))? $data_section5['param2'] : '' ;?></p>
              </div>
            </div>
        </div>
    </section>

    <section class="back-fixed bebidas back2">
        <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <h2 class="Bebas-bold"><?= (isset($data_section6))? $data_section6['param1'] : '' ; ?></h2>
                <p class="h3 Mukta-Malar"><?= (isset($data_section6))? $data_section6['param2'] : '' ; ?></p>
              </div>
              <div class="col-md-6 col-sm-6">
                <img class = "img-responsive"  alt = "Bolaocho" src = "<?= (isset($data_section6))? $data_section6['param3'] : '' ; ?>">
              </div>
            </div>
        </div>
    </section>
    
    <section class="back-fixed eventos back4">
        <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <img class = "img-responsive"  alt = "Bolaocho" src = "<?= (isset($data_section7))? $data_section7['param3'] : '' ;?>">
              </div>
              <div class="col-md-6 col-sm-6 text-right">
                <h2 class="Bebas-bold"><?= (isset($data_section7))? $data_section7['param1'] : '' ; ?></h2>
                <p class="h3 Mukta-Malar"><?= (isset($data_section7))? $data_section7['param2'] : '' ; ?>.</p>
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