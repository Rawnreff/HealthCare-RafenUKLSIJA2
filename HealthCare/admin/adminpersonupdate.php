<?php
session_start();

include '../connect.php';

if (isset($_GET['id'])) {
    $id_personalization = $_GET['id'];

    if (isset($_POST['submit'])) {
        $preferences = $_POST['preferences'];
        $additional_preferences = $_POST['additional_preferences'];

        $query = "UPDATE personalization SET preferences='$preferences', additional_preferences='$additional_preferences' WHERE id_personalization='$id_personalization'";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("Location: adminperson.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }

    $query = "SELECT * FROM personalization WHERE id_personalization='$id_personalization'";
    $result = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    header("Location: adminperson.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) Update Personalization</title>
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
            <h1 class="title">Update Personalization</h1>
        </header>
        <section class="form">
            <form method="POST" action="">

            <label for="preferences">Preferences:</label>
            <select name="preferences" id="preferences" required>
                <option value="cardio" <?= $data['preferences'] == 'cardio' ? 'selected' : '' ?>>Cardio</option>
                <option value="strength training" <?= $data['preferences'] == 'strength training' ? 'selected' : '' ?>>Strength Training</option>
                <option value="flexibility" <?= $data['preferences'] == 'flexibility' ? 'selected' : '' ?>>Flexibility</option>
                <option value="balance" <?= $data['preferences'] == 'balance' ? 'selected' : '' ?>>Balance</option>
                <option value="hiit" <?= $data['preferences'] == 'hiit' ? 'selected' : '' ?>>High-intensity interval training</option>
                <option value="low-impact exercises" <?= $data['preferences'] == 'low-impact exercises' ? 'selected' : '' ?>>Low-Impact Exercises</option>
                <option value="mind-body exercises" <?= $data['preferences'] == 'mind-body exercises' ? 'selected' : '' ?>>Mind-Body Exercises</option>
                <option value="endurance training" <?= $data['preferences'] == 'endurance training' ? 'selected' : '' ?>>Endurance Training</option>
                <option value="core strengthening" <?= $data['preferences'] == 'core strengthening' ? 'selected' : '' ?>>Core Strengthening</option>
                <option value="stretching" <?= $data['preferences'] == 'stretching' ? 'selected' : '' ?>>Stretching</option>
                <option value="pilates" <?= $data['preferences'] == 'pilates' ? 'selected' : '' ?>>Pilates</option>
                <option value="yoga" <?= $data['preferences'] == 'yoga' ? 'selected' : '' ?>>Yoga</option>
            </select><br>

            <label for="additional_preferences">Additional Preferences:</label>
            <select name="additional_preferences" required>
                <?php
                    $additional_preferences_options = array(
                        'running', 'skipping', 'cycling', 'swimming', 'jumping jacks',
                        'squats', 'deadlifts', 'bench press', 'bicep curls', 'shoulder press',
                        'forward fold', 'seated hamstring stretch', 'quadriceps stretch', 'cobra pose', 'pigeon pose',
                        'tree pose', 'warrior III pose', 'single-leg deadlift', 'balance board exercises', 'standing on one leg with eyes closed',
                        'burpees', 'mountain climbers', 'jump squats', 'high knees', 'sprints',
                        'walking', 'swimming', 'cycling', 'elliptical training', 'water aerobics',
                        'yoga poses', 'pilates exercises', 'tai chi movements', 'meditation', 'deep breathing exercises',
                        'long-distance running', 'cycling for extended periods', 'swimming laps continuously', 'hiking for long distances', 'rowing',
                        'planks', 'russian twists', 'bicycle crunches', 'leg raises', 'bird-dog exercise',
                        'hamstring stretch', 'quadriceps stretch', 'shoulder stretch', 'triceps stretch', 'cat-cow stretch',
                        'hundred', 'roll-up', 'leg circles', 'swan dive', 'teaser',
                        'downward-facing dog', 'warrior I', 'warrior II', 'warrior III', 'tree pose', 'cat-cow stretch', 'child pose'
                    );

                    foreach ($additional_preferences_options as $option) {
                        echo '<option value="' . $option . '" ' . ($data['additional_preferences'] == $option ? 'selected' : '') . '>' . ucfirst($option) . '</option>';
                    }
                ?>
            </select><br>

            <br>

                <input type="submit" name="submit" value="Update" class="button">
            </form>
        </section>
    </div>
    <script src="main.js"></script>
</body>

</html>