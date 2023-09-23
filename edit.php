<?php
//This script will handle login
session_start();
require_once "config.php";

// check if the user is already logged in
if(!isset($_SESSION['username']))
{
    header("location: profile.php");
    exit;
}

if(isset($_REQUEST['submit'])){
    $username = $_REQUEST['username'];
    $number = $_REQUEST['number'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $country = $_REQUEST['country'];
    $address = $_REQUEST['address'];


    if(!empty($username) && !empty($number) && !empty($email) && !empty($country) && !empty($address) ){
        $id = $_SESSION['id'];
        $up = mysqli_query($conn, "UPDATE `users` SET `username`= '$username', `number`= '$number', `email`= '$email', `country`= '$country', `address`= '$address'");

        if(!empty($password)){
            $up = mysqli_query($conn, "UPDATE `users` SET `password`= '$password'");
        }
        echo "Updated.";
        header('location: profile.php');
        exit;
    }
    else{
        echo "Fill the entries.";
        header('location: edit.php');
        exit;
    }
}
$id = $_SESSION['id'];
$getData = mysqli_query($conn, "SELECT * FROM `users` WHERE `id`='$id'");
$row = mysqli_fetch_assoc($getData);







?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title> 
    <link rel="stylesheet" href="Main.css" />
    <link rel="stylesheet" href="last.css" />
  </head>
  <body>
    <div class="navbar" style="background-color: black">
      <div class="left-nav"><p>LETSPART</p></div>
      <div class="right-nav">
        <div class="all" id="home" style="background-color: #7b7878">
          <a href="Main.php">HOME</a>
        </div>
        <div class="all"><a href="#about">ABOUT </a></div>
        <div class="all"><a href="#lawyers">LAWYERS</a></div>
        <div class="all"><a href="#testimonials">TESTIMONIALS</a></div>
        <div class="all"><a href="#contact">CONTACT</a></div>
        <div class="all"><a href="login.php">LOGIN/SIGNUP</a></div>
      </div>
      <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="signUp">
      <div class="signUp-header">
         
        <h1>Edit</h1>
      </div>
      <div class="signUp-form">
        <form action="signup.php" method="post">
          NAME: <br />
          <input type="text" value="<?php echo $row['username']; ?>" id="signUp-name" name="username" required /> <br />
          <br />
          PHONE NO: <br />
          <input type="number" value="<?php echo $row['number']; ?>" id="signUp-number" name="number" required/> <br />
          <br />
          EMAIL ADDRESS: <br />
          <input type="email" value="<?php echo $row['email']; ?>" id="signUp-email" name="email" required /> <br />
          <br />
          PASSWORD: <br />
          <input type="password"  id="signUp-password"  name="password" /> <br />
          <br />
          COUNTRY: <br />
          <input type="text" value="<?php echo $row['country']; ?>" id="signUp-country" name="country" required/> <br />
          <br />
          ADDRESS: <br />
          <textarea name="address" value="<?php echo $row['address']; ?>" id="signUp-address" cols="30" rows="5" ></textarea>
          <div class="signUp-button">
            <button type="submit" name="submit">Submit</button>
            <a href="profile.php">DASHBOARD</a>
            
          </div>
        </form>
        </div>
    </div>
    <div class="footer">
      <div class="footer-heading">
        <button id="last-button">LETS PART</button>
        <hr id="line" />
      </div>
      <div class="footer-footer">
        <div class="footer-start">
          <p>POWERED BY <a href="">LETSPART</a></p>
        </div>
        <div class="icons">
          <img
            class="small"
            src="Icons/5fd97fa00dbe5676d757e693_facebook-logo (1).png"
            alt=""
          />
          <img
            class="small"
            src="Icons/5fd97fa00dbe56653357e68f_twitter.png"
            alt=""
          />
          <img
            class="small"
            src="Icons/5fd97fa00dbe56349957e697_instagram (1).png"
            alt=""
          />
          <img
            class="small"
            src="Icons/5fd97fa00dbe565cf457e695_behance (1).png"
            alt=""
          />
        </div>
        <div class="end">
          <a href="">TERMS OF USE </a>
          <a href="">PRIVACY POLICY </a>
          <a href="">ABOUT US</a>
        </div>
      </div>
    </div>
  </body>
</html>
