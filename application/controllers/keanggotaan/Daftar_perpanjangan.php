<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_perpanjangan extends CI_Controller
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
            'judul' => 'Daftar Perpanjangan',
            'location' => 'Keanggotaan',
            'content' => 'keanggotaan/v_daftar_perpanjangan',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>