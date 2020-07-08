<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_konten_digital extends CI_Controller
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
            'judul' => 'Daftar Konten Digital',
            'location' => 'Katalog',
            'content' => 'katalog/v_daftar_konten_digital',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>