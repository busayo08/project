<?php
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $user_id = $_SESSION['login_id'];
   $ses_sql = mysqli_query($link,"select * from user where email = '$user_check' and id= '$user_id' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   $login_id = $row['id'];
   $login_firstname = $row['firstname'];
   $login_Lastname = $row['lastname'];
   $login_image = $row['profile_pics'];
   $login_phone = $row['phone'];
   $login_Address = $row['address'];
   $login_pass = $row['password'];
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
  
?>