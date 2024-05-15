<?php
include '../connect.php';


if(isset($_GET['id'])) {
    $id_personalization = $_GET['id'];

      $query = "DELETE FROM personalization WHERE id_personalization='$id_personalization'";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        header("Location: adminperson.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
} else {
    header("Location: adminperson.php");
    exit;
}
?>
