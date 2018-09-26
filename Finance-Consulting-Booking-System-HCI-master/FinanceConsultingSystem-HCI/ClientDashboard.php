<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>
  <body>
    <h2 style="text-align:center">Client Dashboard</h2>
    <p style="text-align:center"><?php echo "Name: " .$_SESSION['first_name']." ".$_SESSION['last_name'] ?></p>
    <p style="text-align:center"><?php echo "Email: " .$_SESSION['user_email'] ?></p>
    <form action="Includes/logout.inc.php" method="POST" style="text-align:center">
      <button type="submit" name="submit">Logout</button>
    </form>


  </body>
</html>
