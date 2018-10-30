<?php
   include("initial.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $admin_id = mysqli_real_escape_string($con,$_POST['admin_id']);
      $admin_password = mysqli_real_escape_string($con,$_POST['admin_password']);

      $sql1 = "SELECT admin_id FROM admin WHERE admin_id = '$admin_id' and admin_password = '$admin_password'";
      $result = mysqli_query($con,$sql1);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);


      // If result matched $admin_id and $admin_password, table row must be 1 row

      if($count == 1) {

         $_SESSION['login_user'] = $admin_id;

         header("location:welcome.php");
      }else {

         $error = "Your Login Name or Password is invalid";
         echo $error;

      }

   }
?>
<html>

   <head>
      <title>Login Page</title>

      <style type = "text/css">

         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px

         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>

   </head>

   <body style="text-align:center;
   background-image:url(background.gif);
   font-family:georgia;
   font-size:20px;"
   bgcolor = "#FFFFFF">
   <div class="header">
       <a href="index.html"><img src="Logo.png" alt="LOGO" /></a>
   </div>

      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

            <div style = "margin:30px">

               <form action = "" method = "post">
                  <label>Admin ID  :</label><input type = "text" name = "admin_id" class = "box"/><br /><br />
                  <label>Admin Password  :</label><input type = "text" name = "admin_password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>

               <div style = "font-size:11px; color:#cc0000; margin-top:10px">
                 <?php

              //  echo $error;

                  ?>

                </div>

            </div>

         </div>

      </div>

   </body>
</html>
