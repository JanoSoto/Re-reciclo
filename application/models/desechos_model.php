<?php
	class desechos_model extends CI_Model {
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
	}

	function getDesechos(){
		//SELECT NOMBRE_TIPO, CANTIDAD_DESECHO FROM DESECHO INNER JOIN TIPO ON TIPO.ID_TIPO = DESECHO.ID_TIPO
		$query = $this->db->select('nombre_tipo, cantidad_desecho');
		$query = $this->db->from('desecho');
		$query = $this->db->join('tipo.id_tipo = desecho.id_tipo')

		if($query->num_rows() > 0){
			return $query;
		}
		else{
			return false;
		}
	}

?>

