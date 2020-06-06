<?php

class Login extends CI_Controller {

	public function index()
	{
		
		$this->form_validation->set_rules('email','Email','required',['required' => 'Email Wajib Diisi']);
		$this->form_validation->set_rules('password','Password','required',['required' => 'Password Wajib Diisi']);
		if($this->form_validation->run() == FALSE)
		{	
			$this->load->view('login/login');
		}
		else
		{
			$auth = $this->Admin_Model->cekLogin();
			if($auth == FALSE){
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Email atau Password Salah!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('login');
			}
			else
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$user = $this->Admin_Model->getAccount(1);
				$data = array(
					'email' => $email
				);
				$this->session->set_userdata($data);
				redirect('admin');
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}
}

?>
