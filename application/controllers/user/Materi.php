<?php 

/**                                                                                                                                                                                                                                                          
 * 
 */
class materi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('materi_model');
		$this->load->model('user_model');
		if(!$this->session->userdata('logined_user') || $this->session->userdata('logined_user') != true)
		{
			redirect('/');
		}
	}

	function index(){
		$data['data_kat']=$this->materi_model->ambil_kategori();
		$this->load->view('user/header',$data);
	}

	function jawaban($kategori){
		$soal1 = $this->input->post('soal1');
		$jwb1= $this->input->post('jwb1');
		$soal2 = $this->input->post('soal2');
		$jwb2 = $this->input->post('jwb2');
		$soal3 = $this->input->post('soal3');
		$jwb3 =$this->input->post('jwb3');
		$soal4 = $this->input->post('soal4');
		$jwb4 = $this->input->post('jwb4');
		$soal5 = $this->input->post('soal5');
		$jwb5 = $this->input->post('jwb5');
		$soal6 = $this->input->post('soal6');
		$jwb6 = $this->input->post('jwb6');
		$soal7 = $this->input->post('soal7');
		$jwb7 = $this->input->post('jwb7');
		$soal8 = $this->input->post('soal8');
		$jwb8 = $this->input->post('jwb8');
		$soal9 = $this->input->post('soal9');
		$jwb9 = $this->input->post('jwb9');
		$jmlsoal=$this->input->post('jmlsoal');
		$nilai = 0;

		if ($soal1==$jwb1 && $jwb1!=null) {
			$nilai += 100;
		}
		if ($soal2==$jwb2 && $jwb2!=null) {
			$nilai+=100;
		}
		if ($soal3==$jwb3 && $jwb3!=null) {
			$nilai+=100;
		}
		if ($soal4==$jwb4 && $jwb4!=null) {
			$nilai+=100;
		}
		if ($soal5==$jwb5 && $jwb5!=null) {
			$nilai+=100;
		}
		if ($soal6==$jwb6 && $jwb6!=null) {
			$nilai+=100;
		}
		if ($soal7==$jwb7 && $jwb7!=null) {
			$nilai+=100;
		}
		if ($soal8==$jwb8 && $jwb8!=null) {
			$nilai+=100;
		}
		if ($soal9==$jwb9 && $jwb9!=null) {
			$nilai+=100;
		}
		else{
			$nilai+=0;
		}


		$nilai /= $jmlsoal;

		$bio=$this->materi_model->ambil_kat($kategori);
		$data=array(
			'kode_nilai' =>"",
			'username' => $this->session->userdata('username'),
			'nilai' =>$nilai,
			'kategori'		=>set_value('kategori',$bio->kategori)
		);
		$this->user_model->tambah_nilai($data); 

		$data['data_soal']=$this->materi_model->ambil_soal_kat($kategori);
		$data['data_kat']=$this->materi_model->ambil_kategori();
		$this->load->view('user/jawaban',$data ); 
	}

	function tampil_kategori($kategori){
		$bio=$this->materi_model->ambil_kat($kategori);
		$data=array(
			'kategori'		=>set_value('kategori',$bio->kategori)
		);
		$data['data_materi']=$this->materi_model->ambil_materi_kategori($kategori);
		$data['data_kat']=$this->materi_model->ambil_kategori();
		$this->load->view('user/materi',$data ); 
	}

	function tampil_soal($kategori){
		$bio=$this->materi_model->ambil_kat($kategori);
		$data=array(
			'kategori'		=>set_value('kategori',$bio->kategori)
		);
		$data['data_soal']=$this->materi_model->ambil_soal_kat($kategori);
		$data['data_kat']=$this->materi_model->ambil_kategori();
		$this->load->view('user/soal',$data ); 
	}


} 
?>