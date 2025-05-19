<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

$id = $_GET['id'];
$queryprodi = "SELECT * FROM prodi WHERE id='$id'";
$dataprodi = ambildata($queryprodi);
$dataprodi = $dataprodi[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Prodi</title>
</head>

<body>
    <h1>Edit Data Prodi</h1>
    <form action="editaksiprodi.php" method="post">
        <table>
        <tr>
            <td>Id</td>
            <td><input type="text" name="id" require value="<?= $dataprodi['id']; ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" require value="<?= $dataprodi['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Kaprodi</td>
            <td><input type="text" name="kaprodi" require value="<?= $dataprodi['kaprodi']; ?>"></td>
            </tr>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><input type="text" name="jurusan" require value="<?= $dataprodi['jurusan']; ?>"></td>
            </tr>
        </tr>
    </table>
    <button type="submit">Simpan</button>
    <button> <a href="prodi.php">Kembali</a> </button>
    </form>
    <br>
</body>
</html>