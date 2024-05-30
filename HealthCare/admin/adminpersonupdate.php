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

    $selected_preferences = $data['preferences'];
    $selected_additional = $data['additional_preferences'];
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
            <select name="preferences" id="preferences" value="<?php echo $data['type']; ?>" onchange="this.form.submit()" required>
                <option value="cardio" <?php if($selected_preferences == 'cardio') echo 'selected'; ?>>Cardio</option>
                <option value="strength training" <?php if($selected_preferences == 'strength training') echo 'selected'; ?>>Strength Training</option>
                <option value="flexibility" <?php if($selected_preferences == 'flexibility') echo 'selected'; ?>>Flexibility</option>
                <option value="balance" <?php if($selected_preferences == 'balance') echo 'selected'; ?>>Balance</option>
                <option value="hiit" <?php if($selected_preferences == 'hiit') echo 'selected'; ?>>High-intensity interval training</option>
                <option value="low-impact exercises" <?php if($selected_preferences == 'low-impact exercises') echo 'selected'; ?>>Low-Impact Exercises</option>
                <option value="mind-body exercises" <?php if($selected_preferences == 'mind-body exercises') echo 'selected'; ?>>Mind-Body Exercises</option>
                <option value="endurance training" <?php if($selected_preferences == 'endurance training') echo 'selected'; ?>>Endurance Training</option>
                <option value="core strengthening" <?php if($selected_preferences == 'core strengthening') echo 'selected'; ?>>Core Strengthening</option>
                <option value="stretching" <?php if($selected_preferences == 'stretching') echo 'selected'; ?>>Stretching</option>
                <option value="pilates" <?php if($selected_preferences == 'pilates') echo 'selected'; ?>>Pilates</option>
                <option value="yoga" <?php if($selected_preferences == 'yoga') echo 'selected'; ?>>Yoga</option>
            </select><br>

            <label for="additional_preferences">Additional Preferences:</label>
            <select name="additional_preferences" required>
                <?php
                if ($selected_preferences == 'cardio') {
                    echo '
                        <option value="running" '; if($selected_additional == 'running') echo 'selected'; echo '>Running</option>
                        <option value="skipping" '; if($selected_additional == 'skipping') echo 'selected'; echo '>Skipping</option>
                        <option value="cycling" '; if($selected_additional == 'cycling') echo 'selected'; echo '>Cycling</option>
                        <option value="swimming" '; if($selected_additional == 'swimming') echo 'selected'; echo '>Swimming</option>
                        <option value="jumping jacks" '; if($selected_additional == 'jumping jacks') echo 'selected'; echo '>Jumping jacks</option>
                    ';
                } elseif ($selected_preferences == 'strength training') {
                    echo '
                        <option value="squats" '; if($selected_additional == 'squats') echo 'selected'; echo '>Squats</option>
                        <option value="deadlifts" '; if($selected_additional == 'deadlifts') echo 'selected'; echo '>Deadlifts</option>
                        <option value="bench press" '; if($selected_additional == 'bench press') echo 'selected'; echo '>Bench press</option>
                        <option value="bicep curls" '; if($selected_additional == 'bicep curls') echo 'selected'; echo '>Bicep curls</option>
                        <option value="shoulder press" '; if($selected_additional == 'shoulder press') echo 'selected'; echo '>Shoulder press</option>
                    ';
                } elseif ($selected_preferences == 'flexibility') {
                    echo '
                        <option value="forward fold" '; if($selected_additional == 'forward fold') echo 'selected'; echo '>Forward Fold</option>
                        <option value="seated hamstring stretch" '; if($selected_additional == 'seated hamstring stretch') echo 'selected'; echo '>Seated Hamstring Stretch</option>
                        <option value="quadriceps stretch" '; if($selected_additional == 'quadriceps stretch') echo 'selected'; echo '>Quadriceps Stretch</option>
                        <option value="cobra pose" '; if($selected_additional == 'cobra pose') echo 'selected'; echo '>Cobra Pose</option>
                        <option value="pigeon pose" '; if($selected_additional == 'pigeon pose') echo 'selected'; echo '>Pigeon Pose</option>                    
                    ';
                } elseif ($selected_preferences == 'balance') {
                    echo '
                        <option value="tree pose" '; if($selected_additional == 'tree pose') echo 'selected'; echo '>Tree Pose</option>
                        <option value="warrior III pose" '; if($selected_additional == 'warrior III pose') echo 'selected'; echo '>Warrior III Pose</option>
                        <option value="single-leg deadlift" '; if($selected_additional == 'single-leg deadlift') echo 'selected'; echo '>Single-Leg Deadlift</option>
                        <option value="balance board exercises" '; if($selected_additional == 'balance board exercises') echo 'selected'; echo '>Balance Board Exercises</option>
                        <option value="standing on one leg with eyes closed" '; if($selected_additional == 'standing on one leg with eyes closed') echo 'selected'; echo '>Standing on One Leg with Eyes Closed</option>
                    ';
                } elseif ($selected_preferences == 'hiit') {
                    echo '
                        <option value="burpees" '; if($selected_additional == 'burpees') echo 'selected'; echo '>Burpees</option>
                        <option value="mountain climbers" '; if($selected_additional == 'mountain climbers') echo 'selected'; echo '>Mountain Climbers</option>
                        <option value="jump squats" '; if($selected_additional == 'jump squats') echo 'selected'; echo '>Jump Squats</option>
                        <option value="high knees" '; if($selected_additional == 'high knees') echo 'selected'; echo '>High Knees</option>
                        <option value="sprints" '; if($selected_additional == 'sprints') echo 'selected'; echo '>Sprints</option>
                    ';
                } elseif ($selected_preferences == 'low-impact exercises') {
                        echo '
                            <option value="walking" '; if($selected_additional == 'walking') echo 'selected'; echo '>Walking</option>
                            <option value="swimming" '; if($selected_additional == 'swimming') echo 'selected'; echo '>Swimming</option>
                            <option value="cycling" '; if($selected_additional == 'cycling') echo 'selected'; echo '>Cycling</option>
                            <option value="elliptical training" '; if($selected_additional == 'elliptical training') echo 'selected'; echo '>Elliptical Training</option>
                            <option value="water aerobics" '; if($selected_additional == 'water aerobics') echo 'selected'; echo '>Water Aerobics</option>
                        ';
                    } elseif ($selected_preferences == 'mind-body exercises') {
                        echo '
                            <option value="yoga poses" '; if($selected_additional == 'yoga poses') echo 'selected'; echo '>Yoga Poses</option>
                            <option value="pilates exercises" '; if($selected_additional == 'pilates exercises') echo 'selected'; echo '>Pilates Exercises</option>
                            <option value="tai chi movements" '; if($selected_additional == 'tai chi movements') echo 'selected'; echo '>Tai Chi Movements</option>
                            <option value="meditation" '; if($selected_additional == 'meditation') echo 'selected'; echo '>Meditation</option>
                            <option value="deep breathing exercises" '; if($selected_additional == 'deep breathing exercises') echo 'selected'; echo '>Deep Breathing Exercises</option>
                        ';
                    } elseif ($selected_preferences == 'endurance training') {
                        echo '
                            <option value="long-distance running" '; if($selected_additional == 'long-distance running') echo 'selected'; echo '>Long-Distance Running</option>
                            <option value="cycling for extended periods" '; if($selected_additional == 'cycling for extended periods') echo 'selected'; echo '>Cycling for Extended Periods</option>
                            <option value="swimming laps continuously" '; if($selected_additional == 'swimming laps continuously') echo 'selected'; echo '>Swimming Laps Continuously</option>
                            <option value="hiking for long distances" '; if($selected_additional == 'hiking for long distances') echo 'selected'; echo '>Hiking for Long Distances</option>
                            <option value="rowing" '; if($selected_additional == 'rowing') echo 'selected'; echo '>Rowing</option>
                        ';
                    } elseif ($selected_preferences == 'core strengthening') {
                        echo '
                            <option value="planks" '; if($selected_additional == 'planks') echo 'selected'; echo '>Planks</option>
                            <option value="russian twists" '; if($selected_additional == 'russian twists') echo 'selected'; echo '>Russian Twists</option>
                            <option value="bicycle crunches" '; if($selected_additional == 'bicycle crunches') echo 'selected'; echo '>Bicycle Crunches</option>
                            <option value="leg raises" '; if($selected_additional == 'leg raises') echo 'selected'; echo '>Leg Raises</option>
                            <option value="bird-dog exercise" '; if($selected_additional == 'bird-dog exercise') echo 'selected'; echo '>Bird-Dog Exercise</option>
                        ';
                    } elseif ($selected_preferences == 'stretching') {
                        echo '
                            <option value="hamstring stretch" '; if($selected_additional == 'hamstring stretch') echo 'selected'; echo '>Hamstring Stretch</option>
                            <option value="quadriceps stretch" '; if($selected_additional == 'quadriceps stretch') echo 'selected'; echo '>Quadriceps Stretch</option>
                            <option value="shoulder stretch" '; if($selected_additional == 'shoulder stretch') echo 'selected'; echo '>Shoulder Stretch</option>
                            <option value="triceps stretch" '; if($selected_additional == 'triceps stretch') echo 'selected'; echo '>Triceps Stretch</option>
                            <option value="cat-cow stretch" '; if($selected_additional == 'cat-cow stretch') echo 'selected'; echo '>Cat-Cow Stretch</option>
                        ';
                    } elseif ($selected_preferences == 'pilates') {
                        echo '
                            <option value="hundred" '; if($selected_additional == 'hundred') echo 'selected'; echo '>Hundred</option>
                            <option value="roll-up" '; if($selected_additional == 'roll-up') echo 'selected'; echo '>Roll-Up</option>
                            <option value="leg circles" '; if($selected_additional == 'leg circles') echo 'selected'; echo '>Leg Circles</option>
                            <option value="swan dive" '; if($selected_additional == 'swan dive') echo 'selected'; echo '>Swan Dive</option>
                            <option value="teaser" '; if($selected_additional == 'teaser') echo 'selected'; echo '>Teaser</option>
                        ';
                    } elseif ($selected_preferences == 'yoga') {
                        echo '
                            <option value="downward-facing dog" '; if($selected_additional == 'downward-facing dog') echo 'selected'; echo '>Downward-Facing Dog</option>
                            <option value="warrior I" '; if($selected_additional == 'warrior I') echo 'selected'; echo '>Warrior I</option>
                            <option value="warrior II" '; if($selected_additional == 'warrior II') echo 'selected'; echo '>Warrior II</option>
                            <option value="warrior III" '; if($selected_additional == 'warrior III') echo 'selected'; echo '>Warrior III</option>
                            <option value="tree pose" '; if($selected_additional == 'tree pose') echo 'selected'; echo '>Tree Pose</option>
                            <option value="cat-cow stretch" '; if($selected_additional == 'cat-cow stretch') echo 'selected'; echo '>Cat-Cow Stretch</option>
                            <option value="child pose" '; if($selected_additional == 'child pose') echo 'selected'; echo '>Child Pose</option>
                        ';
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