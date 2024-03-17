<?php 

class Dashboard_model {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }

    public function getAllBuku() {
        $this->db->query("SELECT * FROM tb_buku");
        return $this->db->resultSet();
    }

    public function getAllPeminjaman() {
        $this->db->query("SELECT * FROM peminjaman");
        return $this->db->resultSet();
    }

    public function getAllPengembalian() {
        $this->db->query("SELECT * FROM pengembalian");
        return $this->db->resultSet();
    }
}