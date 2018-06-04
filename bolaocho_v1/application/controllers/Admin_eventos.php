<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_eventos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('contenido_model');
		$this->load->helper('admin_content');
		if(!$this->session->userdata('logueado'))
			redirect('admin');
	}

	public function index()
	{
		$sidebar['sidebar_inicio'] = 'class = "active"';
		$sidebar['nombrepagina'] = 'home';
		$head['dropzone'] = 'true';
		$data['text_1']	= $data['text_2'] = $data['text_3'] = $data['text_4'] = '';
		$data['img_1'] = $data['img_2'] = $data['img_3'] = $data['img_4'] = '';

		$seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 1);
		if($seccion){
			$data['img_1'] = $seccion->background_img;
		}
		$seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 2);
		if($seccion){
			$data['text_2'] = $seccion->text;
			$data['img_2'] = $seccion->background_img;
		}
		$seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 3);
		if($seccion){
			$data['text_3'] = $seccion->text;
			$data['img_3'] = $seccion->background_img;
		}
		$seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 4);
		if($seccion){
			$data['text_4'] = $seccion->text;
			$data['img_4'] = $seccion->background_img;
		}

		//load fronto
		$head['css'] = $this->get_extra_css($data);
		$this->load->view('back_office/default/head',$head);
		$this->load->view('back_office/default/header');
		$this->load->view('back_office/default/sidebar', $sidebar);
		$this->load->view('back_office/eventos', $data);
		$this->load->view('back_office/default/footer');
	}

	public function actualizar(){
		$datos = upload_image(PAGINA_INICIO, $_POST['seccion'], "inicio", "img/fondos/");
		$query = $this->contenido_model->set_contenido(PAGINA_INICIO, $_POST['seccion'], $datos);
		unset($_POST);
	}

	function get_extra_css($data){
		$css= '
			#inicio_sec_1 {background-image: url("'. base_url($data["img_1"]).'");}
			#inicio_sec_2 {background-image: url("'. base_url($data["img_2"]).'");}
			#inicio_sec_3 {background-image: url("'. base_url($data["img_3"]).'");}
			#inicio_sec_4 {background-image: url("'. base_url($data["img_4"]).'");}
			.TableInner {
				display: table-cell;
				vertical-align: middle;
				text-align: center;
			}
			.mainTable_image, .mainTable_button {
				display: table;
				height: 290px;
				width: 100%;
			}
			.ghost-button-thick-border {
				display: inline-block;
				font-weight: bold;
				padding: 5px;
				color: #fff;
				border: 3px solid #fff;
				text-align: center;
				outline: none;
			}
			.tex3 {
				font-family: "Oxygen", sans-serif;
				color: #88EBBF;
				font-size: 20px;
			}

			.bloque01 {
				margin-top: 0px;
				width: 100%;
					background: rgba(0, 0, 0, 0.5);
			}

			.selectionTable {
				display: table;
				height: 400px;
				width: 100%;
			}
			.diventre12 {
				width: 100%;
				height: 120px;
				background-color: rgba(20,19,17,0.6);
			}';
		return $css;
	}
}
