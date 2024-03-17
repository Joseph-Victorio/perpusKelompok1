<?php

class Dashboard extends Controller {
    public function index() {
        $data['judul']="Dashboard";
        $data['Buku'] = $this->model('Dashboard_model')->getAllBuku();
        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
}