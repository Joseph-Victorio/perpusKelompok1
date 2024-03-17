<?php

class Dashboard extends Controller {
    public function index() {
        $data['judul']="Dashboard";
        $data['Buku'] = $this->model('Dashboard_model')->getAllBuku();
        $data['Mahasiswa'] = $this->model('Dashboard_model')->getAllMahasiswa();
        $data['Peminjaman'] = $this->model('Dashboard_model')->getAllPeminjaman();
        $data['Pengembalian'] = $this->model('Dashboard_model')->getAllPengembalian();
        $this->view('dashboard/index', $data);

    }
}