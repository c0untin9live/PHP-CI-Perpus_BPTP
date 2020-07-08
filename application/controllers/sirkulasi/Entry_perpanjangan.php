<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entry_perpanjangan extends CI_Controller
{
    function index()
    {
        $view = [
            'title' => 'Perpustakaan BPTP',
            'judul' => 'Entry Perpanjangan',
            'location' => 'Sirkulasi',
            'content' => 'sirkulasi/v_entry_perpanjangan',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>