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
			$query = $this->db->query('SELECT ID_TRANS, NOMBRE_TIPO, NOMBRE_RECICLADOR, APELLIDO_PAT_RECICLADOR FROM TRANSACCION T, RECICLADOR R, DESECHO D, TIPO Ti WHERE T.ID_DESECHO = D.ID_DESECHO AND D.ID_TIPO = Ti.ID_TIPO AND T.ID_RECICLADOR = R.ID_RECICLADOR AND T.REC_ID_RECICLADOR = "'.$id. '"');

			return $query;
		}

		public function numNotificaciones($id)
		{
			$query = $this->db->query('SELECT id_trans FROM TRANSACCION WHERE rec_id_reciclador ='.$id.' and estado_trans="En espera";');
			$row_cont=$query->num_rows;
			return $row_cont;

		}

		public function getNotificaciones($id)
		{
			$query= $this->db->query('SELECT NOMBRE_TIPO, NOMBRE_RECICLADOR, APELLIDO_PAT_RECICLADOR FROM TRANSACCION T, RECICLADOR R, DESECHO D, TIPO Ti WHERE T.ID_DESECHO = D.ID_DESECHO AND D.ID_TIPO = Ti.ID_TIPO AND T.ID_RECICLADOR = R.ID_RECICLADOR AND T.REC_ID_RECICLADOR ='.$id.' AND T.estado_trans =  "En espera"');
			$result=$query->result_array();
			return $result;
		}

		public function actualizarEstado($id)
		{
			$query=$this->db->query('UPDATE `TRANSACCION` SET `ESTADO_TRANS`="Visto"  WHERE rec_id_reciclador='.$id);
			return $query;
		}

		public function updateTransaccion($id, $data){
			$query = $this->db->query('UPDATE TRANSACCION SET FECHA_DESDE_TRANS ="'.$data['fecha_desde'].'", FECHA_HASTA_TRANS ="'.$data['fecha_hasta']. '", HORA_DESDE_TRANS ="'.$data['hora_desde'].'", HORA_HASTA_TRANS ="'.$data['hora_hasta'].'", COMENTARIO_TRANS ="'.$data['comentario'].'" WHERE ID_TRANS = '.$id);
			return $query;
		}

		public function completarTrans($id_trans)
		{
			$query=$this->db->query('UPDATE `TRANSACCION` SET `ESTADO_FINAL_TRANS`="COMPLETO"  WHERE id_trans='.$id_trans);
			return $query;
		}

	}
?>