<?php
 session_start();

 $mencari=$_SESSION['id_user']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Premium?</title>
    <link rel="stylesheet" href="../style_reg.css">
</head>
<body>
    <div class="regist-container">
        <h1 class="title"><?php echo $_SESSION['username'];?>'s Premium Registration</h1>
        <form class="form" action="get-premium.php" method="post">

            <label for="email">Your Email:</label>
            <input type="email" name="email" required><br>

            <label for="plan_price">Price:</label>
            <select name="plan_price" required>
                <option value="20000">Rp20.000,-</option>
                <option value="50000">Rp50.000,-</option>
            </select><br>
    
            <button class="button" type="Submit" name="Submit">Register</button>
        </form>
    </div>

<?php
if (isset($_POST['Submit'])) {
    $email = $_POST['email'];
    $plan_name = 'premium plan';
    $plan_price = $_POST['plan_price'];
    $status = 'active';

    include_once("../connect.php");

    $check_user = mysqli_query($mysqli, "SELECT id_user FROM user WHERE email='$email'");

    if (mysqli_num_rows($check_user) > 0) {
        $row = mysqli_fetch_assoc($check_user);
        $id_user = $row['id_user'];

        $check_subscription = mysqli_query($mysqli, "SELECT * FROM subscription WHERE id_user='$id_user'");

        if (mysqli_num_rows($check_subscription) > 0) {
            $update_subscription = mysqli_query($mysqli, "UPDATE subscription SET plan_name='$plan_name', plan_price='$plan_price', status='$status' WHERE id_user='$id_user'");

            if ($update_subscription) {
                echo "Data subscription berhasil diperbarui";
            } else {
                echo "Gagal memperbarui data subscription: " . mysqli_error($mysqli);
            }
        } else {
            $insert_subscription = mysqli_query($mysqli, "INSERT INTO subscription(id_user, plan_name, plan_price, status) VALUES('$id_user', '$plan_name', '$plan_price', '$status')");

            if ($insert_subscription) {
                echo "Data subscription berhasil ditambahkan";
            } else {
                echo "Gagal menambahkan data subscription: " . mysqli_error($mysqli);
            }
        }
    } else {
        echo "Pengguna dengan email tersebut tidak ditemukan.";
    }

    header("Location: ../user-premium/index.php");
}
?>

</body>
</html>