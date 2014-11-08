<?php
	class listaDisponibles extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->helper('form');
			$this->load->model('desechos_model');
		}
		public function index(){
			$this->load->view('listaDisponibles');
			
		}

		public function mostrar_disponibles(){
			$option = $this->input->post('option');	
			$data['desechos'] = $this->desechos_model->getDesechos($option);
			$this->load->view('listaDisponibles');
			$this->load->view('resultado_listaDisponibles', $data);
		}

	}
?>