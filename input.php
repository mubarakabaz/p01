<?php
include('config/koneksi.php');

//Ambil Data dari GET Alat
$ph             = $_GET['ph'];
$tds            = $_GET['tds'];
$pompaPHNaik    = $_GET['pn'];
$pompaPHTurun   = $_GET['pt'];
$pompaNutrisi   = $_GET['n'];
$pompaAirBaku   = $_GET['ab'];

//Tanggal dan Waktu
date_default_timezone_set('Asia/Makassar');
$tanggal    = date('d-m-Y');
$waktu      = date('H:i:s');

$input = mysqli_query($koneksi, "INSERT INTO data (tanggal, waktu, ph, tds, pompaPHNaik, pompaPHTurun, pompaNutrisi, pompaAirBaku) VALUES ('$tanggal', '$waktu', '$ph', '$tds', '$pompaPHNaik', '$pompaPHTurun', '$pompaNutrisi', '$pompaAirBaku')");

if ($input == TRUE) {
    // include('parser.php');
    // echo "hello";

    $data = mysqli_query($koneksi, "SELECT * FROM edit WHERE no='1'");
    $row = mysqli_fetch_array($data);
    $phSetA         = $row['phSetA'];
    $phSetB         = $row['phSetB'];
    $ppmSetA        = $row['ppmSetA'];
    $ppmSetB        = $row['ppmSetB'];
    $kalibrasiPh    = $row['kalibrasiPh'];
    $kalibrasiPpm   = $row['kalibrasiPpm'];
    $config = array(
        'phSetA'        => $phSetA,
        'phSetB'        => $phSetB,
        'ppmSetA'       => $ppmSetA,
        'ppmSetB'       => $ppmSetB,
        'kalibrasiPh'   => $kalibrasiPh,
        'kalibrasiPpm'  => $kalibrasiPpm
    );
    echo json_encode($config);
} else {
    echo "Input Gagal";
}
