
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="icon" href="img/sitelogo.jpg">

    <link rel="stylesheet" href="home.css">
    <title>Contact | BE FIT</title>
</head>
<body>

    <!-- HEADER -->
    <header class="header" id="home">
    <?php
  include('Structure/navbar.php');
    ?>
    </header>

      <!-- SECTION CONTACT -->
      <section class="section-contact" id="contact">


        <div class = "contact-bg">

        <?php

                $msg="";
                    if(isset($_GET['error']))
                    {
                        $msg = "Insufficient Information";
                        echo '<div class="alert alert-danger">'.$msg.'</div>';
                    }


                    if(isset($_GET['success']))
                    {
                        $msg = " Your Message Has Been Sent ";
                        echo '<div class="alert alert-success">'.$msg.'</div>';
                    }

                ?>
          <div class="contact-box">
            

            <form class="form-grp" data-aos="fade-up" action="cont_process.php" method="post">

              <h2 class="heading heading--2 margin-bottom">
                Get in <span class="yellow">Touch</span>
              </h2>
                  
              <input name = "fname" type="text" class="form form__input" placeholder="Name : eg. John Smith" required/>
              <input name = "mail" type="email" class="form form__input" placeholder="Email : abc@gmail.com" required/>
              <input name = "subject" type="text" class="form form__input" placeholder=" "  required/>

              <button name="submt" class="btn btn__primary form-flex">Send &nbsp;</button>
            </form>

            <div id="mapid" data-aos="fade-up"></div>
        </div>

 </div>
      </section>
    </main>


              <!-- FOOTER -->
    <?php
      include('structure/footer.php');
    ?>



</body>
</html>