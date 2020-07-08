<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_katalog extends CI_Controller
{
    function index()
    {
        $view = [
            'title' => 'Perpustakaan BPTP',
            'judul' => 'Daftar Katalog',
            'location' => 'Katalog',
            'content' => 'katalog/v_daftar_katalog',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>