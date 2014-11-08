<?php
	class Desechos_model extends CI_Model {
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function getDesechos($option){
			//SELECT NOMBRE_TIPO, CANTIDAD_DESECHO, NOMBRE_RECICLADOR, APELLIDO_PAT_RECICLADOR FROM DESECHO, RECICLADOR, TIPO WHERE TIPO.ID_TIPO = DESECHO.ID_TIPO AND DESECHO.ID_RECICLADOR = RECICLADOR.ID_RECICLADOR AND NOMBRE_TIPO = "'.$option. '"
			$query = $this->db->query('SELECT NOMBRE_TIPO, CANTIDAD_DESECHO, NOMBRE_RECICLADOR, APELLIDO_PAT_RECICLADOR FROM DESECHO, RECICLADOR, TIPO WHERE TIPO.ID_TIPO = DESECHO.ID_TIPO AND DESECHO.ID_RECICLADOR = RECICLADOR.ID_RECICLADOR AND NOMBRE_TIPO = "'.$option. '"');
			
			if($query->num_rows() > 0){
				return $query;
			}
			else{
			 	return false;
			}
			
		}
	}

?>

