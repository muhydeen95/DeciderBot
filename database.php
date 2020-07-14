<?php

$servername = "localhost";
$username = "oqnzrevpkpkccb";
$password = "6b8443ecf56d356402186fe013e87d364d6797b579936466c3de2e47fd68fd64";

// Connect to database
$conn = mysqli_connect($servername, $username, $password, 'deciderbot');

//Check connection
if (!$conn) {
    die("Connection failed:".mysqli_connect_error());
}

?>
