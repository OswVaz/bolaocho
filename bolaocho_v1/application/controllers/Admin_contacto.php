<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_contacto extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('contenido_model');
		$this->load->helper('admin_content');
		if(!$this->session->userdata('logueado'))
			redirect('admin');
	}

	public function index()
	{
		$slider['sidebar_contacto'] = 'class = "active"';
		$slider['nombrepagina'] = 'contacto';
		$head['dropzone'] = 'true';
		$data['img_1'] = $data['gallery'] = $da['gallery_dropzone'] = '';
		$fotos = "";
		$seccion = $this->contenido_model->get_contenido(PAGINA_CONTACTO, 1);
		if($seccion)
			$data['img_1'] = $seccion->background_img;

		$seccion = $this->contenido_model->get_contenido_new_gallery(PAGINA_CONTACTO);
		if($seccion){
			$data['gallery'] = images_helper($seccion);
		}

		$this->load->view('back_office/default/head', $head);
		$this->load->view('back_office/default/header');
		$this->load->view('back_office/default/sidebar', $slider);
		$this->load->view('back_office/contacto',$data);
		$this->load->view('back_office/default/footer');
	}
	public function actualizar(){
		$datos = upload_image(PAGINA_CONTACTO, $_POST['seccion'], "contacto", "img/fondos/");
		$query = $this->contenido_model->set_contenido(PAGINA_CONTACTO, $_POST['seccion'], $datos);
		unset($_POST);
	}

	public function upload_multiple_images(){
		$datos = upload_multiple_images(PAGINA_CONTACTO, $_POST['seccion'], "contacto", "img/fondos/");
		$query = $this->contenido_model->set_contenido(PAGINA_CONTACTO, $_POST['seccion'], $datos);
		unset($_POST);
	}
	public function delete_pictures(){
		$data = $this->contenido_model->get_contenido(PAGINA_CONTACTO, 2);
		$datos = delete_images($data->background_img);
		$query = $this->contenido_model->set_contenido(PAGINA_CONTACTO, 2, $datos);
		unset($_POST);
	}
	public function refresh_hidde_gallery(){
		$seccion = $this->contenido_model->get_contenido(PAGINA_CONTACTO, 2);
		if($seccion){
			$fotos = $seccion->background_img;
			echo draw_hidden_gallery_in_dropzone($fotos);
		}
	}
	public function refresh_gallery(){
		$seccion = $this->contenido_model->get_contenido(PAGINA_CONTACTO, 2);
		if($seccion){
			$fotos = $seccion->background_img;
			echo draw_previus_img($fotos);
		}
	}
		function ajax_handle(){
		if ($_POST['opt'] == 'save'){
			$datos = upload_image_new(PAGINA_CONTACTO, 4, "contacto", "img/fondos/");
			$query = $this->contenido_model->set_contenido_img(PAGINA_CONTACTO, $datos['nombre'], $datos);

			$seccion = $this->contenido_model->get_contenido_new_gallery(PAGINA_CONTACTO,$datos['nombre']);
			$array = array();
			if($seccion){
				foreach($seccion as $key)
					$array[] = array('img' => $key->background_img,'title'=>$key->css, 'url'=>$key->html, 'desc'=>$key->text);
			}
			echo json_encode($array);
		}
		if($_POST['opt'] == 'del'){
			$name = explode(base_url(), $_POST['back_img']);
			$query = $this->contenido_model->delete_img_gallery(PAGINA_CONTACTO, $name[1]);
		}

		unset($_POST);
		unset($_Files);
	}
}
