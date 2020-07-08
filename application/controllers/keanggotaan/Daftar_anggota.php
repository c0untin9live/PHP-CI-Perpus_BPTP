<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_anggota extends CI_Controller
{
    function index()
    {
        $view = [
            'title' => 'Perpustakaan BPTP',
            'judul' => 'Daftar Anggota',
            'location' => 'Keanggotaan',
            'content' => 'keanggotaan/v_daftar_anggota',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>