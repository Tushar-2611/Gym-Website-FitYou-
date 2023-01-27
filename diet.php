<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="icon" href="img/sitelogo.jpg">

    <title>Home | FIT YOU</title>
</head>
<body>

    <!-- HEADER -->
    <header class="header" id="home">
                 <?php
  include('Structure/navbar.php');
    ?>

    </header>



    
    <section class="course_diet">
        
        <h2 class="heading heading--2 underline grid-center py-3">
            FOR YOUR OVERALL <span class="yellow">HEALTH</span>
        </h2>
        
        
        <div id="course_diet" class="row row-cols-1 row-cols-md-3 g-4">
            
            <div class="col">
                <div class="card h-100">
                    <img    id="diet_img"
                    src="./img/D1.jpg"
                    alt="twitter-icon"
                    width="30"
                    height="30"
                    />
                    
                    <div class="card-body">
                        <h5 class="card-title">The DASH diet</h5>
                        <p class="card-text">It emphasizes eating plenty of fruits, vegetables, whole grains, and lean meats and is low in salt, red meat, added sugars, and fat</p>
                        <a href="#" class="link-btn">read more</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" >
                    <img id="diet_img"
                    src="./img/D2.jpg"
                    alt="twitter-icon"
                    width="30"
                    height="30"
                    />
                    <div class="card-body">
                        <h5 class="card-title">Mediterranean diet</h5>
                        <p class="card-text">The Mediterranean diet is based on foods that people in countries like Italy and Greece have traditionally eaten.</p>
                        <a href="#" class="link-btn">read more</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img    id="diet_img"
                    src="./img/D3.jpg"
                    alt="twitter-icon"
                    width="30"
                    height="30"
                    />
                    <div class="card-body">
                        <h5 class="card-title">Plant-based and flexitarian diets</h5>
                        <p class="card-text">This is a plant-based diet that allows eating animal products in moderation.</p>
                        <a href="#" class="link-btn">read more</a>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100">
                    <img  id="diet_img"
                    src="./img/D5.jpg"
                    alt="twitter-icon"
                    width="30"
                    height="30"
                    />
                    <div class="card-body">
                        <h5 class="card-title">Ketogenic diet</h5>
                        <p class="card-text">The idea is for you to get more calories from protein and fat and less from carbohydrates.</p>
                        <a href="#" class="link-btn">read more</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img id="diet_img"
                    src="./img/D6.jpg"
                    alt="twitter-icon"
                    width="30"
                    height="30"
                    />
                    <div class="card-body">
                        <h5 class="card-title">Vegan Diet</h5>
                        <p class="card-text"> A vegan diet is based on plants such as vegetables, grains, nuts and fruits and foods made from plants. </p>
                        <a href="#" class="link-btn">read more</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img id="diet_img"
                    src="./img/D7.jpg"
                    alt="twitter-icon"
                    width="30"
                    height="30"
                    />
                    <div class="card-body">
                        <h5 class="card-title">Low carb diets</h5>
                        <p class="card-text">            <P>Low carb diets restrict your carb intake in favor of protein and fat.</P>
                        <a href="#" class="link-btn">read more</a>
                    </p>
                </div>
            </div>
            
    </section>
    
</div>
    <!-- FOOTER -->
    <footer>
     <?php
      include('structure/footer.php');
    ?>
    </footer>

</body>
</html>