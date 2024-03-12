<?php

class Buku_model {
    private $table = 'Buku';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllBuku() {
        $this->db->query("SELECT * FROM".$this->table);
        return $this->db->resultSet();
    }
    public function getBukuByid($id) {
        $this->db->query("SELECT * FROM".$this->table."WHERE idbuku = :id");
    }

    public function tambahBuku($data) {
        $query = "INSERT INTO buku
                    VALUES(null, :judul, :penulis, :penerbit, :tahun terbit)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('tahun terbit', $data['tahun terbit']);

        $this->db->execute();
    }
}