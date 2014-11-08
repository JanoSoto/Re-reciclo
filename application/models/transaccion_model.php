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

		public function getEnEspera($id){
			$query = $this->db->query('SELECT NOMBRE_TIPO, NOMBRE_RECICLADOR, APELLIDO_PAT_RECICLADOR FROM TRANSACCION T, RECICLADOR R, DESECHO D, TIPO Ti WHERE T.ID_DESECHO = D.ID_DESECHO AND D.ID_TIPO = Ti.ID_TIPO AND T.ID_RECICLADOR = R.ID_RECICLADOR AND T.REC_ID_RECICLADOR = "'.$id. '"');

			return $query;
		}

		public function numNotificaciones($id)
		{
			$query = $this->db->query('SELECT id_trans FROM TRANSACCION WHERE rec_id_reciclador ='.$id);
			$row_cont=$query->num_rows;
			return $row_cont;

		}

	}

?>