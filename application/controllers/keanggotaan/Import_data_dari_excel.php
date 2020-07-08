<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import_data_dari_excel extends CI_Controller
{
    function index()
    {
        $view = [
            'title' => 'Perpustakaan BPTP',
            'judul' => 'Import Data Dari Excel',
            'location' => 'Keanggotaan',
            'content' => 'keanggotaan/v_import_data_dari_excel',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>