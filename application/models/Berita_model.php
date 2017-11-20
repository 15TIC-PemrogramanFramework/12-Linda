<?php 
/**
* 
*/
class berita_model extends CI_Model
{
	public $nama_table	='berita';
	public $nama_table2	='komentar';
	public $kode_berita	= 'kode_berita';
	public $judul	= 'judul';
	public $gambar	= 'gambar';
	public $teks = 'teks';
	public $order		= 'desc';
	public $tanggal_berita ='tanggal_berita';
	public $kode_komen = 'kode_komen';
	public $username = 'username';
	public $komentar = 'komentar';
	public $tanggal_komen = 'tanggal_komen';
	public $jmlkomen = 'jmlkomen';

	function __construct()
	{
		parent::__construct();
	}

//////////////-------------Berita-------------//////////////
	function ambil_berita_singkat(){
		$query=$this->db->query('select b.kode_berita, b.judul, b.gambar, SUBSTRING(b.teks, 1, 300) as teks, b.tanggal_berita, k.jmlkomen
			from berita b, 	(select b.kode_berita, count(k.komentar) as jmlkomen
			from berita b
            left join komentar k on k.kode_berita = b.kode_berita
			group by b.kode_berita) k
			where b.kode_berita = k.kode_berita
			order by tanggal_berita desc');
		return $query->result();
	}

	function ambil_berita_id($kode_berita){
		$this->db->where($this->kode_berita,$kode_berita);
		return $this->db->get($this->nama_table)->row();
	}	

	function ambil_berita_id_user($kode_berita){
		$query=$this->db->query('select kode_berita, judul, gambar, teks, tanggal_berita, (SELECT count(*)
			from komentar
			where kode_berita='.$kode_berita.') as jmlkomen
			from berita
			where kode_berita='.$kode_berita);
		return $query->result();
	}	

	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	}

	function hapus_data($kode_berita){
		$this->db->where($this->kode_berita, $kode_berita);
		$this->db->delete($this->nama_table); 
	}

	function edit_data($kode_berita, $data){
		$this->db->where($this->kode_berita,$kode_berita);
		$this->db->update($this->nama_table,$data);
	}


//////////////-------------Komentar-------------//////////////
	function ambil_komen_id($kode_komen){
		$this->db->where($this->kode_komen,$kode_komen);
		return $this->db->get($this->nama_table2)->row();
	}	

	function jml_komen(){
		$this->db->select('count(*) as jmlkomen');
		$this->db->join('berita', 'komentar.kode_berita = berita.kode_berita');
		$this->db->group_by('berita.kode_berita');
		return $this->db->get($this->nama_table2)->result();
	}

	function jml_komen_id($kode_berita){
		$this->db->select('count(*) as jmlkomen');
		$this->db->join('berita', 'komentar.kode_berita = berita.kode_berita');
		return $this->db->get($this->nama_table2)->result();
	}

	function ambil_komen(){
		$this->db->order_by($this->tanggal_komen, $this->order);
		return $this->db->get($this->nama_table2)->result();
	}

	function data_komen($kode_berita){
		$query=$this->db->query('select k.*, u.foto_profil
			from komentar k, user u
			where k.username = u.username
			and k.kode_berita='.$kode_berita);
		return $query->result();
	}

	function tambah_data_komen($data){
		return $this->db->insert($this->nama_table2, $data);
	}

	function hapus_data_komen($kode_komen){
		$this->db->where($this->kode_komen, $kode_komen);
		$this->db->delete($this->nama_table2); 
	}

	function edit_data_komen($kode_komen, $data){
		$this->db->where($this->kode_komen,$kode_komen);
		$this->db->update($this->nama_table2,$data);
	}
}

?>