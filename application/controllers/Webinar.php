<?php

class Webinar extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Acara Agridation 2022";
        $this->load->view('acara',$data);
        $this->load->view('templates/footer');
    }
}