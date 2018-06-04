<?php
/*
 *  Model para obtener el contenido de las imagenes y descripciones
 *
 *  Fecha:	23/11/2017
 * 	Autor:	Leonardo Del Castillo
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Contenido_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function set_contenido($datos){
		$condiciones = array('id_pagina' => $datos['id_pagina'], 'id_seccion' => $datos['seccion']);
		$this->db->where($condiciones);
		$query = $this->db->get('Contenido');

		if($query->num_rows() > 0){
			$data = array(
				'nombre' => $datos['nombre'],
				'background_img' => $datos['background_img'],
				'css' => $datos['css'],
				'text' => $datos['text'],
				'html' => $datos['html'],
				'extra' => $datos['extra'],
				'extras' => $datos['extras']			
			);
			error_log('       update        '.print_r($data,true), 3, '/tmp/algo');
			$condiciones = array('id_pagina' => $datos['id_pagina'], 'id_seccion' => $datos['seccion']);
			$this->db->where($condiciones);
			$this->db->update('Contenido', $data);
		}else{
			$data = array(
				'id_pagina' => $datos['id_pagina'],
				'id_seccion' => $datos['seccion'],
				'nombre' => $datos['nombre'],
				'background_img' => $datos['background_img'],
				'css' => $datos['css'],
				'text' => $datos['text'],
				'html' => $datos['html'],
				'extra' => $datos['extra'],
				'extras' => $datos['extras']
			);
			error_log('       insert        '.print_r($data,true), 3, '/tmp/algo');
			$this->db->insert('Contenido', $data);
		}
	}

	public function get_contenido($pagina_id, $seccion){
		$condiciones = array('id_pagina' => $pagina_id, 'id_seccion' => $seccion);
		$this->db->where($condiciones);
		$query = $this->db->get('Contenido');
		if($query->num_rows() > 0) return $query->row();
		else return false;
	}
	public function get_contenido_default($nombre){
		$this->db->where('nombre', $nombre);
		$query = $this->db->get('html_default');
		if($query->num_rows() > 0) return $query->row();
		else return false;
	}

	public function get_paginas(){
		$this->db->where('front', '1');
		$query = $this->db->get('paginas');
		if($query->num_rows() > 0) return $query->result();
		else return false;
	}
	public function set_paginas($value, $estatus){
		$this->db->where('pagina', $value);
		$data = array('estatus' => $estatus);
		$this->db->update('paginas', $data);
	}
	public function load_page($id_pagina){
		$this->db->where('id_pagina', $id_pagina);
		$query = $this->db->get('paginas');
		if($query->num_rows() > 0) return $query->row()->estatus;
		else return false;
	}
	public function delete_img_gallery($id_pagina, $nombre_img){
		$condiciones = array('id_pagina' => $id_pagina, 'background_img' => $nombre_img);
		var_dump($id_pagina .'  '. $nombre_img);
		$this->db->where($condiciones);
		$this->db->delete('Contenido');
	}

	public function get_contenido_new_gallery($pagina_id, $name = ''){
		$condiciones = array('id_pagina' => $pagina_id, 'id_seccion' => 0);
		if($name != '')
			$condiciones = array('id_pagina' => $pagina_id, 'id_seccion' => 0,'nombre' => $name);
		$this->db->where($condiciones);
		$query = $this->db->get('Contenido');
		if($query->num_rows() > 0) return $query->result();
		else return false;
	}

	public function set_contenido_img($id_pagina, $nombre_img, $datos){
		$condiciones = array('id_pagina' => $id_pagina, 'nombre' => $nombre_img);
		$this->db->where($condiciones);
		$query = $this->db->get('Contenido');

		if($query->num_rows() > 0){
			$data = array(
				'nombre' => $datos['nombre'],
				'background_img' => $datos['background_img'],
				'css' => $datos['css'],
				'text' => $datos['text'],
				'html' => $datos['html'],
			);
			$condiciones = array('id_pagina' => $id_pagina, 'nombre' => $nombre_img);
			$this->db->where($condiciones);
			$this->db->update('Contenido', $data);
		}else{
			$data = array(
				'id_pagina' => $id_pagina,
				'id_seccion' => '',
				'nombre' => $datos['nombre'],
				'background_img' => $datos['background_img'],
				'css' => $datos['css'],
				'text' => $datos['text'],
				'html' => $datos['html'],
			);
			$this->db->insert('Contenido', $data);
		}
	}


}
