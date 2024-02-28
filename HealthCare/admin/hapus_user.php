<?php
include '../connect.php';

$id_user = $_GET['id'];

$hapus = mysqli_query($mysqli, "DELETE FROM user WHERE id_user = '$id_user'") or die(mysqli_error($mysqli));

if($hapus) {
    header("Location: user.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>
