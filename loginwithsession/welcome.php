<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session_username; ?></h1>
      <p>Your firstname is <?php echo $login_session_fname; ?> and your lastname is <?php echo $login_session_lname; ?></p> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>