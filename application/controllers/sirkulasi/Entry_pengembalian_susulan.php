<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entry_pengembalian_susulan extends CI_Controller
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
            'sub_title' => 'Entry Pengembalian Susulan',
            'location' => 'Sirkulasi',
            'content' => 'sirkulasi/v_entry_pengembalian_susulan',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>