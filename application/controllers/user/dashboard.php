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
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/templates/header',$data);
        $this->load->view('user/dashboard',$data);
        $this->load->view('user/templates/footer');
    }
}