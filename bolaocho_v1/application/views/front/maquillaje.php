<style type="text/css">
    #maquillaje_sec_1 {background-image: url("<?= base_url($img_1)?>");}
    #maquillaje_sec_2 {background-image: url("<?= base_url($img_2)?>");}
</style>

<section id="maquillaje_sec_1">
    <div class="vifio">
        <div class="rel11">
            <div class="rel011 text-center center-block">
                    <br><h1 class="rel21 tx2">Maquillaje</h1>
                    <p class="rel3"><?=$text_1?></p>
                    <a class="ghost-button-thick-border2" href="tel:+8111920367">Llamar</a>
                    <br><br><br>
            </div>
        </div>
        <br><br>
    </div>
</section>
<section id="maquillaje_sec_2">
    <div class="divserv text-center center-block">
        <br><p class="rel3"><?=$text_2?></p>
        <div class="row">
            <div class="col-md-12  scrollflow -slide-right -opacity">
                <img src="https://dl.dropboxusercontent.com/s/g18214vd21cuu32/mejor.png?dl=0" width="400">
            </div>
        </div>
    </div>
</section>
<section>
<div class="page-header">
    <h3>Galeria</h3>
    <p>Maquillaje</p>
</div>
<div class="container-fluid container-fluid-galeria text-center">
    <?=$gallery?>
    <a class="btn btn-mini" href="contacto">Contactar</a><br><br>
</div>

 <style type="text/css">

/* Global */


div { word-break: break-all; }

img { max-width:100%; }

a {
  -webkit-transition: all 150ms ease;
  -moz-transition: all 150ms ease;
  -ms-transition: all 150ms ease;
  -o-transition: all 150ms ease;
  transition: all 150ms ease;
  }
    a:hover {
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; /* IE 8 */
        filter: alpha(opacity=50); /* IE7 */
        opacity: 0.6;
        text-decoration: none;
    }



/* Page Header */
.page-header {
    background: #454545;
    margin: -30px 0px 0px;
    padding: 20px 40px;
    border-top: 4px solid #ccc;
    color: white;
    text-transform: uppercase;
    }
    .page-header h3 {
        line-height: 0.88rem;
        color: #A1DEBF;
        }



/* Thumbnail Box */
.caption {
    height: 100%;
    width: 100%;
    margin: 10px 0px;
    padding: 10px;
    box-sizing:border-box;
    -moz-box-sizing:border-box;
    -webkit-box-sizing:border-box;
}
.caption .span4, .caption .span8 {
    padding: 0px 20px;
}
.caption .span4 {
    border-right: 1px dotted #CCCCCC;
}
.caption h3 {
    color: white;
    line-height: 2rem;
    margin: 0 0 20px;
    text-transform: uppercase;
    }
    .caption p {
        font-size: 18px;
        line-height: 1.6rem;
        color: white;
        }
        .btn.btn-mini {
            background: gray;
            border-radius: 0 0 0 0;
            color: black;
            font-size: 1.43rem;
            text-shadow: none !important;
            }
.carousel-control {
    top: -3%;
}





        </style>

<script type="text/javascript">
  // Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 7000
    })
  });


</script>

</section>
