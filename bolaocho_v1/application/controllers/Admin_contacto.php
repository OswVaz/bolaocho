<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_contacto extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('contenido_model');
		$this->load->helper('admin_content');
		if(!$this->session->userdata('logueado'))
			redirect('admin');
	}

	public function index()
	{
		
		$head['dropzone'] = 'true';
		$data = array();
		$head['pagina'] = 'admin_contacto'; // archivo js
		$seccion = $this->contenido_model->get_contenido(PAGINA_CONTACTO, 1);
        if($seccion){
            $data['data_section1'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,'param3' => $seccion->css);
        }

		$seccion = $this->contenido_model->get_contenido(PAGINA_CONTACTO, 2);
        if($seccion){
            $data['data_section2'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,'param3' => $seccion->css);
        }

        $seccion = $this->contenido_model->get_contenido_vacantes();
        $data['tabla'] = $this->tabla_vacantes($seccion);
 
		$this->load->view('back_office/default/head', $head);
		$this->load->view('back_office/default/header');
		$this->load->view('back_office/default/sidebar');
		$this->load->view('back_office/contacto',$data);
		$this->load->view('back_office/default/footer');
	}

  public function actualizar(){
        $id_pagina = PAGINA_CONTACTO;
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
	
public function vacante_nueva(){
        $datos['id'] = (isset($_POST['id']))? $_POST['id'] : '' ;
        $datos['vacante'] = (isset($_POST['vacante']))? $_POST['vacante'] : '' ;
        $datos['descripcion'] = (isset($_POST['descripcion']))? $_POST['descripcion'] : '' ;
        $datos['horarios'] = (isset($_POST['horarios']))? $_POST['horarios'] : '' ;
        $datos['estatus'] = (isset($_POST['estatus']))? $_POST['estatus'] : '' ;

        
         $data = array(
            'id' => $datos['id'],
            'vacante' => $datos['vacante'],
            'descripcion' => $datos['descripcion'],
            'horarios' => $datos['horarios'],
            'estatus' => $datos['estatus'],
        );
        $query = $this->contenido_model->set_contenido_vacantes($data);
        $seccion = $this->contenido_model->get_contenido_vacantes();
        if($seccion){
            echo  $this->tabla_vacantes($seccion);
        }else{
            echo "false";
        }
        unset($_POST);
    }
    public function eliminar_vacantes(){
        $datos['id'] = (isset($_POST['id']))? $_POST['id'] : '' ;
        $query = $this->contenido_model->eliminar_vacantes($datos['id']);
        $seccion = $this->contenido_model->get_contenido_vacantes();
        
        echo  $this->tabla_vacantes($seccion);
        unset($_POST);
    }
    function tabla_vacantes($data){
        $html = '<tr class = "padre"><td><input type = "hidden" class = "id" value = ""><input type="text" class="form-control vacante"></td><td><input type="text" class="form-control descripcion"></td><td><input type="text" class="form-control horarios"></td><td><input type="checkbox" class="estatus"><span>Estatus</span></td><td class="text-center"><button type="button" class="btn btn-success" onclick= "vacante_nueva($(this))"><i class="glyphicon glyphicon-plus"></i></button></td></tr>';
        
        if(is_object($data[0])){
            foreach ($data as $llave) {
                $html .= '<tr class = "padre"><td><input type = "hidden" class = "id" value = "'.$llave->id.'"><input type="text" class="form-control vacante" value = "'.$llave->vacante.'"></td><td><input type="text" class="form-control descripcion" value = "'.$llave->descripcion.'"></td><td><input type="text" class="form-control horarios" value = "'.$llave->horarios.'"></td><td><input type="checkbox" class="estatus" ><span> Estatus</span></td><td class="text-center"><button type="button" class="btn btn-primary" onclick= "vacante_nueva($(this))"><i class="glyphicon glyphicon-floppy-saved"></i></button><button type="button" class="btn btn-danger" onclick= "eliminar_vacantes($(this))"><i class="glyphicon glyphicon-floppy-saved"></i></button></td></tr>';
             }
         }
        return $html;
    }


}
