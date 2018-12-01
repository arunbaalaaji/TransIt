<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="../imgs/icon.png" type="image/png" sizes="16x16">
<title>Error</title>
<?php
  session_start();
  if($_SESSION["id"]=='')
    header("Location:ind.php");
  include("../model/dbconfig.php"); 
  $con = mysqli_connect($mysql_server,$mysql_user,$mysql_pwd,$mysql_db); 
  if (!$con) 
  { 
    die('Could not connect: ' . mysqli_error($con)); 
  }
  $id=$_SESSION["id"];
  $query="select * from users where id='{$id}'"; 
  $res=mysqli_query($con,$query);
  $row=mysqli_fetch_array($res);
  $name=$row[1];
  echo $name;
  $qu="select * from account where id='{$id}'"; 
  $res=mysqli_query($con,$qu);
  $row1=mysqli_fetch_array($res);
  $balance=$row1[2];
  $min=$balance-1;
?>
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
<script>
    alert("Error...");
</script>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card" id="myNavbar">
    <a href="dash.php" class="w3-bar-item w3-button w3-wide w3-large"><i class="fa fa-money"></i> TransIt <i class="fa fa-spinner fa-spin"></i></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-large w3-dropdown-hover">
      <div class="w3-xlarge"><i class="fa fa-user-secret"></i> &nbsp;<?php echo "  ".$name?>&nbsp;&nbsp;&nbsp;</div>
      <div class="w3-dropdown-content w3-bar-4 w3-border">
        <a href="dash.php" class="w3-bar-item w3-button"><i class="fa fa-bars"></i> Dashborad</a>
        <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i> Logout&nbsp;&nbsp;</a>
      </div>
  </div>
</div>
</div>
<br><br>
<p class="w3-center w3-jumbo"><i class="fa fa-warning w3-jumbo"></i> Error</p>
<p class="w3-center w3-xxlarge">Sorry Your request is not processed ...</p>
<br>
<br>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <p class="w3-large"> &copy 2018 TransIt.com</p>
</footer>
</body>
</html>