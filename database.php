<?php

$servername = "localhost";
$username = "root";
$password = "";

// Connect to database
$conn = mysqli_connect($servername, $username, $password, 'deciderbot');

//Check connection
if (!$conn) {
    die("Connection failed:".mysqli_connect_error());
}

?>