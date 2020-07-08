<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index()
	{
		$view = [
			'judul' => 'Login - Perpustakaan BPTP',
		];

		$this->load->view('v_login', $view);
	}

	function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('username' => $username, 'password' => $password);
		
		$cek = $this->m_login->cek_login("users",$where)->num_rows();
		if($cek != 0)
		{
			$data_session = array(
				'nama' => $username,
				'status' => 'login',
			);
			
			$this->session->set_userdata($data_session);
			redirect(base_url('/dashboard'));

		}

		elseif ($cek == 0) 
		{
			$data_session_failed = array(
				'nama' => $username,
				'status' => 'notLogin',
				'msgLogin' => 'Username atau Password yang anda masukan salah !'
			);

			$this->session->set_userdata($data_session_failed);
			redirect(base_url('/'));
		}
		
		else
		{
			redirect(base_url('/'));
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('/'));
	}
}