<?php
	class inicio extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
		}
	
		public function index()
		{
			$this->load->view('inicioSesion');
		}

		public function login(){
			$user=$this->input->post('user');
			$pass=$this->input->post('pass');
			
			$this->load->model('usuario_model');
			$resultquery=$this->usuario_model->inicioSesion($user, $pass);
			$data=array();

			if($resultquery !=null)
				$this->load->view('home');
			
			else 
			{
				$data['mensaje']=1;
				$this->load->view('inicioSesion',$data);
			}

			
		}

		
	}
?>