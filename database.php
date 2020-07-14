<?php

$servername = "e11wl4mksauxgu1w.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "tqzqyaql9pilk01c";
$password = "u0ey1ow7lunu58z5";

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
