<?php
	class Transaccion_model extends CI_Model {
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function guardarTransaccion($id_rec, $id_des, $id_desecho){
			$query = $this->db->query('INSERT INTO TRANSACCION (ID_RECICLADOR, REC_ID_RECICLADOR, ID_DESECHO, ESTADO_TRANS) VALUES ("'.$id_rec.'", "'.$id_des.'", "'.$id_desecho.'", "En espera")');

			return $query;
		}

	}

?>