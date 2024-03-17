<?php 

class Peminjaman extends Controller{
    public function index(){
        $data['judul'] = 'Halaman Peminjaman Buku';
        $data['peminjaman']= $this->model('Peminjaman_model')->getAllpeminjaman();
        $data['admin'] = $this->model('Admin_model');
        $data['buku'] = $this->model('Buku_model');
        $data['mahasiswa'] = $this->model('Mahasiswa_model');

        $this->view('peminjaman/index', $data);
    }

    public function tambah(){
        $data['judul'] = 'Halaman Tambah peminjaman Buku';

        $this->view('peminjaman/tambah');
    }

    public function simpanPeminjaman(){
        if($this->model('Peminjaman_model')->tambahPeminjaman($_POST) > 0){
            echo "<script>";
            echo "window.location='http://localhost/perpuskelompok1/public/peminjaman-buku/'";
            echo "</script>";
        }
        header('location: http://localhost/perpuskelompok1/public/peminjaman-buku/');
    }

    public function delete($id){
        if($this->model('peminjaman_model')->delete($id) > 0){
            header('location: http://localhost/perpuskelompok1/public/peminjaman-buku/');
            exit;
        }else{
            header('location: http://localhost/perpuskelompok1/public/peminjaman-buku/');
            exit;
        }
    }
}