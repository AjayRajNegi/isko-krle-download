<?php
require_once "config.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

$id = $_SESSION['id'];
$getData = mysqli_query($conn, "SELECT * FROM `users` WHERE `id`='$id'");
$row = mysqli_fetch_assoc($getData);


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  height: 250px;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 18px;
  color: black;
  
}
.edit{
  border: 2px solid green;
  background: green;
  margin-right: 40px;
  padding: 4px 8px;
  margon-bottom: 20px;
}
.log{
  border: 2px solid black;
  background: black;
  color: white;
  padding: 4px 8px;
  margon-bottom: 20px;
}
.edit:hover{
  border: 2px solid black;
  background: white;
  color: black;
  transition:all 0.5s;
}
.log:hover{
  border: 2px solid black;
  background: white;
  color: black;
  transition:all 0.5s;
}

</style>
</head>
<body>


<div class="card">
  
  <h1><?php echo $row['username']; ?></h1>
  <h2></h2>
  <p class="title"><?php echo $row['email']; ?></p>
  <p><?php echo $row['number']; ?></p>
  <p><?php echo $row['country']; ?></p>
  <p><?php echo $row['address']; ?></p>
  <p><a class="edit" href="edit.php">Edit Profile</a><a class="log" href="logout.php">Logout</a></p>
</div>

</body>
</html>
