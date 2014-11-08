<?php
	class transaccion extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
		}
		public function index(){
			$id=$this->input->get('id_rec');
			$this->load->model('usuario_model');
			$result_query=$this->usuario_model->getuser($id);
			$sesion['user']=$result_query['user_reciclador'];
			$sesion['id']=$id;
			$name = $this->input->get('nom');
			$apellido = $this->input->get('ape');


			$this->load->model('transaccion_model');
			$result = $this->transaccion_model->guardarTransaccion($id, $this->input->get('id_des'), $this->input->get('id_desecho'));

			if($result){
				$sesion['msje_result'] = "<h2>Se ha enviado la notificación a $name $apellido </h2>";
			}
			else{
				$sesion['msje_result'] = "<h2>A ocurrido un error al registrar la transacción. Por favor intentelo de nuevo.</h2>";
			}
				$this->load->view('notificacion_transaccion', $sesion);	


		}

	}
?>