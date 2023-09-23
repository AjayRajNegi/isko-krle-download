<?php

define('Server', 'localhost');
define('Username', 'root');
define('Password', '');
define('Name', 'lawyers');

$conn = mysqli_connect(Server, Username, Password, Name);

if(!$conn){
    echo "Error while making connection.";
}

?>