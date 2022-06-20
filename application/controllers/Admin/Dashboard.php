<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation', 'session');
        $this->load->model('M_admin');
        $this->load->helper('url', 'form');
        if ($this->session->userdata('id_role') == 2){
            redirect('Peserta/Profil');
        }elseif($this->session->userdata('status') != 'login'){
            redirect('Auth/Login');
        }
    }
    public function index(){
        $id_user=$this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['daftar'] = $this->M_admin->pendaftar();
        $data['belumverif'] = $this->M_admin->belumverif();
        $data['lkti'] = $this->M_admin->pendaftarlkti();
        $data['belumveriflkti'] = $this->M_admin->belumveriflkti();
        $data['bplan'] = $this->M_admin->pendaftarbplan();
        $data['belumverifbplan'] = $this->M_admin->belumverifbplan();
        $data['podcast'] = $this->M_admin->pendaftarpodcast();
        $data['belumverifpodcast'] = $this->M_admin->belumverifpodcast();
        $data['poster'] = $this->M_admin->pendaftarposter();
        $data['belumverifposter'] = $this->M_admin->belumverifposter();
        $data['cvideo'] = $this->M_admin->pendaftarcvideo();
        $data['belumverifcvideo'] = $this->M_admin->belumverifcvideo();
        $data['foto'] = $this->M_admin->pendaftarfoto();
        $data['belumveriffoto'] = $this->M_admin->belumveriffoto();
        
        $data['title'] = "Dashboard";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/dashboard',$data);
        $this->load->view('Admin/templates/footer');
    }
}