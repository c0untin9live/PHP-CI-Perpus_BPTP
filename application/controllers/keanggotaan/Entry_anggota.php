<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entry_anggota extends CI_Controller
{
    function index()
    {
        $view = [
            'title' => 'Perpustakaan BPTP',
            'judul' => 'Entry Anggota',
            'location' => 'Keanggotaan',
            'content' => 'keanggotaan/v_entry_anggota',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>