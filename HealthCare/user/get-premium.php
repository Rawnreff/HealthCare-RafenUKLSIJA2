<?php
session_start();

if(isset($_POST['preferences'])) {
    $selected_preferences = $_POST['preferences'];
} else {
    $selected_preferences = '';
}

if(isset($_POST['plan_price'])) {
    $_SESSION['selected_plan_price'] = $_POST['plan_price'];
} 

if (!isset($_SESSION['selected_plan_price'])) {
    $_SESSION['selected_plan_price'] = '20000';
}

$selected_plan_price = $_SESSION['selected_plan_price'];
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
        <h1 class="title"><?php echo $_SESSION['username']; ?>'s Premium Registration</h1>
        <form class="form" action="get-premium.php" method="post">

        <label for="plan_price">Choose Price:</label>
            <select name="plan_price" required>
                <option value="20000" <?php if($selected_plan_price == '20000') echo 'selected'; ?>>Rp20.000,-</option>
                <option value="50000" <?php if($selected_plan_price == '50000') echo 'selected'; ?>>Rp50.000,-</option>
            </select><br>
            
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

            <button class="button" type="Submit" name="Submit">Register</button>
        </form>
    </div>

    <?php
    if (isset($_POST['Submit'])) {
        $id_user = $_SESSION['id_user'];
        $plan_name = 'premium plan';
        $plan_price = $_POST['plan_price'];
        $status = 'active';
        $activation_date = date('Y-m-d');

        $preferences = $_POST['preferences'];
        $additional_preferences = $_POST['additional_preferences'];

        include_once ("../connect.php");

        $check_subscription = mysqli_query($mysqli, "SELECT * FROM subscription WHERE id_user='$id_user'");

        if (mysqli_num_rows($check_subscription) > 0) {
            $update_subscription = mysqli_query($mysqli, "UPDATE subscription SET plan_name='$plan_name', plan_price='$plan_price', status='$status', activation_date='$activation_date' WHERE id_user='$id_user'");

            if ($update_subscription) {
                echo "Data subscription berhasil diperbarui";
            } else {
                echo "Gagal memperbarui data subscription: " . mysqli_error($mysqli);
            }
        } else {
            $insert_subscription = mysqli_query($mysqli, "INSERT INTO subscription(id_user, plan_name, plan_price, status, activation_date) VALUES('$id_user', '$plan_name', '$plan_price', '$status', '$activation_date')");

            if ($insert_subscription) {
                echo "Data subscription berhasil ditambahkan";
            } else {
                echo "Gagal menambahkan data subscription: " . mysqli_error($mysqli);
            }
        }

        $result = mysqli_query($mysqli, "INSERT INTO personalization(id_user,preferences,additional_preferences)
        VALUES('$id_user','$preferences','$additional_preferences')");


        header("Location: ../user-premium/personalized-page.php");
    }
    ?>

</body>

</html>
