<?php
   include('include/connectdb.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username, firstname, lastname from person where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session_username = $row['username'];
   $login_session_fname = $row['firstname'];
   $login_session_lname = $row['lastname'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>