<?php

class Dashboard extends Controller {
    public function index() {
        $data['judul']="Dashboard";
        $data['Buku'] = $this->model('Buku_model')->getAllBuku();
        $data['Mahasiswa'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $data['Peminjaman'] = $this->model('Peminjaman_model')->getAllPeminjaman();
        $data['Pengembalian'] = $this->model('Pengembalian_model')->getAllPengembalian();
        $this->view('dashboard/index', $data);

    }
}