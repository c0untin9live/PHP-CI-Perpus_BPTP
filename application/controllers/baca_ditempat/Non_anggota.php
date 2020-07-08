<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Non_anggota extends CI_Controller
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
            'sub_title' => 'Non Anggota',
            'location' => 'Baca Ditempat',
            'content' => 'baca_ditempat/v_non_anggota',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>