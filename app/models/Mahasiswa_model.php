<?php 

class Mahasiswa_model{
   
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
   

    public function getAllMahasiswa(){
        $this->db->query("SELECT * FROM ".$this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query("SELECT * FROM ".$this->table." WHERE idmahasiswa = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    public function getMahasiswaNameById($id){
        $this->db->query("SELECT nama_mhs FROM ".$this->table." WHERE id_mhs = :id_mhs");
        $this->db->bind(':id_mhs', $id);
        return $this->db->single()['nama_mhs'];
    }

    public function tambahDataMahasiswa($data){
        $query = "INSERT INTO mhs
                    VALUES(null, :nama_mhs, :nim, :jurusan, :alamat, :kontak )";
        $this->db->query($query);
        $this->db->bind('nama_mhs', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kontak', $data['kontak']);

        $this->db->execute();
    }
}