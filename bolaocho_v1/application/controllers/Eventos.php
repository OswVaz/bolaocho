<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('contenido_model');
		$this->load->helper('admin_content');
	}

	public function index()
	{
		$header['navbar'] = '';
		$data = array();
		$seccion = $this->contenido_model->get_contenido(PAGINA_EVENTOS, 1);
        if($seccion){
            $data['data_section1'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,'param3' => $seccion->css);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_EVENTOS, 2);
        $data['data_section2'] = '';
        if($seccion){
            $data['data_section2'] = array('param1' => $seccion->nombre);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_EVENTOS, 3);
        if($seccion){
            $data['data_section3'] = array('param1' => $seccion->nombre);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_EVENTOS, 4);
        if($seccion){
            $data['data_section44'] = array('param1' => $seccion->nombre);
        }
		$seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 4);
        if($seccion){
            $data['data_section4'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text, 
                                'param5' => $seccion->html, 'param6' => $seccion->extra,'param7' => $seccion->extras,'param8' => $seccion->extras2
                                ,'param9' => $seccion->extras3);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 5);
        if($seccion){
            $data['data_section5'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text,
                                'param5' => $seccion->html, 'param6' => $seccion->extra,'param7' => $seccion->extras,'param8' => $seccion->extras2
                                ,'param9' => $seccion->extras3);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 6);
        if($seccion){
            $data['data_section6'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text,
                                'param5' => $seccion->html, 'param6' => $seccion->extra,'param7' => $seccion->extras,'param8' => $seccion->extras2
                                ,'param9' => $seccion->extras3);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 7);
        if($seccion){
            $data['data_section7'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text,
                                'param5' => $seccion->html, 'param6' => $seccion->extra,'param7' => $seccion->extras,'param8' => $seccion->extras2
                                ,'param9' => $seccion->extras3);
        }
		$this->load->view('front/default/head');
		$this->load->view('front/default/header', $header);
		$this->load->view('front/eventos', $data);
		$this->load->view('front/default/footer');
		
	}
}
