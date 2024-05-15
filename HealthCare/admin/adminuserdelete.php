<?php
include '../connect.php';

$id_user = $_GET['id'];

$delete = mysqli_query($mysqli, "DELETE FROM user WHERE id_user = '$id_user'") or die(mysqli_error($mysqli));

if($delete) {
    header("Location: adminuser.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>
