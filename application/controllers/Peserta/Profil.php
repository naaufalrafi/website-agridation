<?php

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('M_acara');
        if ($this->session->userdata('id_role') != 2){
            redirect('Admin/Dashboard');
        }elseif($this->session->userdata('status') != 'login'){
            redirect('Auth/Login');
        }
    }

    public function index()
    {
        $id_user=$this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['check'] = $this->M_acara->daftarcheckp($id_user);
        $data['lkti'] = $this->M_acara->datalkti($id_user);
        $data['business'] = $this->M_acara->databusiness($id_user);
        $data['fotografi'] = $this->M_acara->datafotografi($id_user);
        $data['podcast'] = $this->M_acara->datapodcast($id_user);
        $data['poster'] = $this->M_acara->dataposter($id_user);
        $data['cvideo'] = $this->M_acara->datacvideo($id_user);
        $data['minie'] = $this->M_acara->dataminie($id_user);
        $data['webinar'] = $this->M_acara->datawebinar($id_user);
        $this->load->view('peserta/templates/header',$data);
        $this->load->view('peserta/profil',$data);
        $this->load->view('peserta/templates/footer');
    }
}