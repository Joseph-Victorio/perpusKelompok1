<?php

class Login extends Controller {
    public function index() {
            $data['judul']="Login";
            $data['nama'] = $this->model('User_model')->getUser();

           
            $this->view('login/index', $data);
            $this->view('templates/footer');
    }

}