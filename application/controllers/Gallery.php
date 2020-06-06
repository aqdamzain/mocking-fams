<?php

class Gallery extends CI_Controller {

    public function index()
	{
        $data['galleries'] = $this->Admin_Model->getGalleries();
		$this->load->view('template/header');
        $this->load->view('template/gallery',$data);
        $this->load->view('template/footer');
	}
    public function viewImages()
    {
        

    }
}
?>