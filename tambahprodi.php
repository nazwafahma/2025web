<?php
session_start();
include "koneksi.php";
ceklogin();

$query = "SELECT * FROM prodi";
$data = ambildata($query);

include "template/header.php";
include "template/sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Prodi</title>
</head>

<body>
    <h1>Tambah Data Prodi</h1>
    <form action="tambahaksiprodi.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kaprodi</td>
                <td><input type="text" name="kaprodi"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
        </table>
        <button type="submit">Simpan</button>
        <button> <a href="prodi.php">Kembali</a> </button>
    </form>
    <br>
</body>

</html>