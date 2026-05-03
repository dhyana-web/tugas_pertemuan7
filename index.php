<?php
include "config/Database.php";
include "classes/Mahasiswa.php";

$db = new Database();
$conn = $db->connect();

$mhs = new Mahasiswa($conn);
$data = $mhs->tampil();
?>

<h2>Data Mahasiswa</h2>

<a href="tambah.php">Tambah Mahasiswa</a>
<br><br>

<table border="1">
<tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Jurusan</th>
    <th>Aksi</th>
</tr>

<?php while($row = $data->fetch(PDO::FETCH_ASSOC)) { ?>
<tr>
    <td><?= $row['nim']; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['jurusan']; ?></td>
    <td>
        <a href="edit.php?nim=<?= $row['nim']; ?>">Edit</a> |
        <a href="hapus.php?nim=<?= $row['nim']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>