<?php
$server     = "localhost";
$username   = "root";
$password   = "";
$database   = "daengponic";

$koneksi = mysqli_connect($server, $username, $password, $database);
if ($koneksi == TRUE) {
    // echo "Terhubung Ke Database";
} else {
    echo "Gagal Terhubung";
}