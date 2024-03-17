<?php

class Dashboard extends Controller {
    public function index() {
        $data['judul']="Dashboard";
        $data['buku']= $this->model('Buku_model');
        $data['mahasiswa']= $this->model('Mahasiswa_model');
        $data['peminjaman']= $this->model('Peminjaman_model');
        $this->view('dashboard/index', $data);
    }
}