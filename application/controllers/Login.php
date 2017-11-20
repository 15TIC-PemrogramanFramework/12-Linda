<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('materi_model');
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->view('home/home');
	}

	public function login(){
		$this->load->view('login');
	}

	public function ceklogin()
	{
		if($this->session->userdata('logined') && $this->session->userdata('logined') == true)
		{	
			redirect('admin/berita');
		}
		else if($this->session->userdata('logined_user') && $this->session->userdata('logined_user') == true){
			redirect('login/beranda');
		}
		
		
		if(!$this->input->post())
		{
			$this->load->view('login');
		}
		else
		{
			$cek_login=$this->login_model->cek_login(
				$this->input->post('username'),
				$this->input->post('password')
			);

			if(!empty($this->login_model->cek_login(
				$this->input->post('username'),
				$this->input->post('password')
			)))
			{
				$this->session->set_userdata('logined', true);
				$this->session->set_userdata('username',$cek_login->username);
				redirect("admin/berita");
			}
			else 
			{
				$cek_login2=$this->login_model->cek_login2(
					$this->input->post('username'),
					$this->input->post('password')
				);

				if(!empty($this->login_model->cek_login2(
					$this->input->post('username'),
					$this->input->post('password')
				)))
				{
					$this->session->set_userdata('logined_user', true);
					$this->session->set_userdata('username',$cek_login2->username);
					redirect("login/beranda");
				}
				else 
				{
				redirect("/");
			}
		}
	}
} 


public function logout()
{
	$this->session->unset_userdata('logined');
	redirect("/");
}

public function logout2()
{
	$this->session->unset_userdata('logined_user');
	redirect("/");
}


public function beranda(){
	if(!$this->session->userdata('logined_user') || $this->session->userdata('logined_user') != true)
	{
		redirect('login/login');
	}
	$data['data_user']=$this->user_model->ambil_user_nama($this->session->userdata('username'));
	$data['data_kat']=$this->materi_model->ambil_kategori();
	$this->load->view('user/beranda', $data);
}
}

/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */