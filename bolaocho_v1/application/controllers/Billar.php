<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billar extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('contenido_model');
		$this->load->helper('admin_content');
	}

	public function index()
	{
		$header['navbar'] = '';
        $head['dropzone'] = 'false';
        $head['pagina'] = 'admin_billar'; // archivo js
 		$data = array();
        $seccion = $this->contenido_model->get_contenido(PAGINA_BILLAR, 1);
        if($seccion){
            $data['data_section1'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,'param3' => $seccion->css);
        }

        $seccion = $this->contenido_model->get_contenido(PAGINA_BILLAR, 2);
        if($seccion){
            $data['data_section2'] = array('param1' => $seccion->nombre);
        }
         
        $seccion = $this->contenido_model->get_contenido(PAGINA_INICIO, 4);
        if($seccion){
            $data['data_section3'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,
                                'param3' => $seccion->css, 'param4' => $seccion->text);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_BILLAR, 99);
        if($seccion){
            $fotos = $seccion->background_img;
            $data['gallery'] = gallery_front_billar($fotos);
        }
 
		$this->load->view('front/default/head');
		$this->load->view('front/default/header', $header);
		$this->load->view('front/billar', $data);
		$this->load->view('front/default/footer');
			
	}
    public function actualizar(){
        $id_pagina = PAGINA_BILLAR;
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
}
