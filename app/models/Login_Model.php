<?php
// File: login_model.php

class Login_Model {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function authenticate($username, $password) {
        $query = "SELECT * FROM admin WHERE username = :username AND password = :password";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array(':username' => $username, ':password' => $password));
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Jika autentikasi berhasil, kembalikan data admin
            return $user;
        } else {
            // Jika autentikasi gagal, kembalikan false
            return false;
        }
    }
}
?>
