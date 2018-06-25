<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('contenido_model');
		$this->load->helper('admin_content');
		$this->load->model('login_model');
	}

	public function index()
	{
		$head['dropzone'] = 'true';
		$sidebar['sidebar_admin'] = 'class = "active"';
		$this->load->view('back_office/default/head',$head);
		$this->load->view('back_office/default/header');

		$data['login'] = true;
 		if($this->session->userdata('logueado')){
			$this->load->view('back_office/default/sidebar', $sidebar);
			$data['login'] = false;
		}

		$seccion = $this->contenido_model->get_contenido_jugadores();
        $data['competencia'] = $this->tabla_jugadores($seccion);

         $seccion = $this->contenido_model->get_contenido_vacantes_activas();        
         $data['vacantes'] = $this->tabla_vacantes($seccion);
        
         $seccion = $this->contenido_model->get_contenido_correos();        
         $data['correos'] = $this->tabla_correos($seccion);

		$this->load->view('back_office/admin',$data);
		$this->load->view('back_office/default/footer');
	}

	public function login(){
		$user = $_POST['mail'];
		$pass = md5($_POST['pass']);
		$query = $this->login_model->login($user, $pass);
		if(isset($query->admin_name)){
			$usuario = array(
				   'nombre' => $query->admin_name,
				   'logueado' => TRUE
			);
			$this->session->set_userdata($usuario);
			echo "true";
		}

	}

	public function get_pass_html(){
		$html = '<h1 class="text-center">Login</h1>
				<div class = "modal_error col-md-6 col-md-offset-3"></div>
				<div class="container ">
					  <div class="col-md-6 col-md-offset-3">
						<form  id = "get_password" method = "post">
						  <div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
								<input type="text" name="mail" class="form-control input-lg" placeholder="Correo" aria-describedby="basic-addon1">
						  </div>
						  <br>
						  <input class="btn btn-lg btn-primary btn-block" value="enviar" type="submit">
						</form>
					  </div>
				</div>';
		return $html;
	}

	public function get_new_pass(){

	}
	public function logout(){
		$this->session->sess_destroy();
	}

function tabla_jugadores($data){
        $html = '';
        if(is_object($data[0])){
            foreach ($data as $llave) {
                $html .= '<tr class = "padre"><td><input type="number" class="form-control lugar" value="'.$llave->lugar.'"></td><td><input type="text" class="form-control nombre" value="'.$llave->nombre.'"></td><td><input type="number" class="form-control edad" value="'.$llave->edad.'"></td><td><input type="text" class="form-control Jornadas" value="'.$llave->Jornadas.'"></td><td><input type="text" class="form-control JG" value="'.$llave->JG.'"></td><td><input type="text" class="form-control JP" value="'.$llave->JP.'"></td><td><input type="text" class="form-control jugados" value="'.$llave->jugados.'"></td><td><input type="text" class="form-control JG2" value="'.$llave->JG2.'"></td><td><input type="text" class="form-control JP2" value="'.$llave->JP2.'"></td><td><input type="text" class="form-control DF" value="'.$llave->DF.'"></td><td><input type="text" class="form-control puntos" value="'.$llave->puntos.'"></td><td><input type="number" class="form-control orden" value="'.$llave->orden.'"></td></tr>';
             }
         }
        return $html;
    }
    function tabla_vacantes($data){
        $html = '';
        if(is_object($data[0])){
            foreach ($data as $llave) {
                $html .= '<tr class = "padre"><td><input type="text" class="form-control vacante" value = "'.$llave->vacante.'"></td><td><input type="text" class="form-control descripcion" value = "'.$llave->descripcion.'"></td><td><input type="text" class="form-control horarios" value = "'.$llave->horarios.'"></td></tr>';
             }
         }
        return $html;
    }


function tabla_correos($data){
        $html = '';
            foreach ($data as $llave) {
                $html .= '<tr class = "padre"><td><input type="text" class="form-control lugar" value="'.$llave->id.'"></td><td><input type="text" class="form-control nombre" value="'.$llave->nombre.'"></td><td><input type="text" class="form-control edad" value="'.$llave->edad.'"></td><td><input type="text" class="form-control Jornadas" value="'.$llave->telefono.'"></td><td><input type="text" class="form-control JG" value="'.$llave->asunto.'"></td><td><input type="text" class="form-control JP" value="'.$llave->mensaje.'"></td><td><input type="text" class="form-control jugados" value="'.$llave->adjunto.'"></td></tr>';
             }
        
        return $html;
    }

}
