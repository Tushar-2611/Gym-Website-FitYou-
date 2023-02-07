<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="icon" href="img/sitelogo.jpg">

    <link rel="stylesheet" href="home.css">
    <title>Home | FIT YOU</title>
</head>
<body>

    <!-- HEADER -->
    <header class="header" id="home">


    <?php
      include('Structure/navbar.php');
    ?>

    </header>

    <!-- HERO SECTION -->


                
    <section class="section-hero">
        <div class="container hero-box">
          <div class="hero-content margin-bottom">
            <h1 class="heading heading--1 margin-bottom">
              A place for your fitness goals
            </h1>
            <p class="description">
              We Offer Functional Training, Gym, Yoga.
            </p>
          </div>
          <div class="btn-group">
            <button class="btn btn__primary margin-right margin-bottom">
              <a href="contact.html">Contact us</a>
            </button>
            <button class="btn btn__secondary"><a href="course.html">Our services</a></button>
          </div>
        </div>
      </section>

            <!-- SECTION OFFER -->
      <section class="section-offer" id="offer">
        <div class="offer-box">
          <div class="offer" data-aos="fade-up">
            <h2 class="heading heading--1 margin-bottom">
              Special offer this summer get full Benefits for year with 20%
              discount.
            </h2>
            <p class="margin-bottom">
              Exclusive Member Profile with 110+ exercise videos

            </p>
            <button class="btn btn__primary">Become a member</button>
          </div>

          <div class="offer-img"></div>
        </div>
      </section>

      
<section class="course_services">
    <div id="course_videos" class="row row-cols-1 row-cols-md-4 ">

    <div class="col col-3">
        <div  class="services">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                <h2> Free access </h2>
            <h4> Best of the content for free </h4>
        </div>
    </div>

      <div class="col col-3">
        <div  class="services">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                <h2> Free access </h2>
            <h4> Best of the content for free </h4>
        </div>

    </div>
    <div class="col col-3">
       <div  class="services">
            <i class="fa-solid fa-utensils"></i>
            <h2> Expert Nutrionist</h2>
        <h4> Certified Nutrionist for diet plans</h4>
        </div>

    </div>
    <div class="col col-3">
        <div  class="services">
            <i class="fa-solid fa-person-chalkboard"></i>
            <h2> Personal Trainer Program</h2>
        <h4> Personal guidance and assistance </h4>
        </div>

    </div>
  </div>

</section>

        <!-- FOOTER -->


    <script src="index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


          <?php
      include('structure/footer.php');
    ?>

</body>
</html>
