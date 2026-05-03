<?php
class Mahasiswa {
    private $conn;
    private $table = "mahasiswa";

    public $nim;
    public $nama;
    public $jurusan;
    public $alamat;
    public $email;
    public $no_hp;

    public function __construct($db){
        $this->conn = $db;
    }

    public function tampil(){
        $query = "SELECT * FROM mahasiswa";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function tambah(){
        $query = "INSERT INTO mahasiswa 
        (nim, nama, jurusan, alamat, email, no_hp)
        VALUES (:nim, :nama, :jurusan, :alamat, :email, :no_hp)";
        
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            ":nim"     => $this->nim,
            ":nama"    => $this->nama,
            ":jurusan" => $this->jurusan,
            ":alamat"  => $this->alamat,
            ":email"   => $this->email,
            ":no_hp"   => $this->no_hp
        ]);
    }

    public function update(){
        $query = "UPDATE mahasiswa SET
                    nama = :nama,
                    jurusan = :jurusan,
                    alamat = :alamat,
                    email = :email,
                    no_hp = :no_hp
                  WHERE nim = :nim";

        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            ":nim"     => $this->nim,
            ":nama"    => $this->nama,
            ":jurusan" => $this->jurusan,
            ":alamat"  => $this->alamat,
            ":email"   => $this->email,
            ":no_hp"   => $this->no_hp
        ]);
    }

    public function hapus(){
        $query = "DELETE FROM mahasiswa WHERE nim = :nim";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            ":nim" => $this->nim
        ]);
    }
}
?>