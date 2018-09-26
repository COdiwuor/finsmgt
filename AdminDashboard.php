<?php
session_start();
include('Includes/db.inc.php');
if(!empty($_SESSION['first_name'])){
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
    <h2 style="text-align:center">Admin Dashboard</h2>
    <p style="text-align:center"><?php echo "Name: " .$_SESSION['first_name']." ".$_SESSION['last_name'] ?></p>
    <p style="text-align:center"><?php echo "Email: " .$_SESSION['user_email'] ?></p>
    <form action="#" method="POST" style="text-align:center">
    <input type="submit" name="Users" value="Users">
    <input type="submit" name="Consult" value="Consultants date">
<?php
if(isset($_POST['Users'])){

echo"<table>";
echo"<tr>";
echo"<th>FirstName</th>";
echo"<th>LastName</th>";
echo"<th>EmailAddress</th>";
echo"<th>UserType</th>";
echo"</tr>";
$sql= "SELECT * FROM `users`";
$records=mysqli_query($conn,$sql);
while($fetch=mysqli_fetch_assoc($records)){
$fname=$fetch['first_name'];
$Lname=$fetch['last_name'];
$Email=$fetch['user_email'];
$Type=$fetch['user_type'];
$id=$fetch['id'];
echo "<tr>";
echo "<td>{$fname}</td>";
echo "<td>{$Lname}</td>";
echo "<td>{$Email}</td>";
echo "<td>{$Type}</td>";
echo "<td><a href='EditUser.php?Fname={$fname}&Lname={$Lname}&Email={$Email}&Type={$Type}&id={$id}'><input type='button' value='Edit'></a></td>";
echo "</tr>";
}}
?>


<?php
if(isset($_POST['Consult'])){

echo"<table>";
echo"<tr>";
echo"<th>name</th>";
echo"<th>phone</th>";
echo"<th>item</th>";
echo"<th>start_day</th>";
echo"<th>end_day</th>";
echo"<th>start_time</th>";
echo"<th>end_time</th>";
echo"</tr>";
$sql= "SELECT * FROM `bookingcalendar`";
$records=mysqli_query($conn,$sql);
while($fetch=mysqli_fetch_assoc($records)){
$Name=$fetch['name'];
$Phone=$fetch['phone'];
$Item=$fetch['item'];
$StartD=$fetch['start_day'];
$EndD=$fetch['end_day'];
$StartT=$fetch['start_time'];
$EndT=$fetch['end_time'];
$id=$fetch['id'];
echo "<tr>";
echo "<td>{$Name}</td>";
echo "<td>{$Phone}</td>";
echo "<td>{$Item}</td>";
echo "<td>{$StartD}</td>";
echo "<td>{$EndD}</td>";
echo "<td>{$StartT}</td>";
echo "<td>{$EndT}</td>";

echo "</tr>";
}
}

?>

</table>
<style>

.table {
    border-collapse: collapse;
    width="100%";
    overflow-x: auto;
    overflow-y: auto;
    height: 600px;
}

th,
td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #EEEDED;
}

tr:hover {
    background-color: #036;
    color: white;
    cursor: pointer;
}

a:hover {
    background-color: #036;
    color: white;
}

th {
    background-color: wheat;
    color: black;
}

th:hover {
    background-color: wheat;
    color: black;
}

</style>
    </form>


  </body>
</html>

<?php 
}else{
  header('Location:index.php');
}
 ?>