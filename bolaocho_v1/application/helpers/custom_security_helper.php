<?php
/*
 *  Helper para sanitizar valores de los inputs.
 *
 *  Fecha:	24/9/2017
 * 	Autor:	Oswaldo Vazquez
*/

	function validity_name($data){
		return (is_string($data))? '' : 'El campo nombre no es un string permitido';
	}

	function validity_email($data){
		$data = filter_var($data, FILTER_SANITIZE_EMAIL);
		return (filter_var($data, FILTER_VALIDATE_EMAIL))? '' : 'El correo es invalido';
	}

	function validity_celphone($data){
		return (mb_strlen($data) === 10) ? '' : 'El campo telefono debe ser de 10 digitos';
	}
?>
