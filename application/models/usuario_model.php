<?php

class usuario_model extends CI_Model{
	
	function __construct()
	{
	  parent::__construct();	
	}

	function inicioSesion($user, $pass)
	{
		$query=$this->db->query('SELECT * FROM  reciclador WHERE reciclador.nombre_usuario="'.$user.'" AND reciclador.pass_usuario = "'.$pass.'"');
		$result=$query->row_array();
		return $result;
	}

	function registroUsuario($nombre,$apellido,$ciudad,$comuna,$direccion,$correo,$telefono,$user,$pass)
	{
		$query=$this->db->query('INSERT INTO reciclador (NOMBRE_RECICLADOR, APELLIDOS_RECICLADOR, CORREO_RECICLADOR,FONO_RECICLADOR, DIRECCION_RECICLADOR, COMUNA_RECICLADOR, CIUDAD_RECICLADOR, NOMBRE_USUARIO, PASS_USUARIO) VALUES("'.$nombre.'","'.$apellido.'","'.$correo.'","'.$telefono.'","'.$direccion.'","'.$comuna.'","'.$ciudad.'","'.$user.'","'.$pass.'")');
		
		return $query;
	}
	
}
 

?>

