<?php

class dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        if ($this->session->userdata('status') != 'login'){
            redirect('auth/login');
        }
    }

    public function index()
    {
        $this->load->view('user/dashboard');
    }
}