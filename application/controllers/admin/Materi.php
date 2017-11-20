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
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	}

	function index(){
		$data['data_materi']=$this->materi_model->ambil_materi();
		$this->load->view('admin/materi_list', $data);
	}

	function tampil(){
		$bio=$this->materi_model->ambil_kat('Angka');
 		$data=array(
 			'kategori'		=>set_value('kategori',$bio->kategori)
 		);
 		$data['data_materi']=$this->materi_model->ambil_materi_kategori('Angka');
		$data['data_soal']=$this->materi_model->ambil_soal('Angka');
		$data['data_kat']=$this->materi_model->ambil_kategori();
		$this->load->view('admin/isimateri',$data);
	}

	function tampil_kategori($kategori){
		$bio=$this->materi_model->ambil_kat($kategori);
 		$data=array(
 			'kategori'		=>set_value('kategori',$bio->kategori)
 		);
		$data['data_materi']=$this->materi_model->ambil_materi_kategori($kategori);
		$data['data_kat']=$this->materi_model->ambil_kategori();
		$this->load->view('admin/isimateri',$data ); 
	}

	function tambah(){
		$data = array(
 			'action'=> site_url('admin/materi/tambah_aksi'),
 			'kode_materi'		=>set_value('kode_materi'),
 			'kategori'		=>set_value('kategori'),
 			'gambar'		=>set_value('gambar'),
 			'karakter'		=>set_value('karakter'),
 			'pinyin'		=>set_value('pinyin'),
 			'arti'		=>set_value('arti'),
 			'button' => 'Tambah'
 		);
		$this->load->view('admin/materi_form', $data);
	}

	function tambah_aksi(){
		$gambar =$_FILES['gambar']['name'];
		move_uploaded_file($_FILES['gambar']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/uts_fw/assets2/foto/'.$gambar);
		$encoded_image = base64_encode(file_get_contents(base_url('assets2/foto/'.$gambar)) );

		//$gambar	=$this->input->post('gambar');
		//$encoded_image = base64_encode(file_get_contents(base_url('assets2/foto/'.$gambar)) );
		$data = array(
			'kode_materi'		=> $this->input->post('kode_materi'),
			'kategori'		=> $this->input->post('kategori'),
			'gambar'	=> $encoded_image,
			'karakter'		=> $this->input->post('karakter'),
			'pinyin'	=> $this->input->post('pinyin'),
			'arti'		=> $this->input->post('arti')
		);
 		$this->materi_model->tambah_data($data);
 		redirect(site_url('admin/materi'));
 	}

 	function delete($kode_materi){
 		$this->materi_model->hapus_data($kode_materi);
 		redirect(site_url('admin/materi'));

 	}

 	function edit($kode_materi){
 		$bio=$this->materi_model->ambil_materi_kode($kode_materi);
 		$data=array(
 			'kode_materi'		=>set_value('kode_materi',$bio->kode_materi),
 			'kategori'		=>set_value('kategori',$bio->kategori),
 			'gambar'		=>set_value('gambar',"data:image/jpeg;base64,'.base64_encode($bio->gambar).'"),
 			'karakter'		=>set_value('karakter',$bio->karakter),
 			'pinyin'		=>set_value('pinyin',$bio->pinyin),
 			'arti'		=>set_value('arti',$bio->arti),
 			'action'	=> site_url('admin/materi/edit_aksi'),
 			'button' 	=> 'Edit'
 		);
		$this->load->view('admin/materi_form',$data);
	}

	function edit_aksi(){
		$gambar =$_FILES['gambar']['name'];
		move_uploaded_file($_FILES['gambar']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/uts_fw/assets2/foto/'.$gambar);
		$encoded_image = base64_encode(file_get_contents(base_url('assets2/foto/'.$gambar)) );

		//$gambar	=$this->input->post('gambar');
		//$encoded_image = base64_encode(file_get_contents(base_url('assets2/foto/'.$gambar)) );
		$data = array(
			'kategori'		=> $this->input->post('kategori'),
			'gambar'	=> $encoded_image,
			'karakter'		=> $this->input->post('karakter'),
			'pinyin'	=> $this->input->post('pinyin'),
			'arti'		=> $this->input->post('arti')
		);
 		$kode_materi=$this->input->post('kode_materi');
 		$this->materi_model->edit_data($kode_materi, $data); 
 		redirect(site_url('admin/materi')); 
 	}





	function soal(){
		$data['data_soal']=$this->materi_model->ambil_soal();
		$this->load->view('admin/soal_list', $data);
	}
	
	function tampil_soal($kategori){
		$data['data_soal']=$this->materi_model->ambil_soal($kategori);
		$data['data_kat']=$this->materi_model->ambil_kategori();
		$this->load->view('admin/isisoal',$data ); 
	}

 	function tambah_soal(){
		$data = array(
 			'action'=> site_url('admin/materi/tambah_aksi_soal'),
 			'kode_soal'		=>set_value('kode_soal'),
 			'kategori'		=>set_value('kategori'),
 			'soal'		=>set_value('soal'),
 			'pilihan1'		=>set_value('pilihan1'),
 			'pilihan2'		=>set_value('pilihan2'),
 			'pilihan3'		=>set_value('pilihan3'),
 			'pilihan4'		=>set_value('pilihan4'),
 			'jawaban'		=>set_value('jawaban'),
 			'button' => 'Tambah'
 		);
		$this->load->view('admin/soal_form', $data);
	}

	function tambah_aksi_soal(){
		$data = array(
			'kode_soal'		=> $this->input->post('kode_soal'),
			'kategori'		=> $this->input->post('kategori'),
			'soal'	=> $this->input->post('soal'),
			'pilihan1'	=> $this->input->post('pilihan1'),
			'pilihan2'	=> $this->input->post('pilihan2'),
			'pilihan3'	=> $this->input->post('pilihan3'),
			'pilihan4'	=> $this->input->post('pilihan4'),
			'jawaban'		=> $this->input->post('jawaban')
		);
 		$this->materi_model->tambah_data_soal($data);
 		redirect(site_url('admin/materi/soal'));
 	}

 	function delete_soal($kode_soal){
 		$this->materi_model->hapus_data_soal($kode_soal);
 		redirect(site_url('admin/materi/soal'));

 	}

 	function edit_soal($kode_soal){
 		$bio=$this->materi_model->ambil_soal_kode($kode_soal);
 		$data=array(
 			'kode_soal'		=>set_value('kode_soal',$bio->kode_soal),
 			'kategori'		=>set_value('kategori',$bio->kategori),
 			'soal'		=>set_value('soal',$bio->soal),
 			'pilihan1'		=>set_value('pilihan1',$bio->pilihan1),
 			'pilihan2'		=>set_value('pilihan2',$bio->pilihan2),
 			'pilihan3'		=>set_value('pilihan3',$bio->pilihan3),
 			'pilihan4'		=>set_value('pilihan4',$bio->pilihan4),
 			'jawaban'		=>set_value('jawaban',$bio->jawaban),
 			'action'	=> site_url('admin/materi/edit_aksi_soal'),
 			'button' 	=> 'Edit'
 		);
		$this->load->view('admin/soal_form',$data);
	}

	function edit_aksi_soal(){
		$data = array(
			'kategori'		=> $this->input->post('kategori'),
			'soal'	=> $this->input->post('soal'),
			'pilihan1'	=> $this->input->post('pilihan1'),
			'pilihan2'		=> $this->input->post('pilihan2'),
			'pilihan3'	=> $this->input->post('pilihan3'),
			'pilihan4'	=> $this->input->post('pilihan4'),
			'jawaban'		=> $this->input->post('jawaban')
		);
 		$kode_soal=$this->input->post('kode_soal');
 		$this->materi_model->edit_data_soal($kode_soal, $data);
 		redirect(site_url('admin/materi/soal'));
 	}
 } 
 ?>