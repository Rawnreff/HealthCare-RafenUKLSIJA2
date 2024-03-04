<?php
$databaseHost = "localhost";
$databaseName = "healthcare";
$databaseUsername = "root";
$databaseEmail = "";
$databasePassword = "";
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if($mysqli){
    echo "";
}else {
    echo "" . mysqli_connect_error() . "<br/>";
}
?>