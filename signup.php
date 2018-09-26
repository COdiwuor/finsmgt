<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .imgcontainer{
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }
  </style>
  </head>
  <body>

    <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <h2 style="text-align:center;">SIGN UP</h2>
        <form action="Includes/signup.inc.php" method="post">
          <div class="imgcontainer">
            <img src="logo.png" alt="Avatar" class="avatar">
          </div>
          <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" id="first_name" required placeholder="Enter First Name" name="first_name">
          </div>
          <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" id="last_name" required placeholder="Enter Last Name" name="last_name">
          </div>
          <div class="form-group">
            <label for="user_email">Email:</label>
            <input type="email" class="form-control" id="user_email" required placeholder="Enter Email" name="user_email">
          </div>
          <div class="form-group">
            <label for="user_password">Password:</label>
            <input type="password" class="form-control" id="user_password" required placeholder="Enter Password" name="user_password">
          </div>
          <button type="submit" class="btn btn-success" name="submit" style="width:100%;">CREATE ACCOUNT</button>
          <p style="float:right;">Already have an account?<a href="index.php">Login</a> </p>
        </form>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>

  </body>
</html>
