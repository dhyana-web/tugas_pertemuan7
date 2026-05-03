<?php
class Database {
    private $host = "localhost";
    private $db = "web_db";
    private $user = "root";
    private $pass = "";
    public $conn;

    public function connect() {
        try {
            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->db",
                $this->user,
                $this->pass
            );
        } catch (PDOException $e) {
            echo "Koneksi gagal";
        }
        return $this->conn;
    }
}
?>