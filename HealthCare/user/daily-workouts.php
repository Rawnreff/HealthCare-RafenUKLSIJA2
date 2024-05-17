<?php
 session_start();

 $mencari=$_SESSION['id_user']; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daily Workouts</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="stylesheet" href="style_page.css"/>
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
        <a href="daily-workouts.php" class="btn btn-active">Daily Workouts</a>
        <a href="healthy-foods.php" class="btn">Healthy Foods</a>
        <a href="sleep-programs.php" class="btn">Sleep Programs</a>
        <a href="get-premium.php" class="btn">Get Premium?</a>
        <div class="animation start-home2"></div>
      </div>
    </div>

    <!-- banner -->
    <div class="banner">
        <div class="text">
          <h1>Daily <span>Workouts</span></h1>
          <p class="description">
            Embrace the rhythm of well-being in your daily journey. Engage in invigorating exercises, unlocking the strength within you with every move. Let the pulse of physical activity become a dance, a celebration of the vitality that resides in your body, waiting to be awakened. Feel the empowering energy surge through you as you dedicate time each day to move, sweat, and nourish your muscles and spirit.
          </p>
        </div>
        <div class="banner-image">
          <img src="image.exercises/exercises.jpg" alt="" />
          <div class="circle"></div>
        </div>
      </div>
      
      <!-- content -->
      <div class="sub-title">
        <h2>Start to do little steps right now!</h2>
        <hr>
      </div>
      <div class="wrap-mentoring">
        <div class="mentoring">
          <div class="card-mentoring">
            <div class="card-mentoring-image">
              <img src="image.exercises/pushups.webp" alt="" />
            </div>
            <div class="card-mentoring-text">
              <h2>Push Ups</h2>
              <p><span>3 sets - 20x reps</span></p>
              <hr>
              <ol>
                <li>Start in a plank position. Your core should be tight, shoulders pulled down and back, and your neck neutral.</li>
                <li>Bend your elbows and begin to lower your body down to the floor. When your chest grazes it, extend your elbows and return to the start. Focus on keeping your elbows close to your body during the movement.</li>
                <li>Complete 3 sets of as many reps as possible.</li>
              </ol>
            </div>
          </div>
  
          <div class="card-mentoring">
            <div class="card-mentoring-image">
              <img src="image.exercises/Lunges.webp" alt="" />
            </div>
            <div class="card-mentoring-text">
              <h2>Lunges</h2>
              <p><span>3 sets - 10x reps</span></p>
              <hr>
              <ol>
                <li>Start by standing with your feet shoulder-width apart and arms down at your sides.</li>
                <li>Take a step forward with your right leg and bend your right knee as you do so, stopping when your thigh is parallel to the ground. Ensure that your right knee doesn’t extend past your right foot.</li>
                <li>Push up off your right foot and return to the starting position. Repeat with your left leg. This is one rep.</li>
                <li>Complete 3 sets of 10 reps.</li>
              </ol>
            </div>
          </div>
  
          <div class="card-mentoring">
            <div class="card-mentoring-image">
              <img src="image.exercises/Squats.webp" alt="" />
            </div>
            <div class="card-mentoring-text">
              <h2>Squats</h2>
              <p><span>3 sets - 20x reps</span></p>
              <hr>
              <ol>
                <li>Start by standing straight, with your feet slightly wider than shoulder-width apart, and your arms at your sides.</li>
                <li>Brace your core and, keeping your chest and chin up, push your hips back and bend your knees as if you’re going to sit in a chair.</li>
                <li>Ensuring your knees don't bow inward or outward, drop down until your thighs are parallel to the ground, bringing your arms out in front of you in a comfortable position. Pause for 1 second, then extend your legs and return to the starting position.</li>
                <li>Complete 3 sets of 20 reps.</li>
              </ol>
            </div>
          </div>
  
          <div class="card-mentoring">
            <div class="card-mentoring-image">
              <img src="image.exercises/Standing-overhead-dumbbell-presses.webp" alt="" />
            </div>
            <div class="card-mentoring-text">
              <h2>Standing Overhead Dumbbell Presses</h2>
              <p><span>3 sets - 12x reps</span></p>
              <hr>
              <ol>
                <li>Pick a light set of dumbbells — we recommend 10 pounds to start — and start by standing, either with your feet shoulder-width apart or staggered. Move the weights overhead so your upper arms are parallel to the floor.</li>
                <li>Bracing your core, begin to push up until your arms are fully extended above your head. Keep your head and neck stationary.</li>
                <li>After a brief pause, bend your elbows and lower the weight back down until your triceps muscle is parallel to the floor again.</li>
                <li>Complete 3 sets of 12 reps.</li>
              </ol>
            </div>
          </div>
  
          <div class="card-mentoring">
            <div class="card-mentoring-image">
              <img src="image.exercises/Dumbbell-rows.webp" alt="" />
            </div>
            <div class="card-mentoring-text">
              <h2>Dumbell Rows</h2>
              <p><span>3 sets - 10x reps</span></p>
              <hr>
              <ol>
                <li>Start with a dumbbell in each hand. We recommend no more than 10 pounds for beginners.</li>
                <li>Bend forward at the waist, so your back is at a 45-degree angle to the ground. Be certain not to arch your back. Let your arms hang straight down. Ensure your neck is in line with your back and your core is engaged.</li>
                <li>Starting with your right arm, bend your elbow and pull the weight straight up toward your chest, making sure to engage your lat and stopping just below your chest.</li>
                <li>Return to the starting position and repeat with the left arm. This is one rep. Repeat 10 times for 3 sets.</li>
              </ol>
            </div>
          </div>
        </div>
  
        <div class="mentoring">
          <div class="card-mentoring">
            <div class="card-mentoring-image">
              <img src="image.exercises/Single-leg-deadlifts.webp" alt="" />
            </div>
            <div class="card-mentoring-text">
              <h2>Single Leg Deadlifts</h2>
              <p><span>3 sets - 12x reps/side</span></p>
              <hr>
              <ol>
                <li>Begin standing with a dumbbell in your right hand, and your knees slightly bent.</li>
                <li>Hinging at the hips, begin to kick your left leg straight back behind you, lowering the dumbbell down toward the ground.</li>
                <li>When you reach a comfortable height with your left leg, slowly return to the starting position in a controlled motion, squeezing your right glute. Ensure that your pelvis stays square to the ground during the movement.</li>
                <li>Repeat 10 to 12 reps before moving the weight to your left hand and repeating the same steps on the left leg. It's suggested to do 3 sets of 10-12 reps per side.</li>
              </ol>
            </div>
          </div>
  
          <div class="card-mentoring">
            <div class="card-mentoring-image">
              <img src="image.exercises/Burpees-.webp" alt="" />
            </div>
            <div class="card-mentoring-text">
              <h2>Burpees</h2>
              <p><span>3 sets - 10x reps</span></p>
              <hr>
              <ol>
                <li>Start by standing upright with your feet shoulder-width apart and your arms down at your sides.</li>
                <li>With your hands out in front of you, start to squat down. When your hands reach the ground, pop your legs straight back into a pushup position.</li>
                <li>Jump your feet up to your palms by hinging at the waist. Get your feet as close to your hands as you can get, landing them outside your hands if necessary.</li>
                <li>Stand up straight, bringing your arms above your head, and jump.</li>
                <li>This is one rep. Complete 3 sets of 10 reps as a beginner.</li>
              </ol>
            </div>
          </div>
  
          <div class="card-mentoring">
            <div class="card-mentoring-image">
              <img src="image.exercises/Side-planks-.webp" alt="" />
            </div>
            <div class="card-mentoring-text">
              <h2>Side Planks</h2>
              <p><span>3 sets - 15x reps</span></p>
              <hr>
              <ol>
                <li>Lie on your right side with your left leg and foot stacked on top of your right leg and foot. Prop your upper body up by placing your right forearm on the ground and elbow directly under your shoulder.</li>
                <li>Contract your core to stiffen your spine and lift your hips and knees off the ground, forming a straight line with your body.</li>
                <li>Return to start in a controlled manner. Repeat 3 sets of 10-15 reps on one side, then switch.</li>
              </ol>
            </div>
          </div>
  
          <div class="card-mentoring">
            <div class="card-mentoring-image">
              <img src="image.exercises/Plank.webp" alt="" />
            </div>
            <div class="card-mentoring-text">
              <h2>Planks</h2>
              <p><span>3 sets - 30 seconds</span></p>
              <hr>
              <ol>
                <li>Begin in a pushup position with your hand and toes firmly planted on the ground, your back straight, and your core tight.</li>
                <li>Keep your chin slightly tucked and your gaze just in front of your hands.</li>
                <li>Take deep, controlled breaths while maintaining tension throughout your entire body, so your abs, shoulders, triceps, glutes, and quads are all engaged.</li>
                <li>Complete 2-3 sets of 30-seconds hold to start.</li>
              </ol>
            </div>
          </div>
  
          <div class="card-mentoring">
            <div class="card-mentoring-image">
              <img src="image.exercises/Glute-bridge-with-band-.webp" alt="" />
            </div>
            <div class="card-mentoring-text">
              <h2>Glute Bridge</h2>
              <p><span>3 sets - 12x reps</span></p>
              <hr>
              <ol>
                <li>Start by lying on the floor with your knees bent, feet flat on the ground, and arms straight at your sides with your palms facing down.</li>
                <li>Pushing through your heels, raise your hips off the ground by squeezing your core, glutes, and hamstrings. Your upper back and shoulders should still be in contact with the ground, and your core down to your knees should form a straight line.</li>
                <li>Pause 1-2 seconds at the top and return to the starting position.</li>
                <li>Complete 10-12 reps for 3 sets.</li>
              </ol>
            </div>
          </div>
        </div>
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