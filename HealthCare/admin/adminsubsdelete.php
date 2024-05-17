<?php
include '../connect.php';

if(isset($_GET['id'])) {
    $id_subscription = $_GET['id'];

      $query = "DELETE FROM subscription WHERE id_subscription='$id_subscription'";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        header("Location: adminsubs.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
} else {
    header("Location: adminsubs.php");
    exit;
}
?>
