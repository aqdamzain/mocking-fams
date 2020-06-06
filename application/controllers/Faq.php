<?php

class Faq extends CI_Controller {

	public function index()
	{
		$data['faqs'] = $this->Admin_Model->getQuestions(); 
		$main_data['sliders'] = $this->Admin_Model->getSliders();
		$this->load->view('template/header');
		$this->load->view('template/fix_slider',$main_data);
		$this->load->view('faq',$data);
		$this->load->view('template/footer');

	}
	
}


?>