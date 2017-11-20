<?php 
/**
* 
*/
class materi_model extends CI_Model
{
	public $nama_table	='materi';
	public $kode_materi	= 'kode_materi';
	public $kategori	= 'kategori';
	public $level = 'level';
	public $gambar	= 'gambar';
	public $karakter = 'karakter';
	public $pinyin = 'pinyin';
	public $arti = 'arti';	
	public $order = 'asc';

	public $nama_table2 = 'soal';
	public $kode_soal = 'kode_soal';
	public $soal = 'soal';
	public $pilihan1 = 'pilihan1';
	public $pilihan2 = 'pilihan2';
	public $pilihan3 = 'pilihan3';
	public $pilihan4 = 'pilihan4';
	public $jawaban = 'jawaban';

	function __construct()
	{
		parent::__construct();
	}

//////////////-------------MATERI-------------//////////////
	function ambil_materi(){
		$this->db->select('*');
		return $this->db->get($this->nama_table)->result();
	}

	function ambil_kategori(){
		$this->db->distinct();
		$this->db->select('kategori');
		return $this->db->get($this->nama_table)->result();
	}

	function ambil_kat($kategori){
		$this->db->distinct();
		$this->db->select('kategori');
		$this->db->where($this->kategori, $kategori);
		return $this->db->get($this->nama_table)->row();
	}

	function ambil_materi_kategori($kategori){
		$this->db->select('*');
		$this->db->where($this->kategori, $kategori);
		$this->db->order_by($this->kode_materi,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	function ambil_materi_kode($kode_materi){
		$this->db->select('*');
		$this->db->where($this->kode_materi, $kode_materi);
		return $this->db->get($this->nama_table)->row();
	}

	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	}

	
	function hapus_data($kode_materi){
		$this->db->where($this->kode_materi, $kode_materi);
		$this->db->delete($this->nama_table); 
	}

	function edit_data($kode_materi, $data){ 
		$this->db->where($this->kode_materi,$kode_materi);
		$this->db->update($this->nama_table,$data);
	}


//////////////-------------SOAL-------------//////////////

	function ambil_soal(){
		$this->db->select('*');
		return $this->db->get($this->nama_table2)->result();
	}

	function ambil_soal_kat($kategori){
		$this->db->select('*');
		$this->db->where($this->kategori, $kategori);
		$this->db->order_by($this->kode_soal,$this->order);
		return $this->db->get($this->nama_table2)->result();
	}

	function ambil_soal_kode($kode_soal){
		$this->db->select('*');
		$this->db->where($this->kode_soal, $kode_soal);
		return $this->db->get($this->nama_table2)->row();
	}

	function tambah_data_soal($data){
		return $this->db->insert($this->nama_table2, $data);
	}

	function hapus_data_soal($kode_soal){
		$this->db->where($this->kode_soal, $kode_soal);
		$this->db->delete($this->nama_table2);
	}

	function edit_data_soal($kode_soal, $data){
		$this->db->where($this->kode_soal,$kode_soal);
		$this->db->update($this->nama_table2,$data);
	}

}

?>