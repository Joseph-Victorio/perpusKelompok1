<?php
    class Buku extends Controller{
        public function index(){
            $data['judul'] = 'Data Buku';
            $data['buku'] = $this->model('Buku_model')->getAllBuku();
            $this->view('templates/header', $data);
            $this->view('buku/index', $data);
            $this->view('templates/footer');
        }

        public function tambah(){
            $data['judul'] = 'Tambah Buku';
            //$data['buku'] = $this->model('Buku_model')->tambahBuku();  
            $this->view('templates/header', $data);
            $this->view('buku/tambah');
            $this->view('templates/footer');
        }

        public function simpanBuku(){
            if($this->model('Buku_model')->tambahBuku($_POST) > 0){
                header('location: ' . '<?=BASEURL?>'. '/buku/index');
                exit;
            }else{
                header('location: ' . '<?=BASEURL?> '. '/buku/index');
                exit;
            }
        }

        public function hapus($id){
            if($this->model('Buku_model')->deleteBuku($id) > 0){
                header('location:http://localhost:8080/perpuskelompok1/public/buku/');
                exit;
            }
        }
    }
?>