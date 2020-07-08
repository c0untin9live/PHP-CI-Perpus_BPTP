<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_peminjaman extends CI_Controller
{
    function index()
    {
        $view = [
            'title' => 'Perpustakaan BPTP',
            'judul' => 'Daftar Pemijaman',
            'location' => 'Sirkulasi',
            'content' => 'sirkulasi/v_daftar_peminjaman',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>