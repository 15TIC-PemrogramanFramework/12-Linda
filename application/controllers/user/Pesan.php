<?php 
/**
 * 
 */
class pesan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('pesan_model');
		$this->load->model('materi_model');
		$this->load->model('user_model');
		if(!$this->session->userdata('logined_user') || $this->session->userdata('logined_user') != true)
		{
			redirect('/');
		}
	}

	function index(){
		$data = array(
			'sender' => set_value('sender'),
			'subject' => set_value('subject')
		);
		$this->load->helper('smiley');
		$this->load->library('table');

		$image_array = get_clickable_smileys('http://localhost/uts_fw/assets2/smileys/', 'comments');

		$col_array = $this->table->make_columns($image_array, 20);

		$data['smiley_table'] = $this->table->generate($col_array);
		$data['data_kat']=$this->materi_model->ambil_kategori();
		$data['data_inbox']=$this->pesan_model->ambil_inbox();
		$data['data_sent']=$this->pesan_model->ambil_sent();
		$data['data_trash']=$this->pesan_model->ambil_trash();
		$this->load->view('user/pesan', $data );
	}

	function trash_inbox($kode_pesan){
		$this->pesan_model->update_data_inbox($kode_pesan);
		redirect(site_url('user/pesan'));
	}

	function trash_sent($kode_pesan){
		$this->pesan_model->update_data_sent($kode_pesan);
		redirect(site_url('user/pesan'));
	}

	function balas($sender, $subject){
		$data = array(
			'sender' => set_value('sender', $sender),
			'subject' => set_value('subject', $subject)
		);
		$this->load->helper('smiley');
		$this->load->library('table');

		$image_array = get_clickable_smileys('http://localhost/uts_fw/assets2/smileys/', 'comments');

		$col_array = $this->table->make_columns($image_array, 20);

		$data['smiley_table'] = $this->table->generate($col_array);
		$data['data_kat']=$this->materi_model->ambil_kategori();
		$data['data_inbox']=$this->pesan_model->ambil_inbox();
		$data['data_sent']=$this->pesan_model->ambil_sent();
		$data['data_trash']=$this->pesan_model->ambil_trash();
		$this->load->view('user/pesan', $data );
	}

	function tambah_aksi(){
		$data = array(
			'kode_pesan' => $this->input->post('kode_pesan'),
			'sender' =>$this->input->post('sender'),
			'penerima' =>$this->input->post('penerima'),
			'subject'		=> $this->input->post('subject'),
			'isi'	=> $this->input->post('isi'),
		);
		$this->pesan_model->tambah_data($data);
		redirect(site_url('user/pesan'));
	}

	function delete($kode_pesan){
		$this->pesan_model->hapus_data($kode_pesan);
		redirect(site_url('user/pesan'));
	}

	function editprofil($username){
		$mhs=$this->user_model->ambil_profil($username);
		$data=array(
			'kode_user'		=>set_value('$kode_user', $mhs->kode_user), 
			'username'		=>set_value('$username', $mhs->username), 
			'password'		=>set_value('$password', $mhs->password),
			'foto_profil' =>set_value('foto_profil', $mhs->foto_profil),
			'email'	=>set_value('$email', $mhs->email),
			'no_hp' =>set_value('$no_hp', $mhs->no_hp),
			'jk' => set_value('$jk', $mhs->jk)
		);
		$data['data_kat']=$this->materi_model->ambil_kategori();
		$this->load->view('user/editprofile',$data);
		
	}

	function edit_aksi(){
		$foto_profil =$_FILES['foto_profil']['name'];
		move_uploaded_file($_FILES['foto_profil']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/uts_fw/assets2/foto/'.$foto_profil);
		$encoded_image = base64_encode(file_get_contents(base_url('assets2/foto/'.$foto_profil)) );
	
		$data=array(
			'username'		=>$this->input->post('username'),
			'password'		=>$this->input->post('password'),
			'foto_profil' =>$encoded_image,
			'email'	=>$this->input->post('email'),
			'no_hp' =>$this->input->post('no_hp'),
			'jk'=>$this->input->post('jk')
		);
		$kode_user=$this->input->post('kode_user');

		$this->user_model->edit_data($kode_user,$data);
		redirect(site_url('login/beranda'));
	} 
}
?>