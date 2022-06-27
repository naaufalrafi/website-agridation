<?php

class Cvideo extends CI_Controller
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
        $data['cvideo'] = $this->M_admin->datapendaftarcvideo();
        $data['title'] = "Data Pendaftar Creative Video";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/cvideo/pendaftarcvideo',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function verifikasi()
    {
        $data['cvideo'] = $this->M_admin->datacvideobelumverif();
        $data['title'] = "Verfikasi Pendaftar Creative Video";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/cvideo/verifikasi',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function pengumpulankarya()
    {
        $data['cvideo'] = $this->M_admin->datapengumpulankaryacvideo();
        $data['title'] = "Data Pengumpulan Karya Creative Video";
        $this->load->view('Admin/templates/header', $data);
        $this->load->view('Admin/cvideo/pengumpulankarya',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function tidakverif($id)
    {
        $where = [
            'id_glomba' => $id
        ];
        $this->M_admin->hapus_datapendaftaran($where, 'glomba');
        redirect('Admin/Cvideo/verifikasi');
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
            redirect('Admin/Cvideo/verifikasi');
    }
}