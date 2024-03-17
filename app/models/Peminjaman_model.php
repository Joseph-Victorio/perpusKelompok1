<?php

class Peminjaman_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;

    }

    public function getAllPeminjaman(){
        $this->db->query("SELECT * FROM peminjaman");
        return $this->db->resultSet();
    }

    public function tambahPeminjaman($data){
        $query = "INSERT INTO peminjaman 
                  VALUES(null,:tgl_pinjam,:tgl_kembali, :idadmin, :idbuku, :idmahasiswa )";
        $this->db->query($query);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('tgl_kembali', $data['tgl_kembali']);
        $this->db->bind('idadmin', $data['idadmin']);
        $this->db->bind('idbuku', $data['idbuku']);
        $this->db->bind('idmahasiswa', $data['idmahasiswa']);

        $this->db->execute();
    }

    public function delete($id){
        $this->db->query("DELETE FROM peminjaman WHERE id_peminjaman = :id");
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}