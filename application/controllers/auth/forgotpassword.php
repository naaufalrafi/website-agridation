<?php

class Forgotpassword extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation', 'session');
        $this->load->helper('url', 'form');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('Peserta/Dashboard');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required', ['required' => 'Email harus diisi!']);
        if ($this->form_validation->run() == false) {
            $this->load->view('Auth/Forgotpassword');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user',['email'=>$email, 'verified'=>1])->row_array();

            if($user){
                $code = substr(str_shuffle($set), 0, 12);
                $data = [
                'email' => $email,
                'code' => $code, 
                'date_created' => date('Y-m-d H:i:s')
            ];
            $this->db->insert('user',$data);
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun ini tidak terdaftar atau belum aktivasi</div>');
                redirect('Auth/Forgotpassword');
            }


        }
        
    }
}