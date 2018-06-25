<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_billar extends CI_Controller {

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
        $head['pagina'] = 'admin_billar'; // archivo js
 		$data = array();
        $data['gallery_dropzone'] = $data['gallery'] = '';
        $seccion = $this->contenido_model->get_contenido(PAGINA_BILLAR, 99);
        if($seccion){
            $fotos = $seccion->background_img;
            $data['gallery_dropzone'] = draw_hidden_gallery_in_dropzone($fotos);
            $data['gallery'] = draw_previus_img($fotos);
        }
        $seccion = $this->contenido_model->get_contenido(PAGINA_BILLAR, 1);
        if($seccion){
            $data['data_section1'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img,'param3' => $seccion->css);
        }
 
        $seccion = $this->contenido_model->get_contenido(PAGINA_BILLAR, 2);
        if($seccion){
            $data['data_section2'] = array('param1' => $seccion->nombre, 'param2' => $seccion->background_img);
        } 

        $seccion = $this->contenido_model->get_contenido_jugadores();
        $data['tabla'] = $this->tabla_jugadores($seccion);
        
        $head['css'] = '';
        $this->load->view('back_office/default/head',$head);
        $this->load->view('back_office/default/header');
        $this->load->view('back_office/default/sidebar', $sidebar);
        $this->load->view('back_office/billar',$data);
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
    public function jugador_nuevo(){
        $datos['id'] = (isset($_POST['id']))? $_POST['id'] : '' ;
        $datos['nombre'] = (isset($_POST['nombre']))? $_POST['nombre'] : '' ;
        $datos['lugar'] = (isset($_POST['lugar']))? $_POST['lugar'] : '' ;
        $datos['edad'] = (isset($_POST['edad']))? $_POST['edad'] : '' ;
        $datos['Jornadas'] = (isset($_POST['Jornadas']))? $_POST['Jornadas'] : '' ;
        $datos['JG'] = (isset($_POST['JG']))? $_POST['JG'] : '' ;
        $datos['JP'] = (isset($_POST['JP']))? $_POST['JP'] : '' ;
        $datos['jugados'] = (isset($_POST['jugados']))? $_POST['jugados'] : '' ;
        $datos['JG2'] = (isset($_POST['JG2']))? $_POST['JG2'] : '' ;
        $datos['JP2'] = (isset($_POST['JP2']))? $_POST['JP2'] : '' ;
        $datos['DF'] = (isset($_POST['DF']))? $_POST['DF'] : '' ;
        $datos['puntos'] = (isset($_POST['puntos']))? $_POST['puntos'] : '' ;
        $datos['orden'] = (isset($_POST['orden']))? $_POST['orden'] : '' ;
        
         $data = array(
            'id' => $datos['id'],
            'nombre' => $datos['nombre'],
            'lugar' => $datos['lugar'],
            'edad' => $datos['edad'],
            'Jornadas' => $datos['Jornadas'],
            'JG' => $datos['JG'],
            'JP' => $datos['JP'],
            'jugados' => $datos['jugados'],
            'JG2' => $datos['JG2'],
            'JP2' => $datos['JP2'],
            'DF' => $datos['DF'],
            'puntos' => $datos['puntos'],
            'estatus' => 1,
            'orden' => $datos['orden'],
        );
        $query = $this->contenido_model->set_contenido_jugadores($data);
        $seccion = $this->contenido_model->get_contenido_jugadores();
        if($seccion){
            echo  $this->tabla_jugadores($seccion);
        }else{
            echo "false";
        }
        unset($_POST);
    }
    public function eliminar_jugador(){
        $datos['id'] = (isset($_POST['id']))? $_POST['id'] : '' ;
        $query = $this->contenido_model->eliminar_jugador($datos['id']);
        $seccion = $this->contenido_model->get_contenido_jugadores();
        
        echo  $this->tabla_jugadores($seccion);
        unset($_POST);
    }
    function tabla_jugadores($data){
        $html = '<tr class = "padre"><td><input type = "hidden" class = "id" value = ""><input type="number" class="form-control lugar"></td><td><input type="text" class="form-control nombre"></td><td><input type="number" class="form-control edad"></td><td><input type="text" class="form-control Jornadas"></td><td><input type="text" class="form-control JG"></td><td><input type="text" class="form-control JP"></td><td><input type="text" class="form-control jugados"></td><td><input type="text" class="form-control JG2"></td><td><input type="text" class="form-control JP2"></td><td><input type="text" class="form-control DF"></td><td><input type="text" class="form-control puntos"></td><td><input type="number" class="form-control orden"></td><td class="text-center"><button type="button" class="btn btn-success"  onclick= "guardar_jugadores($(this))"><i class="glyphicon glyphicon-plus"></i></button></td><td></td></tr>';
        if(is_object($data[0])){
            foreach ($data as $llave) {
                $html .= '<tr class = "padre"><td><input type = "hidden" class = "id" value = "'. $llave->id .'"><input type="number" class="form-control lugar" value="'.$llave->lugar.'"></td><td><input type="text" class="form-control nombre" value="'.$llave->nombre.'"></td><td><input type="number" class="form-control edad" value="'.$llave->edad.'"></td><td><input type="text" class="form-control Jornadas" value="'.$llave->Jornadas.'"></td><td><input type="text" class="form-control JG" value="'.$llave->JG.'"></td><td><input type="text" class="form-control JP" value="'.$llave->JP.'"></td><td><input type="text" class="form-control jugados" value="'.$llave->jugados.'"></td><td><input type="text" class="form-control JG2" value="'.$llave->JG2.'"></td><td><input type="text" class="form-control JP2" value="'.$llave->JP2.'"></td><td><input type="text" class="form-control DF" value="'.$llave->DF.'"></td><td><input type="text" class="form-control puntos" value="'.$llave->puntos.'"></td><td><input type="number" class="form-control orden" value="'.$llave->orden.'"></td><td class="text-center"><button type="button" class="btn btn-primary" onclick= "guardar_jugadores($(this))">Guardar</button></td><td><button type="button" class="btn btn-danger" onclick= "eliminar_jugadores($(this))">Eliminar</button></td></tr>';
             }
         }
        return $html;
    }


    public function upload_multiple_images(){
        $datos = upload_multiple_images(PAGINA_BILLAR, $_POST['seccion'], "billar", "img/fondos/");
        $data =array('id_pagina' => PAGINA_BILLAR,'seccion' => 99,'nombre' => '','background_img' => $datos['background_img'],'css' => '','text' => '','html' => '','extra' => '','extras' => '','extras2' => '','extras3' => '');
        $query = $this->contenido_model->set_contenido($data);
        unset($_POST);
    }
    public function delete_pictures(){
        $data = $this->contenido_model->get_contenido(PAGINA_BILLAR, 99);
        $datos = delete_images($data->background_img);
        $data =array('id_pagina' => PAGINA_BILLAR,'seccion' => 99,'nombre' => '','background_img' => $datos['background_img'],'css' => '','text' => '','html' => '','extra' => '','extras' => '','extras2' => '','extras3' => '');
        $query = $this->contenido_model->set_contenido($data);
        unset($_POST);
    }
    public function refresh_hidde_gallery(){
        $seccion = $this->contenido_model->get_contenido(PAGINA_BILLAR, 4);
        if($seccion){
            $fotos = $seccion->background_img;
            echo draw_hidden_gallery_in_dropzone($fotos);
        }
    }
    public function refresh_gallery(){
        $seccion = $this->contenido_model->get_contenido(PAGINA_BILLAR, 4);
        if($seccion){
            $fotos = $seccion->background_img;
            echo draw_previus_img($fotos);
        }
    }
 
}
