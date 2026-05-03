<?php
include "config/Database.php";
include "classes/Mahasiswa.php";

$db = new Database();
$conn = $db->connect();
$mhs = new Mahasiswa($conn);

$mhs->nim = $_GET['nim'];
$mhs->hapus();

header("Location: index.php");
