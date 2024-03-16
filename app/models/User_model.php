<?php 

class User_model{
    private $table = 'admin';

    private $db; 



    public function __construct() {
        $this->db = new Database;
    }


    //Method verifikasi login
    public function verify_login($username, $password) {
        //query databse untk mencari username
        $this->db->query("SELECT * FROM $this->table WHERE username = :username");
        $this->db->bind(':username', $username);
        $row = $this->db->single(); 

        //cek admin ditemukan & pass cocok
        if($row) {
            if(password_verify($password, $row['password'])) {
                return $row;
            }
        }
        //jika tak ada / pass salah 
        return null;
    }

    public function getAdminById($id) {
        $this->db->query("SELECT * FROM $this->table WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function getUserByUsername($username) {
        $this->db->query("SELECT * FROM $this->table WHERE username = :username");
        $this->db->bind(':username', $username);
        return $this->db->single();
    }
    
}