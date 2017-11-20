<?php 
/**
* 
*/
class pesan_model extends CI_Model
{
	public $nama_table	='pesan';
	public $kode_pesan	= 'kode_pesan';
	public $sender	= 'sender';
	public $penerima = 'penerima';
	public $subject	= 'subject';
	public $isi = 'isi';
	public $status = 'status';
	public $tanggal = 'tanggal';
	public $keterangan = 'keterangan';	
	public $order = 'desc';


	function __construct()
	{

		parent::__construct();
	}

	function ambil_inbox(){
		$this->db->select('kode_pesan, sender, subject, isi, tanggal');
		$this->db->where($this->penerima, $this->session->userdata('username'));
		$this->db->where($this->status, "message");
		$this->db->order_by($this->tanggal,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	function ambil_sent(){
		$this->db->select('kode_pesan, penerima, subject, isi, tanggal');
		$this->db->where($this->sender, $this->session->userdata('username'));
		$this->db->where($this->status, "message");
		$this->db->order_by($this->tanggal,$this->order);
		return $this->db->get($this->nama_table)->result();
	}
	
	function ambil_trash(){
		$sql=$this->db->query('select * from pesan WHERE status="trash" and penerima="'.$this->session->userdata('username').'" union select * from pesan WHERE status="trash" and sender="'.$this->session->userdata('username').'"');
		return $sql->result();
	}

	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	}

	function hapus_data($kode_pesan){
		$this->db->where($this->kode_pesan, $kode_pesan);
		$this->db->delete($this->nama_table);
	}

	function update_data_inbox($kode_pesan){
		$this->db->query('update pesan set status="trash", keterangan="From Inbox" where kode_pesan="'.$kode_pesan.'"');
	}

	function update_data_sent($kode_pesan){
		$this->db->query('update pesan set status="trash", keterangan="From Sent" where kode_pesan="'.$kode_pesan.'"');
	}
}

?>