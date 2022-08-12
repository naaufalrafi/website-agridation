<?php

class Bp extends CI_Controller
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
        $data['bp'] = $this->M_admin->datapendaftarbp();
        $data['title'] = "Data Pendaftar Business Plan";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/bp/pendaftarbp',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function verifikasi()
    {
        $data['bp'] = $this->M_admin->databpbelumverif();
        $data['title'] = "Verifikasi Pendaftar Business Plan";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/bp/verifikasi',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function pengumpulankarya()
    {
        $data['bp'] = $this->M_admin->datapengumpulankaryabp();
        $data['title'] = "Data Pengumpulan Proposal Business Plan";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/bp/pengumpulankarya',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function pengumpulanflyer()
    {
        $data['bp'] = $this->M_admin->datapengumpulanflyerbp();
        $data['title'] = "Data Pengumpulan Proposal Business Plan";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/bp/pengumpulanflyer',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function pengumpulanppt()
    {
        $data['bp'] = $this->M_admin->datapengumpulanpptbp();
        $data['title'] = "Data Pengumpulan PPT Business Plan";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/bp/pengumpulanppt',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function tidakverif($id)
    {
        $where = [
            'id_glomba' => $id
        ];
        $this->M_admin->hapus_datapendaftaran($where, 'glomba');
        redirect('Admin/Bp/verifikasi');
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
            redirect('Admin/Bp/verifikasi');
    }

    public function gagal($id)
    {
        date_default_timezone_set("Asia/Jakarta");
            $saatini = date('Y-m-d H:i:s');
            $where = array(
                'id_glomba' => $id
            );
            $data = array(
                'status'    => 'G',
                'date_update' => $saatini
            );
            $this->M_admin->update_status($where, $data, 'glomba');
            redirect('Admin/Bp/pengumpulankarya');
    }
    public function finalis($id)
    {
        date_default_timezone_set("Asia/Jakarta");
            $saatini = date('Y-m-d H:i:s');
            $where = array(
                'id_glomba' => $id
            );
            $data = array(
                'status'    => 'F',
                'date_update' => $saatini
            );
            $this->M_admin->update_status($where, $data, 'glomba');
            redirect('Admin/Bp/pengumpulankarya');
    }
    public function gagalpro($id)
    {
        date_default_timezone_set("Asia/Jakarta");
            $saatini = date('Y-m-d H:i:s');
            $where = array(
                'id_glomba' => $id
            );
            $data = array(
                'status'    => 'GP',
                'date_update' => $saatini
            );
            $this->M_admin->update_status($where, $data, 'glomba');
            redirect('Admin/Bp/pengumpulanflyer');
    }
    public function lolospro($id)
    {
        date_default_timezone_set("Asia/Jakarta");
            $saatini = date('Y-m-d H:i:s');
            $where = array(
                'id_glomba' => $id
            );
            $data = array(
                'status'    => 'LP',
                'date_update' => $saatini
            );
            $this->M_admin->update_status($where, $data, 'glomba');
            redirect('Admin/Bp/pengumpulanflyer');
    }
}