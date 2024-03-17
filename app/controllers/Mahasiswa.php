<?php

class Mahasiswa extends Controller {
    public function index() {
        $data['judul'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

        $this->view('mahasiswa/index', $data);

    }
}