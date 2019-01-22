<?php

  echo '<nav class="navbar navbar-light navigation navbar-fixed-top">
       <div class="container">
        <a href="index.php" class="navbar-brand"><img src="uploads/icon_new.png" class="img-fluid img_header"></a>
        <button class="navbar-toggler hidden-lg-up float-xs-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-toggleable-md" id="navbarResponsive">         
          <ul class="nav navbar-nav float-xs-right navbar-text nav-pills">
            <li class="nav-item"><a class="nav-link" href="team.php">TEAM</a></li>
            <li class="nav-item"><a class="nav-link" href="subsystems.php">SUB-SYSTEMS</a></li>
            <li class="nav-item"><a class="nav-link" href="about_satellite.php">ABOUT</a></li>
            <li class="nav-item"><a class="nav-link" href="contact_us.php">CONTACT US</a></li>
          </ul>
        </div>
       </div>
      </nav>';

?>

<script type="text/javascript">
  var s = window.location.href;
  s = s.substring(34);
  var lists = document.getElementsByClassName("nav-item");
  
  if(s === "index.php")
  {
    document.getElementById("1").removeAttribute("class","selected");
    document.getElementById("2").removeAttribute("class","selected");
    document.getElementById("3").removeAttribute("class","selected");
    document.getElementById("4").removeAttribute("class","selected");
  }
  if(s === "team.php")
  {
    document.getElementById("1").setAttribute("class","selected");
    document.getElementById("2").removeAttribute("class","selected");
    document.getElementById("3").removeAttribute("class","selected");
    document.getElementById("4").removeAttribute("class","selected");
  }
  if(s === "subsystems.php")
  {
    document.getElementById("1").removeAttribute("class","selected");
    document.getElementById("2").setAttribute("class","selected");
    document.getElementById("3").removeAttribute("class","selected");
    document.getElementById("4").removeAttribute("class","selected");
  }
  if(s === "about_satellite.php")
  {
    document.getElementById("1").removeAttribute("class","selected");
    document.getElementById("2").removeAttribute("class","selected");
    document.getElementById("3").setAttribute("class","selected");
    document.getElementById("4").removeAttribute("class","selected");
  }
  if(s === "contact_us.php")
  {
    document.getElementById("1").removeAttribute("class","selected");
    document.getElementById("2").removeAttribute("class","selected");
    document.getElementById("3").removeAttribute("class","selected");
    document.getElementById("4").setAttribute("class","selected");
  }
</script>