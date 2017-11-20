<?php 
/**
* 
*/
class user_model extends CI_Model
{
	public $nama_table	='user';
	public $kode_user = 'kode_user';
	public $username	= 'username';
	public $judul	= 'password';
	public $gambar	= 'email';
	public $teks = 'no_hp';
	public $order = 'desc';

	public $nama_table2 = 'nilai';
	public $kode_nilai = 'kode_nilai';
	public $tanggal = 'tanggal';


	function __construct()
	{
		parent::__construct();
	}

	function ambil_data(){
		$this->db->order_by($this->kode_user,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	function ambil_user_id($kode_user){
		$this->db->where($this->kode_user,$kode_user);
		return $this->db->get($this->nama_table)->row();
	}	

	function ambil_user_nama($username){
		$this->db->where($this->username,$username);
		return $this->db->get($this->nama_table)->result();
	}	

	function ambil_profil($username){
		$this->db->where($this->username,$username);
		return $this->db->get($this->nama_table)->row();
	}	

	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	}

	function hapus_data($kode_user){
		$this->db->where($this->kode_user, $kode_user);
		$this->db->delete($this->nama_table);
	}

	function edit_data($kode_user, $data){
		$this->db->where($this->kode_user,$kode_user);
		$this->db->update($this->nama_table,$data);
	}

//////////////-------------NILAI-------------//////////////
	function ambil_nilai(){
		$this->db->order_by($this->tanggal,$this->order);
		return $this->db->get($this->nama_table2)->result();
	}

	function tambah_nilai($data){
		return $this->db->insert($this->nama_table2, $data);
	}

	function hapus_nilai($kode_nilai){
		$this->db->where($this->kode_nilai, $kode_nilai);
		$this->db->delete($this->nama_table2);
	}
}

?>