<?php
include '../connect.php';

if (isset($_GET['id'])) {
    $id_subscription = $_GET['id'];

    if (isset($_POST['submit'])) {
        $plan_name = $_POST['plan_name'];
        $plan_price = $_POST['plan_price'];
        $status = $_POST['status'];
        $activation_date = $_POST['activation_date']; // Tambahkan activation_date

        $query = "UPDATE subscription SET plan_name='$plan_name', plan_price='$plan_price', status='$status', activation_date='$activation_date' WHERE id_subscription='$id_subscription'";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
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
    <title>(Admin) Update Subscription</title>
    <link rel="icon" type="image/png" href="../logotitle.png">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style_update.css">
</head>

<body>
    <div class="container">
        <header>
            <h1 class="title">Update Subscription</h1>
        </header>
        <section class="form">
            <form method="POST" action="">

                <label for="plan_name">Plan Name:</label><br>
                <select required id="plan_name" name="plan_name" value="<?php echo $data['plan_name']; ?>">
                    <option value="free plan" <?php if ($data['plan_name'] == 'free plan') echo 'selected'; ?>>Free Plan</option>
                    <option value="premium plan" <?php if ($data['plan_name'] == 'premium plan') echo 'selected'; ?>>Premium</option>
                </select>

                <label for="plan_price">Plan Price:</label><br>
                <select required id="plan_price" name="plan_price" value="<?php echo $data['plan_price']; ?>">
                    <option value="0" <?php if ($data['plan_price'] == '0') echo 'selected'; ?>>Free</option>
                    <option value="20000" <?php if ($data['plan_price'] == '20000') echo 'selected'; ?>>Rp20.000,-</option>
                    <option value="50000" <?php if ($data['plan_price'] == '50000') echo 'selected'; ?>>Rp50.000,-</option>
                </select>

                <label for="status">Status:</label><br>
                <select required id="status" name="status" value="<?php echo $data['status']; ?>">
                    <option value="active" <?php if ($data['status'] == 'active') echo 'selected'; ?>>Active</option>
                    <option value="inactive" <?php if ($data['status'] == 'inactive') echo 'selected'; ?>>Inactive</option>
                </select>

                <label for="activation_date">Activation Date:</label><br>
                <input style="margin-top: 8px;" type="date" id="activation_date" name="activation_date" value="<?php echo $data['activation_date']; ?>" required>

                <br><br>

                <input type="submit" name="submit" value="Update" class="button">
            </form>
        </section>
    </div>
    <script src="main.js"></script>
</body>

</html>
