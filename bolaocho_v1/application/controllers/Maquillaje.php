<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maquillaje extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('contenido_model');
		$this->load->helper('admin_content');
	}

	public function index()
	{
		if(!$this->contenido_model->load_page(PAGINA_MANTENIMIENTO)){
			if($this->contenido_model->load_page(PAGINA_MAQUILLAJE)){
				$data['text_1']	= $data['text_2'] = '';
				$data['img_1'] = $data['img_2'] = '';
				$data['gallery'] = '';
				$header['navbar'] = '';
				$head['title'] = 'Anamar BL-Maquillaje';

				$seccion = $this->contenido_model->get_contenido(PAGINA_MAQUILLAJE, 1);
				if($seccion){
					$data['text_1'] = $seccion->text;
					$data['img_1'] = $seccion->background_img;
				}
				$seccion = $this->contenido_model->get_contenido(PAGINA_MAQUILLAJE, 2);
				if($seccion){
					$data['text_2'] = $seccion->text;
					$data['img_2'] = $seccion->background_img;
				}

				$seccion = $this->contenido_model->get_contenido(PAGINA_MAQUILLAJE, 3);
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
				$this->load->view('front/maquillaje', $data);
				$this->load->view('front/default/footer');
			}else{
				redirect(base_url());
			}
		}else{
			redirect('mantenimiento');
		}
	}
}
