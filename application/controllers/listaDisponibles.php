<?php
	class listaDisponibles extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->helper('form');
			$this->load->model('desechos_model');
		}
		public function index(){
			$id=$this->input->get('id');
			$this->load->model('usuario_model');
			$result_query=$this->usuario_model->getuser($id);
			$sesion['user']=$result_query['user_reciclador'];
			$sesion['id']=$id;
			$this->load->view('listaDisponibles', $sesion);
			
		}

		public function mostrar_disponibles(){

			$id=$this->input->get('id');
			$this->load->model('usuario_model');
			$result_query=$this->usuario_model->getuser($id);
			$sesion['user']=$result_query['user_reciclador'];
			$sesion['id']=$id;

			$option = $this->input->post('option');	
			$data['desechos'] = $this->desechos_model->getDesechos($option);

			//redirect('../index.php/listaDisponibles/resultado_listaDisponibles?id=' .$id);

			$this->load->view('listaDisponibles', $sesion);
			
			$this->load->view('resultado_listaDisponibles', $data);
			
		}

	}
?>