<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$head['dropzone'] = 'true';
		$sidebar['sidebar_admin'] = 'class = "active"';
		$this->load->view('back_office/default/head',$head);
		$this->load->view('back_office/default/header');

 		if($this->session->userdata('logueado')){
			$this->load->view('back_office/default/sidebar', $sidebar);
			$data['html'] = $this->home_html();
		}else{
			$data['html'] = $this->login_html();
		}
		$footer['login'] = true;
		$this->load->view('back_office/admin',$data);
		$this->load->view('back_office/default/footer', $footer);
	}
	public function login_html(){
		$html = '<div class="container ">
					<h1 class="text-center col-sm-12">Login</h1>
					<div class = "modal_error col-md-6 col-md-offset-3"></div>
					<div class="col-md-6 col-md-offset-3">
						<input type = "hidden" name = "page_name" value = "Admin" >
						<form  id = "login" method = "post">
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-she1"><i class="fa fa-unlock-alt"></i></span>
								<input type="text" name="mail" class="form-control input-lg" placeholder="Usuario">
							</div>
							<br>
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-pwd2"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
								<input type="password" name="pass" class="form-control input-lg" placeholder="Contraseña">
							</div><br>
							<input class="btn btn-lg btn-primary btn-block" value="Entrar" type="submit">
						</form>
					</div>
				</div>
				<div>';

		return $html;
		}
	public function home_html(){
		$html = '<h1 class="page-header text-center">Configuracion de contenido</h1>
		<img class="img-responsive center-block animated zoomInRight" src="'.base_url("img/logoana.png").'" alt = "anamar" width = "500px"><br>';
		return $html;
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
}
