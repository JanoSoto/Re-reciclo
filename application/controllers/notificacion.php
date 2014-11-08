<?php
	class interesados extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$id=$this->input->get('id');
			$this->load->model('usuario_model');
			$result_query=$this->usuario_model->getuser($id);
			$sesion['user']=$result_query['user_reciclador'];
			$sesion['id']=$id;

			$this->load->model('transaccion_model');

			$sesion['espera'] = $this->transaccion_model->getEnEspera($id);

			$this->load->view('interesados', $sesion);
		}
	}
?>