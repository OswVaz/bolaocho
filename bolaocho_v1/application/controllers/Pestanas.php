<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pestanas extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('contenido_model');
		$this->load->helper('admin_content');
	}

	public function index()
	{
		if(!$this->contenido_model->load_page(PAGINA_MANTENIMIENTO)){
			if($this->contenido_model->load_page(PAGINA_PESTANAS)){
				$data['text_1']	= $data['text_2'] = '';
				$data['img_1'] = $data['img_2'] = '';
				$data['gallery'] = '';
				$header['navbar'] = '';
				$head['title'] = 'Anamar BL-Pestañas';

				$seccion = $this->contenido_model->get_contenido(PAGINA_PESTANAS, 1);
				if($seccion){
					$data['text_1'] = $seccion->text;
					$data['img_1'] = $seccion->background_img;
				}
				$seccion = $this->contenido_model->get_contenido(PAGINA_PESTANAS, 2);
				if($seccion){
					$data['text_2'] = $seccion->text;
					$data['img_2'] = $seccion->background_img;
				}

				$seccion = $this->contenido_model->get_contenido(PAGINA_PESTANAS, 3);
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
				$this->load->view('front/pestañas', $data);
				$this->load->view('front/default/footer');
			}else{
				redirect(base_url());
			}
		}else{
			redirect('mantenimiento');
		}
	}
}
