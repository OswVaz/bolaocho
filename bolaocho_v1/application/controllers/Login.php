<?php
/*
 *  Helper para sanitizar valores de los inputs.
 *
 *  Fecha:	24/9/2017
 * 	Autor:	Oswaldo Vazquez
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->helper('custom_security');
	}

	public function index()
	{
		//$data['db'] = $this->prueba_model->hola();
		$this->load->view('welcome_message');
	}

	public function login(){
		$user_type = $_POST['user_type'];
		if(!in_array($user_type, array(1,2))){
			$response = array(
				'status' => 'error',
				'info' => 'El tipo de usuario es incorrecto'
			);
			echo json_encode($response);
			return false;
		}

		$email = $_POST['email'];
		$validity = validity_email($email);
		if($validity == ''){
			$pwd = md5($_POST['pwd']);
			$query = $this->login_model->login($user_type, $email, $pwd);
			if($query){
				$response = array(
					'status' => 'success',
					'info' => 'Usuario logeado con exito.'
				);
			}else{
				$response = array(
					'status' => 'error',
					'info' => 'Usuario y/o Password incorrecto'
				);
			}
		}else{
			$response = array(
				'status' => 'error',
				'info' => $validity
			);
		}
		echo json_encode($response);
	}

	public function registry(){
		$user_type = $_POST['user_type'];
		if(!in_array($user_type, array(1,2))){
			$response = array(
				'status' => 'error',
				'info' => 'El tipo de usuario es incorrecto'
			);
			echo json_encode($response);
			return false;
		}

		$data = array(
			'name' => $_POST['name'],
			'lastname' => $_POST['lastname'],
			'email' => $_POST['email'],
			'cellphone' => $_POST['cellphone'],
			'pwd' => md5($_POST['pwd']),
			'socialnet_id' => $_POST['socialnet_id'],
			'avatar' => $_POST['avatar']
		);

		$validity['error_description'] = $this->validity_registry_rules($data); //se usara para reglas de negocio

		if($validity['error_description'] == ''){
			$this->login_model->registry($user_type, $data);
			$response = array(
				'status' => 'success',
				'info' => 'Usuario registrado con exito.'
			);
		}else{
			$response = array(
				'status' => 'error',
				'info' => $validity['error_description']
			);
		}
		echo json_encode($response);
	}
	/*
	 * validity_registry valida que se pueda registrar
	 * dependiendo de las reglas para el registro
	 * regresa un success o un codigo de error
	 */
	private function validity_registry_rules($data){
		$description = '';

		$description .= validity_name($data['name']);
		$description .= validity_name($data['lastname']);
		$description .= validity_celphone($data['cellphone']);
		return $description;
	}
}
