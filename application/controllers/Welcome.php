<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$main_data['sliders'] = $this->Admin_Model->getSliders();
		$main_data['newsletter'] = $this->Admin_Model->getNewsletter();
		if(! $this->input->is_ajax_request()) $this->load->view('template/header');
		if(! $this->input->is_ajax_request()) $this->load->view('template/slider', $main_data);
		if(! $this->input->is_ajax_request()) $this->load->view('template/home_body', $main_data);
		if(! $this->input->is_ajax_request()) $this->load->view('template/footer');
	}

	public function index_pagination(){
		$this->load->library('pagination');
		$config['base_url'] = site_url('Welcome/index_pagination');
		$config['total_rows'] = $this->Admin_Model->countAllDestination();
		$config['per_page'] = 3;

		$config['full_tag_open'] 	= '<div class="pagination justify-content-center">';
		$config['full_tag_close'] 	= '</div>';
		$config['cur_tag_open']		= '<div class="current"><h6>';
		$config['cur_tag_close']	= '</h6></div>';
		$config['attributes']		= array('class' => 'link');


		$this->pagination->initialize($config);

		$data['page'] = $this->uri->segment(3) + 0;
		$data['destinations'] = $this->Admin_Model->getDestinations($config['per_page'], $data['page']);
		$this->load->view('template/home_pagination', $data);
	}

	public function faq()
	{
		$data['faqs'] = $this->Admin_Model->getQuestions(); 
		$slider['sliders'] = $this->Admin_Model->getSliders();
		$this->load->view('template/header');
		$this->load->view('template/fix_slider',$slider);
		$this->load->view('faq',$data);
		$this->load->view('template/footer');

	}

	public function request_trip()
	{
		
		$this->load->view('template/header');
		$this->load->view('template/request_trip');
		$this->load->view('template/footer');

	}

	public function list_destinasi(){
		$this->load->library('pagination');
		$config['base_url'] = site_url('welcome/list_destinasi');
		$config['total_rows'] = $this->Admin_Model->countAllDestination();
		$config['per_page'] = 9;
		$config['full_tag_open'] 	= '<div class="pagination justify-content-end mb-3">';
		$config['full_tag_close'] 	= '</div>';
		$config['cur_tag_open']		= '<div class="current"><h6>';
		$config['cur_tag_close']	= '</h6></div>';
		$config['attributes']		= array('class' => 'link');

		$this->pagination->initialize($config);

		$data['page'] = $this->uri->segment(3) + 0;
		$destinations = $this->Admin_Model->getDestinations($config['per_page'], $data['page']);
		$data['destinations1'] = array();
		$data['destinations2'] = array();
		$data['destinations3'] = array();
				/*print_r(max(array_keys($destinations)));
		die;*/
		if(max(array_keys($destinations))==0){
			for($x=0; $x<1; $x++){
				if($destinations[$x]){}
				array_push($data['destinations1'], $destinations[$x]);
			}
		}elseif(max(array_keys($destinations))==1){
			for($x=0; $x<2; $x++){
				if($destinations[$x]){}
				array_push($data['destinations1'], $destinations[$x]);
			}
		}elseif(max(array_keys($destinations))>1){
			for($x=0; $x<3; $x++){
				if($destinations[$x]){}
				array_push($data['destinations1'], $destinations[$x]);
			}
			if(max(array_keys($destinations))==3){
				for($x=0; $x<1; $x++){
					array_push($data['destinations2'], $destinations[3+$x]);
				}
			}elseif(max(array_keys($destinations))==4){
				for($x=0; $x<2; $x++){
					array_push($data['destinations2'], $destinations[3+$x]);
				}
			}elseif(max(array_keys($destinations))>4){
				for($x=0; $x<3; $x++){
					array_push($data['destinations2'], $destinations[3+$x]);
				}
				if(max(array_keys($destinations))==6){
					for($x=0; $x<1; $x++){
						array_push($data['destinations3'], $destinations[6+$x]);
					}
				}elseif(max(array_keys($destinations))==7){
					for($x=0; $x<2; $x++){
						array_push($data['destinations3'], $destinations[6+$x]);
					}
				}elseif(max(array_keys($destinations))==8){
					for($x=0; $x<3; $x++){
						array_push($data['destinations3'], $destinations[6+$x]);
					}
				}
			}
		}
		$this->load->view('template/header');
		$this->load->view('template/list', $data);
		$this->load->view('template/footer');
	}

	public function detail(){
		$uri = $this->uri->segment(3);
		$detail['detail_destination'] = $this->Admin_Model->getDestination($uri);
		$detail['dates'] = $this->Admin_Model->getCurDates($uri);
		$detail['galeri'] = $this->Admin_Model->getGaleriDestinasi($uri);
		$detail['last_book_id'] = $this->User_Model->getLastBookId();
		$detail['tour_include'] = $this->Admin_Model->getInclude($uri);
		$detail['tour_notinclude'] = $this->Admin_Model->getNotInclude($uri);
		$this->load->view('template/header');
		$this->load->view('template/detail_destinasi', $detail);
		$this->load->view('template/footer');
	}

	public function booking(){
		$nama_pemesan = $this->input->post('inputname');
		$no_hp = $this->input->post('inputphone');
		$nama_trip = $this->input->post('inputtours');
		$tanggal_trip = $this->input->post('datepicker');
		$jumlah_peserta = $this->input->post('inputnumber');
		$id_pemesan = 1 + $this->input->post('lastbookid');

		date_default_timezone_set("Asia/Jakarta");
		$waktu_pemesanan = date("Y-m-d H:i:s");
		$status_pemesanan = 'Menunggu Konfirmasi';

		$data = array(
			'id_pemesan' => $id_pemesan,
			'nama_pemesan' => $nama_pemesan,
			'no_hp' => $no_hp,
			'nama_trip' => $nama_trip,
			'tanggal_trip' => $tanggal_trip,
			'jumlah_peserta' => $jumlah_peserta,
			'waktu_pemesanan' => $waktu_pemesanan,
			'status_pemesanan' => $status_pemesanan,
		);
		$this->User_Model->inBooking($data);
		$url = 'https://wa.me/6287716381565?text=Halo, Saya '.
		$nama_pemesan.' ingin memesan perjalanan ke '.$nama_trip.' pada tanggal '.$tanggal_trip.
		', booking ID = '.$id_pemesan;
		$uri = prep_url($url);
		redirect($uri);
	}
	
	public function index_harga(){
		$id = $this->input->post('harga');
		$ajaxdetail['jadwal_berangkat'] = $this->User_Model->getDate($id);
		
		$this->load->view('template/detail_harga', $ajaxdetail);
	}
}
