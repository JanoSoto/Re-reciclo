<?php
	class Desechos_model extends CI_Model {
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function getDesechos($option){
			//SELECT NOMBRE_TIPO, CANTIDAD_DESECHO FROM DESECHO INNER JOIN TIPO ON TIPO.ID_TIPO = DESECHO.ID_TIPO  AND NOMBRE_TIPO = "'.$option. '"
			$query = $this->db->query('SELECT NOMBRE_TIPO, CANTIDAD_DESECHO FROM DESECHO INNER JOIN TIPO ON TIPO.ID_TIPO = DESECHO.ID_TIPO AND NOMBRE_TIPO = "'.$option. '"');
			
			if($query->num_rows() > 0){
				return $query;
			}
			else{
			 	return false;
			}
			
		}
	}

?>

