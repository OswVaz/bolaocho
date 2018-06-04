<style type="text/css">
    .con {background-image: url("<?= base_url($img_1)?>");}
    .custom{background-color:#ffffff;}
</style>
  <script language="JavaScript">
        $(function(){
$("#efren-martinez-form").submit(function(e) {
		e.preventDefault();
		var formData = new FormData(this);
		$.ajax({
			   type: "POST",
			   url: 'contacto/contactanos',
			   data: formData,
			   success: function(data){
				   console.log(data); // show response from the php script.
			   },
				cache: false,
				contentType: false,
				processData: false
			 });
			// location.reload();
	});

        });

    </script>

<section class="backi">

<center><section class="divcontact1"id="bloque45" >
</section>

<div class="row">
 <br><br><br><br>
 <h2>Ubicacion</h2>
  <div class="col-md-12 img-responsive"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.9333610117515!2d-100.37007998477479!3d25.640337119870566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662bdc694c26013%3A0x89f8f193909ec73e!2sLa+Escondida+105%2C+Valle+de+Chipinque%2C+66250+San+Pedro+Garza+Garc%C3%ADa%2C+N.L.!5e0!3m2!1ses-419!2smx!4v1492034767044" width="1000" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></div>

</div>  <br><br>



<section class="con">
  <div class="condiv"><br><br>
<center><h2>Contacto</h2></center><br><br>
  </div>
</section>

<section class="divcontact1"id="bloque45">
<section><div class="row">
  <div class="col-md-4"><h2 class="textcon">Agreganos</h2><span class="icon-facebook iconos2"></span>&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;<span class="icon-instagram iconos2"></span></div>
  <div class="col-md-4"><h3 class="textcon">WhatsApp 8111819744 y 8180268306</h3><span class="icon-whatsapp iconos2"></span></div>
  <div class="col-md-4"><h3 class="textcon">info@anamarbeautylounge.com</h3><span class="icon-mail2 iconos2"></span></div>

</div></section>
<div class="row" >
<div class="col-md-3">
</div>
  <div class="col-md-6"><h2>Ponte en contacto con nosotras</h2><h4>Responderemos inmediatamente<br>pregunta por nuestras promociones, dudas y mas</h4>
<form name="efren-martinez" id="efren-martinez-form" method="post" action="contact.php">
    <div id="wrapping" class="clearfix">
      <section id="aligned">
      <input type="text" name="name" id="name" placeholder="Nombre" autocomplete="off" tabindex="1" class="txtinput"><br>
      <input type="email" name="email" id="email" placeholder="E-mail" autocomplete="off" tabindex="2" class="txtinput">
    <br>
      <input type="tel" name="telephone" id="telephone" placeholder="WhatsApp (optional)" tabindex="4" class="txtinput"><br>
      <textarea name="message" id="message" placeholder="Mensaje" tabindex="5" class="txtblock"></textarea>
      </section>
      <center></center><section id="aside" class="clearfix">
        <section id="recipientcase">
        <center><h3>Asunto:</h3>
          <select id="asunto" name="recipient" tabindex="6" class="selmenu">
              <option value="Maquillaje">Maquillaje</option>
              <option value="Peinados">Peinados</option>
              <option value="Novias">Novias</option>
              <option value="Microblading">Microblading</option>
              <option value="Pestañas">Pestañas</option>
              <option value="otros">Otros</option>
          </select>
        </section>
        <section id="buttons">

      <center><br>
          <center><div class="row">
          <div class="col-xs-12 col-md-4">
          </div>
  <div class="col-xs-12 col-md-4"><input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Reset">
<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Enviar">
      <br style="clear:both;"></div>
      </center>

      <div class="col-xs-12 col-md-4">
      </div>
  </div>
    </section>
<section class="con">
  <div class="condiv"><br><br>
<center><h2>Colaboradores</h2></center><br><br>
  </div>
</section>

<br>
<div class="container-fluid custom container-fluid-galeria">
    <div class="main">
        <ul id="og-grid" class="og-grid hide-bullets row">
			<?=$gallery?>
        </ul>
        <center><a class="btn btn-mini" href="contacto">Contactar</a></center><br>
    </div>
</div>

      </section>



<style type="text/css">
  #efren-martinez-form { box-sizing: border-box;
}
#efren-martinez-form .txtinput { display: block; border-style: solid; border-width: 2px; border-color: gray; margin-bottom: 20px; font-size: 1.2em; padding:2px 8px 10px 55px; width: 90%; color: #777; font-family: "Raleway", sans-serif; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1) inset; transition: border 0.15s linear 0s, box-shadow 0.15s linear 0s, color 0.15s linear 0s;
}
#efren-martinez-form .txtinput:focus {  color: #333; border-color: rgba(41, 92, 161, 0.4); box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1) inset, 0 0 3px rgba(41, 92, 161, 0.6); outline: 0 none;
}
#efren-martinez-form input#name { background: #fff url('user.png') 5px 4px no-repeat;
}
#efren-martinez-form input#email { background: #fff url('email.png') 5px 4px no-repeat;
}
#efren-martinez-form input#website { background: #fff url('website.png') 5px 4px no-repeat;
}
#efren-martinez-form input#telephone { background: #fff url('phone.png') 5px 4px no-repeat;
}
#efren-martinez-form textarea { display: block; font-family: "Raleway", sans-serif; border-style: solid; border-width: 1px; border-color: #dedede; margin-bottom: 15px; font-size: 1.2em; padding: 11px 25px; padding-left: 55px; width: 86%; height: 120px; color: #777; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1) inset; transition: border 0.15s linear 0s, box-shadow 0.15s linear 0s, color 0.15s linear 0s;
}
#efren-martinez-form textarea:focus { color: #333; border-color: rgba(41, 92, 161, 0.4); box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1) inset, 0 0 3px rgba(40, 90, 160, 0.6); outline: 0 none;
}
#efren-martinez-form textarea.txtblock { background: #fff url('speech.png') 5px 4px no-repeat;
}
#efren-martinez-form #aligned { box-sizing: border-box;  float: left;  width: 450px; margin-right: 50px;
}
#efren-martinez-form #aside { float: left; width: 250px; text-align:left; padding: 0; box-sizing: border-box;
}
#wrapping { width: 100%; box-sizing: border-box;
}
span.radiobadge { display: block; margin-bottom: 8px;
}
span.radiobadge label { font-size: 1.2em; padding-bottom: 4px;
 }
select.selmenu { font-size: 17px; color: #676767; padding: 9px !important; border: 1px solid #aaa; width: 200px;
}
/** custom buttons **/
#buttons { display: block;  padding-top: 10px; font-family: "Raleway", sans-serif; padding-bottom:20px;
}
#buttons #resetbtn { display: block; float: right; color: #515151; text-shadow: -1px 1px 0px #fff; margin-right: 20px; height: 2em; padding: 0 1em; outline: 0; font-weight: bold; font-size: 1em; white-space: nowrap; word-wrap: normal; vertical-align: middle; cursor: pointer; border-radius: 2px; background-color: #fff;
}
#buttons #resetbtn:hover { text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); color: #818181; background-color: #fff;
}
#buttons #submitbtn { display: block; float: left; height: 2em; padding: 0 1em; border: 1px solid; outline: 0; font-weight: bold; font-size: 1em; color:  #fff; text-shadow: 0px 1px 0px #222; white-space: nowrap; word-wrap: normal; vertical-align: middle; cursor: pointer; border-radius: 2px; border-radius: 2px; border-color: #5e890a #5e890a #000; box-shadow: inset 0 1px 0 rgba(256,256,256, .35); background-color: rgb(44,214,31);
}
#buttons #submitbtn:hover, #buttons #submitbtn:active { border-color: #7c9826 #7c9826 #000; color: #000; box-shadow: inset 0 1px 0 rgba(256,256,256,0.4),0 1px 3px rgba(0,0,0,0.5); background: rgb(228,237,189);
}
/** @group clearfix **/
.clearfix:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0; }
html[xmlns] .clearfix { display: block; }
* html .clearfix { height: 1%; }
/** all devices and responsive browser windows **/
@media screen and (max-width: 800px) {
  #container { width: 100%;
  }
  #efren-martinez-form #aligned { width: 100%; float: none; display: block;
  }
  #efren-martinez-form #aside { width: 100%; display: block; float: none;
  }
  #efren-martinez-form .txtinput, #efren-martinez-form textarea { width: 85%;
  }
  #prioritycase { float: left; display: block;
  }
  #recipientcase { float: left; display: block; margin-right: 55px;
  }
}
/* smaller screen dropoff *******/
@media only screen and (max-width: 550px) {
  #efren-martinez-form .txtinput, #efren-martinez-form textarea { width: 80%;
  }
}
/* iPhone Landscape ********/
@media only screen and (max-width: 480px) {
  select.selmenu { width: 190px;
  }
}
/* iPhone portrait *******/
@media only screen and (max-width: 320px) {
  #efren-martinez-form .txtinput, #efren-martinez-form textarea { width: 70%;
  }
  #efren-martinez-form #aligned { overflow: hidden;
  }
  select.selmenu { width: 160px;
  }
  #recipientcase { margin-right: 30px;
  }
}
</style>

</section></center>




</section>

