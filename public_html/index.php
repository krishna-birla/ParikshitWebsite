<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Parikshit</title>

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,300,600" rel="stylesheet" type="text/css">
  

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="css/styles.css">

  <!-- SCRIPT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous">
  </script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="uploads/small.png">
  <script type="text/javascript">
    window.onload=function() {
    $(".se-pre-con").fadeOut();
  };
  </script>
  <script type="text/javascript">
    var a=0;
    function scrollDown()
    {
      if(a==0)
      {
        $("#scroll-down").animate({left:'-50px'}, 'slow',function(){
          $("#scroll-down").animate({top:'1000px'}, 'slow');
          $("body,html").animate({scrollTop: $('.card-huge').offset().top -120}, 'slow',function(){
              $("#scroll-down").css({
                transform:'rotate(90deg)'
              });
        });});
        a=1;
      }
      else
      {
        $("#scroll-down").animate({top: '450px'}, 'slow');
        $("body,html").animate({scrollTop: 0}, 'slow',function(){
          $("#scroll-down").css({
                transform:'rotate(270deg)'
              });});
        $("#scroll-down").animate({left:'100px'}, 200);
        a=0;
      }
    }   
    function doNothing()
    {
      console.log("DICKS OUT FOR HARAMBE");
    }
  </script>
  <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>-->

</head>
<body style="padding-top: 0; background-color: #F5F5F5;">
<div class="se-pre-con"></div>

  <?php
    require_once("includes/header.php");
  ?>

  <!-- Home Page
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div id="starryskydiv">
      <img src="uploads/starry_sky0.jpg" id="starryskyimg">
    </div>
    
    <div id="main-logo">
      <img id="parikshit-logo" src="uploads/icon.png" alt="logo"/>
      <h2 class="display-2">extending thoughts into space...</h2>
    </div>

    <div id="scroll-down" onclick="scrollDown()" ondblclick="doNothing()">
      <img src="uploads/down.png">
    </div>

    <div class="container mobile-custom">
      <div class="demo-card">
        <div class="card-deck-wrapper">
        <div class="card-huge">
            <div class="card-deck">              
                <div class="card" id="card1">
                    <div class="card-block">
                        <h4 class="cardLeft-custom-title diff_font">Who We Are</h4>
                        <hr>
                        <p class="card-text text-justify">
                          Parikshit is a student satellite project undertaken by the undergraduate students of 
                          Manipal Institute of Technology (MIT)
                          under the guidance of the Indian Space Research Organisation (ISRO). 
                          Our mission is to design, fabricate and operate a 2U class nano-satellite which will capture images and hence successfully test our payloads.
                          <br>The payloads of our satellite are Terrestrial Thermal Imaging and an Electrodynamic Tether which will be used to deorbit the satellite after its lifetime.
                        </p>
                    </div>
                </div>
                <div class="card" id="card2">
                    <div class="card-block">
                        <h4 class="cardCenter-custom-title diff_font">Mission</h4><hr>
                        <ul type="square">
                          <li class="text-justify"><p>To become individuals of high caliber to meet the challenges of the country's space research program.</p><br></li>
                          <li class="text-justify"><p>To learn about the advancements in space technology and space system engineering.</p></li>
                        </ul>
                    </div>
                </div>
                <div class="card" id="card3">
                    <div class="card-block">
                        <h4 class="cardRight-custom-title diff_font">Objectives</h4><hr>
                        <ul type="square">
                          <li class="text-justify"><p class="card-text">Collaborative student effort</p><br></li>
                          <li class="text-justify"><p class="card-text">To increase the student industry link</p><br></li>
                          <li class="text-justify"><p class="card-text">Contribute to the country's research program</p><br></li>
                          <li class="text-justify"><p class="card-text">Make Manipal University a respected centre for space technology</p><br></li>
                        </ul>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <?php
    require_once("includes/footer.php");
  ?>

  <script type="text/javascript" src="js/jquery-parallax.js"></script>
  <script type="text/javascript" src="js/TweenMax.min.js"></script>
  <script type="text/javascript" src="js/hide_header.js"></script>
  <script type="text/javascript">

    $( document ).mousemove( function( e ) {
      $( '#starryskyimg' ).parallax( 15, e );
    });

  </script>
</body>
</html>