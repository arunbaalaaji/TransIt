<?php
  include("../model/dbconfig.php"); 
  $con = mysqli_connect($mysql_server,$mysql_user,$mysql_pwd,$mysql_db); 
  if (!$con) 
  { 
    die('Could not connect: ' . mysqli_error($con)); 
  }
  $mail=$_REQUEST['mail']; 
  $pass=$_REQUEST['password'];
  $c=0;
  $query = "SELECT id,mail,password FROM login";
  $result =mysqli_query($con,$query);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
    {
      if($row['mail']==$mail)
        if($row['password']==$pass)
        {
          session_start();
          $_SESSION["id"]=$row["id"];
          $c=$c+1;
          header("Location: ../views/dash.php");
        }
    }
  }
  //echo "DB Error".mysqli_error($con);
  if($c==0)
    header("Location: ../views/error.html");
  ?>