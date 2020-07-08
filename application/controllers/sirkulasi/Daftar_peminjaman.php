<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_peminjaman extends CI_Controller
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
            'judul' => 'Daftar Pemijaman',
            'location' => 'Sirkulasi',
            'content' => 'sirkulasi/v_daftar_peminjaman',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>