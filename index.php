<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
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
        <h2 style="text-align:center;">LOGIN</h2>
        <form action="Includes/login.inc.php" method="post">
          <div class="imgcontainer">
            <a href="index.html"><img src="logo.png" alt="Avatar" class="avatar"></a>
            
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="user_email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="user_password">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
          <button type="submit" class="btn btn-success" name="submit" style="width:100%;">Login</button>
          <p style="float:right;">Don't have an account?<a href="signup.php">Sign up</a> </p>
        </form>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>

  </body>
</html>
