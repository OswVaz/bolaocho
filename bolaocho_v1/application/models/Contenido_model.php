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
				'extras' => $datos['extras'],
				'extras2' => $datos['extras2'],
				'extras3' => $datos['extras3']
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
				'extras' => $datos['extras'],
				'extras2' => $datos['extras2'],
				'extras3' => $datos['extras3']
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

	public function set_contenido_jugadores($datos){
		$data = array(
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
				'estatus' => $datos['estatus'],
				'orden' => $datos['orden'],
			);
		if($datos['id'] != ''){
			$condiciones = array('id' => $datos['id']);
			$this->db->where($condiciones);
			$this->db->update('tabla_jugadores', $data);
		}else{
			$this->db->insert('tabla_jugadores', $data);
		}
	}

	public function get_contenido_jugadores(){
		$condiciones = array('estatus' => '1');
		$this->db->where($condiciones);
		$query = $this->db->get('tabla_jugadores');
		if($query->num_rows() > 0) return $query->result();
		else return false;
	}

	public function eliminar_jugador($id){
		$condiciones = array('id' => $id);
		$this->db->where($condiciones);
		$this->db->delete('tabla_jugadores');
	}

	public function set_contenido_correos($datos){
		$data = array(
				'nombre' => $datos['nombre'],
				'correo' => $datos['correo'],
				'telefono' => $datos['telefono'],
				'edad' => $datos['edad'],
				'asunto' => $datos['asunto'],
				'genero' => $datos['genero'],
				'mensaje' => $datos['mensaje'],
				'adjunto' => $datos['adjunto']
			);
			$this->db->insert('correos', $data);
	}

	public function get_contenido_correos(){
		$query = $this->db->get('correos');
		if($query->num_rows() > 0) return $query->result();
		else return false;
	}
	public function set_contenido_vacantes($datos){
		$data = array(
				'id' => $datos['id'],
				'vacante' => $datos['vacante'],
				'descripcion' => $datos['descripcion'],
				'horarios' => $datos['horarios'],
				'estatus' => $datos['estatus'],
			);
		if($datos['id'] != ''){
			$condiciones = array('id' => $datos['id']);
			$this->db->where($condiciones);
			$this->db->update('vacantes', $data);
		}else{
			$this->db->insert('vacantes', $data);
		}
	}
	public function get_contenido_vacantes(){
		$query = $this->db->get('vacantes');
		if($query->num_rows() > 0) return $query->result();
		else return false;
	}
	public function get_contenido_vacantes_activas(){
		$condiciones = array('estatus' => '1');
		$this->db->where($condiciones);
		$query = $this->db->get('vacantes');
		if($query->num_rows() > 0) return $query->result();
		else return false;
	}
	public function eliminar_vacantes($id){
		$condiciones = array('id' => $id);
		$this->db->where($condiciones);
		$this->db->delete('vacantes');
	}	
}