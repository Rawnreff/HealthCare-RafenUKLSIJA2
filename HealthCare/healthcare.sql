-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 03:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `id_personalization` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `information` varchar(1000) NOT NULL,
  `image` varchar(225) NOT NULL,
  `preferences_type` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `id_personalization`, `title`, `content`, `information`, `image`, `preferences_type`) VALUES
(2, 6, 'Push Ups', '<li>Start in a plank position. Your core should be tight, shoulders pulled down and back, and your neck neutral.</li> <li>Bend your elbows and begin to lower your body down to the floor. When your chest grazes it, extend your elbows and return to the start. Focus on keeping your elbows close to your body during the movement.</li> <li>Complete 3 sets of as many reps as possible.</li>', '3 sets - 20x reps', '665c1b7378279.jpg', 'strength training'),
(12, 4, 'Single Leg Deadlifts', '<li>Begin standing with a dumbbell in your right hand, and your knees slightly bent.</li> <li>Hinging at the hips, begin to kick your left leg straight back behind you, lowering the dumbbell down toward the ground.</li> <li>When you reach a comfortable height with your left leg, slowly return to the starting position in a controlled motion, squeezing your right glute. Ensure that your pelvis stays square to the ground during the movement.</li> <li>Repeat 10 to 12 reps before moving the weight to your left hand and repeating the same steps on the left leg. It is suggested to do 3 sets of 10-12 reps per side.</li>', '3 sets - 2x reps/side', '665c1b446d8b5.jpg', 'strength training'),
(24, 25, 'Pull Ups', '<li>Stand facing an exercise bar.</li>\r\n<li>Grasp the bar from the top with your arms slightly more than shoulder-width apart.</li>\r\n<li>Use your shoulder muscles to pull you up, bringing your head up over the bar.</li>', '3 Sets - 12x Repetitions', '665c1b9855b23.jpg', 'strength training'),
(34, 4, 'Hollow Body Hold', '<li>Lie faceup on a mat with your legs extended and arms straight over your head, keeping them close to your ears.</li>\r\n<li>Contract your abs to press your lower back into the ground.</li>\r\n<li>Point your toes, squeeze your thighs together, squeeze your glutes, and lift your legs off the ground.</li>\r\n<li>Lift your shoulders off the ground and keep your head in a neutral position so that you’re not straining your neck. Your legs and mid-back should both be off the floor, and you should be in the shape of a banana, with just your lower back and hips on the ground.</li>\r\n<li>Hold this position for as long as you can while maintaining proper form.</li>', '“The hollow-body hold is such an amazing total-body exercise for maintaining core stability,” says Fagan. This core strength translates to a stronger foundation for many of your other compound moves, like the pull-up and deadlift, she adds. ', '665c1b64d5eda.webp', 'strength training'),
(35, 37, 'Abdominal Crunch', '<li>Lie on your back and place your feet on a wall so that your knees and hips are bent at 90-degree angles. Tighten the abdominal muscles.</li>\r\n<li>Raise your head and shoulders off the floor. To avoid straining your neck, cross your arms on your chest rather than locking them behind your head. Hold for three deep breaths.</li>\r\n<li>Return to the start position and repeat.</li>', 'Abdominal crunches are a classic core-strength exercise. To do an abdominal crunch.', '665c1be94495e.webp', 'core strengthening'),
(36, 37, 'Single-leg abdominal press variations', '<li>Opposite hand on opposite knee. Push your right hand against your left knee while pulling your knee toward your hand (top illustration). You will be pushing and pulling across the center of your body. Hold for three deep breaths. Then do the exercise using your other hand and leg.</li>\r\n<li>Hand on outside of knee. Place your left hand along the side of your left knee (bottom illustration). Use your hand to push your leg inward. At the same time, create resistance by pushing your knee away from the center. Hold for three deep breaths. Then do the exercise using your other hand and leg.</li>', 'To improve your core strength more completely, try variations of the single-leg abdominal press.', '665c1bfe3454c.webp', 'core strengthening'),
(37, 6, 'Shoulder Press with Dumbbells', '<li>Stand or sit with your feet flat on the ground, shoulder-width apart.</li>\r\n<li>Hold a dumbbell in each hand at shoulder height.</li>\r\n<li>Your palms should face forward or slightly inward (neutral grip).</li>\r\n<li>Keep your back straight and engage your core muscles.</li><li>Begin with the dumbbells at shoulder height, elbows bent at about 90 degrees, and hands just outside your shoulders.</li>\r\n<li>Push the dumbbells upward until your arms are fully extended but not locked out.</li>\r\n<li>Exhale as you lift the weights.</li>\r\n<li>Slowly lower the dumbbells back to the starting position.</li>\r\n<li>Inhale as you lower the weights.</li>', 'The shoulder press with dumbbells is a versatile exercise that targets the deltoid muscles in the shoulders. It also engages the triceps and the upper chest, contributing to overall upper body strength. Using dumbbells allows for a greater range of motion and can help address muscle imbalances since each arm works independently.', '665c1b893e467.jpeg', 'strength training'),
(38, 34, 'Tightrope Walk', '<li>Stand at the beginning of the tightrope with one foot on the rope and the other foot on a stable surface.</li>\r\n<li>Extend your arms out to the sides to help with balance.</li>\r\n<li>Focus your gaze on a fixed point at the end of the tightrope to maintain concentration.</li>\r\n<li>Engage your core muscles to stabilize your body.</li><li>Shift your weight onto the foot on the rope and slowly lift your other foot off the ground.</li>\r\n<li>Place the lifted foot carefully in front of the foot on the rope, heel-to-toe.</li>\r\n<li>Move slowly and deliberately, maintaining your focus on the fixed point ahead.</li>\r\n<li>Keep your arms extended and make small adjustments with your arms and body to maintain balance.</li>\r\n<li>Continue to walk step by step until you reach the end of the rope.</li>', 'Tightrope walking, also known as funambulism, is the art of walking along a thin wire or rope. This activity is a challenging and skillful performance that requires balance, concentration, and physical strength. Historically, tightrope walking has been a popular act in circuses and street performances, showcasing the performer ability to maintain stability while walking across an elevated, narrow surface.', '665c1bbda32f2.gif', 'balance'),
(39, 34, 'Banded Triplanar Toe Taps', '<li>Shift your weight onto your left leg, slightly bending your left knee.</li>\r\n<li>Keep your right leg free to move.</li><li>Tap your right foot forward, keeping tension on the band.</li>\r\n<li>Return to the starting position.</li>\r\n<li>Tap your right foot backward, then return to the starting position.</li><li>Tap your right foot out to the side, maintaining band tension.</li>\r\n<li>Return to the starting position.</li>\r\n<li>Tap your right foot across your body to the left side, then return to the starting position.</li><li>Tap your right foot diagonally forward to the left (internal rotation), then return to the starting position.</li>\r\n<li>Tap your right foot diagonally backward to the right (external rotation), then return to the starting position.</li>\r\n', 'Banded triplanar toe taps are a dynamic exercise that targets the muscles of the lower body, particularly the glutes, hips, and thighs. This exercise incorporates resistance bands and movement in three planes of motion (sagittal, frontal, and transverse) to enhance muscular strength, stability, and coordination. It is an excellent exercise for improving balance and agility, making it beneficial for athletes and anyone looking to enhance functional fitness.', '665c1bd648c37.webp', 'balance'),
(40, 25, 'Bicep Curls', '<li>Slowly lift the dumbbells by bending your elbows, bringing the weights towards your shoulders.</li>\r\n<li>Keep your upper arms stationary and only move your forearms.</li>\r\n<li>Exhale as you lift the weights.</li>\r\n<li>At the top of the movement, squeeze your biceps and hold for a brief moment.</li><li>Slowly lower the dumbbells back to the starting position with controlled motion.</li>\r\n<li>Inhale as you lower the weights.</li>\r\n', 'Bicep curls are a classic strength-training exercise that primarily targets the biceps brachii muscles located at the front of the upper arm. This exercise is fundamental for building arm strength and size, and it also engages the forearms and shoulders to a lesser extent. Bicep curls can be performed with various equipment, including dumbbells, barbells, resistance bands, or cable machines.', '665c1baf4e2f9.jpg', 'strength training'),
(41, 38, 'Seated Hamstring Stretch', '<li>Inhale deeply, then exhale as you slowly bend forward at the hips.</li>\r\n<li>Reach your hands towards your feet, ankles, or shins, depending on your flexibility.</li>\r\n<li>Keep your spine as straight as possible; avoid rounding your back.</li><li>Hold the stretch for 15-30 seconds, feeling a gentle pull in the hamstrings.</li>\r\n<li>Breathe deeply and steadily, relaxing into the stretch.</li><li>Inhale as you slowly return to the starting position, straightening your back.</li>\r\n', 'The seated hamstring stretch is a fundamental flexibility exercise that targets the hamstring muscles located at the back of the thigh. Stretching these muscles is crucial for maintaining flexibility, preventing injuries, and improving overall lower body function. This stretch can be particularly beneficial for individuals who sit for long periods or engage in activities that require significant leg movement, such as running, cycling, or dancing.', '665c1c0f42f6d.jpeg', 'flexibility'),
(42, 38, 'Sphynx Pose', '<li>Lie on your stomach with your legs extended behind you, feet hip-width apart.</li>\r\n<li>Place your elbows under your shoulders, forearms flat on the ground, and palms facing down.</li>\r\n<li>Relax your shoulders away from your ears and keep your neck long.</li><li>Press into your forearms to gently lift your chest off the ground.</li>\r\n<li>Keep your gaze forward or slightly upward, maintaining a long neck.</li>\r\n<li>Engage your abdominal muscles to support your lower back.</li><li>Hold the pose for 5-10 breaths, or as long as comfortable.</li>\r\n<li>Focus on breathing deeply and evenly, allowing your body to relax into the stretch.</li>\r\n<li>To release, slowly lower your chest back to the ground and rest your head on your hands.</li>\r\n<li>Take a few deep breaths before moving on to your next pose.</li>', 'The Sphynx Pose, known as Salamba Bhujangasana in Sanskrit, is a gentle backbend yoga posture that helps to open the chest, strengthen the spine, and improve posture. This pose is named after the mythical Sphinx, symbolizing strength and calm. It is accessible for beginners and provides a gentle introduction to deeper backbends.', '665c1c2115dca.jpeg', 'flexibility'),
(55, 50, 'Long Distance Running', '<li>Gradual Progression: Increase mileage and intensity gradually to avoid injury and overtraining.</li>\r\n<li>Variety: Incorporate different types of runs, such as long runs, tempo runs, interval training, and recovery runs.</li>\r\n<li>Rest Days: Allow time for rest and recovery to prevent burnout and injuries.</li><li>Balanced Diet: Consume a diet rich in carbohydrates, proteins, and healthy fats to fuel long runs.</li>\r\n<li>Hydration: Maintain proper hydration before, during, and after runs. Consider electrolyte drinks for long runs.</li>\r\n<li>Pre-Run and Post-Run Meals: Eat a light meal or snack before running and replenish with a nutritious meal afterward to aid recovery.</li><li>Proper Form: Maintain an upright posture, relax your shoulders, and keep your arms at a 90-degree angle, swinging naturally.</li>\r\n<li>Foot Strike: Aim for a midfoot or forefoot strike rather than a heel strike to reduce impact on the joints.</li>\r\n<li>Stride Length and Cadence: Opt for a shorter stride and higher cadence (steps per minute) to improve efficiency and reduce injury risk.</li>', 'Long distance running refers to running over distances typically greater than 5 kilometers (3.1 miles). It includes events such as the 10K, half-marathon (21.1 kilometers or 13.1 miles), marathon (42.2 kilometers or 26.2 miles), and ultramarathons (any distance longer than a marathon). Long distance running requires endurance, mental toughness, and a well-structured training plan.', '665c72a252cdd.jpg', 'endurance training');

-- --------------------------------------------------------

--
-- Table structure for table `personalization`
--

CREATE TABLE `personalization` (
  `id_personalization` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `preferences` varchar(225) NOT NULL,
  `additional_preferences` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personalization`
--

INSERT INTO `personalization` (`id_personalization`, `id_user`, `preferences`, `additional_preferences`) VALUES
(4, 12, 'strength training', 'deadlifts'),
(6, 11, 'strength training', 'shoulder press'),
(25, 52, 'strength training', 'bicep curls'),
(34, 11, 'balance', 'tree pose'),
(37, 12, 'core strengthening', 'russian twists'),
(38, 52, 'flexibility', 'seated hamstring stretch'),
(50, 12, 'endurance training', 'long-distance running');

-- --------------------------------------------------------

--
-- Table structure for table `pillars`
--

CREATE TABLE `pillars` (
  `id_pillars` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `information` varchar(1000) NOT NULL,
  `content` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pillars`
--

INSERT INTO `pillars` (`id_pillars`, `type`, `image`, `title`, `information`, `content`) VALUES
(1, 'daily_workouts', '665733b29d9e4.webp', 'Push Ups', '3 sets - 20x repetitions', '<li>Start in a plank position. Your core should be tight, shoulders pulled down and back, and your neck\r\n              neutral.</li>\r\n            <li>Bend your elbows and begin to lower your body down to the floor. When your chest grazes it, extend your\r\n              elbows and return to the start. Focus on keeping your elbows close to your body during the movement.</li>\r\n            <li>Complete 3 sets of as many reps as possible.</li>'),
(3, 'daily_workouts', '665736f9e707a.webp', 'Lunges', '3 sets - 10x reps', '<li>Start by standing with your feet shoulder-width apart and arms down at your sides.</li>\r\n            <li>Take a step forward with your right leg and bend your right knee as you do so, stopping when your thigh\r\n              is parallel to the ground. Ensure that your right knee doesn’t extend past your right foot.</li>\r\n            <li>Push up off your right foot and return to the starting position. Repeat with your left leg. This is one\r\n              rep.</li>\r\n            <li>Complete 3 sets of 10 reps.</li>'),
(4, 'daily_workouts', '665737bbcb9db.webp', 'Squats', '3 sets - 20x reps', '<li>Start by standing straight, with your feet slightly wider than shoulder-width apart, and your arms at your sides.</li>\r\n            <li>Brace your core and, keeping your chest and chin up, push your hips back and bend your knees as if\r\n              youre going to sit in a chair.</li>\r\n            <li>Ensuring your knees dont bow inward or outward, drop down until your thighs are parallel to the ground,\r\n              bringing your arms out in front of you in a comfortable position. Pause for 1 second, then extend your\r\n              legs and return to the starting position.</li>\r\n            <li>Complete 3 sets of 20 reps.</li>'),
(5, 'daily_workouts', '665748b7dc733.webp', 'Standing Overhead Dumbbell Presses', '3 sets - 12x reps', '<li>Pick a light set of dumbbells — we recommend 10 pounds to start — and start by standing, either with\r\n              your feet shoulder-width apart or staggered. Move the weights overhead so your upper arms are parallel to\r\n              the floor.</li>\r\n            <li>Bracing your core, begin to push up until your arms are fully extended above your head. Keep your head\r\n              and neck stationary.</li>\r\n            <li>After a brief pause, bend your elbows and lower the weight back down until your triceps muscle is\r\n              parallel to the floor again.</li>\r\n            <li>Complete 3 sets of 12 reps.</li>'),
(6, 'daily_workouts', '665748dd3f25b.webp', 'Dumbell Rows', '3 sets - 10x reps', '<li>Start with a dumbbell in each hand. We recommend no more than 10 pounds for beginners.</li>\r\n            <li>Bend forward at the waist, so your back is at a 45-degree angle to the ground. Be certain not to arch\r\n              your back. Let your arms hang straight down. Ensure your neck is in line with your back and your core is\r\n              engaged.</li>\r\n            <li>Starting with your right arm, bend your elbow and pull the weight straight up toward your chest, making\r\n              sure to engage your lat and stopping just below your chest.</li>\r\n            <li>Return to the starting position and repeat with the left arm. This is one rep. Repeat 10 times for 3\r\n              sets.</li>'),
(7, 'daily_workouts', '6657495969a39.webp', 'Single Leg Deadlifts', '3 sets - 12x reps/side', '<li>Begin standing with a dumbbell in your right hand, and your knees slightly bent.</li>\r\n            <li>Hinging at the hips, begin to kick your left leg straight back behind you, lowering the dumbbell down\r\n              toward the ground.</li>\r\n            <li>When you reach a comfortable height with your left leg, slowly return to the starting position in a\r\n              controlled motion, squeezing your right glute. Ensure that your pelvis stays square to the ground during\r\n              the movement.</li>\r\n            <li>Repeat 10 to 12 reps before moving the weight to your left hand and repeating the same steps on the left\r\n              leg. It is suggested to do 3 sets of 10-12 reps per side.</li>'),
(8, 'daily_workouts', '665749ac9d608.webp', 'Burpees', '3 sets - 10x reps', '<li>Start by standing upright with your feet shoulder-width apart and your arms down at your sides.</li>\r\n            <li>With your hands out in front of you, start to squat down. When your hands reach the ground, pop your\r\n              legs straight back into a pushup position.</li>\r\n            <li>Jump your feet up to your palms by hinging at the waist. Get your feet as close to your hands as you can\r\n              get, landing them outside your hands if necessary.</li>\r\n            <li>Stand up straight, bringing your arms above your head, and jump.</li>\r\n            <li>This is one rep. Complete 3 sets of 10 reps as a beginner.</li>'),
(9, 'daily_workouts', '665749cec0b97.webp', 'Side Planks', '3 sets - 15x reps', '<li>Lie on your right side with your left leg and foot stacked on top of your right leg and foot. Prop your\r\n              upper body up by placing your right forearm on the ground and elbow directly under your shoulder.</li>\r\n            <li>Contract your core to stiffen your spine and lift your hips and knees off the ground, forming a straight\r\n              line with your body.</li>\r\n            <li>Return to start in a controlled manner. Repeat 3 sets of 10-15 reps on one side, then switch.</li>\r\n          </ol>'),
(10, 'daily_workouts', '665749eb92708.webp', 'Planks', '3 sets - 30 seconds', '<li>Begin in a pushup position with your hand and toes firmly planted on the ground, your back straight, and\r\n              your core tight.</li>\r\n            <li>Keep your chin slightly tucked and your gaze just in front of your hands.</li>\r\n            <li>Take deep, controlled breaths while maintaining tension throughout your entire body, so your abs,\r\n              shoulders, triceps, glutes, and quads are all engaged.</li>\r\n            <li>Complete 2-3 sets of 30-seconds hold to start.</li>'),
(11, 'daily_workouts', '66574a26c99bb.webp', 'Glute Bridge', '3 sets - 12x reps', '<li>Start by lying on the floor with your knees bent, feet flat on the ground, and arms straight at your\r\n              sides with your palms facing down.</li>\r\n            <li>Pushing through your heels, raise your hips off the ground by squeezing your core, glutes, and\r\n              hamstrings. Your upper back and shoulders should still be in contact with the ground, and your core down\r\n              to your knees should form a straight line.</li>\r\n            <li>Pause 1-2 seconds at the top and return to the starting position.</li>\r\n            <li>Complete 10-12 reps for 3 sets.</li>'),
(12, 'healthy_foods', '66574b5cee94b.jpg', 'Eggs', 'Eggs are highly nutritious. Once demonized for being high in cholesterol, experts now see them as a useful source of protein that may have various benefits.', '<li><span>High-quality protein</span><br>Eggs are an excellent source of high-quality protein. Protein is\r\n              essential for the growth, repair, and maintenance of tissues in the body. It also plays a crucial role in\r\n              the formation of enzymes and hormones.</li>\r\n            <li><span>Essential nutrients</span><br>Eggs are rich in essential nutrients, including vitamins such as\r\n              B12, riboflavin, and folate, as well as minerals like selenium and phosphorus. These nutrients are\r\n              important for various bodily functions, including energy metabolism, brain health, and the formation of\r\n              red blood cells.</li>\r\n            <li><span>Choline content</span><br>Eggs are one of the best dietary sources of choline, a nutrient that is\r\n              important for brain health. Choline is a component of cell membranes and is involved in neurotransmitter\r\n              production, making it crucial for cognitive function.</li>\r\n            <li><span>Eye health</span><br>Eggs contain lutein and zeaxanthin, antioxidants that are beneficial for eye\r\n              health. These compounds may help reduce the risk of age-related macular degeneration and cataracts.</li>\r\n            <li><span>Heart health</span><br>Contrary to previous concerns about dietary cholesterol, research suggests\r\n              that moderate egg consumption does not significantly impact heart health for most people. In fact, eggs\r\n              contain healthy unsaturated fats and can contribute to a balanced diet that supports heart health.</li>\r\n            <li><span>Weight management</span><br>The protein content in eggs can contribute to a feeling of fullness\r\n              and may help control appetite, which can be beneficial for weight management.</li>'),
(13, 'healthy_foods', '66574c9448363.jpg', 'Meats', 'Meat is a valuable source of essential nutrients that play a crucial role in maintaining overall health.             Lean, unprocessed meats can be included in a healthy diet.', '            <li><span>Lean beef</span><br>Lean beef is an excellent source of protein if you consume it in moderation.\r\n              It also provides highly bioavailable iron. Savor the nutritional richness of lean beef—an exceptional\r\n              source of high-quality protein, essential for muscle growth and repair. Beyond its protein content, lean\r\n              beef delivers bioavailable iron, zinc, and a spectrum of B vitamins (B12, B6, niacin, riboflavin), making\r\n              it a nutrient-dense choice supporting muscle health and overall well-being.</li>\r\n            <li><span>Chicken breast</span><br>Chicken breast is low in fat and calories but high in protein. It’s a\r\n              great source of many nutrients. Experience the lean elegance of chicken breasts, low in fat and calories\r\n              but abundant in protein. Ideal for weight management, chicken breasts provide B vitamins, phosphorus, and\r\n              selenium, contributing not only to satiety but also supporting muscle health.</li>\r\n            <li><span>Lamb and mutton</span><br>Sheep are usually grass-fed, and their meat tends to be high in omega-3\r\n              fatty acids compared with omega-6. Indulge in the unique blend of flavor and nutrition in lamb and mutton.\r\n              Rich in omega-3 fatty acids from grass-fed sources, they promote cardiovascular health. Alongside\r\n              proteins, these meats offer vitamins (B12, niacin) and essential minerals (iron, selenium), contributing\r\n              to a diverse nutrient profile for overall health.</li>'),
(14, 'healthy_foods', '66574cbf1df45.jpg', 'Nuts and Seeds', 'Despite being high in unsaturated fat and calories, nuts and seeds may help lower the risk of             cardiovascular disease, cancer, and other health issues. They are a satisfying snack could help those             managing their weight. They also require almost no preparation, so they’re easy to add to your routine. They             can also add texture to salads and other dishes. However, they are not suitable for people with a nut             allergy.', 'li><span>Almonds</span><br>Almonds are a popular nut that contain with vitamin E, antioxidants, magnesium,\r\n              and fiber. A 2021 review found that almonds may contribute to weight loss, support the gut microbiota,\r\n              improve thinking, manage heart rate when a person is under stress, and prevent skin aging.</li>\r\n            <li><span>Chia seeds</span><br>Chia seeds are a nutrient-dense addition to the diet. A single ounce (28\r\n              grams) provides 11 grams of fiber and significant amounts of magnesium, manganese, calcium, and various\r\n              other nutrients.</li>\r\n            <li><span>Coconuts</span><br>Coconuts provide fiber and fatty acids called medium-chain triglycerides\r\n              (MCTs).</li>\r\n            <li><span>Macadamia nuts</span><br>Macadamia nuts are tasty and higher in monounsaturated fats and lower in\r\n              omega-6 fatty acids than most other nuts.</li>\r\n            <li><span>Walnuts</span><br>Walnuts are highly nutritious and rich in fiber and various vitamins and\r\n              minerals. Pair them with feta cheese to dress a salad.</li>\r\n            <li><span>Brazil nuts</span><br>Brazil nuts are nutrient-rich and have a smooth, buttery texture. The\r\n              nutrients they contain support thyroid function, and they are a good source of the mineral selenium.</li>\r\n        '),
(15, 'healthy_foods', '66574d35bbc10.jpg', 'Vegetables', 'Calorie for calorie, vegetables are among the most concentrated sources of nutrients. Including a variety             of vegetables in your diet will ensure you get a wide range of nutrients. Other vegetables worth mentioning are artichokes, Brussels sprouts, cabbage, celery, eggplant, leeks,             lettuce, mushrooms, radishes, squash, Swiss chard, collard greens, turnips, and zucchini.', '<li><span>Asparagus</span><br>Asparagus is a popular vegetable that is low in both carbs and calories and\r\n              rich in vitamin K.</li>\r\n            <li><span>Bell peppers</span><br>Bell peppers come in several colors, including red, yellow, and green.\r\n              They are crunchy and sweet and are a great source of antioxidants and vitamin C.</li>\r\n            <li><span>Broccoli</span><br>Broccoli is a cruciferous vegetable that tastes great both raw and cooked. It is\r\n              an excellent source of fiber and vitamins C and K and contains a decent amount of protein compared with\r\n              other vegetables.</li>\r\n            <li><span>Carrots</span><br>Carrots are a popular root vegetable. They are sweet, crunchy, and loaded with\r\n              nutrients such as fiber and vitamin K. They are also high in carotene antioxidants, which have numerous\r\n              benefits. Put a few carrots stick in your lunch box or use them for eating guacamole and other dips.</li>\r\n            <li><span>Cauliflower</span><br>Cauliflower is a very versatile cruciferous vegetable. You can add it to\r\n              curries, roast it with olive oil, or use it raw in salads or for dipping.</li>\r\n            <li><span>Cucumbers</span><br>Cucumbers make a refreshing snack. They are low in both carbs and calories,\r\n              consisting mostly of water. They also contain small amounts of vitamin K and other nutrients.</li>\r\n            <li><span>Garlic</span><br>Garlic is a healthy and tasty addition to salads and cooked savory dishes. It\r\n              contains allicin, which has antioxidant and antimicrobial effects. Its nutrients may also reduce the risk\r\n              of cancer and cardiovascular disease.</li>\r\n            <li><span>Kale</span><br>Kale is high in fiber, vitamins C and K, and other nutrients. It adds a satisfying\r\n              crunch to salads and other dishes. You can also add it to stir fries or bake in the oven to make crunchy\r\n              kale chips.</li>\r\n            <li><span>Onions</span><br>Onions have a strong flavor and feature in many recipes. They contain a number of\r\n              bioactive compounds believed to have health benefits.</li>\r\n            <li><span>Tomatoes</span><br>Tomatoes are usually categorized as a vegetable, although they are technically\r\n              a fruit. They are tasty and provide nutrients such as potassium and vitamin C. For a bit of fun and extra\r\n              flavor, try growing tomatoes on your windowsill.</li>'),
(16, 'healthy_foods', '665751401c2dd.jpg', 'Tubers', 'Tubers are the storage organs of some plants. As foods, they are called root vegetables.', '<li><span>Potatoes</span><br>Potatoes provide potassium and contain a little of almost every nutrient you\r\n              need, including vitamin C. With their jackets, they are also a good source of fiber. Potatoes contain more\r\n              water and are less energy-dense than pasta and rice, and can leave you feeling full, so that you dont\r\n              need to eat more. As a result, they may help with weight loss.</li>\r\n            <li><span>Sweet Potatoes</span><br>Sweet potatoes are rich in antioxidants, beta carotene, vitamin A, and\r\n              other essential nutrients. Eat them baked, mashed, or added to other dishes.</li>'),
(17, 'healthy_foods', '6657518a42d57.jpg', 'Fruits and Berries', 'Fruits and berries are popular health foods. They are sweet, nutritious, and easy to incorporate into your\r\n            diet because they require little to no preparation.', '<li><span>Apples</span><br>Apples contain fiber, vitamin C, and numerous antioxidants. They are very filling\r\n              and make the perfect snack if you are hungry between meals.</li>\r\n            <li><span>Avocados</span><br>Avocados are different from most other fruits because they contain lots of\r\n              healthy fat. They are not only creamy and tasty but also high in fiber, potassium, and vitamin C. Swap\r\n              mayonnaise for avocado as a salad dressing, or spread it on toast for breakfast.</li>\r\n            <li><span>Bananas</span><br>Bananas are a good source of potassium. They are also high in vitamin B6 and\r\n              fiber and are convenient and portable.</li>\r\n            <li><span>Blueberries</span><br>Blueberries are both delicious and high in antioxidants.</li>\r\n            <li><span>Oranges</span><br>Oranges are well known for their vitamin C content. What is more, they are high in\r\n              fiber and antioxidants.</li>\r\n            <li><span>Strawberries</span><br>Strawberries are highly nutritious and low in both carbs and calories. They\r\n              provide vitamin C, fiber, and manganese and make a delicious dessert.</li>'),
(18, 'healthy_foods', '665751cea21fe.jpg', 'Grains', 'Whole grains play an important role in your diet because they are healthy carbs and provide a variety of\r\n            micronutrients, fiber and, fuel for your body. They may also help with weight management.', '<li><span>Rice</span><br>Rice is a staple food for much of the worlds population. Brown rice is more\r\n              nutritious than white rice, with decent amounts of fiber, vitamin B1, and magnesium.</li>\r\n            <li><span>Oats</span><br>Oats provide nutrients and powerful fibers called beta glucans. Glucans provide\r\n              numerous benefits, including helping lower cholesterol and feed beneficial bacteria in the gut.</li>\r\n            <li><span>Quinoa</span><br>Quinoa is a tasty grain thats high in nutrients such as fiber and magnesium. It\r\n              is also an excellent source of plant-based protein.</li>'),
(19, 'healthy_foods', '665751e76c86a.jpg', 'Breads', 'Whole grain breads can be high in fiber and other nutrients, and are a better choice than highly processed\r\n            white bread. When buying bread, compare product labels and look for those with the most dietary fiber and\r\n            the least added sugar. If you make your own bread, youll know exactly what goes into it. A bread making\r\n            machine can help if youre not sure about baking.', '<li><span>Ezekiel bread</span><br>Ezekiel bread is made from organic sprouted whole grains and legumes.</li>\r\n            <li><span>Homemade low-carb and gluten-free breads</span><br>If youre looking for low-carb or gluten-free\r\n              breads, you might want to consider making your own. Heres a list of 15 recipes for gluten-free, low carb\r\n              breads.</li>'),
(20, 'healthy_foods', '66575235ebaa7.jpg', 'Legumes', 'Legumes are a great plant-based source of protein, iron, and fiber. Legumes can sometimes interfere with\r\n            digestion and nutrient absorption, but soaking and properly preparing them can reduce this risk.', '<li><span>Green beans</span><br>Green beans, also called string beans, are an unripe variety of the common\r\n              bean. Use them whole as a side dish or add them cold to salads.</li>\r\n            <li><span>Kidney beans</span><br>Kidney beans contain fiber and various vitamins and minerals. Make sure to\r\n              cook them properly, because theyre toxic when raw.</li>\r\n            <li><span>Lentils</span><br>Lentils are another popular legume. Theyre high in fiber and a good source of\r\n              plant-based protein.</li>\r\n            <li><span>Peanuts</span><br>Peanuts hold significant importance in nutrition. These tiny legumes are\r\n              nutritional powerhouses, serving as an excellent plant-based source of protein that supports muscle\r\n              health. Rich in healthy fats, including monounsaturated and polyunsaturated fats, peanuts contribute to\r\n              heart health and add a satisfying element to a balanced diet. Beyond their macronutrient profile, peanuts\r\n              deliver essential vitamins such as E and B-complex (like niacin and folate), along with minerals like\r\n              magnesium and phosphorus, promoting overall well-being. Packed with antioxidants, they play a role in\r\n              combating oxidative stress and inflammation. Peanuts are, in fact, legumes, not true nuts. They are tasty\r\n              and high in nutrients and antioxidants. One study has concluded that peanuts can aid in weight loss and\r\n              may help manage blood pressure. However, if youre monitoring your calorie intake, you may want to be\r\n              mindful of your consumption of peanut butter, which is very high in calories and easy to eat in large\r\n              amounts.</li>'),
(21, 'healthy_foods', '66575250e9cb0.jpg', 'Diary', 'For those who can tolerate them, dairy products are a healthy source of various important nutrients.', '<li><span>Cheese</span><br>A single slice of cheese may offer about the same amount of nutrients as an\r\n              entire cup (240 ml) of milk. Its also a tasty addition to many dishes and can replace meat as a protein\r\n              food. However, it can be high in fat. There are many types of cheese, with different flavors and textures.\r\n              Opt for less processed varieties of cheese.</li>\r\n            <li><span>Dairy milk</span><br>Dairy milk contains vitamins, minerals, protein, and calcium. A 2022 review\r\n              concluded that people who consume dairy products are less likely to die from cardiovascular disease (CVD)\r\n              than those who dont. However, full-fat dairy may increase the risk of CVD and some cancers.</li>\r\n            <li><span>Yoghurt</span><br>Yoghurt is made from milk that is fermented through the addition of live\r\n              bacteria. It has many of the same health effects as milk, but yoghurt with live cultures has the added\r\n              benefit of friendly probiotic bacteria.</li>'),
(22, 'healthy_foods', '6657526ce1484.jpg', 'Fats and Oils', 'Dietary patterns that include unsaturated fats and oils are considered very healthy.', '<li><span>Extra-Virgin Olive Oil</span><br>Extra-virgin olive oil is one of the healthiest vegetable oils.\r\n              It contains heart-healthy monounsaturated fats and is high in antioxidants that have powerful health\r\n              benefits.</li>\r\n            <li><span>Coconut Oil</span><br>Coconut oil is a saturated fat, but it contains MCTs and may have similar\r\n              health effects to olive oil. However, coconut oil has been shown to increase LDL (bad) cholesterol to a\r\n              greater degree than other plant-based liquid oils, so its best to use it in moderation.</li>'),
(23, 'healthy_foods', '6657528b18f9e.jpg', 'Fish and Seafood', 'Fish and other seafood can be healthy and nutritious. Theyre rich in omega-3 fatty acids and iodine.\r\n            Research suggests that eating oily fish can boost a persons heart and brain health.', '<li><span>Salmon</span><br>Salmon is a type of oily fish that is tasty and high in nutrients, including\r\n              protein and omega-3 fatty acids. It also contains some vitamin D.</li>\r\n            <li><span>Sardines</span><br>Sardines are small, oily, and highly nutritious fish. They provide many\r\n              nutrients, including calcium and vitamin D.</li>\r\n            <li><span>Shellfish</span><br>Shellfish are nutrient dense and make a tasty light meal. Edible shellfish\r\n              include clams, mollusks, and oysters. Be sure to get them from a reputable source to ensure they are fresh\r\n              and toxin-free.</li>\r\n            <li><span>Shrimp</span><br>Shrimp is a type of crustacean related to crabs and lobsters. It tends to be low\r\n              in fat and calories but high in protein. It also provides selenium and vitamin B12.</li>\r\n            <li><span>Trout</span><br>Trout is another type of delicious freshwater fish, similar to salmon.</li>\r\n            <li><span>Tuna</span><br>Tuna tends to be low in fat and calories and high in protein. Its perfect for\r\n              people who need to add more protein to their diets but keep calories low. Be sure to buy low mercury\r\n              varieties that are responsibly sourced.</li>'),
(24, 'sleep_programs', '665753f7e54f5.jpg', 'Invest in a Better Mattress and Bedding', 'Having the <span>best mattress</span> for your needs and preferences is vital to making sure that you are\r\n            comfortable enough to relax. Investing in a supportive mattress and <span>pillow</span> helps ensure that\r\n            your spine gets proper support to avoid aches and pains. Your <span>sheets</span> and blankets play a major\r\n            role in helping your bed feel inviting. Look for bedding that feels comfortable to the touch and that will\r\n            help maintain a comfortable temperature during the night.', ''),
(25, 'sleep_programs', '6657542f4b841.jpg', 'Block Out Light', 'Excess light exposure can throw off your sleep and <span>circadian rhythm</span>. Blackout curtains over\r\n            your windows or a sleep mask over your eyes can block light and prevent it from interfering with your rest.\r\n            Avoiding bright light can help you transition to bedtime and contribute to your body is production of\r\n            <span>melatonin</span>, a hormone that promotes sleep.', ''),
(26, 'sleep_programs', '665755472a9cd.jpg', 'Minimize Noise', 'Keeping <span>noise to a minimum</span> is an important part of building a sleep-friendly bedroom. If you\r\n            cannot eliminate nearby sources of noise, consider drowning them out with a fan or white noise machine.\r\n            Earplugs or headphones are another option to stop sounds from bothering you when you want to sleep.', ''),
(27, 'sleep_programs', '6657555ebccf1.jpg', 'Set the Thermostat to 65 to 68 Degrees Fahrenheit', 'You do not want your <span>bedroom temperature</span> to be a distraction by feeling too hot or too cold.\r\n            The ideal temperature can vary based on the individual, but most research supports sleeping in a cooler room\r\n            that is around 65 to 68 degrees.', ''),
(28, 'sleep_programs', '665755afdccf5.jpg', 'Get at Least Seven Hours of Sleep', 'If you want to make sure that you ire getting the <span>recommended amount of sleep each night</span>, then\r\n            you need to build that time into your schedule. Considering your fixed wake-up time, work backward and\r\n            identify a target bedtime that allows for at least seven hours of sleep. Whenever possible, give yourself\r\n            extra time before bed to get ready for sleep.', ''),
(29, 'sleep_programs', '6657559eccee8.jpg', 'Set Your Alarm for the Same Time Each Day', 'It is close to impossible for your body to get accustomed to a healthy sleep routine if you are constantly\r\n            waking up at <span>different times</span>. Pick a wake-up time and stick with it, even on weekends or other\r\n            days when you would otherwise be tempted to sleep in.', ''),
(30, 'sleep_programs', '665755fa13825.jpg', 'Keep Naps Around 20 Minutes', 'To sleep better at night, it is important to use caution with naps. If you nap for too long or too late in\r\n            the day, it can throw off your sleep schedule and make it harder to get to sleep when you want to. The\r\n            <span>best time to nap</span> is shortly after lunch in the early afternoon, and the best nap length is\r\n            around 20 minutes.', ''),
(31, 'sleep_programs', '665756142c365.jpg', 'Relax for 30 Minutes Before Bed', 'It is much easier to fall asleep if you are at ease. Quiet reading, low-impact stretching, listening to\r\n            soothing music, and <span>relaxation exercises</span> are examples of ways to get into the right frame of\r\n            mind for sleep. Focus on trying to relax instead of trying to fall asleep. Controlled breathing, mindfulness\r\n            meditation, progressive muscle relaxation, and guided imagery are examples of relaxation methods that can\r\n            help ease you into sleep.', ''),
(32, 'sleep_programs', '6657565ca2c1f.jpg', 'Disconnect Devices in the Hour Before Bed', 'Tablets, smartphones, and laptops can keep your brain wired, making it hard to truly wind down. The light\r\n            from these <span>electronic devices</span> can also suppress your natural production of melatonin. As much\r\n            as possible, try to disconnect for an hour or more before going to bed.', ''),
(33, 'sleep_programs', '6657567415fef.jpg', 'Get 30 Minutes of Natural Light Exposure', 'The body is internal clock is <span>regulated by light exposure</span>. Sunlight has a strong effect, so try\r\n            to take in daylight by getting outside or opening up windows or blinds to natural light. Getting a dose of\r\n            natural light early in the day can help normalize your circadian rhythm. If natural light is not an option,\r\n            you can talk with your doctor about using a <span>light therapy</span> box.', ''),
(34, 'sleep_programs', '665756beeda4e.jpg', 'Exercise for at Least 20 Minutes Each Day', 'Daily exercise has many benefits for health, and the changes it initiates in energy use and body\r\n            temperature can <span>promote solid sleep</span>. Most experts advise against intense exercise close to\r\n            bedtime because it may hinder your body is ability to effectively settle down before sleep.', ''),
(35, 'sleep_programs', '665756deacc37.jpg', 'Limit Caffeine After 2 p.m.', 'Caffeinated drinks, including coffee, tea, and sodas, are among the most popular beverages in the world.\r\n            Some people are tempted to use the jolt of energy from <span>caffeine</span> to try to overcome daytime\r\n            sleepiness, but that approach is not sustainable and can cause long-term sleep deprivation. To avoid this,\r\n            keep an eye on your caffeine intake and avoid it later in the day when it can be a barrier to falling\r\n            asleep.', ''),
(36, 'sleep_programs', '665757303ac08.jpg', 'Reserve Your Bed for Sleep Only', 'If you are have a comfortable bed, the temptation to spend leisure time in it may be strong. However, it is\r\n            essential to recognize that this habit can potentially <span>disrupt your bedtime routine</span>. To\r\n            optimize your sleep environment, its advisable to establish a strong mental association between your bed\r\n            and sleep. This practice helps <span>signal to your brain</span> that when you enter your bed, it is time\r\n            for sleep. In addition to cultivating a conducive sleep environment, this approach contributes to the\r\n            overall quality of your rest and supports a healthier sleep routine.', ''),
(37, 'sleep_programs', '6657575c5899c.jpg', 'Eat Dinner a Few Hours Before Bed', 'It can be harder to fall asleep if your body is still digesting a big dinner. To keep food-based sleep\r\n            <span>disruptions to a minimum</span>, try to avoid late dinners and minimize especially fatty or spicy\r\n            foods. If you need an evening snack, opt for something light.', ''),
(38, 'sleep_programs', '6657578376393.jpg', 'Get Out of Bed After 20 Minutes', 'You want to avoid a connection in your mind between your bed and frustration from sleeplessness. This means\r\n            that if you have spent around 20 minutes in bed without being able to fall asleep, it is best to get out of\r\n            bed and <span>do something relaxing in low light</span>. Avoid checking the time or using electronics and\r\n            return to bed once you feel tired.', ''),
(39, 'sleep_programs', '665757c4ccb37.jpg', 'Keep a Sleep Diary', 'A daily <span>sleep journal</span> can help you keep track of how well you are sleeping and identify\r\n            factors that might be helping or hurting your sleep. If you are testing out a new sleep schedule or other\r\n            sleep hygiene changes, your sleep diary can help document how well it is working.', ''),
(40, 'sleep_programs', '665757e099464.jpg', 'Consider Supplements', 'In addition to improving overall sleep hygiene, you may want to discuss the use of supplements with your\r\n            doctor. Melatonin supplements are commonly used to shorten the time it takes to fall asleep. Other\r\n            <span>natural sleep aids</span> include valerian, chamomile, and glycine. Since dietary supplements are not\r\n            closely regulated by the U.S. Food and Drug Administration, it is important to take steps to ensure you are\r\n            purchasing <span>reputable sleep supplements', ''),
(41, 'sleep_programs', '665757f34f070.jpg', 'Talk With a Doctor', 'Your doctor is in the best position to offer detailed and personalized advice if you experience serious\r\n            difficulties sleeping. <span>Talk with your doctor</span> if you find that your sleep problems are\r\n            worsening, persisting over the long-term, affecting your health and safety, or if they occur alongside other\r\n            unexplained health problems. They can provide additional guidance and treat any underlying conditions.', ''),
(42, 'sleep_programs', '66575809d75cf.jpg', 'Limit Nicotine Use and Smoke Exposure', 'Exposure to smoke, including secondhand smoke, has been associated with a range of sleeping problems\r\n            including <span>difficulty falling asleep</span> and fragmented sleep. Nicotine is a stimulant, and evening\r\n            nicotine use in particular has been found to disrupt sleep.', ''),
(43, 'sleep_programs', '6657582ba2f95.jpg', 'Be Mindful of Alcohol', 'Alcohol can induce drowsiness, so some people are keen on a nightcap before bed. Unfortunately,\r\n            <span>alcohol affects the brain</span> in ways that can lower sleep quality, making it best to avoid alcohol\r\n            in the lead-up to bedtime. Or better be never drink alcohol in your whole life, it is prohibited too in\r\n            Islam.', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id_subscription` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `plan_name` varchar(50) NOT NULL,
  `plan_price` varchar(225) NOT NULL,
  `status` varchar(11) NOT NULL,
  `activation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id_subscription`, `id_user`, `plan_name`, `plan_price`, `status`, `activation_date`) VALUES
(1, 11, 'premium plan', '20000', 'active', '2024-05-28'),
(2, 12, 'premium plan', '50000', 'active', '2024-06-02'),
(39, 40, 'free plan', '0', 'active', '2024-05-29'),
(48, 49, 'free plan', '0', 'active', '2024-05-29'),
(55, 52, 'premium plan', '20000', 'active', '2024-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `email`, `password`, `level`) VALUES
(11, 'User', 'user', 'user@gmail.com', 'user', 'user'),
(12, 'Miles Morales', 'spidey', 'spidey@gmail.com', '1234', 'user'),
(40, 'Admin Rafen', 'adminrafen', 'adminrafen@gmail.com', 'admin', 'admin'),
(49, 'Non Premium User', 'nonprem', 'nonprem@gmail.com', '1234', 'user'),
(52, 'Holamossa Chica', 'halow', 'halow@gmail.com', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `fk_personalization` (`id_personalization`);

--
-- Indexes for table `personalization`
--
ALTER TABLE `personalization`
  ADD PRIMARY KEY (`id_personalization`),
  ADD KEY `fk_personalization_relation_user` (`id_user`);

--
-- Indexes for table `pillars`
--
ALTER TABLE `pillars`
  ADD PRIMARY KEY (`id_pillars`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id_subscription`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email_unique` (`email`),
  ADD UNIQUE KEY `username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `personalization`
--
ALTER TABLE `personalization`
  MODIFY `id_personalization` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pillars`
--
ALTER TABLE `pillars`
  MODIFY `id_pillars` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id_subscription` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_personalization` FOREIGN KEY (`id_personalization`) REFERENCES `personalization` (`id_personalization`);

--
-- Constraints for table `personalization`
--
ALTER TABLE `personalization`
  ADD CONSTRAINT `fk_personalization_relation_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `update_subscription_status` ON SCHEDULE EVERY 1 DAY STARTS '2024-05-31 09:30:57' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE subscription
  SET Status = 'inactive'
  WHERE Status = 'active' AND ActivationDate <= CURDATE() - INTERVAL 30 DAY$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
