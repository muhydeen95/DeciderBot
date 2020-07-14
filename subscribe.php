<?php

include './database.php';

$email = trim($_POST['email']);  // To trim white spaces

$email = stripslashes($email);// to remove back slashes

$email = htmlspecialchars($email); // to remove special characters

$result = mysqli_num_rows(mysqli_query($conn, "SELECT 1 FROM email_lists WHERE email = '$email';"));

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Check if email is valid
{
    $signal = 'bad';
    $message = 'Please enter a valid email';
} elseif ($result > 0) // Check if email exists already
{
    $signal = 'bad';
    $message = 'Email already exists';
} else {
    $sql = "INSERT INTO email_lists (email)
    VALUES ('$email')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Email stored successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn); // Close connection