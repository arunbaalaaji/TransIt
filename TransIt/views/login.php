<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="../imgs/icon.png" type="image/png" sizes="16x16">
<title>Login</title>
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
    <a href="ind.php" class="w3-bar-item w3-button w3-wide w3-large"><i class="fa fa-money"></i> TransIt <i class="fa fa-spinner fa-spin"></i></a>
  </div>
</div>

<!-- login form -->
<p class="w3-center w3-jumbo"><i class="fa fa-user-o w3-jumbo"></i> Login</p>
<center>
<form class="w3-container" action="../controller/loginaction.php" method="post">
  <div class="container">
  <table cellspacing="0" cellpadding="10">

  <tr>
    <td>
      <label class="w3-large"><b>Mail id </b></label>
    </td>
    <td>
      <input class ="w3-input" type="text" placeholder="Enter mailid  " name="mail" style="width:150%" required autofocus>
    </td>
  </tr>
 
  <tr>
    <td>
      <label class="w3-large"><b>Password </b></label>
    </td>
    <td>
      <input class ="w3-input" type="password" placeholder="Enter Password" name="password" style="width:150%" required>
    </td>
  </tr>

  </table>  
  <br/>     
    <button class="w3-button w3-blue w3-round-large" style="width:10%">Login</button>
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