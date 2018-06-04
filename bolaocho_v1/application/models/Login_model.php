<?php
/*
 *  Helper para sanitizar valores de los inputs.
 *
 *  Fecha:	24/9/2017
 * 	Autor:	Oswaldo Vazquez
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function registry($data){
		$data = array(
			'admin_name' => $_POST['name'],
			'admin_lastname' => $_POST['lastname'],
			'admin_email' => $_POST['email'],
			'admin_cellphone' => $_POST['cellphone'],
			'admin_pwd' => md5($_POST['pass']),
			'admin_status' => 1
		);

		$this->db->insert('admin', $data);
	}

	public function login($user, $pwd){
		$condicones = array('admin_email' => $user, 'admin_pwd' => $pwd, 'admin_status' => 1);
		$this->db->where($condicones);
		$query = $this->db->get('admin');
		return ($query->num_rows() > 0)? $query->row() : false;
	}
}
