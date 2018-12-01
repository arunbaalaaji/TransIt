<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="../imgs/icon.png" type="image/png" sizes="16x16">
<title>TransIt</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("../imgs/globe.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>
</head>
<body>

<!-- Delete session -->
<?php
session_start();
session_unset(); 
session_destroy(); 
?>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide w3-large"><i class="fa fa-money"></i> TransIt <i class="fa fa-spinner fa-spin"></i> </a>
    <!-- Right-sided navbar links -->
    <div class="w3-right">
      <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-globe"></i> ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-users"></i> TEAM</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-user-circle"></i> Login</a>
    </div>
  </div>
</div>


<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container " id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo">TransIt</span><br>
    <span class="w3-xlarge">Transfer money easily and safely . . .</span><br>
    <span class="w3-large"> Hurry up and get <i class="fa fa-inr"></i>  1000/- . </span><br>
    <p><a href="signup.php" class="w3-button w3-green w3-padding-large w3-large w3-margin-top w3-hover-opacity-off w3-round-large">Signup today</a></p>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:16px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key feature of our company</p>
  <center>
  <div class="w3-row-padding" style="margin-top:16px">
    <div class="w3-center">
      <i class="fa fa-lock w3-margin-bottom w3-jumbo"></i>
      <p class="w3-xlarge">Security</p>
      <p class="w3-large w3-center">Money transfer through our website will be secure and safe. User will be authenticated to transfer money so no fear on Cyber threats.</p>
    </div>
  </div>
  </center>
</div>



<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <div class="w3-center">
    <i class="fa fa-users w3-jumbo"></i>
  </div>
  <p class="w3-center w3-large">The ones who run this company</p>
  <div class="w3-row-padding" style="margin-top:24px">
  <div class="w3-col l3 m6 w3-margin-bottom  "></div>
    <div class="w3-col l3 m6 w3-margin-bottom  ">
      <div class="w3-card">
        <img src="../imgs/arun.jpeg" alt="arun" style="width:100%" >
        <div class="w3-container ">
          <h3>Arunbalaji</h3>
          <p class="w3-opacity">CEO & Founder</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="../imgs/bala.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
        <br><br><br>
          <h3>Balamurugan</h3>
          <p class="w3-opacity">CFO & Co-Founder</p>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:16px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Chicago, US</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone:+91 98765 43210</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: transit@mail.com</p>
      <br>
      <form action="mailto:m.arunbaalaaji@gmail.com"  method="post" enctype="text/plain">
        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p class="w3-large"> &copy 2018 TransIt.com</p>
</footer>
 


</body>
</html>
