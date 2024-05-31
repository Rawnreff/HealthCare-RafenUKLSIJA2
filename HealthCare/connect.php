<?php
$databaseHost = "localhost";
$databaseName = "healthcare";
$databaseUsername = "root";
$databasePassword = "";
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if ($mysqli) {
    echo "";
} else {
    echo "tidak terkoneksi" . mysqli_connect_error() . "<br/>";
}
?>