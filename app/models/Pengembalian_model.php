<?php

class Pengembalian_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;

    }

    public function getAllPengembalian(){
        $this->db->query("SELECT * FROM pengembalian");
        return $this->db->resultSet();
    }

    public function tambahPengembalian($data){
        $query = "INSERT INTO pengembalian 
                  VALUES(null,:tgl, :idadmin, :idbuku, :idmahasiswa )";
        $this->db->query($query);
        $this->db->bind('tgl', $data['tgl']);
        $this->db->bind('idadmin', $data['idadmin']);
        $this->db->bind('idbuku', $data['idbuku']);
        $this->db->bind('idmahasiswa', $data['idmahasiswa']);

        $this->db->execute();
    }

    public function delete($id){
        $this->db->query("DELETE FROM pengembalian WHERE id_pengembalian = :id");
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getPengembalianById($id){
        $this->db->query("SELECT * FROM pengembalian WHERE id_pengembalian = :id");
        $this->db->bind('id', $id);
        
        return $this->db->single();

    }

    public function updateData($data){

        $query = "UPDATE pengembalian SET tgl_pengembalian = :tgl, id_admin =:idadmin
                , id_buku = :idbuku, id_mhs = :idmahasiswa";

        $this->db->query($query);
        $this->db->bind('tgl', $data['tgl']);
        $this->db->bind('idadmin', $data['idadmin']);
        $this->db->bind('idbuku', $data['idbuku']);
        $this->db->bind('idmahasiswa', $data['idmahasiswa']);

        return $this->db->rowCount();
    }
}