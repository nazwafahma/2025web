<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.html");
}

include "koneksi.php";

$nama = $_POST["nama"];
$kaprodi = $_POST["kaprodi"];
$jurusan = $_POST["jurusan"];

$query = "INSERT INTO prodi (nama, kaprodi, jurusan) VALUES ('$nama', '$kaprodi', '$jurusan')";

mysqli_query($conn, $query);

header("Location:prodi.php");

?>