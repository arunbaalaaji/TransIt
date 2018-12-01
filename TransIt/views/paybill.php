<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="../imgs/icon.png" type="image/png" sizes="16x16">
<title>Pay Bills</title>
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

<!--Transfer-->
<div class="w3-container" style="padding:50px 16px" id="action">
  <h3 class="w3-center w3-xxxlarge"><i class="fa fa-google-wallet"></i> Pay Bills</h3>
  <p class="w3-center w3-xlarge">Pay your external bills . . .</p>
  <center>
  <table class="w3-table">
    <tr>
      <td>
        <div class="w3-hover-shadow w3-padding-32 w3-center" >
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
  <br><br>

<center>
<form class="w3-container" action="../controller/payaction.php" method="post">
  <div class="container">
  <table cellspacing="0" cellpadding="10">

  <tr>
    <td>
      <label class="w3-large"><b>Pay For </b></label>
    </td>
    <td>
      <select class ='w3-input' id="s1" name="pay" style='width:150%'>
        <option value="" selected>--- Pay For ---</option>
        <option value="fee">Fees</option>
        <option value="recharge">Recharge</option>
        <option value="ticket pay">Ticket Payment</option>
        <option value="online shopping">online Shopping</option>
      </select>
    </td>
  </tr>
 
  <tr>
    <td>
      <label class="w3-large"><b>Amount to transfer </b></label>
    </td>
    <td>
      <?php echo"<input class ='w3-input' type='number' min='1' max='$min' placeholder='Enter amount' name='amount' style='width:150%' required>" ?>
    </td>
  </tr>

  </table>  
  <br/>     
    <button class="w3-button w3-red w3-round-large" style="width:10%">Pay</button>
  </div>

</form>
</center>


  <br><br><br>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <p class="w3-large"> &copy 2018 TransIt.com</p>
</footer>
 


</body>
</html>