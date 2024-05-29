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
  <title>Healthy Foods</title>
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
      <a href="healthy-foods.php" class="btn btn-active">Healthy Foods</a>
      <a href="sleep-programs.php" class="btn">Sleep Programs</a>
      <a href="get-premium.php" class="btn">Get Premium?</a>
      <div class="animation start-home3"></div>
    </div>
  </div>

  <!-- banner -->
  <div class="banner">
    <div class="text">
      <h1>Healthy <span>Foods</span></h1>
      <p class="description">
        Nourish your body with the vibrant energy of wholesome, nutrient-rich foods, cultivating a harmonious
        relationship with what you consume. Explore the colorful palette of nature's bounty, savoring the crisp
        freshness of fruits, the nourishing goodness of vegetables, and the wholesome richness of whole grains. Your
        plate is a canvas, and each mindful bite is an expression of your commitment to self-care, creating a symphony
        of flavors that nourish not just your body but your overall well-being.
      </p>
    </div>
    <div class="banner-image">
      <img src="image.foods/healthy-foods.jpg" alt="" />
      <div class="circle"></div>
    </div>
  </div>

  <!-- content -->
  <div class="sub-title">
    <h2>Start to eat healthy foods today or never!</h2>
    <hr>
  </div>
  <div class="wrap-mentoring">
    <div class="mentoring">
      <div class="card-mentoring">
        <div class="card-mentoring-image">
          <img src="image.foods/eggs.jpg" alt="" />
        </div>
        <div class="card-mentoring-text">
          <h2>Eggs</h2>
          <hr>
          <p>Eggs are highly nutritious. Once demonized for being high in cholesterol, experts now see them as a useful
            source of protein that may have various benefits.</p>
          <ol>
            <li><span>High-quality protein</span><br>Eggs are an excellent source of high-quality protein. Protein is
              essential for the growth, repair, and maintenance of tissues in the body. It also plays a crucial role in
              the formation of enzymes and hormones.</li>
            <li><span>Essential nutrients</span><br>Eggs are rich in essential nutrients, including vitamins such as
              B12, riboflavin, and folate, as well as minerals like selenium and phosphorus. These nutrients are
              important for various bodily functions, including energy metabolism, brain health, and the formation of
              red blood cells.</li>
            <li><span>Choline content</span><br>Eggs are one of the best dietary sources of choline, a nutrient that is
              important for brain health. Choline is a component of cell membranes and is involved in neurotransmitter
              production, making it crucial for cognitive function.</li>
            <li><span>Eye health</span><br>Eggs contain lutein and zeaxanthin, antioxidants that are beneficial for eye
              health. These compounds may help reduce the risk of age-related macular degeneration and cataracts.</li>
            <li><span>Heart health</span><br>Contrary to previous concerns about dietary cholesterol, research suggests
              that moderate egg consumption does not significantly impact heart health for most people. In fact, eggs
              contain healthy unsaturated fats and can contribute to a balanced diet that supports heart health.</li>
            <li><span>Weight management</span><br>The protein content in eggs can contribute to a feeling of fullness
              and may help control appetite, which can be beneficial for weight management.</li>
          </ol>
        </div>
      </div>

      <div class="card-mentoring">
        <div class="card-mentoring-image">
          <img src="image.foods/meats.jpg" alt="" />
        </div>
        <div class="card-mentoring-text">
          <h2>Meats</h2>
          <hr>
          <p>Meat is a valuable source of essential nutrients that play a crucial role in maintaining overall health.
            Lean, unprocessed meats can be included in a healthy diet.</p>
          <ol>
            <li><span>Lean beef</span><br>Lean beef is an excellent source of protein if you consume it in moderation.
              It also provides highly bioavailable iron. Savor the nutritional richness of lean beef—an exceptional
              source of high-quality protein, essential for muscle growth and repair. Beyond its protein content, lean
              beef delivers bioavailable iron, zinc, and a spectrum of B vitamins (B12, B6, niacin, riboflavin), making
              it a nutrient-dense choice supporting muscle health and overall well-being.</li>
            <li><span>Chicken breast</span><br>Chicken breast is low in fat and calories but high in protein. It’s a
              great source of many nutrients. Experience the lean elegance of chicken breasts, low in fat and calories
              but abundant in protein. Ideal for weight management, chicken breasts provide B vitamins, phosphorus, and
              selenium, contributing not only to satiety but also supporting muscle health.</li>
            <li><span>Lamb and mutton</span><br>Sheep are usually grass-fed, and their meat tends to be high in omega-3
              fatty acids compared with omega-6. Indulge in the unique blend of flavor and nutrition in lamb and mutton.
              Rich in omega-3 fatty acids from grass-fed sources, they promote cardiovascular health. Alongside
              proteins, these meats offer vitamins (B12, niacin) and essential minerals (iron, selenium), contributing
              to a diverse nutrient profile for overall health.</li>
          </ol>
        </div>
      </div>

      <div class="card-mentoring">
        <div class="card-mentoring-image">
          <img src="image.foods/nutsandseeds.jpg" alt="" />
        </div>
        <div class="card-mentoring-text">
          <h2>Nuts and Seeds</h2>
          <hr>
          <p>Despite being high in unsaturated fat and calories, nuts and seeds may help lower the risk of
            cardiovascular disease, cancer, and other health issues. They are a satisfying snack could help those
            managing their weight. They also require almost no preparation, so they’re easy to add to your routine. They
            can also add texture to salads and other dishes. However, they are not suitable for people with a nut
            allergy.</p>
          <ol>
            <li><span>Almonds</span><br>Almonds are a popular nut that contain with vitamin E, antioxidants, magnesium,
              and fiber. A 2021 review found that almonds may contribute to weight loss, support the gut microbiota,
              improve thinking, manage heart rate when a person is under stress, and prevent skin aging.</li>
            <li><span>Chia seeds</span><br>Chia seeds are a nutrient-dense addition to the diet. A single ounce (28
              grams) provides 11 grams of fiber and significant amounts of magnesium, manganese, calcium, and various
              other nutrients.</li>
            <li><span>Coconuts</span><br>Coconuts provide fiber and fatty acids called medium-chain triglycerides
              (MCTs).</li>
            <li><span>Macadamia nuts</span><br>Macadamia nuts are tasty and higher in monounsaturated fats and lower in
              omega-6 fatty acids than most other nuts.</li>
            <li><span>Walnuts</span><br>Walnuts are highly nutritious and rich in fiber and various vitamins and
              minerals. Pair them with feta cheese to dress a salad.</li>
            <li><span>Brazil nuts</span><br>Brazil nuts are nutrient-rich and have a smooth, buttery texture. The
              nutrients they contain support thyroid function, and they are a good source of the mineral selenium.</li>
          </ol>
        </div>
      </div>

      <div class="card-mentoring">
        <div class="card-mentoring-image">
          <img src="image.foods/vegetables.jpg" alt="" />
        </div>
        <div class="card-mentoring-text">
          <h2>Vegetables</h2>
          <hr>
          <p>Calorie for calorie, vegetables are among the most concentrated sources of nutrients. Including a variety
            of vegetables in your diet will ensure you get a wide range of nutrients.</p>
          <ol>
            <li><span>Asparagus</span><br>Asparagus is a popular vegetable that is low in both carbs and calories and
              rich in vitamin K.</li>
            <li><span>Bell peppers</span><br>Bell peppers come in several colors, including red, yellow, and green.
              They are crunchy and sweet and are a great source of antioxidants and vitamin C.</li>
            <li><span>Broccoli</span><br>Broccoli is a cruciferous vegetable that tastes great both raw and cooked. It is
              an excellent source of fiber and vitamins C and K and contains a decent amount of protein compared with
              other vegetables.</li>
            <li><span>Carrots</span><br>Carrots are a popular root vegetable. They are sweet, crunchy, and loaded with
              nutrients such as fiber and vitamin K. They are also high in carotene antioxidants, which have numerous
              benefits. Put a few carrots stick in your lunch box or use them for eating guacamole and other dips.</li>
            <li><span>Cauliflower</span><br>Cauliflower is a very versatile cruciferous vegetable. You can add it to
              curries, roast it with olive oil, or use it raw in salads or for dipping.</li>
            <li><span>Cucumbers</span><br>Cucumbers make a refreshing snack. They are low in both carbs and calories,
              consisting mostly of water. They also contain small amounts of vitamin K and other nutrients.</li>
            <li><span>Garlic</span><br>Garlic is a healthy and tasty addition to salads and cooked savory dishes. It
              contains allicin, which has antioxidant and antimicrobial effects. Its nutrients may also reduce the risk
              of cancer and cardiovascular disease.</li>
            <li><span>Kale</span><br>Kale is high in fiber, vitamins C and K, and other nutrients. It adds a satisfying
              crunch to salads and other dishes. You can also add it to stir fries or bake in the oven to make crunchy
              kale chips.</li>
            <li><span>Onions</span><br>Onions have a strong flavor and feature in many recipes. They contain a number of
              bioactive compounds believed to have health benefits.</li>
            <li><span>Tomatoes</span><br>Tomatoes are usually categorized as a vegetable, although they are technically
              a fruit. They are tasty and provide nutrients such as potassium and vitamin C. For a bit of fun and extra
              flavor, try growing tomatoes on your windowsill.</li>
          </ol>
          <p>Other vegetables worth mentioning are artichokes, Brussels sprouts, cabbage, celery, eggplant, leeks,
            lettuce, mushrooms, radishes, squash, Swiss chard, collard greens, turnips, and zucchini.</p>
        </div>
      </div>

      <div class="card-mentoring">
        <div class="card-mentoring-image">
          <img src="image.foods/tuber.jpg" alt="" />
        </div>
        <div class="card-mentoring-text">
          <h2>Tubers</h2>
          <hr>
          <p>Tubers are the storage organs of some plants. As foods, they are called root vegetables.</p>
          <ol>
            <li><span>Potatoes</span><br>Potatoes provide potassium and contain a little of almost every nutrient you
              need, including vitamin C. With their jackets, they are also a good source of fiber. Potatoes contain more
              water and are less energy-dense than pasta and rice, and can leave you feeling full, so that you don’t
              need to eat more. As a result, they may help with weight loss.</li>
            <li><span>Sweet Potatoes</span><br>Sweet potatoes are rich in antioxidants, beta carotene, vitamin A, and
              other essential nutrients. Eat them baked, mashed, or added to other dishes.</li>
          </ol>
        </div>
      </div>
    </div>

    <div class="mentoring">
      <div class="card-mentoring">
        <div class="card-mentoring-image">
          <img src="image.foods/fruitnb.jpg" alt="" />
        </div>
        <div class="card-mentoring-text">
          <h2>Fruits and Berries</h2>
          <hr>
          <p>Fruits and berries are popular health foods. They are sweet, nutritious, and easy to incorporate into your
            diet because they require little to no preparation.</p>
          <ol>
            <li><span>Apples</span><br>Apples contain fiber, vitamin C, and numerous antioxidants. They are very filling
              and make the perfect snack if you’re hungry between meals.</li>
            <li><span>Avocados</span><br>Avocados are different from most other fruits because they contain lots of
              healthy fat. They are not only creamy and tasty but also high in fiber, potassium, and vitamin C. Swap
              mayonnaise for avocado as a salad dressing, or spread it on toast for breakfast.</li>
            <li><span>Bananas</span><br>Bananas are a good source of potassium. They’re also high in vitamin B6 and
              fiber and are convenient and portable.</li>
            <li><span>Blueberries</span><br>Blueberries are both delicious and high in antioxidants.</li>
            <li><span>Oranges</span><br>Oranges are well known for their vitamin C content. What’s more, they’re high in
              fiber and antioxidants.</li>
            <li><span>Strawberries</span><br>Strawberries are highly nutritious and low in both carbs and calories. They
              provide vitamin C, fiber, and manganese and make a delicious dessert.</li>
          </ol>
        </div>
      </div>

      <div class="card-mentoring">
        <div class="card-mentoring-image">
          <img src="image.foods/grains.jpg" alt="" />
        </div>
        <div class="card-mentoring-text">
          <h2>Grains</h2>
          <hr>
          <p>Whole grains play an important role in your diet because they are healthy carbs and provide a variety of
            micronutrients, fiber and, fuel for your body. They may also help with weight management.</p>
          <ol>
            <li><span>Rice</span><br>Rice is a staple food for much of the world’s population. Brown rice is more
              nutritious than white rice, with decent amounts of fiber, vitamin B1, and magnesium.</li>
            <li><span>Oats</span><br>Oats provide nutrients and powerful fibers called beta glucans. Glucans provide
              numerous benefits, including helping lower cholesterol and feed beneficial bacteria in the gut.</li>
            <li><span>Quinoa</span><br>Quinoa is a tasty grain that’s high in nutrients such as fiber and magnesium. It
              is also an excellent source of plant-based protein.</li>
          </ol>
        </div>
      </div>

      <div class="card-mentoring">
        <div class="card-mentoring-image">
          <img src="image.foods/breads.jpg" alt="" />
        </div>
        <div class="card-mentoring-text">
          <h2>Breads</h2>
          <hr>
          <p>Whole grain breads can be high in fiber and other nutrients, and are a better choice than highly processed
            white bread. When buying bread, compare product labels and look for those with the most dietary fiber and
            the least added sugar. If you make your own bread, you’ll know exactly what goes into it. A bread making
            machine can help if you’re not sure about baking.</p>
          <ol>
            <li><span>Ezekiel bread</span><br>Ezekiel bread is made from organic sprouted whole grains and legumes.</li>
            <li><span>Homemade low-carb and gluten-free breads</span><br>If you’re looking for low-carb or gluten-free
              breads, you might want to consider making your own. Here’s a list of 15 recipes for gluten-free, low carb
              breads.</li>
          </ol>
        </div>
      </div>

      <div class="card-mentoring">
        <div class="card-mentoring-image">
          <img src="image.foods/legumes.jpg" alt="" />
        </div>
        <div class="card-mentoring-text">
          <h2>Legumes</h2>
          <hr>
          <p>Legumes are a great plant-based source of protein, iron, and fiber. Legumes can sometimes interfere with
            digestion and nutrient absorption, but soaking and properly preparing them can reduce this risk.</p>
          <ol>
            <li><span>Green beans</span><br>Green beans, also called string beans, are an unripe variety of the common
              bean. Use them whole as a side dish or add them cold to salads.</li>
            <li><span>Kidney beans</span><br>Kidney beans contain fiber and various vitamins and minerals. Make sure to
              cook them properly, because they’re toxic when raw.</li>
            <li><span>Lentils</span><br>Lentils are another popular legume. They’re high in fiber and a good source of
              plant-based protein.</li>
            <li><span>Peanuts</span><br>Peanuts hold significant importance in nutrition. These tiny legumes are
              nutritional powerhouses, serving as an excellent plant-based source of protein that supports muscle
              health. Rich in healthy fats, including monounsaturated and polyunsaturated fats, peanuts contribute to
              heart health and add a satisfying element to a balanced diet. Beyond their macronutrient profile, peanuts
              deliver essential vitamins such as E and B-complex (like niacin and folate), along with minerals like
              magnesium and phosphorus, promoting overall well-being. Packed with antioxidants, they play a role in
              combating oxidative stress and inflammation. Peanuts are, in fact, legumes, not true nuts. They are tasty
              and high in nutrients and antioxidants. One study has concluded that peanuts can aid in weight loss and
              may help manage blood pressure. However, if you’re monitoring your calorie intake, you may want to be
              mindful of your consumption of peanut butter, which is very high in calories and easy to eat in large
              amounts.</li>
          </ol>
        </div>
      </div>

      <div class="card-mentoring">
        <div class="card-mentoring-image">
          <img src="image.foods/dairyy.jpg" alt="" />
        </div>
        <div class="card-mentoring-text">
          <h2>Dairy</h2>
          <hr>
          <p>For those who can tolerate them, dairy products are a healthy source of various important nutrients.</p>
          <ol>
            <li><span>Cheese</span><br>A single slice of cheese may offer about the same amount of nutrients as an
              entire cup (240 ml) of milk. It’s also a tasty addition to many dishes and can replace meat as a protein
              food. However, it can be high in fat. There are many types of cheese, with different flavors and textures.
              Opt for less processed varieties of cheese.</li>
            <li><span>Dairy milk</span><br>Dairy milk contains vitamins, minerals, protein, and calcium. A 2022 review
              concluded that people who consume dairy products are less likely to die from cardiovascular disease (CVD)
              than those who don’t. However, full-fat dairy may increase the risk of CVD and some cancers.</li>
            <li><span>Yoghurt</span><br>Yoghurt is made from milk that is fermented through the addition of live
              bacteria. It has many of the same health effects as milk, but yoghurt with live cultures has the added
              benefit of friendly probiotic bacteria.</li>
          </ol>
        </div>
      </div>

      <div class="card-mentoring">
        <div class="card-mentoring-image">
          <img src="image.foods/fatsandoils.jpg" alt="" />
        </div>
        <div class="card-mentoring-text">
          <h2>Fats and Oils</h2>
          <hr>
          <p>Dietary patterns that include unsaturated fats and oils are considered very healthy.</p>
          <ol>
            <li><span>Extra-Virgin Olive Oil</span><br>Extra-virgin olive oil is one of the healthiest vegetable oils.
              It contains heart-healthy monounsaturated fats and is high in antioxidants that have powerful health
              benefits.</li>
            <li><span>Coconut Oil</span><br>Coconut oil is a saturated fat, but it contains MCTs and may have similar
              health effects to olive oil. However, coconut oil has been shown to increase LDL (bad) cholesterol to a
              greater degree than other plant-based liquid oils, so it’s best to use it in moderation.</li>
          </ol>
        </div>
      </div>

      <div class="card-mentoring">
        <div class="card-mentoring-image">
          <img src="image.foods/fishandseafood.jpg" alt="" />
        </div>
        <div class="card-mentoring-text">
          <h2>Fish and Seafood</h2>
          <hr>
          <p>Fish and other seafood can be healthy and nutritious. They’re rich in omega-3 fatty acids and iodine.
            Research suggests that eating oily fish can boost a person’s heart and brain health.</p>
          <ol>
            <li><span>Salmon</span><br>Salmon is a type of oily fish that is tasty and high in nutrients, including
              protein and omega-3 fatty acids. It also contains some vitamin D.</li>
            <li><span>Sardines</span><br>Sardines are small, oily, and highly nutritious fish. They provide many
              nutrients, including calcium and vitamin D.</li>
            <li><span>Shellfish</span><br>Shellfish are nutrient dense and make a tasty light meal. Edible shellfish
              include clams, mollusks, and oysters. Be sure to get them from a reputable source to ensure they are fresh
              and toxin-free.</li>
            <li><span>Shrimp</span><br>Shrimp is a type of crustacean related to crabs and lobsters. It tends to be low
              in fat and calories but high in protein. It also provides selenium and vitamin B12.</li>
            <li><span>Trout</span><br>Trout is another type of delicious freshwater fish, similar to salmon.</li>
            <li><span>Tuna</span><br>Tuna tends to be low in fat and calories and high in protein. It’s perfect for
              people who need to add more protein to their diets but keep calories low. Be sure to buy low mercury
              varieties that are responsibly sourced.</li>
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