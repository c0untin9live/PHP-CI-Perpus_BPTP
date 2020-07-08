<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karantina_katalog extends CI_Controller
{
    function index()
    {
        $view = [
            'title' => 'Perpustakaan BPTP',
            'judul' => 'Karantina Katalog',
            'location' => 'Katalog',
            'content' => 'katalog/v_karantina_katalog',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>