<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mantenimiento extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('contenido_model');
		$this->load->helper('admin_content');
	}

	public function index()
	{
		$head['dropzone'] = "false";
		$this->load->view('front/default/head',$head);
		$this->load->view('front/mantenimiento');
		$this->load->view('front/default/footer');
	}
}
