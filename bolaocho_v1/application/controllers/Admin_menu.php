<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_menu extends CI_Controller {

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
        $head['dropzone'] = 'false';
        $head['pagina'] = 'admin_menu'; // archivo js
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
                                'param5' => $seccion->html, 'param6' => $seccion->extra);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 5);
        if($seccion){
            $data['data_section5'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text,
                                'param5' => $seccion->html, 'param6' => $seccion->extra);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 6);
        if($seccion){
            $data['data_section6'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text,
                                'param5' => $seccion->html, 'param6' => $seccion->extra);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 7);
        if($seccion){
            $data['data_section7'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text,
                                'param5' => $seccion->html, 'param6' => $seccion->extra, 'param7' => $seccion->extras);
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
 
        $head['css'] = '';
        $this->load->view('back_office/default/head',$head);
        $this->load->view('back_office/default/header');
        $this->load->view('back_office/default/sidebar', $sidebar);
        $this->load->view('back_office/menu',$data);
    }

	public function actualizar(){
        $id_pagina = PAGINA_MENU;
        $seccion = (isset($_POST['seccion']))? $_POST['seccion'] : '' ;
        $nombrepagina = (isset($_POST['page_name']))? $_POST['page_name'] : '' ;
        $param1 = (isset($_POST['param1']))? $_POST['param1'] : '' ;
        if(isset($_FILES['img_fondo']))
            $param1 = upload_image_manual($id_pagina, $seccion, $nombrepagina, $_FILES['img_fondo']);

        $param2 = (isset($_POST['param2']))? $_POST['param2'] : '' ;
        $param3 = (isset($_POST['param3']))? $_POST['param3'] : '' ;
        $param4 = (isset($_POST['param4']))? $_POST['param4'] : '' ;
        $param5 = (isset($_POST['param5']))? $_POST['param5'] : '' ;
        $param6 = (isset($_POST['param6']))? $_POST['param6'] : '' ;
        $param7 = (isset($_POST['param7']))? $_POST['param7'] : '' ;
       
        $data =array(
            'id_pagina' => $id_pagina,
            'seccion' => $seccion,
            'nombre' => $param1,
            'background_img' => $param2,
            'css' => $param3,
            'text' => $param4,
            'html' => $param5,
            'extra' => $param6,
            'extras' => $param7,
        );
        $query = $this->contenido_model->set_contenido($data);
        echo json_encode($data);
        unset($_POST);
    }
 
}