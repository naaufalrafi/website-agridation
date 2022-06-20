<?php

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_artikel');
    }
    public function index()
    {
        
        $data['trending'] = $this->M_artikel->trendingartikel();
        $data['artikel'] = $this->M_artikel->dataartikel();
        $data['title'] = "Artikel Agridation 2022";
        $this->load->view('templates/header',$data);
        $this->load->view('artikel',$data);
        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
        
        $data['artikel'] = $this->M_artikel->detailartikel($id);
        $data['title'] = "Artikel Agridation 2022";
        $this->load->view('templates/header',$data);
        $this->load->view('artikeldetail',$data);
        $this->load->view('templates/footer');
    }
}