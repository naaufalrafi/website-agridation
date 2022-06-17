<?php

class Artikel extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Artikel Agridation 2022";
        $this->load->view('artikel',$data);
        $this->load->view('templates/footer');
    }
}