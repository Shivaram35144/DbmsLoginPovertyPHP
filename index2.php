<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>No Poverty</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" </head>

<body>

  <section id="title">
    <div class="container-fluid">

      <!-- Nav Bar -->
      <nav class='navbar navbar-expand-lg navbar-dark'>
        <a class='navbar-brand' href=''>U N I C E F</a>
        <img class="hi1" src="images/img5.jpeg" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class='navbar-nav ml-auto'>
            <li class='nav-item'>
              <a class='nav-link' href='donate.html' target="_blank">Donate Now</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='#'>Our Projects</a>
            </li>
            
            <li class='nav-item'>
              <a class='nav-link' href='php/logout.php' target="_blank">Log Out</a>
            </li>
            
          </ul>
        </div>
      </nav>




      <!-- Title -->

      <div class='row'>
        <div class="col-lg-6">
          <!-- <h1 class="content">AWARENESS AROUND GLOBAL POVERTY HELPS</h1> -->
          <section>
            <div class="content">
              <h2>AWARENESS AROUND GLOBAL POVERTY HELPS</h2>
              <h2>AWARENESS AROUND GLOBAL POVERTY HELPS</h2>
            </div>
          </section>

<section class="sticky">
  <div class="bubbles">
      <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    
  </div>
</section>
          <br>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <button type="button" class="btn btn-dark btn-lg lowlife"><i class="fab fa-apple"></i> Download</button>
          <button type="button" class="btn btn-outline-light btn-lg lowlife"><i class="fab fa-google-play"></i> Download</button>
        </div>
        <div class='col-lg-6'>
          <img class='hi' src="images/img1.jpg" alt="iphone-mockup">
        </div>
      </div>
    </div>

  </section>


  <!-- Features -->

  <section id="features">
    <div class='row'>
      <div class='col-lg-4'>
        <i class="fas fa-check-circle fa-5x"></i>
        <h3 class="new">Donate Today</h3>
        <p class="new1">Your small donation can save a family</p>
      </div>

      <div class='col-lg-4'>
        <i class="fas fa-bullseye fa-5x"></i>
        <h3 class="new">100% Transparency</h3>
        <p class="new1">The whole of your amount will go to a family</p>
      </div>
      <div class='col-lg-4'>
        <i class="fas fa-heart fa-5x"></i></i>
        <h3 class="new">Give Hope</h3>
        <p class="new1">Change lives of a random family</p>
      </div>
    </div>

  </section>


  <!-- Testimonials -->

  <section id="testimonials">

    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2>"I'm so grateful for everything UNICEF has done for me and my family."          </h2>
          <img class='doggy' src="images/old.png" alt="dog-profile">
          <em>Nithyanandam, Kolkatta</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">Thanks to UNICEF, my community has been transformed. We now have access to education, healthcare, and clean water, which has helped us improve our standard of living..</h2>
          <img class="doggy" src="images/old2.jpeg" alt="lady-profile">
          <em>Ramkumar, Daravi</em>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </section>


  <!-- Press -->

  <section id="press">
    <img class='test' src="images/techcrunch.png" alt="tc-logo">
    <img class='test' src="images/tnw.png" alt="tnw-logo">
    <img class='test' src="images/bizinsider.png" alt="biz-insider-logo">
    <img class='test' src="images/mashable.png" alt="mashable-logo">

  </section>


  

  <!-- Call to Action -->

  <section id="cta">

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="animate-charcter"> SITE CREATED BY SHIVARAM K K</h3>
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-dark btn-lg ctaimg"><i class="fab fa-apple"></i> Download</button>
    <button type="button" class="btn btn-outline-light btn-lg ctaimg"></i><i class="fab fa-google-play"></i> Download</button>

  </section>


  <!-- Footer -->


  <footer id="footer">
    <i class="fab fa-twitter fimg j"></i>
    <i class="fab fa-facebook-f fimg j"></i>
    <i class="fab fa-instagram fimg j"></i>
    <i class="fas fa-envelope j"></i>

    <p class="new1">© Copyright SHIVARAM K K</p>

  </footer>


</body>

</html>
