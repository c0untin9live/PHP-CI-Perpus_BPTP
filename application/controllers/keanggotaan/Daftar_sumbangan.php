<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_sumbangan extends CI_Controller
{
    function index()
    {
        $view = [
            'title' => 'Perpustakaan BPTP',
            'judul' => 'Daftar Sumbangan',
            'location' => 'Keanggotaan',
            'content' => 'keanggotaan/v_daftar_sumbangan',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>