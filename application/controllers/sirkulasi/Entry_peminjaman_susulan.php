<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entry_peminjaman_susulan extends CI_Controller
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
            'judul' => 'Entry Peminjaman Susulan',
            'location' => 'Sirkulasi',
            'content' => 'sirkulasi/v_entry_peminjaman_susulan',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>