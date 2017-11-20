<?php 

/**
 * 
 */
class berita extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->model('materi_model');
		if(!$this->session->userdata('logined_user') || $this->session->userdata('logined_user') != true)
		{
			redirect('/');
		}
	}

	function index(){
		$data['data_berita']=$this->berita_model->ambil_berita_singkat();
		$data['data_kat']=$this->materi_model->ambil_kategori();
		$this->load->view('user/berita', $data);
	}

	function readme($kode_berita){
		$this->load->helper('smiley');
		$this->load->library('table');

		$image_array = get_clickable_smileys('http://localhost/uts_fw/assets2/smileys/', 'comments');

		$col_array = $this->table->make_columns($image_array, 20);

		$data['smiley_table'] = $this->table->generate($col_array);
		$data['ambil_id']=$this->berita_model->ambil_berita_id_user($kode_berita);
		$data['data_komen']=$this->berita_model->data_komen($kode_berita);
 		$data['data_jml_komen']=$this->berita_model->jml_komen_id($kode_berita);
 		$data['data_kat']=$this->materi_model->ambil_kategori();

		$this->load->view('user/isiberita',$data );
	}
	
	 function tambah_aksi_komen($kode_berita){
 		$data = array(
 			'kode_berita'		=> $this->input->post('kode_berita'),
 			'kode_komen'		=> "null",
 			'username'		=> $this->input->post('username'),
 			'komentar'	=> $this->input->post('komentar'),
 		);
 	$this->berita_model->tambah_data_komen($data);
 	redirect(site_url('user/berita/readme/'.$kode_berita));
 }
 
 	function delete_komen($kode_komen, $kode_berita){
 		$this->berita_model->hapus_data_komen($kode_komen);
 		redirect(site_url('user/berita/readme/'.$kode_berita));

 	}
 } 
 ?>