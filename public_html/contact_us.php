<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Contact Us | Parikshit</title>

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

    <div class="container">

      <div class="card-deck-wrapper">
        <div class="card-deck">
          <div class="card">
            <div class="card-block">
              <center><h4 class="card-title diff_font">CONTACT DETAILS</h4>
              <p class="card-text"><b>Name</b> : Akash Paliya(Systems Engineer)</p>
              <p class="card-text"><b>Email address</b> : parikshit.management@gmail.com</p>
              <p class="card-text"><b>Phone number</b> : (+91) 9689895071</p>
              <p class="card-text"><b>Address</b> : Parikshit Student Satellite Team, NLH, Manipal Institute of Technology(MIT), Manipal University, Manipal-576104</p></center>
            </div>
          </div>
          <div class="card">
            <div class="card-block">
              <h4 class="card-title diff_font">Send Us A Message!</h4>

              <?php

                if (isset($_POST["submit"])) 
                {
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $message = $_POST['message'];
                  $from = 'sohamssd@gmail.com'; 
                  $to = 'parikshit.management@gmail.com'; 
                  $subject = 'Message from Parikshit site';
                  
                  $body = "From: $name\n E-Mail: $email\n Message:\n $message";
               
                  // Check if name has been entered
                  if (!$_POST['name']) 
                  {
                    $errName = 'Please enter your name';
                  }
                  
                  // Check if email has been entered and is valid
                  if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
                  {
                    $errEmail = 'Please enter a valid email address';
                  }
                  
                  //Check if message has been entered
                  if (!$_POST['message']) 
                  {
                    $errMessage = 'Please enter your message';
                  }
               
                  // If there are no errors, send the email
                  if (!$errName && !$errEmail && !$errMessage && !$errHuman) 
                  {
                    if (mail ($to, $subject, $body, $from)) 
                    {
                      echo "Thank you for contacting Parikshit!";
                    } 
                    else 
                    {
                      echo "There was an error in sending your message";
                    }
                  }
                }

              ?>

              <form class="form-horizontal" role="form" method="post" action="contact_us.php">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label"><img src="uploads/icon_name.png"></img></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">                    
                  </div>
                </div><br><br>
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label"><img src="uploads/email-icon.png"></img></label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                </div><br><br>
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label"><img src="uploads/icon-pencil.png"></img></label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="4" name="message" placeholder="Message"></textarea>
                  </div>
                </div><br><br>
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                    <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                  </div>
                </div>
              </form>
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

</body>
</html>