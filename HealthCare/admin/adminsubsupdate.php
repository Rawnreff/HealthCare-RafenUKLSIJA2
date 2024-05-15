<?php
include '../connect.php';

if(isset($_GET['id'])) {
    $id_subscription = $_GET['id'];

    if(isset($_POST['submit'])) {
        $plan_name = $_POST['plan_name'];
        $plan_price = $_POST['plan_price'];
        $status = $_POST['status'];

        $query = "UPDATE subscription SET plan_name='$plan_name', plan_price='$plan_price', status='$status' WHERE id_subscription='$id_subscription'";
        $result = mysqli_query($mysqli, $query);

        if($result) {
            header("Location: adminsubs.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }

    $query = "SELECT * FROM subscription WHERE id_subscription='$id_subscription'";
    $result = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    header("Location: adminsubs.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Subscription</title>
    <link rel="icon" type="image/png" href="../logotitle.png">
    <link rel="stylesheet" href="style_userupdate.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="title">Update Produk</h1>
        </header>
        <section class="form">
        <form method="POST" action="">

            <input type="text" id="plan_name" name="plan_name" value="<?php echo $data['plan_name']; ?>"><br>
            <input type="text" id="plan_price" name="plan_price" value="<?php echo $data['plan_price']; ?>"><br>

                <select requiredid id="status" name="status" value="<?php echo $data['status']; ?>">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select> 
                
                <br><br>
                
            <input type="submit" name="submit" value="Update" class="button">
        </form>
        </section>
    </div>
    <script src="main.js"></script>
</body>
</html>
