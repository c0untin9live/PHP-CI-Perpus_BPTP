<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entry_katalog extends CI_Controller
{
    function index()
    {
        $view = [
            'title' => 'Perpustakaan BPTP',
            'judul' => 'Entry Katalog',
            'location' => 'Katalog',
            'content' => 'katalog/v_entry_katalog',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>