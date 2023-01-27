<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="icon" href="img/sitelogo.jpg">
    <title>Courses | BE FIT</title>
</head>
<body>

    <!-- HEADER -->
    <header class="header" id="home">
          <?php
  include('structure/navbar.php');
    ?>
    </header>


      <!-- SECTION COURSES -->
      <section class="section-courses" id="courses">
        <div class="container courses-box" data-aos="fade-up">
          
          <header class="courses-heading">
            <h2 class="heading heading--2 underline">Our Courses</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit
              ducimus illum corporis magni voluptas, ex eum dolorum quia
              officia! Deleniti quia ut.
            </p>
          </header>
          

          <article class="courses-content">
           
            <div class="class-card">
              <img
                class="class-card__img"
                src="img/julia-rekamie-Z72YujnOrlY-unsplash.jpg"
                alt="body building course"
                width="550"
                height="550"
              />

              <div class="class-card__overlay">
                <div class="text">
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Ratione culpa
                  </p>

                  <a href="weightloss.php" class="link-button">Go to course &rarr;</a>
                </div>
              </div>

              <div class="class-card__title">weightloss</div>
            </div>


            <div class="class-card">
              <img
                class="class-card__img"
                src="img/patrick-malleret-p-v1DBkTrgo-unsplash.jpg"
                alt="cross course"
                width="550"
                height="550"
              />
              <div class="class-card__overlay">
                <div class="text">
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Ratione culpa
                  </p>
                  

                  <a href="yoga.php" class="link-button">Go to course&rarr;</a>
                </div>
              </div>
              <div class="class-card__title">Yoga</div>
            </div>

            <div class="class-card">
              <img
                class="class-card__img"
                src="img/team-2.jpg"
                alt="gymnastic course"
                width="550"
                height="450"
              />

              
              <div class="class-card__overlay">
                <div class="text">
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Ratione culpa
                  </p>

                  <a href="abs.php" class="link-button">Read More &rarr;</a>
                </div>
              </div>

              <div class="class-card__title">Abs Workout</div>
            </div>

             <div class="class-card">
              <img
                class="class-card__img"
                src="img/alora-griffiths-JNeYWQncbj8-unsplash.jpg"
                alt="body building course"
                width="550"
                height="550"
              />

              <div class="class-card__overlay">
                <div class="text">
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Ratione culpa
                  </p>

                  <a href="strength.php" class="link-button">Go to course &rarr;</a>
                </div>
              </div>

              <div class="class-card__title">Strength</div>
            </div>

          </article>
        </div>
      </section>

      

      



              <!-- FOOTER -->
    <?php
      include('structure/footer.php');
    ?>

        <script src="index.js"></script>

</body>
</html>