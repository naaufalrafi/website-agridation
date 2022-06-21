<?php

class Perlombaan extends CI_Controller
{
     public function __construct()
    {
        parent::__construct();
        $this->load->model('M_lomba');
    }

    public function index()
    {
        $data['title'] = "Perlombaaan Agridation 2022";
        $this->load->view('lomba',$data);
    }

    public function detail($id)
    {
        $data['lomba'] = $this->M_lomba->detaillomba($id);
        $data['title'] = "Detail Lomba";
        $this->load->view('templates/header',$data);
        $this->load->view('lombadetail',$data);
        $this->load->view('templates/footer');
    }
}