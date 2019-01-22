<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>About | Parikshit</title>

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,300,600" rel="stylesheet" type="text/css">
  

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">

  <!-- SCRIPT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="uploads/small.png">  

</head>
<body>

  <?php
    require_once("includes/header.php");
  ?>

  <!-- Home Page
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="jumbotron jumbotron-fluid" id="banner">   
    <div class="parallax text-center" style="background-image: url(uploads/starry_sky0.jpg);">
      <div class="parallax-pattern-overlay">
        <div class="container text-center" id="size-banner">
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="card" style="top: -120px">
      <center><img class="card-img-top img_satellite img-fluid" src="uploads/about_page.png"></center>
      <div class="card-block">
        <h2 class="card-title text-xs-center diff_font text-justify">ABOUT</h2>
        <p class="card-text text-justify">
          Parikshit is the first 2U class Nano satellite project under taken by the students of Manipal University.
          Nanosatellites, also called ‘NanoSats’, is a recently coined term used to describe artificial satellites with mass between 1 and 10 kilograms. Nanosatellites are built with units of CubeSat, which is a volume of exactly one liter (10 cubic cm) and a mass not more than 1.33 kilograms.
        </p>
      </div>
    </div>
    
    <div class="card-group">
      <div class="card">
        <img class="card-img-top img-fluid" src="uploads/card0.jpg" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title diff_font text-justify">General</h4>
          <ul class="list-group list-group-flush text-justify">
            <li class="list-group-item">Size of satellite: 10x10x22.7 cm</li>
            <li class="list-group-item">Mass: 2.30 kg</li>
            <li class="list-group-item">Speed: 7.2 km/s (approx.)</li>
            <li class="list-group-item">Mission Life: 6 months</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <img class="card-img-top img-fluid" src="uploads/card1.jpg" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title diff_font text-justify">Payload</h4>
          <ul class="list-group list-group-flush text-justify">
            <li class="list-group-item">Terrestrial thermal imaging</li>
            <li class="list-group-item">Deorbiting using Electro-dynamic tether</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <img class="card-img-top img-fluid" src="uploads/card2.jpg" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title diff_font text-justify">Preferred Orbit</h4>
          <ul class="list-group list-group-flush text-justify">
            <li class="list-group-item">10:30 AM Polar Sun synchronous orbit</li>
            <li class="list-group-item">Altitude: 800 km(approx.)</li>
            <li class="list-group-item">Inclination: 97.89 degree</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <img class="card-img-top img-fluid" src="uploads/card3.jpg" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title diff_font text-justify">Satellite Architecture</h4>
          <ul class="list-group list-group-flush text-justify">
            <li class="list-group-item">Solar panel: Body mount solar panels on 3 sides</li>
            <li class="list-group-item">Dual microcontroller based hardware architecture running Micrium RTOS</li>
            <li class="list-group-item">Antennas: Two deployable antennas</li>
          </ul>
        </div>
      </div>

    </div>

  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <?php
    require_once("includes/footer.php");
  ?>

</body>
</html>