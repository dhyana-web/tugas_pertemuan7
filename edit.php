<?php
include "config/Database.php";
include "classes/Mahasiswa.php";

$db = new Database();
$conn = $db->connect();
$mhs = new Mahasiswa($conn);

$nim = $_GET['nim'];

if(isset($_POST['update'])){
    $mhs->nim = $nim;
    $mhs->nama = $_POST['nama'];
    $mhs->jurusan = $_POST['jurusan'];
    $mhs->alamat = $_POST['alamat'];
    $mhs->email = $_POST['email'];
    $mhs->no_hp = $_POST['no_hp'];
    $mhs->update();
    header("Location: index.php");
}
?>

<h3>Edit Mahasiswa</h3>
<form method="post">
    Nama: <input type="text" name="nama"><br>
    Jurusan: <input type="text" name="jurusan"><br>
    Alamat: <input type="text" name="alamat"><br>
    Email: <input type="email" name="email"><br>
    No HP: <input type="text" name="no_hp"><br>
    <button name="update">Update</button>
</form>