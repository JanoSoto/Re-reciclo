<?php
	class listaDisponibles extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			//$this->load->helper('form');
		}
		public function index(){
			$this->load->view('listaDisponibles');
		}

		public function mostrar_disponibles($opcion){
			$data['desechos'] = $this->desechos_model->getDesechos();
		}

	}
?>