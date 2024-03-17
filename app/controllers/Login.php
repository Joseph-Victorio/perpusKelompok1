
<?php

class Login extends Controller
{

    public function __construct()
    {
        $this->model("User_model");
    }

    public function index()
    {
        session_start();
        if (isset($_SESSION['user_id'])) {
            echo "<script>
                alert('Anda Sudah Login BLOK! ngapain login lagi?! Biar apa hah?');
                document.location.href = '" . BASEURL . "/dashboard';
            </script>";
        } else {
            $this->view("login/index");
        }
    }

    public function processLogin()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data dari form login
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Panggil model User_model untuk melakukan pengecekan login
            $user_model = $this->model("User_model");
            $user = $user_model->getUserByUsername($username);
            // Verifikasi login
            if ($user && password_verify($password, $user["password"])) {
                session_start();
                // Login berhasil, set session atau tindakan lain yang sesuai
                $_SESSION["user_id"] = $user["id_admin"];
                // Redirect ke halaman setelah login berhasil
                header("Location: " . BASEURL . "/dashboard");
                exit;
            } else {
                // Login gagal, arahkan kembali ke halaman login dengan pesan kesalahan
                $this->view("login/index", ["error" => "Username atau password salah"]);
            }
        } else {
            // Jika bukan request POST, redirect kembali ke halaman login
            header("Location: /login/index");
            exit;
        }
    }
}


