<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian_koleksi_baca_ditempat extends CI_Controller
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
            'sub_title' => 'Pengembalian Koleksi Baca Ditempat',
            'location' => 'Baca Ditempat',
            'content' => 'baca_ditempat/v_pengembalian_koleksi_baca_ditempat',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>