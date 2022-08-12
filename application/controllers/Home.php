<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_artikel');
    }

    public function index()
    {
        $data['artikel'] = $this->M_artikel->dataartikel();
        $data['title'] = "Agridation 2022";
        $this->load->view('templates/header', $data);
        $this->load->view('index', $data);
        $this->load->view('templates/footer');
    }
}