<?php

class Dashboard extends Controller {
    public function index() {
        $data['judul'] = 'Dashboard';
        $data['dashboard'] = $this->model('')->findAll();
    }
}