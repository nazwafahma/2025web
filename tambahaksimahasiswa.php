<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.html");
}

include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$telp = $_POST["telp"];
$email = $_POST["email"];
$id_prodi = $_POST["id_prodi"];

$query = "INSERT INTO mahasiswa (nim, nama, tanggal_lahir, telp, email,id_prodi) VALUES ('$nim',
 '$nama', '$tanggal_lahir', '$telp', '$email', '$id_prodi')";

mysqli_query($conn, $query);

header("location:index.php");

?>