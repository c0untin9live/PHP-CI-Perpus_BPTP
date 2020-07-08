<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entry_anggota extends CI_Controller
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
            'judul' => 'Entry Anggota',
            'location' => 'Keanggotaan',
            'content' => 'keanggotaan/v_entry_anggota',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>