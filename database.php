<?php

$servername = "localhost";
$username = "muhydeen95";
$password = "Smagold@01";

// Connect to database
$conn = mysqli_connect($servername, $username, $password, 'muhydeen95');

//Check connection
if (!$conn) {
    $data = array(
        'signal' => 'bad',
        'msg' => "Connection failed:".mysqli_connect_error()
    );
    
    die(json_encode($data));
}

?>
