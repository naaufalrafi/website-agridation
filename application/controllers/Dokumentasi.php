<?php

class Dokumentasi extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Dokumentasi";
        $this->load->view('templates/header', $data);
        $this->load->view('dokumentasi');
        $this->load->view('templates/footer');
    }
}