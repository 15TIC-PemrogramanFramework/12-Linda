<?php 
/**
* 
*/
class user extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('user_model');	
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true) //sessionnya namanya logined
		{
			redirect('/');
		}	
	}

	function index()
	{
		$data['data_user']=$this->user_model->ambil_data();
		$this->load->view('admin/user_list',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'	=>site_url('admin/user/tambah_aksi'),
			'kode_user' => set_value('kode_user'),
			'username'		=>set_value('username'),
			'foto_profil' => set_value('foto_profil'),
			'password'		=>set_value('password'),
			'email'	=>set_value('email'),
			'no_hp'		=>set_value('no_hp'),
			'jk' =>set_value('jk'),
			'button'	=>'Tambah'
		);
		$this->load->view('admin/user_form',$data);
	}

	function tambah_aksi()
	{
		$foto_profil =$_FILES['foto_profil']['name'];
		move_uploaded_file($_FILES['foto_profil']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/uts_fw/assets2/foto/'.$foto_profil);
		$encoded_image = base64_encode(file_get_contents(base_url('assets2/foto/'.$foto_profil)) );

		//$foto_profil	=$this->input->post('foto_profil');
		//$encoded_image = base64_encode(file_get_contents(base_url('assets2/foto/'.$foto_profil)) );
		$data=array(
			'username'		=>$this->input->post('username'), 
			'password'		=>$this->input->post('password'),
			'foto_profil' =>$encoded_image,
			'email'	=>$this->input->post('email'),
			'no_hp' =>$this->input->post('no_hp'),
			'jk' =>$this->input->post('jk')

		);
		$this->user_model->tambah_data($data);
		redirect(site_url('admin/user')); 
	}

	function delete($kode_user){
		$this->user_model->hapus_data($kode_user);
		redirect(site_url('admin/user'));
	}

	function nilai(){
		$data['data_nilai']=$this->user_model->ambil_nilai();
		$this->load->view('admin/nilai_list',$data);
	}

	function delete_nilai($kode_nilai){
		$this->user_model->hapus_nilai($kode_nilai);
		redirect(site_url('admin/user/nilai'));
	}

}

 ?>