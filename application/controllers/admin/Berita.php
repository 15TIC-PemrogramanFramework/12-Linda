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
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	}

	function index()
	{
		$data['data_berita']=$this->berita_model->ambil_berita_singkat();
		$this->load->view('admin/berita_list',$data);
	}

	function komentar()
	{
		$data['data_komen']=$this->berita_model->ambil_komen();
		$this->load->view('admin/komen_list',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'	=>site_url('admin/berita/tambah_aksi'),
			'kode_berita'		=>set_value('kode_berita'),
			'judul'		=>set_value('judul'),
			'gambar'	=>set_value('gambar'),
			'teks'		=>set_value('teks'),
			'tanggal_berita' => set_value('tanggal_berita'),
			'button'	=>'Tambah'
		);
		$this->load->view('admin/berita_form',$data);
	}

	function tambah_aksi()
	{
		$gambar =$_FILES['gambar']['name'];
		move_uploaded_file($_FILES['gambar']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/uts_fw/assets2/foto/'.$gambar);
		$encoded_image = base64_encode(file_get_contents(base_url('assets2/foto/'.$gambar)) );
		//$gambar	=$this->input->post('gambar');
		//$encoded_image = base64_encode(file_get_contents(base_url('assets2/foto/'.$gambar)) );
		$data=array(
			'kode_berita'		=>$this->input->post('kode_berita'),
			'judul'		=>$this->input->post('judul'),
			'gambar'	=>$encoded_image,
			'teks' => $this->input->post('teks'),
		);
		$this->berita_model->tambah_data($data); 
		redirect(site_url('admin/berita'));
	}

	function delete($kode_berita){
		$this->berita_model->hapus_data($kode_berita);
		redirect(site_url('admin/berita'));
	}

	function edit($kode_berita){
		
		$mhs=$this->berita_model->ambil_berita_id($kode_berita);
		$data=array(
			'kode_berita'		=>set_value('$kode_berita', $mhs->kode_berita), 
			'judul'		=>set_value('$judul', $mhs->judul), 
			'gambar'		=>set_value('$gambar', "data:image/jpeg;base64,'.base64_encode($mhs->gambar).'"),
			'teks'	=>set_value('$teks', $mhs->teks),
			'tanggal_berita' =>set_value('$tanggal_berita', $mhs->tanggal_berita),
			'action'	=>site_url('admin/berita/edit_aksi'),
			'button'	=>'Edit'
			);
		$this->load->view('admin/berita_form',$data);
	}

	function edit_aksi(){
		$gambar =$_FILES['gambar']['name'];
		move_uploaded_file($_FILES['gambar']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/uts_fw/assets2/foto/'.$gambar);
		$encoded_image = base64_encode(file_get_contents(base_url('assets2/foto/'.$gambar)) );
		//$gambar	=$this->input->post('gambar');
		//$encoded_image = base64_encode(file_get_contents(base_url('assets2/foto/'.$gambar)) );
		$data=array(
			'judul'		=>$this->input->post('judul'),
			'gambar'	=>$encoded_image,
			'teks' => $this->input->post('teks')
		);
		$kode_berita=$this->input->post('kode_berita');
		$this->berita_model->edit_data($kode_berita,$data);
		redirect(site_url('admin/berita'));
	}

	function delete_komen($kode_komen){
		$this->berita_model->hapus_data_komen($kode_komen);
		redirect(site_url('admin/berita/komentar'));
	}
}
?>