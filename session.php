<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_role'];
   
   $ses_sql = mysqli_query($db,"select username from user_login where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_role'])){
      header("location:index.php");
      die();
   }
?>