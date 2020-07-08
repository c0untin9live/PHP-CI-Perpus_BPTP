<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends CI_Controller
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
            'sub_title' => 'SMS',
            'location' => 'Laporan',
            'content' => 'laporan/v_sms',
        ];

        $this->load->view('component/v_wrapper', $view);
    }

}
?>
