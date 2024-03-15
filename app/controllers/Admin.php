<?php

class Admin extends Controller{
    public function index(){
        $data['judul']="Admin";
        $data['nama'] = $this->model('Admin_model')->getAllAdmin();
        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
}