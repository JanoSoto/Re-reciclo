<?php
	class notificacion extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$id=$this->input->get('id');
			$this->load->model('usuario_model');
			$result_query=$this->usuario_model->getuser($id);
			$data['user']=$result_query['user_reciclador'];
			$data['id']=$id;

			$this->load->model('transaccion_model');
			
			$data['espera']=$this->transaccion_model->getNotificaciones($id);

			$this->transaccion_model->actualizarEstado($id);
		
			$this->load->view('notificaciones', $data);
		}

		public function completarTrans()
		{
			$id_reciclador=$this->input->get('id');
			$id_trans=$this->input->get('trans');
			$this->load->model('transaccion_model');
			$resp=$this->transaccion_model->completarTrans($id_trans);

			redirect('../index.php/notificacion?id='.$id_reciclador);
			
		}

		public function setTransaccion(){
			$id=$this->input->get('id');
			$this->load->model('usuario_model');
			$result_query=$this->usuario_model->getuser($id);
			$data['user']=$result_query['user_reciclador'];
			$data['id']=$id;

			$data['id_trans'] = $this->input->get('id_trans');
			$this->load->view('envioNotificacion', $data);
		}

		public function updateNotificacion(){
			$id=$this->input->get('id');
			$this->load->model('usuario_model');
			$result_query=$this->usuario_model->getuser($id);
			$data['user']=$result_query['user_reciclador'];
			$data['id']=$id;

			$this->load->model('transaccion_model');

			$datos['fecha_desde'] = $this->input->post('fecha_desde');
			$datos['fecha_hasta'] = $this->input->post('fecha_hasta');
			$datos['hora_desde'] = $this->input->post('hora_desde');
			$datos['hora_hasta'] = $this->input->post('hora_hasta');
			$datos['comentario'] = $this->input->post('comentario');

			$query = $this->transaccion_model->updateTransaccion($id, $datos);
		}
	}
?>