<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model('contenido_model');
		// $this->load->helper('admin_content');
	}

	public function index()
	{
		// if(!$this->contenido_model->load_page(PAGINA_MANTENIMIENTO)){
		// 	if($this->contenido_model->load_page(PAGINA_INICIO)){
				$data['text_1']	= $data['text_2'] = $data['text_3'] = $data['text_4'] = $data['text_5'] = '';
				$data['img_1'] = $data['img_2'] = $data['img_3'] = $data['img_4'] = $data['img_5'] = '';
				$head['title'] = 'Anamar BL';
				$header['navbar'] = '';
		// 		$seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 1);
		// 		if($seccion){
		// 			$data['text_1'] = $seccion->text;
		// 			$data['img_1'] = $seccion->background_img;
		// 		}
		// 		$seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 2);
		// 		if($seccion){
		// 			$data['text_2'] = $seccion->text;
		// 			$data['img_2'] = $seccion->background_img;
		// 		}
		// 		$seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 3);
		// 		if($seccion){
		// 			$data['text_3'] = $seccion->text;
		// 			$data['img_3'] = $seccion->background_img;
		// 		}
		// 		$seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 4);
		// 		if($seccion){
		// 			$data['text_4'] = $seccion->text;
		// 			$data['img_4'] = $seccion->background_img;
		// 		}
		// 		$estatus = 0;
		// 		$seccion = $this->contenido_model->get_contenido(PAGINA_PUBLICIDAD, 1);
		// 		if($seccion){
		// 			$data['img_5'] = $seccion->background_img;
		// 			$data['text_5'] = $seccion->text;
		// 			$estatus = $seccion->css;
		// 		}
		// 		$seccion = $this->contenido_model->get_contenido_default("modal_add");
		// 		if($seccion){
		// 			if($estatus == '1')
		// 			$data['modal_add'] = str_replace('TEXT_1', $data['text_5'], $seccion->html);
		// 		}
		// 		$seccion = $this->contenido_model->get_paginas();
		// 		if($seccion){
		// 			$header['navbar'] = navbar($seccion);
		// 		}
		// 		$head['css'] = $this->get_extra_css($data);
				$this->load->view('front/default/head',$head);
				$this->load->view('front/default/header', $header);
				$this->load->view('front/home', $data);
				$this->load->view('front/default/footer');
			// }else{
		// 		redirect(base_url());
		// 	}
		// }else{
		// 	redirect(base_url());
		// }
	}
	function get_extra_css($data){
		$css= '.add {background-image: url("'. base_url($data["img_1"]).'");}';
		return $css;
	}
}
