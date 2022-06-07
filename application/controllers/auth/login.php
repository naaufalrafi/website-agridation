<?php

class login extends CI_Controller
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
            redirect('user/dashboard');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required', ['required' => 'Email harus diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Password harus diisi!']);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('auth/v_login', $data);
        } else {
            //valid sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();



        if ($user) {
            //adduser
            if ($user) {
                if ($user['verified'] < 1) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email anda belum terverifikasi
            </div>');
                    redirect('auth/login');
                } elseif (password_verify($password, $user['password'])) {
                    $this->session->userdata('email', $user);
                    $data = [

                        'email' => $user['email'],
                        'id_user' => $user['id_user'],
                        'status' => 'login'

                    ];
                    $this->session->set_userdata($data);
                    redirect('user/dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah!
            </div>');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun ini tidak aktif
            </div>');
                redirect('auth/login');
            }
        } else {
            //tidak ada user
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun ini tidak terdaftar
            </div>');
            redirect('auth/login');
        }
    }
}