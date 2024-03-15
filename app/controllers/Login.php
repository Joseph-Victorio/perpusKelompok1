<?php

class Login extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index() {
        // Jika sudah login, arahkan ke halaman dashboard
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        }

        // Jika belum submit form login, tampilkan halaman login
        if (!$this->input->post('submit')) {
            $this->load->view('login_form');
            return;
        }

        // Proses login
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->admin_model->getUserByUsername($username);

        if (!$user || $user['password'] !== $password) {
            // Jika login gagal, tampilkan pesan error
            $data['error'] = 'Username atau password salah.';
            $this->load->view('login_form', $data);
            return;
        }

        // Login berhasil, set session dan arahkan ke halaman dashboard
        $this->session->set_userdata('logged_in', true);
        $this->session->set_userdata('username', $username);
        redirect('dashboard');
    }

    public function logout() {
        // Logout, hapus session, dan arahkan ke halaman login
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('username');
        redirect('login');
    }
}
