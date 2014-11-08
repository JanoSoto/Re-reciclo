<?php

class usuario_model extends CI_Model{
	
	function __construct()
	{
	  parent::__construct();	
	}

	function inicioSesion($user, $pass)
	{
		$query=$this->db->query('SELECT id_reciclador FROM  reciclador WHERE reciclador.user_reciclador="'.$user.'" AND reciclador.pass_reciclador = "'.$pass.'"');
		$result=$query->row_array();
		return $result;
	}

	function registroUsuario($nombre,$apellido,$ciudad,$comuna,$direccion,$correo,$telefono,$user,$pass)
	{
		$query=$this->db->query('INSERT INTO reciclador (NOMBRE_RECICLADOR, APELLIDO_PAT_RECICLADOR, CORREO_RECICLADOR,FONO_RECICLADOR, DIRECCION_RECICLADOR, COMUNA_RECICLADOR, CIUDAD_RECICLADOR, USER_RECICLADOR, PASS_RECICLADOR) VALUES("'.$nombre.'","'.$apellido.'","'.$correo.'","'.$telefono.'","'.$direccion.'","'.$comuna.'","'.$ciudad.'","'.$user.'","'.$pass.'")');
		
		return $query;
	}
	
	function getuser($id){

		$query=$this->db->query('SELECT user_reciclador FROM reciclador WHERE reciclador.id_reciclador ='.$id);
		$result=$query->row_array();
		return $result;
	}
}
 

?>

