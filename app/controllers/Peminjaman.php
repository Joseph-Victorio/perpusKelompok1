<?php 

class Peminjaman extends Controller{
    public function index(){
        $data['judul'] = 'Halaman Peminjaman Buku';
        $data['buku']= $this->model('Pengembalian_model')->getAllPengembalian();
        $this->view('templates/header', $data);
        $this->view('peminjaman-buku/index', $data);
    }
}