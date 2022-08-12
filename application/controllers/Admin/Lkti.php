<?php

class Lkti extends CI_Controller
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
        $data['lkti'] = $this->M_admin->datapendaftarlkti();
        $data['title'] = "Data Pendaftar LKTI";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/lkti/pendaftarlkti',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function verifikasi()
    {
        $data['lkti'] = $this->M_admin->datalktibelumverif();
        $data['title'] = "Verifikasi Pendaftar LKTI";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/lkti/verifikasi',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function pengumpulankarya()
    {
        $data['lkti'] = $this->M_admin->datapengumpulankaryalkti();
        $data['title'] = "Data Pengumpulan Karya LKTI";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/lkti/pengumpulankarya',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function pengumpulanppt()
    {
        $data['lkti'] = $this->M_admin->datapengumpulanpptlkti();
        $data['title'] = "Data Pengumpulan PPT LKTI";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/lkti/finalisdanpengumpulanppt',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function tidakverif($id)
    {
        $where = [
            'id_glomba' => $id
        ];
        $this->M_admin->hapus_datapendaftaran($where, 'glomba');
        redirect('Admin/Lkti/verifikasi');
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
            redirect('Admin/Lkti/verifikasi');
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
            redirect('Admin/Lkti/pengumpulankarya');
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
            redirect('Admin/Lkti/pengumpulankarya');
    }
}