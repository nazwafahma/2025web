<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.html");
}

include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
    <h1>DATA PRODI</h1>
    <br>
    <a href="tambahprodi.php">Tambah</a>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Kaprodi</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </thead>
        <tbody>

        <?php
        $i = 1;
        foreach ($data as $d) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $d["nama"] ?></td>
                <td><?php echo $d["kaprodi"] ?></td>
                <td><?php echo $d["jurusan"] ?></td>
                <td><a href="deleteprodi.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin ingin hapus?')">Delete</a> | <a href="editprodi.php?id=<?= $d['id']; ?>">Edit</a></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</body>
</html>