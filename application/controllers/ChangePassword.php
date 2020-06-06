<?php

class ChangePassword extends CI_Controller {
	public function __construct()
	 {
		parent::__construct();		
		if(!$this->session->userdata('email'))
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Anda Belum Login!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('Login');
		}
	}

	public function index()
	{
		$this->form_validation->set_rules('email','Email','required',['required' => 'Email Wajib Diisi']);
        $this->form_validation->set_rules('password','Password','required',['required' => 'Password Wajib Diisi']);
        $this->form_validation->set_rules('passwordBaru','Password Baru','required',['required' => 'Password Baru Wajib Diisi']);
		if($this->form_validation->run() == FALSE)
		{	
			$this->load->view('admin/changePassword');
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
				redirect('changePassword');
			}
			else
			{
                $this->session->set_flashdata('berhasil','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Password Updated!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
                </div>');
                
                $id_akun = '1'; 
                $password = $this->input->post('passwordBaru');
                $where = array(
                    'id_akun' => $id_akun
                );
                $data = array(
                    'password' => $password
                );
                $this->Admin_Model->updatePassword($where,$data);
				redirect('login');
			}
		}
	}
}

?>
