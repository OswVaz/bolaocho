<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('contenido_model');
		$this->load->helper('admin_content');
	}

	public function index()
	{
        $data = array();
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 1);
        if($seccion){
            $data['data_section1'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img, 'param3' => $seccion->css);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 2);
        if($seccion){
            $data['data_section2'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 3);
        if($seccion){
            $data['data_section3'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
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
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 8);
        if($seccion){
            $data['data_section8'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 9);
        if($seccion){
            $data['data_section9'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 10);
        if($seccion){
            $data['data_section10'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text,
                                'param5' => $seccion->html);
        }

        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 11);
        if($seccion){
            $data['data_section11'] = array('param1' => $seccion->nombre);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 12);
        if($seccion){
            $data['data_section12'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text,
                                'param5' => $seccion->html);
        }

        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 99);
        if($seccion){
            $fotos = $seccion->background_img;
            $data['gallery'] = gallery_front($fotos);
        }
        $header = array();
        $head = array();
		$this->load->view('front/default/head',$head);
		$this->load->view('front/default/header', $header);
		$this->load->view('front/menu', $data);
		$this->load->view('front/default/footer');
	}
}
