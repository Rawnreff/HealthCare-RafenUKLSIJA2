<?php
include '../connect.php';

$id_user = $_GET['id'];

mysqli_begin_transaction($mysqli);

try {
    $delete_subscription = mysqli_query($mysqli, "DELETE FROM subscription WHERE id_user = '$id_user'");
    if (!$delete_subscription) {
        throw new Exception("Gagal menghapus data dari tabel subscription: " . mysqli_error($mysqli));
    }

    $delete_user = mysqli_query($mysqli, "DELETE FROM user WHERE id_user = '$id_user'");
    if (!$delete_user) {
        throw new Exception("Gagal menghapus data dari tabel user: " . mysqli_error($mysqli));
    }

    mysqli_commit($mysqli);
    header("Location: adminuser.php");
    exit();
} catch (Exception $e) {
    mysqli_rollback($mysqli);
    echo $e->getMessage();
}
?>