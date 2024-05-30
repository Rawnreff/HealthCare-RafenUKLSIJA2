<?php
session_start();

$mencari = $_SESSION['id_user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sleep Programs</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="style_page.css" />
  <script src="script.js"></script>
</head>

<body>

  <!-- navbar -->
  <div class="navbar">
    <div class="logo">
      <h2>Health <span>Care</span></h2>
    </div>
    <div class="navigator">
      <a href="index.php" class="btn">Home</a>
      <a href="daily-workouts.php" class="btn">Daily Workouts</a>
      <a href="healthy-foods.php" class="btn">Healthy Foods</a>
      <a href="sleep-programs.php" class="btn btn-active">Sleep Programs</a>
      <a href="premium-offer.php" class="btn">Get Premium?</a>
      <div class="animation start-home4"></div>
    </div>
  </div>

  <!-- banner -->
  <div class="banner">
    <div class="text">
      <h1><span>Sleep </span>Programs</h1>
      <p class="description">
        In the quiet sanctuary of the night, surrender to the embrace of restful sleep, allowing your body and mind to
        rejuvenate. Your pillow becomes a haven, and each moment of slumber is an investment in your health. Create a
        tranquil bedtime ritual, unwinding from the day's demands, and embrace the gentle embrace of sleep. As you
        journey through the realms of dreams, know that your commitment to a good night's sleep is a profound act of
        self-love, ensuring you wake up refreshed and ready to embrace a new day of well-being.
      </p>
    </div>
    <div class="banner-image">
      <img src="image.sleep/sleep.jpg" alt="" />
      <div class="circle"></div>
    </div>
  </div>

  <!-- content -->
  <div class="sub-title">
    <h2>Start to applying the tips below tonight!</h2>
    <hr>
  </div>
  <div class="wrap-mentoring">
    <?php
    include '../connect.php';
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM pillars WHERE type='sleep_programs'") or die(mysqli_error($mysqli));
    $articles = [];
    while ($data = mysqli_fetch_array($query_mysql)) {
      $articles[] = $data;
    }

    $total_tables = count($articles);
    if ($total_tables == 0) {
      $total_tables += 1;
    }

    $current_table = 0;
    $articles_per_table = ceil(count($articles) / $total_tables);
    ?>

    <?php for ($i = 0; $i < $total_tables; $i++) { ?>
      <div class="mentoring">
        <div class="card-mentoring">
          <div class="card-mentoring-image">
            <table border="0" class="table">
              <?php
              $start_index = $i * $articles_per_table;
              $end_index = min(($i + 1) * $articles_per_table, count($articles));

              for ($j = $start_index; $j < $end_index; $j++) {
                $data = $articles[$j];
                ?>
                <tr>
                  <td>
                    <img src="../admin/img-pillars/<?php echo $data["image"]; ?>" title="<?php echo $data['image']; ?>">
                  </td>
                </tr>
              <?php } ?>
            </table>
          </div>
          <div class="card-mentoring-text">
            <table border="0" class="table">
              <?php
              $start_index = $i * $articles_per_table;
              $end_index = min(($i + 1) * $articles_per_table, count($articles));

              for ($j = $start_index; $j < $end_index; $j++) {
                $data = $articles[$j];
                ?>
                <tr>
                  <td>
                    <h2><?php echo $data['title']; ?></h2>
                  </td>
                </tr>
                <tr>
                  <td>
                    <hr>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><?php echo $data['information']; ?></p>
                  </td>
                </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  

  <!-- footer-->
  <div class="footer">
    <div class="logo-footer">
      <h2>Health <span>Care</span></h2>
    </div>
    <div class="footer-bot">
      <div class="profile-navigation">
        <a href="profile.php" class="profile-link">Profile</a>
        <span>|</span>
        <a href="https://www.instagram.com/raffortless/" class="profile-link">Instagram</a>
      </div>
      <div class="copyright">
        <p>&copy;HEALTHCARE, 2023. All Rights Reserved.</p>
      </div>
    </div>
  </div>
</body>

</html>