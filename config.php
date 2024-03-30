<?php
$host = 'localhost';
$userdb = 'root';
$passdb = '';
$db = 'pesat10_nilai';
$con = mysqli_connect($host, $userdb, $passdb, $db);

if (mysqli_connect_errno()) {
    echo 'Koneksi gagal :' . mysqli_connect_error();
    exit();
}