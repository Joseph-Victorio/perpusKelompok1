<?php

class Pengembalian extends Controller{
    public function index(){
        $data['judul'] = 'Halaman Pengembalian Buku';

        $data['pengembalian']= $this->model('Pengembalian_model')->getAllPengembalian();
        $data['admin'] = $this->model('Admin_model');
        $data['buku'] = $this->model('Buku_Model');
        $data['mahasiswa'] = $this->model('Mahasiswa_model');

        $this->view('pengembalian/index', $data);
    }
    public function tambah(){
        $data['judul'] = 'Halaman Tambah Pengembalian Buku';

        $this->view('pengembalian/tambah');
    }

    public function simpanPengembalian(){
        if($this->model('Pengembalian_model')->tambahPengembalian($_POST) > 0){
            echo "<script>";
            echo "window.location='http://localhost:8080/perpuskelompok1/public/pengembalian-buku/'";
            echo "</script>";
        }
        header('location: http://localhost:8080/perpuskelompok1/public/pengembalian-buku/');
    }

    public function delete($id){
        if($this->model('Pengembalian_model')->delete($id) > 0){
            header('location: http://localhost:8080/perpuskelompok1/public/pengembalian-buku/');
            exit;
        }else{
            header('location: http://localhost:8080/perpuskelompok1/public/pengembalian-buku/');
            exit;
        }
    }

    public function editPengembalian($id){
        $data['buku']= $this->model('Pengembalian_model')->getPengembalianById($id);
        $data['judul']='Halaman Edit Data Pengembalian';

        $this->view('pengembalian-buku/edit', $data);

    }
    public function updatePengembalian(){
        if($this->model('Pengembalian_model')->updateData($_POST)>0){
            header('location: http://localhost:8080/perpuskelompok1/public/pengembalian-buku/');

        }
    }
    
}