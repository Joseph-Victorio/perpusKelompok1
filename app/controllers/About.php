<?php

class About extends Controller{
    public function index($nama="joseph", $kerjaan="FullstackDeveloper", $umur=22){
        $data['nama']=$nama;
        $data['kerjaan']=$kerjaan;
        $data['umur']=$umur;
        $data['judul'] = "About";
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
        $data['judul'] = "Page";
        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }
}