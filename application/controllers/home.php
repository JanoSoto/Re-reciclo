<?php
	class home extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
		}
	
		public function index()
		{
			$id=$this->input->get('id');
			$this->load->model('usuario_model');
			$result_query=$this->usuario_model->getuser($id);
			$data['user']=$result_query['user_reciclador'];
			$data['id']=$id;

			$this->load->model('transaccion_model');
			$numNotif=$this->transaccion_model->numNotificaciones($id);
			$data['notif']=$numNotif;
			
			$this->load->view('home',$data);
		}

		
		
	}
?>