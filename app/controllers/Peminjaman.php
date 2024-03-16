<?php 

class Peminjaman extends Controller{
    public function index(){
        $data['judul'] = 'Halaman Peminjaman Buku';
        $data['buku']= $this->model('peminjaman_model')->getAllpeminjaman();
        $this->view('templates/header', $data);
        $this->view('peminjaman-buku/index', $data);
    }

    public function tambah(){
        $data['judul'] = 'Halaman Tambah peminjaman Buku';
        $this->view('templates/header', $data);
        $this->view('peminjaman-buku/tambah');
    }

    public function simpanPeminjaman(){
        if($this->model('Peminjaman_model')->tambahPeminjaman($_POST) > 0){
            echo "<script>";
            echo "window.location='http://localhost:8080/perpuskelompok1/public/peminjaman-buku/'";
            echo "</script>";
        }
        header('location: http://localhost:8080/perpuskelompok1/public/peminjaman-buku/');
    }

    public function delete($id){
        if($this->model('peminjaman_model')->delete($id) > 0){
            header('location: http://localhost:8080/perpuskelompok1/public/peminjaman-buku/');
            exit;
        }else{
            header('location: http://localhost:8080/perpuskelompok1/public/peminjaman-buku/');
            exit;
        }
    }
}