<?php
	class quieroreciclar extends CI_Controller
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
			$this->load->view('quieroreciclar',$data);
		}

		public function do_upload()
		{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
		
			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				
				$this->load->view('quieroreciclar', $error);
			}	
			else
			{
				$data = array('upload_data' => $this->upload->data());
				
				$this->load->view('upload_success', $data);
			}
		}	
		
	}
?>