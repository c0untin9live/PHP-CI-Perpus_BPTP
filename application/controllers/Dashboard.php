<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
 
	function __construct()
	{
		parent::__construct();
	
		if($this->session->userdata('status') != "login")
		{
			redirect(base_url("/"));
		}
	}
 
	function index()
	{
		$view = [
			'title' => 'Perpustakaan BPTP',
			'location' => 'Dashboard',
			'content' => 'v_dashboard',
		];

		$this->load->view('component/v_wrapper', $view);
	}

}
?>
