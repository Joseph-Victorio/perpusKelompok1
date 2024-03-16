
<?php 

class Mahasiswa_model{
   
    private $table = 'mhs';
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

