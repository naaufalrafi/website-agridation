<?php

class Snk extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Syarat dan Ketentuan Agridation 2022";
        $this->load->view('templates/header', $data);
        $this->load->view('snk');
        $this->load->view('templates/footer');
    }
}