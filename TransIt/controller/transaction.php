<?php
  session_start();
  if($_SESSION["id"]=='')
    header("Location:../views/ind.php");
  $id=$_SESSION["id"];
  include("../model/dbconfig.php"); 
  $con = mysqli_connect($mysql_server,$mysql_user,$mysql_pwd,$mysql_db); 
  if (!$con) 
  { 
    die('Could not connect: ' . mysqli_error($con)); 
  } 
  $c=0;
  $toid=$_REQUEST['to']; 
  $amt=$_REQUEST['amount']; 
  $query = "SELECT id FROM users";
  $result =mysqli_query($con,$query);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
    {
      if($toid==$row['id'])
      {
        $query="update account set balance =balance-{$amt} where id={$id}";
        $result =mysqli_query($con,$query);
        if(!$result)
          echo "DB Error".mysqli_error($con);
        $query="update account set balance =balance+{$amt} where id={$toid}";
        $result =mysqli_query($con,$query);
        if(!$result)
          echo "DB Error".mysqli_error($con);
        $query="insert into trans (fromacc,toacc,amount) values({$id},{$toid},{$amt})";
        $result =mysqli_query($con,$query);
        $c=1;
        if($result)
          header("Location: ../views/sucesstrans.php");
        else
          echo "DB Error".mysqli_error($con);
      }
    }
  }
  if($c==0)
    header("Location: ../views/errortrans.php");
  ?>