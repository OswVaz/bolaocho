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
		if(!$this->contenido_model->load_page(PAGINA_MANTENIMIENTO)){
			if($this->contenido_model->load_page(PAGINA_CONTACTO)){
				$data['gallery'] = '';
				$data['img_1'] = '';
				$head['title'] = 'Anamar BL-Contacto';
				$header['navbar'] = '';

				$seccion = $this->contenido_model->get_contenido(PAGINA_CONTACTO, 1);
				if($seccion)
					$data['img_1'] = $seccion->background_img;

				$seccion = $this->contenido_model->get_contenido(PAGINA_CONTACTO, 2);
				if($seccion){
					$fotos = $seccion->background_img;
					$data['gallery'] = gallery_front($fotos);
				}
				$seccion = $this->contenido_model->get_paginas();
				if($seccion){
					$header['navbar'] = navbar($seccion);
				}
				$this->load->view('front/default/head',$head);
				$this->load->view('front/default/header', $header);
				$this->load->view('front/contacto', $data);
				$this->load->view('front/default/footer');
			}else{
				redirect(base_url());
			}
		}else{
			redirect('mantenimiento');
		}
	}

	public function contactanos(){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['telephone'];
		$asunto = $_POST['asunto'];
		$message = $_POST['message'];
		$formcontent=" De: $name \n Telefono: $phone  \n Asunto: $asunto \n Mensaje: $message";
		$recipient = "osw.vaz@gmail.com";
		$subject = "Nuevo contacto de Sitio web";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
		echo "Gracias" . " " . "<meta http-equiv='refresh' content='3;URL=http://pruebas.anamarbeautylounge.com/' />
		<link rel='stylesheet' type='text/css' href='style.css' />
		<!-- incluimos nuestro mensaje de agradecimiento -->
		<body>
		<h2>Nos Comunicaremos con usted lo antes posible. ahora sera redireccionado a la pagina principal. Muchas Gracias.</h2>
		</body>";
}
}
