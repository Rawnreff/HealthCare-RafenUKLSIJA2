<?php
session_start();
include 'connect.php';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($mysqli, "SELECT * FROM user WHERE (email='$email' OR username='$username') AND password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    if ($data['level'] == "admin") {
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("Location: admin/index.php");
    } else if ($data['level'] == "user") {
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";

        $id_user = $data['id_user'];
        $_SESSION['id_user'] = $id_user;

        // Mengambil id_subscription dari tabel subscription
        $subscription_query = mysqli_query($mysqli, "SELECT id_subscription, plan_name FROM subscription WHERE id_user='$id_user'");
        if (mysqli_num_rows($subscription_query) > 0) {
            $subscription_data = mysqli_fetch_assoc($subscription_query);
            $id_subscription = $subscription_data['id_subscription'];
            $plan_name = $subscription_data['plan_name'];

            // Menyimpan id_subscription dalam sesi
            $_SESSION['id_subscription'] = $id_subscription;

            // Mengarahkan berdasarkan plan_name
            if ($plan_name == 'premium plan') {
                header("Location: user-premium/index.php");
            } else if ($plan_name == 'free plan') {
                header("Location: user/index.php");
            } else {
                header("Location: loginpage.php?pesan=plan_not_found");
            }
        } else {
            header("Location: loginpage.php?pesan=no_subscription");
        }
    } else {
        header("Location: loginpage.php?pesan=level_not_found");
    }
} else {
    header("Location: loginpage.php?pesan=gagal");
}
?>