<?php

class Mahasiswa extends Controller {
    public function index() {
        $data['judul'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

        $this->view('mahasiswa/index', $data);

    }
    public function tambah(){
        $data['judul'] = 'Tambah mahasiswa';
        //$data['buku'] = $this->model('Buku_model')->tambahBuku();  

        $this->view('mahasiswa/tambah');

    }

    public function simpanMahasiswa(){
        if($this->model('Mahasiswa_model')->tambahMahasiswa($_POST) > 0){
            header('location: ' . '<?=BASEURL?>'. '/mahasiswa/index');
            exit;
        }else{
            header('location: ' . '<?=BASEURL?> '. '/mahasiswa/index');
            exit;
        }
    }

    public function hapus($id){
        if($this->model('Mahasiswa_model')->deletemahasiswa($id) > 0){
            header('location:http://localhost:8080/perpuskelompok1/public/mahasiswa/');
            exit;
        }
    }
}