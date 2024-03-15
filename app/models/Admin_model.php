<?php 

class Admin_model {
   
    private $table = 'admin';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
   
    public function getAllAdmin() {
        $this->db->query("SELECT * FROM ".$this->table);
        return $this->db->resultSet();
    }

    public function getAdminById($id) {
        $this->db->query("SELECT * FROM ".$this->table." WHERE id_admin = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function tambahDataAdmin($data) {
        $query = "INSERT INTO admin (nama, username, password, alamat, kontak) VALUES (:nama, :username, :password, :alamat, :kontak)";
        $this->db->query($query);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':alamat', $data['alamat']);
        $this->db->bind(':kontak', $data['kontak']);

        $this->db->execute();
    }

    public function editDataAdmin($data) {
        $query = "UPDATE admin SET nama = :nama, username = :username, password = :password, alamat = :alamat, kontak = :kontak WHERE id_admin = :id";
        $this->db->query($query);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':alamat', $data['alamat']);
        $this->db->bind(':kontak', $data['kontak']);
        $this->db->bind(':id', $data['id']);

        $this->db->execute();
    }

    public function hapusDataAdmin($id) {
        $query = "DELETE FROM admin WHERE id_admin = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);

        $this->db->execute();
    }
}
?>
