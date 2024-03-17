<?php
    class Buku_model{
        private $table = 'tb_buku';
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getAllBuku(){
            $this->db->query("SELECT * FROM " . $this->table);
            return $this->db->resultSet();
        }

        public function getBukuById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_buku=:id_buku');
            $this->db->bind('id_buku', $id);
            return $this->db->single();
        }

        public function getBukuNameById($id) {
            $this->db->query('SELECT judul_buku FROM ' . $this->table .' WHERE id_buku = :id_buku ');
            $this->db->bind(':id_buku', $id);
            return $this->db->single()['judul_buku'];
        }

        public function tambahBuku($data){
            $query = "INSERT INTO tb_buku VALUES(null, :judul_buku, :penulis_buku, :penerbit_buku, :tahun_terbit, :stok_buku)";
            
            $this->db->query($query);
            $this->db->bind('judul_buku', $data['judul_buku']);
            $this->db->bind('penulis_buku', $data['penulis_buku']);
            $this->db->bind('penerbit_buku', $data['penerbit_buku']);
            $this->db->bind('tahun_terbit', $data['tahun_terbit']);
            $this->db->bind('stok_buku', $data['stok_buku']);

            
            $this->db->execute();

        }
        
        public function deleteBuku($id){
            $this->db->query("DELETE FROM tb_buku WHERE id_buku = :id");
            $this->db->bind('id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }
?>