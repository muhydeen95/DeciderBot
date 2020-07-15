<?php

$servername = "http://85.10.205.173:3306";
$username = "muhydeen";
$password = "Smagold@01";

// Connect to database
$conn = mysqli_connect($servername, $username, $password, 'deciderbot');

//Check connection
if (!$conn) {
    $data = array(
        'signal' => 'bad',
        'msg' => "Connection failed:".mysqli_connect_error()
    );
    
    die(json_encode($data));
}

?>
