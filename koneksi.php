<?php
$servername = "localhost";
$database = "web4a";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);


function ambildata($query)
{
    $conn = $GLOBALS['conn'];
    $hasil = mysqli_query($conn, $query);

    $data = [];
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[] = $baris;
    }
    return $data;
}

function ceklogin()
{
    if (!isset($_SESSION['login'])) {
        header("Location: login.html");
    }
}
