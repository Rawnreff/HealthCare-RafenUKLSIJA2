<?php
include '../connect.php';

if (isset($_GET['id'])) {
    $id_pillars = $_GET['id'];

    $query = "DELETE FROM pillars WHERE id_pillars='$id_pillars'";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        header("Location: adminpillars.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
} else {
    header("Location: adminpillars.php");
    exit;
}
?>