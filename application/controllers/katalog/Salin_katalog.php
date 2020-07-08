<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salin_katalog extends CI_Controller
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
            'judul' => 'Salin Katalog',
            'location' => 'Katalog',
            'content' => 'katalog/v_salin_katalog',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>