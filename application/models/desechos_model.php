<?php
	class Desechos_model extends CI_Model {
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function getDesechos($option){
			//SELECT NOMBRE_TIPO, CANTIDAD_DESECHO, NOMBRE_RECICLADOR, APELLIDO_PAT_RECICLADOR FROM DESECHO, RECICLADOR, TIPO WHERE TIPO.ID_TIPO = DESECHO.ID_TIPO AND DESECHO.ID_RECICLADOR = RECICLADOR.ID_RECICLADOR AND NOMBRE_TIPO = "'.$option. '"
			$query = $this->db->query('SELECT r.ID_RECICLADOR, d.ID_DESECHO, NOMBRE_TIPO, CANTIDAD_DESECHO, NOMBRE_RECICLADOR, APELLIDO_PAT_RECICLADOR FROM DESECHO d, RECICLADOR r, TIPO WHERE TIPO.ID_TIPO = d.ID_TIPO AND d.ID_RECICLADOR = r.ID_RECICLADOR AND NOMBRE_TIPO = "'.$option. '"');
			
			if($query->num_rows() > 0){
				return $query;
			}
			else{
			 	return false;
			}
			
		}


		function setDesechos($id_reciclador, $id_tipo, $cuanto, $fecha, $descripcion)
		{
			$query =$this->db->query('INSERT INTO desecho(id_tipo, id_reciclador, cantidad_desecho, fecha_fin_desecho, descripcion_desecho) values('.$id_tipo.','.$id_reciclador.','.$cuanto.',"'.$fecha.'","'.$descripcion.'")');
			return $query;
		}
	}

?>

