<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('contenido_model');
		$this->load->helper('admin_content');
	}

	public function index()
	{
		$head['title'] = 'Ven y Disfruta de las mejores Bebidas y Billar en Bola Ocho | Restaurante, Bar y billar';
		$header['navbar'] = '';
 		$data = array();
 		
        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 1);
        if($seccion){
            $data['data_section1'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 2);
        if($seccion){
            $data['data_section2'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 3);
        if($seccion){
            $data['data_section3'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 4);
        if($seccion){
            $data['data_section4'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 5);
        if($seccion){
            $data['data_section5'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text,
                                'param5' => $seccion->html);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 6);
        if($seccion){
            $data['data_section6'] = array('param1' => $seccion->nombre);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 7);
        if($seccion){
            $data['data_section7'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 8);
        if($seccion){
            $data['data_section8'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 9);
        if($seccion){
            $data['data_section9'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 10);
        if($seccion){
            $data['data_section10'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
        }

        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 11);
        if($seccion){
            $data['data_section11'] = array('param1' => $seccion->nombre);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 12);
        if($seccion){
            $data['data_section12'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 13);
        if($seccion){
            $data['data_section13'] = array('param1' => $seccion->nombre);
        }
		$this->load->view('front/default/head',$head);
		$this->load->view('front/default/header', $header);
		$this->load->view('front/home', $data);
		$this->load->view('front/default/footer');
	}
}
