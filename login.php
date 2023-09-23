<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


}


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
        <div class="all"><a href="#login.php">LOGIN/SIGNUP</a></div>
      </div>
      <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="login">
      <div class="login-header">
        <p style="color: green; font-weight: bold">CUSTOMER</p>
        <br />
        <h1>LOGIN/SIGNUP</h1>
      </div>
      <div class="login-form">
        <form action="login.php" method= "post">
          NAME: <br />
          <input type="text" id="login-name" name="username" /> <br />
          <br />
          PASSWORD: <br />
          <input type="password" id="login-password" name="password"  />
          <div class="login-button">
            <button type="submit" name="submit">LOGIN</button>
            <a href="signup.php">DON'T HAVE AN ACCOUNT? SIGNUP NOW</a>
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
