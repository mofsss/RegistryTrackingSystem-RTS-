<?php
   include('initial.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($con,"select admin_id from admin where admin_id = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['admin_id'];

   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
