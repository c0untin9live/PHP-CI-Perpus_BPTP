<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang_anggota extends CI_Controller
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
            'judul' => 'Keranjang Anggota',
            'location' => 'Keanggotaan',
            'content' => 'keanggotaan/v_keranjang_anggota',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>