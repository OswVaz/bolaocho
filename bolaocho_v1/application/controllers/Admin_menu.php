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
        $head['dropzone'] = 'true';
        $head['pagina'] = 'admin_menu'; // archivo js
        
 		$data = array();
        $data['gallery_dropzone'] = $data['gallery'] = '';
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 99);
        if($seccion){
            $fotos = $seccion->background_img;
            $data['gallery_dropzone'] = draw_hidden_gallery_in_dropzone($fotos);
            $data['gallery'] = draw_previus_img($fotos);
        }

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
        $param8 = (isset($_POST['param8']))? $_POST['param8'] : '' ;
        $param9 = (isset($_POST['param9']))? $_POST['param9'] : '' ;
       
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
            'extras2' => $param8,
            'extras3' => $param9,
        );
        $query = $this->contenido_model->set_contenido($data);
        echo json_encode($data);
        unset($_POST);
    }
    public function upload_multiple_images(){
        $datos = upload_multiple_images(PAGINA_MENU, $_POST['seccion'], "menu", "img/fondos/");
        $data =array('id_pagina' => PAGINA_MENU,'seccion' => 99,'nombre' => '','background_img' => $datos['background_img'],'css' => '','text' => '','html' => '','extra' => '','extras' => '','extras2' => '','extras3' => '');
        $query = $this->contenido_model->set_contenido($data);
        unset($_POST);
    }
    public function delete_pictures(){
        $data = $this->contenido_model->get_contenido(PAGINA_MENU, 99);
        $datos = delete_images($data->background_img);
        $data =array('id_pagina' => PAGINA_MENU,'seccion' => 99,'nombre' => '','background_img' => $datos['background_img'],'css' => '','text' => '','html' => '','extra' => '','extras' => '','extras2' => '','extras3' => '');
        $query = $this->contenido_model->set_contenido($data);
        unset($_POST);
    }
    public function refresh_hidde_gallery(){
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 4);
        if($seccion){
            $fotos = $seccion->background_img;
            echo draw_hidden_gallery_in_dropzone($fotos);
        }
    }
    public function refresh_gallery(){
        $seccion = $this->contenido_model->get_contenido(PAGINA_MENU, 4);
        if($seccion){
            $fotos = $seccion->background_img;
            echo draw_previus_img($fotos);
        }
    }
 
}