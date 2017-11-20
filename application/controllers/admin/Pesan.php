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
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true) //sessionnya namanya logined
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
		$data['data_inbox']=$this->pesan_model->ambil_inbox();
		$data['data_sent']=$this->pesan_model->ambil_sent();
		$data['data_trash']=$this->pesan_model->ambil_trash();
		$this->load->view('admin/pesan', $data );
	}

	function trash_inbox($kode_pesan){
		$this->pesan_model->update_data_inbox($kode_pesan);
		redirect(site_url('admin/pesan'));
	}

	function trash_sent($kode_pesan){
		$this->pesan_model->update_data_sent($kode_pesan);
		redirect(site_url('admin/pesan'));
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
		$data['data_inbox']=$this->pesan_model->ambil_inbox();
		$data['data_sent']=$this->pesan_model->ambil_sent();
		$data['data_trash']=$this->pesan_model->ambil_trash();
		$this->load->view('admin/pesan', $data );
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
		redirect(site_url('admin/pesan'));
	}

	function delete($kode_pesan){
		$this->pesan_model->hapus_data($kode_pesan);
		redirect(site_url('admin/pesan'));
	}
} 
?>