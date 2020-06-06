<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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
		$main_data['sliders'] = $this->Admin_Model->getSliders();
		if(! $this->input->is_ajax_request()) $this->load->view('admin/header');
		if(! $this->input->is_ajax_request()) $this->load->view('admin/slider', $main_data);
		if(! $this->input->is_ajax_request()) $this->load->view('admin/home_body');
		if(! $this->input->is_ajax_request()) $this->load->view('admin/footer');
	}

	public function index_newsletter(){
		$main_data['newsletter'] = $this->Admin_Model->getNewsletter();
		$this->load->view('admin/home_newsletter', $main_data);
	}

	public function formNewsletter(){
		$main_data['newsletter'] = $this->Admin_Model->getNewsletter();
		$this->load->view('admin/form_newsletter', $main_data);
	}

	public function index_include(){
		$uri = $this->uri->segment(3);
		$detail['id_destinasi'] = $uri;
		$detail['tour_include'] = $this->Admin_Model->getInclude($uri);
		$this->load->view('admin/home_include', $detail);
	}

	public function delinclude(){
		$uri = $this->uri->segment(3);
		$detail['id_destinasi'] = $uri;
		$detail['tour_include'] = $this->Admin_Model->getInclude($uri);
		$this->load->view('admin/del_include', $detail);
	}

	public function forminclude(){
		$uri = $this->uri->segment(3);
		$detail['id_destinasi'] = $uri;
		$this->load->view('admin/form_include', $detail);
	}

	public function index_notinclude(){
		$uri = $this->uri->segment(3);
		$detail['id_destinasi'] = $uri;
		$detail['tour_notinclude'] = $this->Admin_Model->getNotInclude($uri);
		$this->load->view('admin/home_notinclude', $detail);
	}

	public function delnotinclude(){
		$uri = $this->uri->segment(3);
		$detail['id_destinasi'] = $uri;
		$detail['tour_notinclude'] = $this->Admin_Model->getNotInclude($uri);
		$this->load->view('admin/del_notinclude', $detail);
	}

	public function formnotinclude(){
		$uri = $this->uri->segment(3);
		$detail['id_destinasi'] = $uri;
		$this->load->view('admin/form_notinclude', $detail);
	}

	public function index_pagination(){
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/index_pagination');
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
		$this->load->view('admin/home_pagination', $data);
	}

	public function delete(){
		$uri_string = $this->uri->segment(3);
		$id_destinasi = intval(strstr($uri_string, '-', true));
		$page = intval(str_replace('-','',strstr($uri_string,'-')));

		$this->Admin_Model->deleteDestination($id_destinasi);
		redirect('admin/index_pagination/'.$page);
	}

	public function delete2(){
		$uri_string = $this->uri->segment(3);
		$id_destinasi = intval(strstr($uri_string, '-', true));
		$page = intval(str_replace('-','',strstr($uri_string,'-')));

		$this->Admin_Model->deleteDestination($id_destinasi);
		redirect('admin/list_destinasi/'.$page);
	}

	public function delGambarGaleri(){
		$uri_string = $this->uri->segment(3);
		$id_gambar = intval(strstr($uri_string, '-', true));
		$page = intval(str_replace('-','',strstr($uri_string,'-')));
		$this->Admin_Model->delete_gambarGaleri($id_gambar);
		redirect('admin/detail/'.$page);
		
	}
	
	public function add_destination(){
		$nama_destinasi = $this->input->post('nama');
		$deskripsi_destinasi = $this->input->post('deskripsi');
		$harga = $this->input->post('price');
		$durasi_siang = $this->input->post('day');
		$durasi_malam = $this->input->post('night');
		$favorite = $this->input->post('favorite');
		$picture = $_FILES['picture'];
		if ($picture=''){}else{
			$config['upload_path'] = './assets/images';
			$config['allowed_types'] = 'jpg|png|gif';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('picture')){
				echo "Upload Gagal"; die();
			}else{
				$picture=$this->upload->data('file_name');
			}
		}
		$data = array(
			'nama_destinasi' => $nama_destinasi,
			'deskripsi_destinasi' =>  $deskripsi_destinasi,
			'harga' => $harga,
			'durasi_siang' => $durasi_siang,
			'durasi_malam' => $durasi_malam,
			'preview_destinasi' => $picture,
			'favorite' => $favorite,
		);
		$this->Admin_Model->input_destination($data);
		redirect('admin/index_pagination/');
	}

	public function add_destination2(){
		$nama_destinasi = $this->input->post('nama');
		$deskripsi_destinasi = $this->input->post('deskripsi');
		$harga = $this->input->post('price');
		$durasi_siang = $this->input->post('day');
		$durasi_malam = $this->input->post('night');
		$favorite = $this->input->post('favorite');
		$picture = $_FILES['picture'];
		if ($picture=''){}else{
			$config['upload_path'] = './assets/images';
			$config['allowed_types'] = 'jpg|png|gif';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('picture')){
				echo "Upload Gagal"; die();
			}else{
				$picture=$this->upload->data('file_name');
			}
		}
		$data = array(
			'nama_destinasi' => $nama_destinasi,
			'deskripsi_destinasi' =>  $deskripsi_destinasi,
			'harga' => $harga,
			'durasi_siang' => $durasi_siang,
			'durasi_malam' => $durasi_malam,
			'preview_destinasi' => $picture,
			'favorite' => $favorite,
		);
		$this->Admin_Model->input_destination($data);
		redirect('admin/list_destinasi/');
	}

	public function edit_destination(){
		$editId_destinasi = $this->input->post('editId_destinasi');
		$id_destinasi = intval(strstr($editId_destinasi, '-', true));
		$page = intval(str_replace('-','',strstr($editId_destinasi,'-')));


		$nama_destinasi = $this->input->post('nama');
		$deskripsi_destinasi = $this->input->post('deskripsi');
		$harga = $this->input->post('price');
		$durasi_siang = $this->input->post('day');
		$durasi_malam = $this->input->post('night');
		$favorite = $this->input->post('favorite');
		$picture = $_FILES['picture'];
		if ($picture=''){}else{
			$config['upload_path'] = './assets/images';
			$config['allowed_types'] = 'jpg|png|gif';
			$this->load->library('upload',$config);
			$this->upload->do_upload('picture');
			$picture=$this->upload->data('file_name');
		}
		$where = array(
			'id_destinasi' => $id_destinasi
		);
		$data = array();
			if($nama_destinasi){$data['nama_destinasi'] = $nama_destinasi;}
			if($deskripsi_destinasi){$data['deskripsi_destinasi'] = $deskripsi_destinasi;}
			if($harga){$data['harga'] = $harga;}
			if($durasi_siang){$data['durasi_siang'] = $durasi_siang;}
			if($durasi_malam){$data['durasi_malam'] = $durasi_malam;}
			if($picture){$data['preview_destinasi'] = $picture;}
			if($favorite){$data['favorite'] = $favorite;}
		if($data){
			$this->Admin_Model->update_destination(	$where, $data);
		}
		redirect('admin/index_pagination/'.$page);
	}


	public function edit_destination2(){
		$editId_destinasi = $this->input->post('editId_destinasi');
		$id_destinasi = intval(strstr($editId_destinasi, '-', true));
		$page = intval(str_replace('-','',strstr($editId_destinasi,'-')));


		$nama_destinasi = $this->input->post('nama');
		$deskripsi_destinasi = $this->input->post('deskripsi');
		$harga = $this->input->post('price');
		$durasi_siang = $this->input->post('day');
		$durasi_malam = $this->input->post('night');
		$favorite = $this->input->post('favorite');
		$picture = $_FILES['picture'];
		if ($picture=''){}else{
			$config['upload_path'] = './assets/images';
			$config['allowed_types'] = 'jpg|png|gif';
			$this->load->library('upload',$config);
			$this->upload->do_upload('picture');
			$picture=$this->upload->data('file_name');
		}
		$where = array(
			'id_destinasi' => $id_destinasi
		);
		$data = array();
			if($nama_destinasi){$data['nama_destinasi'] = $nama_destinasi;}
			if($deskripsi_destinasi){$data['deskripsi_destinasi'] = $deskripsi_destinasi;}
			if($harga){$data['harga'] = $harga;}
			if($durasi_siang){$data['durasi_siang'] = $durasi_siang;}
			if($durasi_malam){$data['durasi_malam'] = $durasi_malam;}
			if($picture){$data['preview_destinasi'] = $picture;}
			if($favorite){$data['favorite'] = $favorite;}
		if($data){
			$this->Admin_Model->update_destination(	$where, $data);
		}
		redirect('admin/list_destinasi/'.$page);
	}

	public function edit_slider(){
		$id_slider = $this->input->post('id_slider');
		$picture = $_FILES['picture'];
		$kutipan_slider = $this->input->post('kutipan');
		if ($picture=''){}else{
			$config['upload_path'] = './assets/images';
			$config['allowed_types'] = 'jpg|png|gif';
			$this->load->library('upload',$config);
			$this->upload->do_upload('picture');
			$picture=$this->upload->data('file_name');
		}
		$where = array(
			'id_slider' => $id_slider
		);
		$data = array();
		if($kutipan_slider){$data['kutipan_slider'] = $kutipan_slider;}
		if($picture){$data['gambar_slider'] = $picture;}
		if($data){
			$this->Admin_Model->update_slider(	$where, $data);
		}
		redirect('admin/index');
	}

	public function update_newsletter(){
		$id_newsletter = 1;
		$textheader = $this->input->post('textHeader');
		$header1 = $this->input->post('header1');
		$header2 = $this->input->post('header2');
		$header3 = $this->input->post('header3');
		$kutipan1 = $this->input->post('kutipan1');
		$kutipan2 = $this->input->post('kutipan2');
		$kutipan3 = $this->input->post('kutipan3');
		$where = array(
			'id_newsletter' => $id_newsletter
		);
		$data = array();
		if($textheader){$data['textheader'] = $textheader;}
		if($header1){$data['header1'] = $header1;}
		if($header2){$data['header2'] = $header2;}
		if($header3){$data['header3'] = $header3;}
		if($kutipan1){$data['kutipan1'] = $kutipan1;}
		if($kutipan2){$data['kutipan2'] = $kutipan2;}
		if($kutipan3){$data['kutipan3'] = $kutipan3;}
		if($data){
			$this->Admin_Model->update_newsletter(	$where, $data);
		}
		redirect('admin/index_newsletter');
	}

	public function list_destinasi(){
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/list_destinasi');
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
		$this->load->view('admin/header');
		$this->load->view('admin/list', $data);
		$this->load->view('admin/footer');
	}

	public function detail(){
		$uri = $this->uri->segment(3);
		$detail['detail_destination'] = $this->Admin_Model->getDestination($uri);
		$detail['dates'] = $this->Admin_Model->getCurDates($uri);
		$detail['galeri'] = $this->Admin_Model->getGaleriDestinasi($uri);
		$detail['tour_include'] = $this->Admin_Model->getInclude($uri);
		$detail['tour_notinclude'] = $this->Admin_Model->getNotInclude($uri);
		$this->load->view('admin/header');
		$this->load->view('admin/detail_destinasi', $detail);
		$this->load->view('admin/footer');
	}

	public function editor(){
		$uri = $this->uri->segment(3);
		$detail['detail_destination'] = $this->Admin_Model->getDestination($uri);
		$this->load->view('admin/editor', $detail);
	}

	public function submit_editor(){
		$uri = $this->uri->segment(3);
		$detail_perjalan = $this->input->post('detail_perjalanan');
		$where = array(
			'id_destinasi' => $uri
		);
		$data = array(
			'detail_perjalanan' => $detail_perjalan,
		);
		$this->Admin_Model->update_destination(	$where, $data);
		redirect('admin/detail/'.$uri);
	}

	public function tambah_tanggal(){
		$tanggal_berangkat = $this->input->post('berangkat');
		$id_destinasi = $this->input->post('id_destinasi');
		$harga = $this->input->post('harga');
		$data = array(
			'id_destinasi' => $id_destinasi,
			'tanggal_berangkat' =>  $tanggal_berangkat,
			'harga' => $harga
		);
		$this->Admin_Model->input_date($data);
		redirect('admin/detail/'.$id_destinasi);
	}

	public function tambah_include(){
		$sudah_termasuk = $this->input->post('sudah_termasuk');
		$id_destinasi = $this->input->post('id_destinasi');
		$data = array(
			'id_destinasi' => $id_destinasi,
			'keterangan' =>  $sudah_termasuk,
		);
		$this->Admin_Model->input_include($data);
		redirect('admin/index_include/'.$id_destinasi);
	}

	public function tambah_notinclude(){
		$belum_termasuk = $this->input->post('belum_termasuk');
		$id_destinasi = $this->input->post('id_destinasi');
		$data = array(
			'id_destinasi' => $id_destinasi,
			'keterangan' =>  $belum_termasuk,
		);
		$this->Admin_Model->input_notinclude($data);
		redirect('admin/detail/'.$id_destinasi);
	}

	public function delete_tanggal(){
		$id_destinasi = $this->input->post('id_destinasi');
		$id_berangkat = $this->input->post('id_berangkat');
		$this->Admin_Model->deleteTanggal($id_berangkat);
		redirect('admin/detail/'.$id_destinasi);
	}

	public function delete_include(){
		$id_destinasi = $this->input->post('id_destinasi');
		$id_include = $this->input->post('id_include');
		$this->Admin_Model->deleteInclude($id_include);
		redirect('admin/index_include/'.$id_destinasi);
	}

	public function delete_notinclude(){
		$id_destinasi = $this->input->post('id_destinasi');
		$id_notinclude = $this->input->post('id_notinclude');
		$this->Admin_Model->deleteNotInclude($id_notinclude);
		redirect('admin/detail/'.$id_destinasi);
	}

	public function faq()
	{
		$data['faqs'] = $this->Admin_Model->getQuestions(); 
		$main_data['sliders'] = $this->Admin_Model->getSliders();
		$this->load->view('admin/header');
		$this->load->view('admin/fix_slider',$main_data);
		$this->load->view('admin/faq',$data);
		$this->load->view('admin/footer');

	}
	public function deleteQuestions($id){
		
		$data = array('id_faq' => $id);
		$this->Admin_Model->deleteQuestions($id);
		redirect('admin/faq');
	}

	public function editQuestions()
	{
		$id_faq = $this->input->post('editId_faq');
		$pertanyaan = $this->input->post('pertanyaan2');
		$jawaban = $this->input->post('jawaban2');
		/* print_r($id_faq);
		die(); */
		$where = array(
			'id_faq' => $id_faq
		);
		$data = array();
			if($pertanyaan){$data['pertanyaan'] = $pertanyaan;}
			if($jawaban){$data['jawaban'] = $jawaban;}
		if($data){
			$this->Admin_Model->updateQuestions($where, $data);
		}
		redirect('admin/faq');
	}

	public function addQuestions(){
		$pertanyaan = $this->input->post('pertanyaan');
		$jawaban = $this->input->post('jawaban');
		$data = array(
			'pertanyaan' => $pertanyaan,
			'jawaban' =>  $jawaban
		);
		$this->Admin_Model->inputQuestions($data);
		redirect('admin/faq');
	}

	public function request_trip()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/request_trip');
		$this->load->view('admin/footer');

	}
	public function editPassword()
	{
		$id_akun = $this->input->post('id_akun');
		$data['account'] = $this->Admin_Model->getAccount(1);
		$this->load->view('admin/changePassword',$data);
		
	}
	
	public function viewGallery()
	{
		$data['galleries'] = $this->Admin_Model->getGalleries();
		$this->load->view('admin/header');
		$this->load->view('admin/gallery',$data);
		$this->load->view('admin/footer');
	}
	public function edit_gallery(){
		$id_gallery = $this->input->post('id_gallery');
		$picture = $_FILES['picture'];
		$teks = $this->input->post('teks');
		if ($picture=''){}else{
			$config['upload_path'] = './assets/images';
			$config['allowed_types'] = 'jpg|png|gif';
			$this->load->library('upload',$config);
			$this->upload->do_upload('picture');
			$picture=$this->upload->data('file_name');
		}
		$where = array(
			'id_gallery' => $id_gallery
		);
		$data = array();
		if($teks){$data['teks'] = $teks;}
		if($picture){$data['gambar'] = $picture;}
		if($data){
			$this->Admin_Model->update_gallery($where,$data);
		}
		redirect('admin/viewGallery');
	}
	public function edit_fixSlider(){
		$id_slider = $this->input->post('id_slider');
		$picture = $_FILES['picture'];
		$kutipan_slider = $this->input->post('kutipan');
		if ($picture=''){}else{
			$config['upload_path'] = './assets/images';
			$config['allowed_types'] = 'jpg|png|gif';
			$this->load->library('upload',$config);
			$this->upload->do_upload('picture');
			$picture=$this->upload->data('file_name');
		}
		$where = array(
			'id_slider' => $id_slider
		);
		$data = array();
		if($kutipan_slider){$data['kutipan_slider'] = $kutipan_slider;}
		if($picture){$data['gambar_slider'] = $picture;}
		if($data){
			$this->Admin_Model->update_slider(	$where, $data);
		}
		redirect('admin/faq');
	}

	public function add_destinationGaleri(){
		$id_destinasi = $this->input->post('id_destinasi');
		$picture = $_FILES['picture'];
		$teks = $this->input->post('teks');
		if ($picture=''){}else{
			$config['upload_path'] = './assets/images';
			$config['allowed_types'] = 'jpg|png|gif';
			$this->load->library('upload',$config);
			$this->upload->do_upload('picture');
			$picture=$this->upload->data('file_name');
		}
		$data = array(
			'id_destinasi' => $id_destinasi,
			'img_galeri_destinasi' =>  $picture,
		);

		$this->Admin_Model->inDestinationGallery($data);
		redirect('admin/detail/'.$id_destinasi);
	}

	public function booklist(){
		$admin['books'] = $this->User_Model->getBook();
		$this->load->view('admin/header');
        $this->load->view('admin/pesanan', $admin);
        $this->load->view('admin/footer');
	}

}