<?php 
include "koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM prodi WHERE id='$id'";

mysqli_query($conn, $query);

header("Location:prodi.php");

?>