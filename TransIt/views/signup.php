<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="../imgs/icon.png" type="image/png" sizes="16x16">
<title>Signup</title>
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
    background-image: url("globe.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
label {
font-family: "Comic Sans MS"
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
    <a href="ind.php" class=" w3-cneter w3-bar-item w3-button w3-wide w3-large"><i class="fa fa-money"></i> TransIt <i class="fa fa-spinner fa-spin"></i> </a>
  </div>
</div>

<!-- Signup form -->
<p class="w3-center w3-jumbo"><i class="fa fa-user-plus w3-jumbo"></i> Sign up</p>
<center>
<form class="w3-container" action="../controller/signupaction.php" method="post">
  <div class="container">
  <table cellspacing="0" cellpadding="10">
  

  <tr>
    <td>
      <label><b>Name </b></label>
    </td>
    <td>
      <input class ="w3-input" type="text" placeholder="Enter name  " name="name" required autofocus="true">
    </td>
  </tr>

  <tr>
    <td>
      <label><b>Phone Number </b></label>
    </td>
    <td>
      <input class ="w3-input" type="text" placeholder="Enter Phoneno.  " name="phone" required>
    </td>
  </tr>

  <tr>
    <td>
      <label><b>Mail id </b></label>
    </td>
    <td>
      <input class ="w3-input" type="text" placeholder="Enter mailid  " name="mail" required>
    </td>
  </tr>
  
  <tr>
    <td>
      <label><b>Gender</b></label>
    </td>
    <td>
      <table cellpadding="20">
      <tr>
      <td>
      <input class="w3-radio" type="radio" name="gender" value="male" checked />  Male
      </td>
      <td>
      <input  class="w3-radio" type="radio" name="gender" id="rd2" value="Female" />  Female
      </td>
      </tr></table>
    </td>
  </tr>

  <tr>
    <td>
      <label><b>Password </b></label>
    </td>
    <td>
      <input class ="w3-input" type="password" placeholder="Enter Password" name="password" required>
    </td>
  </tr>

  </table>  
  <br/>     
    <button class="w3-button w3-orange w3-round-large" style="width:10%">Signup</button>
  </div>

</form>
</center>
<br/>
<br/>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <p class="w3-large"> &copy 2018 TransIt.com</p>
</footer>
</body>
</html>