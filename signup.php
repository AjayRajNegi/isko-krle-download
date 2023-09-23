<?php
require_once "config.php";

$username = $password = "";
$username_err = $password_err = "";


if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{                                                                                       $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param_username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                    echo "This username is already taken.";
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) )
{
    $sql = "INSERT INTO users (username, number, email, password, country, address) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $param_number, $param_email, $param_password, $param_country, $param_address);

        // Set these parameters
        $param_username = $username;
        $param_number = trim($_POST['number']);
        $param_email = trim($_POST['email']);
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        $param_country = trim($_POST['country']);
        $param_address = trim($_POST['address']);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
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
        <p style="color: green; font-weight: bold">CUSTOMER</p>
        <br />
        <h1>LOGIN/SIGNUP</h1>
      </div>
      <div class="signUp-form">
        <form action="signup.php" method="post">
          NAME: <br />
          <input type="text" id="signUp-name" name="username" required /> <br />
          <br />
          PHONE NO: <br />
          <input type="number" id="signUp-number" name="number" required/> <br />
          <br />
          EMAIL ADDRESS: <br />
          <input type="email" id="signUp-email" name="email" required /> <br />
          <br />
          PASSWORD: <br />
          <input type="password" id="signUp-password"  name="password" required/> <br />
          <br />
          COUNTRY: <br />
          <input type="text" id="signUp-country" name="country" required/> <br />
          <br />
          ADDRESS: <br />
          <textarea name="address" id="signUp-address" cols="30" rows="5" ></textarea>
          <div class="signUp-button">
            <button type="submit" name="submit">SIGNUP</button>
            <a href="login.php">ALREADY HAVE AN ACCOUNT? LOGIN NOW</a>
            
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
