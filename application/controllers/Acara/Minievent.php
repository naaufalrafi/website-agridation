<?php

class Minievent extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('M_acara');
        $this->load->helper('date');
        if ($this->session->userdata('status') != 'login'){
            redirect('Auth/Login');
        }
    }
    public function index(){
        date_default_timezone_set("Asia/Jakarta");
        // $waktu_sekarang = strtotime('2022-08-21');
        $waktu_sekarang = strtotime(date('Y-m-d'));
        //tanggal 2022-8-20
        $waktu_acara = strtotime('2022-08-20');
        $id_user=$this->session->userdata('id_user');
        $lombacheck = $this->M_acara->daftarcheckm($id_user);
        $verifcheck = $this->M_acara->verifcheckm($id_user);
        $verifpk = $this->M_acara->verifpkm($id_user);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('peserta/templates/header',$data);
        if($lombacheck){
            $this->load->view('peserta/minievent/waitverif');
        }elseif($verifcheck && $waktu_sekarang > $waktu_acara){
            $this->load->view('peserta/minievent/pengumpulankarya');
        }elseif($verifcheck){
            $this->load->view('peserta/minievent/pengiriman');
        }elseif($verifpk){
            $this->load->view('peserta/minievent/pengumpulanberhasil');
        }else{
            $this->load->view('peserta/minievent/pendaftaran'); 
        }
        $this->load->view('peserta/templates/footer');
    }
    public function daftarevent()
    {
        $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required|trim', [
            'required' => 'Nama Lengkap harus diisi!',
        ]);
        $this->form_validation->set_rules('bukti_identitas', '', 'callback_file_check');
        $this->form_validation->set_rules('bukti_follow', '', 'callback_file_check_follow');
        $this->form_validation->set_rules('bukti_posting', '', 'callback_file_check_posting');
        $this->form_validation->set_rules('bukti_pembelian', '', 'callback_file_check_pembelian');
        
        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('peserta/templates/header',$data);
            $this->load->view('peserta/minievent/pendaftaran');
            $this->load->view('peserta/templates/footer');
        } else {
            $nama_lengkap     =  $this->input->post('nama_lengkap');
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
            $file_pembelian = $_FILES['bukti_pembelian']['name'];
            if ($file_pembelian) {
                if($this->form_validation->run() == true){
                    $config['upload_path'] = './assets/media/upload/';
                    $config['allowed_types'] = 'png|jpg|jpeg|zip|rar';
                    $config['remove_spaces'] = TRUE;
                    $config['encrypt_name'] = TRUE;

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('bukti_pembelian')) {
                        echo "Image Upload Failed!";
                    } else {
                        $file_pembelian = $this->upload->data('file_name');
                    }
                }
            } 
            date_default_timezone_set("Asia/Jakarta");
            $saatini = date('Y-m-d H:i:s');
            $data = array(
                'nama' => $nama_lengkap,
                'bukti_identitas' => $file_identitas,
                'bukti_follow' => $file_follow,
                'bukti_posting' => $file_posting,
                'bukti_pembelian' => $file_pembelian,
                'id_user'   => $this->session->userdata('id_user'),
                'status'    => 'M',
                'date_created' => $saatini
            );
            $query = $this->M_acara->input_pendaftaran('gminie', $data);
            redirect('Acara/Minievent');
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
    public function file_check_pembelian($str){
        $allowed_mime_type_arr = array('image/jpg','image/png','image/jpeg');
        $mime = get_mime_by_extension($_FILES['bukti_pembelian']['name']);
        
        if(isset($_FILES['bukti_pembelian']['name']) && $_FILES['bukti_pembelian']['name']!=""){
            if($_FILES['bukti_pembelian']['size']>5097152){
                $this->form_validation->set_message('file_check_pembelian', 'Harap masukkan file tidak lebih dari 5Mb');
                return false;
            }else{
                if(in_array($mime, $allowed_mime_type_arr)){
                    return true;
                }else{
                    $this->form_validation->set_message('file_check_pembelian', 'Harap masukkan file jpg/jpeg/png');
                    return false;
                    }
            return true;
            }
        }else{
            $this->form_validation->set_message('file_check_pembelian', 'Bukti Pembelian harus diisi!');
            return false;
        }
    }
    public function pengumpulankarya(){
        $this->form_validation->set_rules('bukti_pengumpulankarya', '', 'callback_file_check_pengumpulankarya');

        if ($this->form_validation->run() == false ) {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('peserta/templates/header',$data);
             $this->load->view('peserta/minievent/pengumpulankarya'); 
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
            );
            $data = array(
                'pengumpulan_karya' => $file_pengumpulankarya,
                'status'    => 'PK'
            );
            $this->M_acara->update_statustm($where, $data, 'gminie');
            redirect('Acara/Minievent');
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