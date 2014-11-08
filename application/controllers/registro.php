<?php
	class registro extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
		}
	
		public function index()
		{
			$this->load->view('registrar');
		}

		public function registroUsuario()
		{
			$nombre=$this->input->post('nombre');
			$apellido=$this->input->post('ap');

			$ciudad=$this->input->post('ciudad');
			$comuna=$this->input->post('comuna');
			$direccion=$this->input->post('dir');

			$correo=$this->input->post('correo');
			$telefono=$this->input->post('tel');

			$user=$this->input->post('user');
			$pass=$this->input->post('pass');
			$this->load->model('usuario_model');
			$resultquery=$this->usuario_model->registroUsuario($nombre,$apellido,$ciudad,$comuna,$direccion,$correo,$telefono,$user,$pass);
			$data =array();

			if($resultquery)
			{
				$data['mensajehtml']="<div class='alert alert-success'>Registro existoso</div>";
			}
			else
				$data['mensajehtml']="<div class='alert alert-error'>Hubo un problema en el registro. Favor intente nuevamente</div>";

			$this->load->view('registrar',$data);
		}


		
	}
?>