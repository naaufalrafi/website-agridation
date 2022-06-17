<?php
class Regist extends CI_Controller
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

        //generate simple random code
        $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = substr(str_shuffle($set), 0, 12);

        $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required|trim', [
            'required' => 'Nama harus diisi!',
        ]);
        $this->form_validation->set_rules('phone', 'phone', 'required|trim|is_unique[user.phone]', [
            'required' => 'No Telepon harus diisi!',
            'is_unique' => 'No Telepon ini sudah digunakan!',
        ]);
        $this->form_validation->set_rules('gender', 'gender', 'required', [
            'required' => 'Jenis Kelamin Harus diisi',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Email harus diisi!',
            'is_unique' => 'Email sudah digunakan!',
            'valid_email' => 'Email tidak valid!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!',
            'required' => 'Password harus diisi!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('Auth/v_regist', $data);
        } else {
            $data = [
                'name' => $nama_lengkap = htmlspecialchars($this->input->post('nama_lengkap', true)),
                'email' => $email = htmlspecialchars($this->input->post('email', true)),
                'phone' => $phone = htmlspecialchars($this->input->post('phone', true)),
                'gender' => $gender = htmlspecialchars($this->input->post('gender', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'code' => $code,
                'verified' => false,
                'id_role' => 2,
                'profile' => 'default.jpg',
                'date_created' => date('Y-m-d H:i:s')
            ];
            $id = $this->M_user->insertid($data);
            // $this->db->insert('user', $data);
            //set up email
            $config = array(
                'protocol' => 'smtp',
                'smtp_host'	=>	'ssl://smtp.googlemail.com',
                'smtp_user'	=>	'agridationsvipb@gmail.com',
			    'smtp_pass'	=>	'jbayoegxxbitisro',
                'smtp_port'	=>	465,
                'mailtype'	=>	'html',
                'charset'	=>	'utf-8',
                'newline'	=>	"\r\n",
                'validation' => TRUE
                
            );
            // $id_user = $this->m_user->getUser($id);
            $message =     "
						<html>
						<head>
							<title>Verification Code</title>
						</head>
						<body>
							<h2>Thank you for Registering.</h2>
							<p>Your Account:</p>
							<p>Email: " . $email . "</p>
							<p>Please click the link below to activate your account.</p>
                            <h4><a href='" . base_url() . "Auth/Login/Activate" . "/" . $id . "/" . $code . "'>Activate My Account</a></h4>
						</body>
						</html>
						";

            $this->load->library('email', $config);
            $this->email->initialize($config);
            $this->email->from($config['smtp_user']);
            $this->email->to($email);
            $this->email->subject('Signup Verification Email');
            $this->email->message($message);

            //sending email
            if ($this->email->send()) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kode Aktivasi telah dikirim ke email
            </div>');
            } else {
                $this->session->set_flashdata('message', $this->email->print_debugger());
            }

            // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Anda berhasil dibuat
            // </div>');
            redirect('Auth/Login');
        }
    }
    
}
