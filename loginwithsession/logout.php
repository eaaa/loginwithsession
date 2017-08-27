<?php
   session_start();
   
   if(session_destroy()) {
      unset($_SESSION['login_user']);
      #unset($_SESSION['errors']);
      header("Location: login.php");
   }
?>
