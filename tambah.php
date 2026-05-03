<?php
include "config/Database.php";
include "classes/Mahasiswa.php";

$db = new Database();
$conn = $db->connect();
$mhs = new Mahasiswa($conn);

if(isset($_POST['simpan'])){
    $mhs->nim = $_POST['nim'];
    $mhs->nama = $_POST['nama'];
    $mhs->jurusan = $_POST['jurusan'];
    $mhs->alamat = $_POST['alamat'];
    $mhs->email = $_POST['email'];
    $mhs->no_hp = $_POST['no_hp'];
    $mhs->tambah();
    header("Location: index.php");
}
?>

<h3>Tambah Mahasiswa</h3>
<form method="post">
    NIM: <input type="text" name="nim"><br>
    Nama: <input type="text" name="nama"><br>
    Jurusan: <input type="text" name="jurusan"><br>
    Alamat: <input type="text" name="alamat"><br>
    Email: <input type="email" name="email"><br>
    No HP: <input type="text" name="no_hp"><br>
    <button name="simpan">Simpan</button>
</form>