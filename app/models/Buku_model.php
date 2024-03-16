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

        public function tambahBuku($data){
            $query = "INSERT INTO   tb_buku (judul_buku, penulis_buku, penerbit_buku, tahun_terbit ) VALUES(:judul_buku, :penulis_buku, :penerbit_buku, :tahun_terbit)";
            $this->db->query($query);
            $this->db->bind('judul_buku', $data['judul_buku']);
            $this->db->bind('penulis_buku', $data['penulis_buku']);
            $this->db->bind('penerbit_buku', $data['penerbit_buku']);
            $this->db->bind('tahun_terbit', $data['tahun_terbit']);
            $this->db->execute();
            
            return $this->db->rowCount();
        }
        
        public function updateDataBuku($data){
            $query = "UPDATE tb_buku SET judul_buku=:judul_buku, penulis_buku=:penulis_buku, penerbit_buku=:penerbit_buku, tahun_terbit=:tahun_terbit WHERE id=:id";
            $this->db->query($query);
            $this->db->bind('id_buku', $data['id_buku']);
            $this->db->bind('judul_buku', $data['judul_buku']);
            $this->db->bind('penulis_buku', $data['penulis_buku']);
            $this->db->bind('penerbit_buku', $data['penerbit_buku']);
            $this->db->bind('tahun_terbit', $data['tahun_terbit']);
            $this->db->execute();

            return $this->db->rowCount();
        }

        public function deleteBuku($id){
            $this->db->query("DELETE FROM " . $this->table . ' WHERE id_buku=:id_buku');
            $this->db->bind('id_buku', $id);
            $this->db->execute();

            return $this->db->rowCount();
        }
    }
?>