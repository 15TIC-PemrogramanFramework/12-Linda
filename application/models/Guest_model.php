<?php 
/**
* 
*/
class guest_model extends CI_Model
{
	
	public $nama_table1 	= 'saran';
	public $kode = 'kode';

	function __construct()
	{
		parent::__construct();
	}

	function tampil(){
		$this->db->select('*');
		return $this->db->get($this->nama_table1)->result();
	}


	function tambah_saran($data){
		return $this->db->insert($this->nama_table1, $data);
	}

	function hapus_data($kode){
		$this->db->where($this->kode, $kode);
		$this->db->delete($this->nama_table1);
	}
}
 ?>