<?php

class Poster extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation', 'session');
        $this->load->model('M_admin');
        $this->load->helper('date');
        date_default_timezone_set("Asia/Jakarta");
        $this->load->helper('url', 'form');
        if ($this->session->userdata('id_role') == 2){
            redirect('Peserta/Profil');
        }elseif($this->session->userdata('status') != 'login'){
            redirect('Auth/Login');
        }
    }
    public function index()
    {
        $data['poster'] = $this->M_admin->datapendaftarposter();
        $data['title'] = "Data Pendaftar Desain Poster";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/poster/pendaftarposter',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function verifikasi()
    {
        $data['poster'] = $this->M_admin->dataposterbelumverif();
        $data['title'] = "Data Pendaftar Desain Poster";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/poster/verifikasi',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function pengumpulankarya()
    {
        $data['poster'] = $this->M_admin->datapengumpulankaryaposter();
        $data['title'] = "Data Pengumpulan Desain Poster";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/poster/pengumpulankarya',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function tidakverif($id)
    {
        $where = [
            'id_glomba' => $id
        ];
        $this->M_admin->hapus_datapendaftaran($where, 'glomba');
        redirect('Admin/Poster/verifikasi');
    }
    public function verif($id)
    {
            date_default_timezone_set("Asia/Jakarta");
            $saatini = date('Y-m-d H:i:s');
            $where = array(
                'id_glomba' => $id
            );
            $data = array(
                'status'    => 'V',
                'date_update' => $saatini
            );
            $this->M_admin->update_status($where, $data, 'glomba');
            redirect('Admin/Poster/verifikasi');
    }
}