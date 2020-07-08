<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entry_katalog extends CI_Controller
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
            'judul' => 'Entry Katalog',
            'location' => 'Katalog',
            'content' => 'katalog/v_entry_katalog',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>