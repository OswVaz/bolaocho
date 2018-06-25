<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_servicios extends CI_Controller {

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
        $head['pagina'] = 'admin_servicios'; // archivo js
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
   
        $this->load->view('back_office/default/head',$head);
        $this->load->view('back_office/default/header');
        $this->load->view('back_office/default/sidebar', $sidebar);
        $this->load->view('back_office/servicios',$data);
    }

    public function actualizar(){
        $id_pagina = PAGINA_SERVICIOS;
        $seccion = (isset($_POST['seccion']))? $_POST['seccion'] : '' ;
        $nombrepagina = (isset($_POST['page_name']))? $_POST['page_name'] : '' ;
        $param1 = (isset($_POST['param1']))? $_POST['param1'] : '' ;
        if(isset($_FILES['img_fondo4']))
            $param1 = upload_image_manual($id_pagina, $seccion, $nombrepagina, $_FILES['img_fondo4']);

        $param2 = (isset($_POST['param2']))? $_POST['param2'] : '' ;
        $param3 = (isset($_POST['param3']))? $_POST['param3'] : '' ;
        
        if(isset($_FILES['img_fondo']))
            $param3 = upload_image_manual($id_pagina, $seccion, $nombrepagina, $_FILES['img_fondo']);
        
        $param4 = (isset($_POST['param4']))? $_POST['param4'] : '' ;
        if(isset($_FILES['img_fondo1']))
            $param4 = upload_image_manual($id_pagina, $seccion, $nombrepagina, $_FILES['img_fondo1']);

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
    }
}
