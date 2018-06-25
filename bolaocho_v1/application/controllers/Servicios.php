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
 		$data = array();
        $seccion = $this->contenido_model->get_contenido(PAGINA_SERVICIOS, 1);
        if($seccion){
            $data['data_section1'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
        						'param3' => $seccion->css);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_SERVICIOS, 2);
        if($seccion){
            $data['data_section2'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_SERVICIOS, 3);
        if($seccion){
            $data['data_section3'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_SERVICIOS, 4);
        if($seccion){
            $data['data_section4'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_SERVICIOS, 5);
        if($seccion){
            $data['data_section5'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text,);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_SERVICIOS, 6);
        if($seccion){
            $data['data_section6'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text,);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_SERVICIOS, 7);
        if($seccion){
            $data['data_section7'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text,);
        }
        $header = array();
        $head = array();
		$this->load->view('front/default/head',$head);
		$this->load->view('front/default/header', $header);
		$this->load->view('front/servicios',$data);
		$this->load->view('front/default/footer');
	}
}
