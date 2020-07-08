<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entry_peminjaman extends CI_Controller
{
    function index()
    {
        $view = [
            'title' => 'Perpustakaan BPTP',
            'judul' => 'Entry Peminjaman',
            'location' => 'Sirkulasi',
            'content' => 'sirkulasi/v_entry_peminjaman',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>