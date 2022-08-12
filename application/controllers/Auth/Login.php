<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation', 'session');
        $this->load->model('Auth/M_user');
        $this->load->helper('url', 'form');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('Peserta/Profil');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required', ['required' => 'Email harus diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Password harus diisi!']);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('Auth/v_login', $data);
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
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email anda belum terverifikasi</div>');
                    redirect('Auth/Login');
                } elseif (password_verify($password, $user['password'])) {
                    $this->session->userdata('email', $user);
                    $data = [

                        'email' => $user['email'],
                        'id_user' => $user['id_user'],
                        'name' => $user['name'],
                        'id_role' => $user['id_role'],
                        'status' => 'login'

                    ];
                    $this->session->set_userdata($data);
                    if ($user['id_role'] == 2) {
                        redirect('Peserta/Profil');
                    } else {
                        redirect('Admin/Dashboard');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah!
            </div>');
                    redirect('Auth/Login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun ini tidak aktif
            </div>');
                redirect('Auth/Login');
            }
        } else {
            //tidak ada user
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun ini tidak terdaftar
            </div>');
            redirect('Auth/Login');
        }
    }
    public function activate()
    {
        $id =  $this->uri->segment(4);
        $code = $this->uri->segment(5);

        //fetch user details
        $user = $this->M_user->getUser($id);

        //if code matches
        if ($user['code'] == $code) {
            //update user active status
            $data['verified'] = true;
            $query = $this->M_user->activate($data, $id);

            if ($query) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User activated successfully</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Something went wrong in activating account</div>');
            }
        } else {
            $this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
        }

        redirect('Auth/Login');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Home');
    }
}