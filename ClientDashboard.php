<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo  $_SESSION['first_name']." ".$_SESSION['last_name'] ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><form action="Includes/logout.inc.php" method="POST" style="text-align:center">
      <button type="submit" name="submit">Logout</button>
    </form></li>
    </ul>
  </div>
</nav>
    <h2 style="text-align:center">Client Dashboard</h2>
    <p style="text-align:center"><?php echo "Name: " .$_SESSION['first_name']." ".$_SESSION['last_name'] ?></p>
    <p style="text-align:center"><?php echo "Email: " .$_SESSION['user_email'] ?></p>
    


  </body>
</html>
