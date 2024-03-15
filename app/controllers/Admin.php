<?php

class Admin extends Controller{
    public function index(){
        $data['judul']="Admin";
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('admin/templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('admin/templates/footer');
    }
}