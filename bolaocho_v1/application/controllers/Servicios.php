<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('contenido_model');
		$this->load->helper('admin_content');
	}

	public function index()
	{
		if(!$this->contenido_model->load_page(PAGINA_MANTENIMIENTO)){
			if($this->contenido_model->load_page(PAGINA_SERVICIOS)){
				$data['text_1']	= $data['text_2'] = $data['text_3'] = $data['text_4'] = '';
				$data['img_1'] = $data['img_2'] = $data['img_3'] = $data['img_4'] = '';
				$head['title'] = 'Anamar BL-Servicios';
				$header['navbar'] = '';

				$seccion = $this->contenido_model->get_contenido(PAGINA_SERVICIOS, 1);
				if($seccion){
					$data['text_1'] = $seccion->text;
					$data['img_1'] = $seccion->background_img;
				}
				$seccion = $this->contenido_model->get_contenido(PAGINA_SERVICIOS, 2);
				if($seccion){
					$data['text_2'] = $seccion->text;
					$data['img_2'] = $seccion->background_img;
				}
				$seccion = $this->contenido_model->get_contenido(PAGINA_SERVICIOS, 3);
				if($seccion){
					$data['text_3'] = $seccion->text;
					$data['img_3'] = $seccion->background_img;
				}
				$seccion = $this->contenido_model->get_contenido(PAGINA_SERVICIOS, 4);
				if($seccion){
					$data['text_4'] = $seccion->text;
					$data['img_4'] = $seccion->background_img;
				}
				$seccion = $this->contenido_model->get_paginas();
				if($seccion){
					$header['navbar'] = navbar($seccion);
				}
				$this->load->view('front/default/head',$head);
				$this->load->view('front/default/header', $header);
				$this->load->view('front/servicios',$data);
				$this->load->view('front/default/footer');
			}else{
				redirect(base_url());
			}
		}else{
			redirect('mantenimiento');
		}
	}
}
