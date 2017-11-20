<?php 
/**
* 
*/
class login_model extends CI_Model
{
	
	public $nama_table1 	= 'tutor';
	public $nama_table2 = 'user';
	public $username		= 'username';
	public $password		= 'password';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username, $password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table1)->row();
	}

	function cek_login2($username, $password){
		$this->db->where('username',$username);
		$this->db->where('password', $password);
		return $this->db->get($this->nama_table2)->row();
	}
}
?>