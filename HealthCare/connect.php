<?php
$databaseHost = "localhost";
$databaseName = "healthcare";
$databaseUsername = "root";
$databaseEmail = "";
$databasePassword = "";
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if($mysqli){
    echo "koneksi database berhasil.<br/>";
}else {
    echo "Koneksi gagal: " . mysqli_connect_error() . "<br/>";
}
?>