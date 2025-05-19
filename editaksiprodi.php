<?php
include "koneksi.php";

$id = $_POST["id"];
$nama = $_POST["nama"];
$kaprodi = $_POST["kaprodi"];
$jurusan = $_POST["jurusan"];

$query = "UPDATE prodi SET nama = '$nama', kaprodi = '$kaprodi', jurusan = '$jurusan' WHERE id = '$id'";

mysqli_query($conn, $query);

header("Location:prodi.php");
