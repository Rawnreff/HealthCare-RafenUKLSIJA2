<?php
session_start();

include '../connect.php';

$mencari = $_SESSION['id_user'];

if(isset($_POST['preferences'])) {
    $selected_preferences = $_POST['preferences'];
} else {
    $selected_preferences = '';
}

function getUserSubscriptionPrice($id_user, $mysqli) {
    $query = "SELECT plan_price FROM subscription WHERE id_user = '$id_user'";
    $result = mysqli_query($mysqli, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['plan_price'];
    } else {
        return 0;
    }
}

if (isset($_POST['Submit'])) {
    $id_user = $_SESSION['id_user'];
    $preferences = $_POST['preferences'];
    $additional_preferences = $_POST['additional_preferences'];

    $subscription_price = getUserSubscriptionPrice($id_user, $mysqli);

    if ($subscription_price == 20000) {
        $max_personalizations = 2;
    } elseif ($subscription_price == 50000) {
        $max_personalizations = 5;
    } else {
        $max_personalizations = 0;
    }

    $query = "SELECT COUNT(*) AS total_personalizations FROM personalization WHERE id_user = '$id_user'";
    $result = mysqli_query($mysqli, $query);
    $row = mysqli_fetch_assoc($result);
    $current_personalizations = $row['total_personalizations'];

    if ($current_personalizations < $max_personalizations) {
        $result = mysqli_query($mysqli, "INSERT INTO personalization(id_user, preferences, additional_preferences)
        VALUES('$id_user', '$preferences', '$additional_preferences')");

        if ($result) {
            header("location:personalized-page.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    } else {
        echo "Maximum personalizations reached for this subscription level.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) Add Personalization</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style_add.css">
</head>

<body>
    <div class="regist-container">
        <h1 class="title">Add <?php echo $_SESSION['username'] ?>'s Personalization</h1>
        <?php
        include '../connect.php';
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM subscription WHERE id_user=$mencari") or die(mysqli_error($mysqli));
        ?>
        <form class="form" action="add-personalization.php" method="post">

        <label for="preferences">Preferences:</label>
            <select name="preferences" id="preferences" onchange="this.form.submit()" required>
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
                        <option value="running">Running</option>
                        <option value="skipping">Skipping</option>
                        <option value="cycling">Cycling</option>
                        <option value="swimming">Swimming</option>
                        <option value="jumping jacks">Jumping jacks</option>
                    ';
                } elseif ($selected_preferences == 'strength training') {
                    echo '
                        <option value="squats">Squats</option>
                        <option value="deadlifts">Deadlifts</option>
                        <option value="bench press">Bench press</option>
                        <option value="bicep curls">Bicep curls</option>
                        <option value="shoulder press">Shoulder press</option>
                    ';
                } elseif ($selected_preferences == 'flexibility') {
                    echo '
                    <option value="forward fold">Forward Fold</option>
                    <option value="seated hamstring stretch">Seated Hamstring Stretch</option>
                    <option value="quadriceps stretch">Quadriceps Stretch</option>
                    <option value="cobra pose">Cobra Pose</option>
                    <option value="pigeon pose">Pigeon Pose</option>                    
                    ';
                } elseif ($selected_preferences == 'balance') {
                    echo '
                    <option value="tree pose">Tree Pose</option>
                    <option value="warrior III pose">Warrior III Pose</option>
                    <option value="single-leg deadlift">Single-Leg Deadlift</option>
                    <option value="balance board exercises">Balance Board Exercises</option>
                    <option value="standing on one leg with eyes closed">Standing on One Leg with Eyes Closed</option>
                    ';
                } elseif ($selected_preferences == 'hiit') {
                    echo '
                    <option value="burpees">Burpees</option>
                    <option value="mountain climbers">Mountain Climbers</option>
                    <option value="jump squats">Jump Squats</option>
                    <option value="high knees">High Knees</option>
                    <option value="sprints">Sprints</option>
                    ';
                } elseif ($selected_preferences == 'low-impact exercises') {
                    echo '
                    <option value="walking">Walking</option>
                    <option value="swimming">Swimming</option>
                    <option value="cycling">Cycling</option>
                    <option value="elliptical training">Elliptical Training</option>
                    <option value="water aerobics">Water Aerobics</option>                    
                    ';
                } elseif ($selected_preferences == 'mind-body exercises') {
                    echo '
                    <option value="yoga poses">Yoga Poses</option>
                    <option value="pilates exercises">Pilates Exercises</option>
                    <option value="tai chi movements">Tai Chi Movements</option>
                    <option value="meditation">Meditation</option>
                    <option value="deep breathing exercises">Deep Breathing Exercises</option>                                      
                    ';
                } elseif ($selected_preferences == 'endurance training') {
                    echo '
                    <option value="long-distance running">Long-Distance Running</option>
                    <option value="cycling for extended periods">Cycling for Extended Periods</option>
                    <option value="swimming laps continuously">Swimming Laps Continuously</option>
                    <option value="hiking for long distances">Hiking for Long Distances</option>
                    <option value="rowing">Rowing</option>                                    
                    ';
                } elseif ($selected_preferences == 'core strengthening') {
                    echo '
                    <option value="planks">Planks</option>
                    <option value="russian twists">Russian Twists</option>
                    <option value="bicycle crunches">Bicycle Crunches</option>
                    <option value="leg raises">Leg Raises</option>
                    <option value="bird-dog exercise">Bird-Dog Exercise</option>                                       
                    ';
                } elseif ($selected_preferences == 'stretching') {
                    echo '
                    <option value="hamstring stretch">Hamstring Stretch</option>
                    <option value="quadriceps stretch">Quadriceps Stretch</option>
                    <option value="shoulder stretch">Shoulder Stretch</option>
                    <option value="triceps stretch">Triceps Stretch</option>
                    <option value="cat-cow stretch">Cat-Cow Stretch</option>                                       
                    ';
                } elseif ($selected_preferences == 'pilates') {
                    echo '
                    <option value="hundred">Hundred</option>
                    <option value="roll-up">Roll-Up</option>
                    <option value="leg circles">Leg Circles</option>
                    <option value="swan dive">Swan Dive</option>
                    <option value="teaser">Teaser</option>                                 
                    ';
                } elseif ($selected_preferences == 'yoga') {
                    echo '
                    <option value="downward-facing dog">Downward-Facing Dog</option>
                    <option value="warrior I">Warrior I</option>
                    <option value="warrior II">Warrior II</option>
                    <option value="warrior III">Warrior III</option>
                    <option value="tree pose">Tree Pose</option>
                    <option value="cat-cow stretch">Cat-Cow Stretch</option>
                    <option value="child pose">Child Pose</option>
                    ';
                }
                ?>
            </select><br>

            <button class="button" type="Submit" name="Submit">Add</button>
        </form>
    </div>

</body>

</html>