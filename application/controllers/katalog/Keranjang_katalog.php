<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang_katalog extends CI_Controller
{
    function index()
    {
        $view = [
            'title' => 'Perpustakaan BPTP',
            'judul' => 'Keranjang Katalog',
            'location' => 'Katalog',
            'content' => 'katalog/v_keranjang_katalog',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>