<?php

class Webinarworkshop extends CI_Controller
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
        $id_user=$this->session->userdata('id_user');
        $lombacheck = $this->M_acara->daftarcheck($id_user);
        $verifcheck = $this->M_acara->verifcheck($id_user);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('peserta/templates/header',$data);
        if($lombacheck){
            $this->load->view('peserta/lkti/waitverif');
        }elseif($verifcheck){
            $this->load->view('peserta/webinar/tiket');
        }else{
            $this->load->view('peserta/webinar/pendaftaran'); 
        }
        $this->load->view('peserta/templates/footer');
    }
    public function daftarwebinar()
    {
        $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required|trim', [
            'required' => 'Nama Lengkap harus diisi!',
        ]);
        $this->form_validation->set_rules('bukti_identitas', '', 'callback_file_check');
        $this->form_validation->set_rules('bukti_follow', '', 'callback_file_check_follow');
        $this->form_validation->set_rules('bukti_posting', '', 'callback_file_check_posting');
        
        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('peserta/templates/header',$data);
            $this->load->view('peserta/webinar/pendaftaran');
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
            $data = array(
                'nama' => $nama_lengkap,
                'bukti_identitas' => $file_identitas,
                'bukti_follow' => $file_follow,
                'bukti_posting' => $file_posting,
                'id_user'   => $this->session->userdata('id_user'),
                'status'    => 'M',
                'date_created' => date('Y-m-d H:i:s')
            );
            $query = $this->M_acara->input_pendaftaran('gwebinar', $data);
            redirect('Acara/Webinarworkshop');
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
}
