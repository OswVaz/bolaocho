<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Novias extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('contenido_model');
		$this->load->helper('admin_content');
	}

	public function index()
	{
		if(!$this->contenido_model->load_page(PAGINA_MANTENIMIENTO)){
			if($this->contenido_model->load_page(PAGINA_NOVIAS)){
				$data['text_1']	= $data['text_2'] = $data['text_3']  = '';
				$data['img_1'] = $data['img_2'] = $data['img_3'] = '';
				$data['gallery'] = '';
				$header['navbar'] = '';
				$head['title'] = 'Anamar BL-Novias';

				$seccion = $this->contenido_model->get_contenido(PAGINA_NOVIAS, 1);
				if($seccion){
					$data['text_1'] = $seccion->text;
					$data['img_1'] = $seccion->background_img;
				}
				$seccion = $this->contenido_model->get_contenido(PAGINA_NOVIAS, 2);
				if($seccion){
					$data['text_2'] = $seccion->text;
					$data['img_2'] = $seccion->background_img;
				}
				$seccion = $this->contenido_model->get_contenido(PAGINA_NOVIAS, 3);
				if($seccion){
					$data['text_3'] = $seccion->text;
					$data['img_3'] = $seccion->background_img;
				}
				$seccion = $this->contenido_model->get_contenido_new_gallery(PAGINA_NOVIAS);
				if($seccion){
					$data['gallery'] = gallery_front_new_gallery($seccion);
				}
				$seccion = $this->contenido_model->get_paginas();
				if($seccion){
					$header['navbar'] = navbar($seccion);
				}

				$this->load->view('front/default/head',$head);
				$this->load->view('front/default/header', $header);
				$this->load->view('front/novias',$data);
				$this->load->view('front/default/footer');
			}else{
				redirect(base_url());
			}
		}else{
			redirect('mantenimiento');
		}
	}
}
