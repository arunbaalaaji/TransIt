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
  $payfor=$_REQUEST['pay'];
  $amt=$_REQUEST['amount'];
  $query="update account set balance =balance-{$amt} where id={$id}";
  $result =mysqli_query($con,$query);
  if(!$result)
    echo "DB Error".mysqli_error($con);
  $query="insert into payment (accid,payfor,amount) values({$id},'{$payfor}',{$amt})";
  $result =mysqli_query($con,$query);
  $c=1;
  if($result)
    header("Location: ../views/sucesstrans.php");
  if($c==0)
    //echo "DB Error".mysqli_error($con);
    header("Location: ../views/errortrans.php");
  ?>