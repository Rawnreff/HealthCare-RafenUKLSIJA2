<?php
include '../connect.php';

if (isset($_GET['id'])) {
    $id_article = $_GET['id'];

    $query = "DELETE FROM article WHERE id_article='$id_article'";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        header("Location: adminarticle.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
} else {
    header("Location: adminarticl.php");
    exit;
}
?>