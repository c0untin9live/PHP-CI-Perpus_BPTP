<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entry_katalog_rdl extends CI_Controller
{
    function index()
    {
        $view = [
            'title' => 'Perpustakaan BPTP',
            'judul' => 'Entry Katalog(RDL)',
            'location' => 'Katalog',
            'content' => 'katalog/v_entry_katalog_rdl',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>