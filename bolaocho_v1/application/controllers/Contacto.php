<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('contenido_model');
		$this->load->helper('admin_content');
	}

	public function index()
	{
		$header['navbar'] = '';
		$data = array();
		$seccion = $this->contenido_model->get_contenido(PAGINA_CONTACTO, 1);
        if($seccion){
            $data['data_section1'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,'param3' => $seccion->css);
        }

		$seccion = $this->contenido_model->get_contenido(PAGINA_CONTACTO, 2);
        if($seccion){
            $data['data_section2'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,'param3' => $seccion->css);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 4);
        if($seccion){
            $data['data_section4'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text);
        }

		$this->load->view('front/default/head');
		$this->load->view('front/default/header', $header);
		$this->load->view('front/contacto', $data);
		$this->load->view('front/default/footer');
			
	}

	public function contactanos(){
		$nombre = (isset($_POST['Nombre']))? $_POST['Nombre'] : '';
		$correo = (isset($_POST['email']))? $_POST['email'] : '';
		$telefono = (isset($_POST['Telefono']))? $_POST['Telefono'] : '';
		$asunto = (isset($_POST['asunto']))? $_POST['asunto'] : 'Comentarios';
		$mensaje = (isset($_POST['Mensaje']))? $_POST['Mensaje'] : '';
		$edad = (isset($_POST['Edad']))? '\n Edad: ' . $_POST['Edad'] : ' ';
		$genero = (isset($_POST['Genero']))? '\n Genero: ' . $_POST['Genero'] : ' ';
		$adjunto = (isset($_POST['adjunto']))? $_POST['adjunto'] : ' ';
		
		//guardado db
		$data = array(
			'nombre' => $nombre,
			'correo' => $correo,
			'telefono' => $telefono,
			'edad' => $edad,
			'asunto' => $asunto,
			'genero' => $genero,
			'mensaje' => $mensaje,
			'adjunto' => $adjunto,
		);
		$this->contenido_model->set_contenido_correos($data);


		$formcontent=" De: $nombre \n $edad  $genero Correo: $correo \n Telefono: $telefono  \n Asunto: $asunto \n Mensaje: $mensaje";
		$recipient = "osw.vaz@gmail.com";
		$mailheader = "From: ". $correo." \r\n";
		unset($_POST);
		mail($recipient, $asunto, $formcontent, $mailheader) or die("Error!");
		echo "Gracias" . " " . "<meta http-equiv='refresh' content='3;URL=bolaocho.com.mx' />
		<link rel='stylesheet' type='text/css' href='style.css' />
		<!-- incluimos nuestro mensaje de agradecimiento -->
		<body>
		<h2>Nos Comunicaremos con usted lo antes posible. ahora sera redireccionado a la pagina principal. Muchas Gracias.</h2>
		</body>";
		
         }
}

