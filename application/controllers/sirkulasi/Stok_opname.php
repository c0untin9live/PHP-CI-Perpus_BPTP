<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_opname extends CI_Controller
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
            'sub_title' => 'Stok Opname',
            'location' => 'Sirkulasi',
            'content' => 'sirkulasi/v_stok_opname',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>