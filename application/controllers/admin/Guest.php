<?php 
/**
* 
*/
class guest extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('guest_model');	
	}


 	function index(){
	$data['data_saran']=$this->guest_model->tampil();
	$this->load->view('admin/saran_list',$data);
	}

	function send(){
	$data=array(
			'kode' =>$this->input->post('kode'),
			'nama'		=> $this->input->post('nama'),
			'email'	=> $this->input->post('email'),
			'saran'	=>$this->input->post('saran')
		);
	$this->guest_model->tambah_saran($data);
	redirect(site_url('login'));
	}

	function delete($kode){
		$this->guest_model->hapus_data($kode);
		redirect(site_url('admin/guest'));
	}
}
?>