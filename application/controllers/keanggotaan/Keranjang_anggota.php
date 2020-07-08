<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang_anggota extends CI_Controller
{
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