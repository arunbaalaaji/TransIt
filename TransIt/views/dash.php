<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="../imgs/icon.png" type="image/png" sizes="16x16">
<title>Dashboard</title>
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

.w3-bar .w3-button {
    padding: 16px;
}
label {
font-family: "Comic Sans MS"
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card-4" id="myNavbar">
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

<!--Dashboard-->
<div class="w3-container" style="padding:50px 16px" id="action">
  <h3 class="w3-center w3-xxxlarge"><i class="fa fa-bars"></i> Dashboard</h3>
  <p class="w3-center w3-xlarge">Perform your actions . . .</p>
  <center>
  <table class="w3-table">
    <tr>
      <td>
        <div class="w3-pale-yellow w3-hover-shadow w3-padding-32 w3-center">
         <p class=" w3-xlarge"><i class="fa fa-user"></i> Your Id : <?php echo " ".$id; ?> </p>
        </div>
      </td>
      <td>
        <div class="w3-pale-blue w3- w3-hover-shadow w3-padding-32 w3-center">
        <p class=" w3-xlarge"><i class="fa fa-money"></i> Your Balance <i class="fa fa-inr"></i> <?php echo " ".$balance; ?> </p>
        </div>
      </td>
    </tr>
  </table>
  </center>
  <br>
  <br>
    <div class="w3-col l1 m6 w3-margin-bottom"></div>
    <div class="w3-col l3 m6 w3-margin-bottom  ">
      <div class="w3-card w3-hover-shadow">
        <img src="../imgs/trans.png" alt="trans" style="width:100%" >
        <div class="w3-container  ">
          <br><br>
          <h3>Transfer Money</h3>
          <p class="w3-opacity">Transfer money to user within country or outside country.</p>
          <p><a href="trans.php" class="w3-button w3-round-large w3-yellow w3-block"><i class="fa fa-send"></i> Transfer</a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l1 m6 w3-margin-bottom"></div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-hover-shadow">
        <img src="../imgs/view.png" alt="view" style="width:100%">
        <div class="w3-container ">
          <h3>View Statement</h3>
          <p class="w3-opacity">You can look your transaction history.</p>
          <p><a href="viewstmt.php" class="w3-button w3-orange w3-round-large w3-block"><i class="fa fa-bar-chart"></i> View</a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l1 m6 w3-margin-bottom"></div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-hover-shadow">
        <img src="../imgs/bill.png" alt="view" style="width:100%">
        <div class="w3-container ">
          <h3>Pay Bills</h3>
          <p class="w3-opacity">You can pay all your bills here.</p>
          <p><a href="paybill.php" class="w3-button w3-red w3-round-large w3-block"><i class="fa fa-google-wallet"></i> Pay</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <p class="w3-large"> &copy 2018 TransIt.com</p>
</footer>
</body>
</html>