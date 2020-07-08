<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_koleksi_dipesan extends CI_Controller
{
    function index()
    {
        $view = [
            'title' => 'Perpustakaan BPTP',
            'judul' => 'Daftar Koleksi Dipesan',
            'location' => 'Sirkulasi',
            'content' => 'sirkulasi/v_entry_peminjaman_susulan',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>