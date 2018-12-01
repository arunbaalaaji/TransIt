<?php 
  include("../model/dbconfig.php"); 
  $con = mysqli_connect($mysql_server,$mysql_user,$mysql_pwd,$mysql_db); 
  if (!$con) 
  { 
    die('Could not connect: ' . mysqli_error($con)); 
  } 
  $name=$_REQUEST['name']; 
  $phone=$_REQUEST['phone'];
  $mail=$_REQUEST['mail']; 
  $pass=$_REQUEST['password'];
  $gender=$_REQUEST['gender'];
  $qu="insert into users (name,phone,mail,gender) values('{$name}',{$phone},'{$mail}','{$gender}')";
  mysqli_query($con,$qu);
  $query="select id from users where mail='{$mail}'"; 
  $res=mysqli_query($con,$query);
  $id=mysqli_fetch_array($res);
  $id=$id[0];
  $qu="insert into login (id,mail,password) values({$id},'{$mail}','{$pass}')";  
  mysqli_query($con,$qu);
  $qu="insert into account (id,balance) values({$id},1000)";
  $result = mysqli_query($con,$qu);
  if($result)
    header("Location: ../views/sucess.html");
  else
    //echo "DB Error".mysqli_error($con);
    header("Location: ../views/error.html");
?>