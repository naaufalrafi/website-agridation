<?php

class Poster extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('M_lomba');
        $this->load->helper('date');
        date_default_timezone_set("Asia/Jakarta");
        if ($this->session->userdata('status') != 'login'){
            redirect('Auth/Login');
        }
    }
    public function index(){
        date_default_timezone_set("Asia/Jakarta");
        $waktu_sekarang = strtotime(date('Y-m-d'));
        //$waktu_sekarang = strtotime('2022-08-22');
        //tanggal 2022-08-21
        $waktu_acara = strtotime('2022-08-21');
        $id_user=$this->session->userdata('id_user');
        $lombacheck = $this->M_lomba->daftarcheckpo($id_user);
        $verifcheck = $this->M_lomba->verifcheckpo($id_user);
        $verifpk = $this->M_lomba->verifpkpo($id_user);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('peserta/templates/header',$data);
        if($lombacheck){
            $this->load->view('peserta/poster/waitverif');
        }elseif($verifcheck && $waktu_sekarang > $waktu_acara){
            $this->load->view('peserta/poster/pengumpulankarya'); 
        }elseif($verifcheck){
            $this->load->view('peserta/poster/tm'); 
        }elseif($verifpk){
            $this->load->view('peserta/poster/pengumuman');
        }else{
            $this->load->view('peserta/poster/pendaftaran'); 
        }
        $this->load->view('peserta/templates/footer');
    }
    public function daftarlomba()
    {
        $name=$this->session->userdata('name');
        $this->form_validation->set_rules('bukti_identitas', '', 'callback_file_check');
        $this->form_validation->set_rules('bukti_follow', '', 'callback_file_check_follow');
        $this->form_validation->set_rules('bukti_posting', '', 'callback_file_check_posting');
        $this->form_validation->set_rules('bukti_pembayaran', '', 'callback_file_check_pembayaran');
        
        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('peserta/templates/header',$data);
            $this->load->view('peserta/poster/pendaftaran');
            $this->load->view('peserta/templates/footer');
        } else {
            $nama_ketua     =  $this->input->post('nama_ketua');
            $nama_anggota1  =  $this->input->post('nama_anggota1');
            if($nama_anggota1==NULL){
                $nama_anggota1=NULL;
            }
            $nama_anggota2  =  $this->input->post('nama_anggota2');
            if($nama_anggota2==NULL){
                $nama_anggota2=NULL;
            }
            $file_identitas = $_FILES['bukti_identitas']['name'];
            if ($file_identitas) {
                if($this->form_validation->run() == true){
                    $config['upload_path'] = './assets/media/upload/';
                    $config['allowed_types'] = 'png|jpg|jpeg|zip|rar';
                    $config['remove_spaces'] = TRUE;
                    $config['encrypt_name'] = TRUE;

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('bukti_identitas')) {
                        echo "Image Upload Failed!";
                    } else {
                        $file_identitas = $this->upload->data('file_name');
                    }
                }
            } 
            $file_follow = $_FILES['bukti_follow']['name'];
            if ($file_follow) {
                if($this->form_validation->run() == true){
                    $config['upload_path'] = './assets/media/upload/';
                    $config['allowed_types'] = 'png|jpg|jpeg|zip|rar';
                    $config['remove_spaces'] = TRUE;
                    $config['encrypt_name'] = TRUE;

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('bukti_follow')) {
                        echo "Image Upload Failed!";
                    } else {
                        $file_follow = $this->upload->data('file_name');
                    }
                }
            }
            $file_posting = $_FILES['bukti_posting']['name'];
            if ($file_posting) {
                if($this->form_validation->run() == true){
                    $config['upload_path'] = './assets/media/upload/';
                    $config['allowed_types'] = 'png|jpg|jpeg|zip|rar';
                    $config['remove_spaces'] = TRUE;
                    $config['encrypt_name'] = TRUE;

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('bukti_posting')) {
                        echo "Image Upload Failed!";
                    } else {
                        $file_posting = $this->upload->data('file_name');
                    }
                }
            } 
            $file_pembayaran = $_FILES['bukti_pembayaran']['name'];
            if ($file_pembayaran) {
                if($this->form_validation->run() == true){
                    $config['upload_path'] = './assets/media/upload/';
                    $config['allowed_types'] = 'png|jpg|jpeg|zip|rar';
                    $config['remove_spaces'] = TRUE;
                    $config['encrypt_name'] = TRUE;

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('bukti_pembayaran')) {
                        echo "Image Upload Failed!";
                    } else {
                        $file_pembayaran = $this->upload->data('file_name');
                    }
                }
            } 
            date_default_timezone_set("Asia/Jakarta");
            $saatini = date('Y-m-d H:i:s');
            $data = array(
                'nama_ketua' => $name,
                'bukti_identitas' => $file_identitas,
                'bukti_follow' => $file_follow,
                'bukti_pembayaran' => $file_pembayaran,
                'bukti_posting' => $file_posting,
                'id_lomba' => 6,
                'id_user'   => $this->session->userdata('id_user'),
                'status'    => 'M',
                'date_created' => $saatini
            );
            $query = $this->M_lomba->input_pendaftaran('glomba', $data);
            redirect('Lomba/Poster');
        }
    }
    public function file_check($str){
        $allowed_mime_type_arr = array('image/jpg','image/png','image/jpeg');
        $mime = get_mime_by_extension($_FILES['bukti_identitas']['name']);
        //validation bukti indentitas
        if(isset($_FILES['bukti_identitas']['name']) && $_FILES['bukti_identitas']['name']!=""){
            if($_FILES['bukti_identitas']['size']>5097152){
                $this->form_validation->set_message('file_check', 'Harap masukkan file tidak lebih dari 5Mb');
                return false;
            }else{
                if(in_array($mime, $allowed_mime_type_arr)){
                    return true;
                }else{
                    $this->form_validation->set_message('file_check', 'Harap masukkan file jpg/jpeg/png');
                    return false;
                    }
            return true;
            }
        }else{
            $this->form_validation->set_message('file_check', 'Bukti Identitas harus diisi!');
            return false;
        }
    }
    //validation bukti follow
    public function file_check_follow($str){
        $allowed_mime_type_arr = array('image/jpg','image/png','image/jpeg');
        $mime = get_mime_by_extension($_FILES['bukti_follow']['name']);
        
        if(isset($_FILES['bukti_follow']['name']) && $_FILES['bukti_follow']['name']!=""){
            if($_FILES['bukti_follow']['size']>5097152){
                $this->form_validation->set_message('file_check_follow', 'Harap masukkan file tidak lebih dari 5Mb');
                return false;
            }else{
                if(in_array($mime, $allowed_mime_type_arr)){
                    return true;
                }else{
                    $this->form_validation->set_message('file_check_follow', 'Harap masukkan file jpg/jpeg/png');
                    return false;
                    }
            return true;
            }
        }else{
            $this->form_validation->set_message('file_check_follow', 'Bukti Mengikuti harus diisi!');
            return false;
        }
    }
    //validation bukti posting
    public function file_check_posting($str){
        $allowed_mime_type_arr = array('image/jpg','image/png','image/jpeg');
        $mime = get_mime_by_extension($_FILES['bukti_posting']['name']);
        
        if(isset($_FILES['bukti_posting']['name']) && $_FILES['bukti_posting']['name']!=""){
            if($_FILES['bukti_posting']['size']>5097152){
                $this->form_validation->set_message('file_check_posting', 'Harap masukkan file tidak lebih dari 5Mb');
                return false;
            }else{
                if(in_array($mime, $allowed_mime_type_arr)){
                    return true;
                }else{
                    $this->form_validation->set_message('file_check_posting', 'Harap masukkan file jpg/jpeg/png');
                    return false;
                    }
            return true;
            }
        }else{
            $this->form_validation->set_message('file_check_posting', 'Bukti Posting harus diisi!');
            return false;
        }
    }
    //validation bukti pembayaran
    public function file_check_pembayaran($str){
        $allowed_mime_type_arr = array('image/jpg','image/png','image/jpeg');
        $mime = get_mime_by_extension($_FILES['bukti_pembayaran']['name']);
        
        if(isset($_FILES['bukti_pembayaran']['name']) && $_FILES['bukti_pembayaran']['name']!=""){
            if($_FILES['bukti_pembayaran']['size']>5097152){
                $this->form_validation->set_message('file_check_pembayaran', 'Harap masukkan file tidak lebih dari 5Mb');
                return false;
            }else{
                if(in_array($mime, $allowed_mime_type_arr)){
                    return true;
                }else{
                    $this->form_validation->set_message('file_check_pembayaran', 'Harap masukkan file jpg/jpeg/png');
                    return false;
                    }
            return true;
            }
        }else{
            $this->form_validation->set_message('file_check_pembayaran', 'Bukti Pembayaran harus diisi!');
            return false;
        }
    }
    public function pengumpulankarya(){
        $waktu_sekarang = strtotime(date('Y-m-d'));
        //tanggal 2022-09-11
        $waktu_deadline = strtotime('2022-09-11');
        $this->form_validation->set_rules('bukti_pengumpulankarya', '', 'callback_file_check_pengumpulankarya');

        if($waktu_sekarang > $waktu_deadline){
            echo "udah dl woy";
        }else{
            if ($this->form_validation->run() == false ) {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('peserta/templates/header',$data);
             $this->load->view('peserta/poster/pengumpulankarya'); 
            $this->load->view('peserta/templates/footer');
        } else {
            $file_pengumpulankarya = $_FILES['bukti_pengumpulankarya']['name'];
            if ($file_pengumpulankarya) {
                if($this->form_validation->run() == true){
                    $config['upload_path'] = './assets/media/upload/';
                    $config['allowed_types'] = 'png|jpg|jpeg|zip|rar';
                    $config['remove_spaces'] = TRUE;
                    $config['encrypt_name'] = TRUE;

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('bukti_pengumpulankarya')) {
                        echo "Image Upload Failed!";
                    } else {
                        $file_pengumpulankarya = $this->upload->data('file_name');
                    }
                }
            }
            $id_user=$this->session->userdata('id_user');
            $where = array(
                'id_user' => $id_user,
                'id_lomba' => 6
            );
            $data = array(
                'pengumpulan_karya' => $file_pengumpulankarya,
                'status'    => 'PK'
            );
            $this->M_lomba->update_statustm($where, $data, 'glomba');
            redirect('Lomba/Poster');
        }
        }
    }
    //validation bukti pengumpula karya
    public function file_check_pengumpulankarya($str){
        $allowed_mime_type_arr = array('image/jpg','image/png','image/jpeg');
        $mime = get_mime_by_extension($_FILES['bukti_pengumpulankarya']['name']);
        
        if(isset($_FILES['bukti_pengumpulankarya']['name']) && $_FILES['bukti_pengumpulankarya']['name']!=""){
            if($_FILES['bukti_pengumpulankarya']['size']>5097152){
                $this->form_validation->set_message('file_check_pengumpulankarya', 'Harap masukkan file tidak lebih dari 5Mb');
                return false;
            }else{
                if(in_array($mime, $allowed_mime_type_arr)){
                    return true;
                }else{
                    $this->form_validation->set_message('file_check_pengumpulankarya', 'Harap masukkan file jpg/jpeg/png');
                    return false;
                    }
            return true;
            }
        }else{
            $this->form_validation->set_message('file_check_pengumpulankarya', 'Bukti Pengumpulan Karya harus diisi!');
            return false;
        }
    }
}