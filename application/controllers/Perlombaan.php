<?php

class Lomba extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Perlombaaan Agridation 2022";
        $this->load->view('lomba',$data);
    }
}