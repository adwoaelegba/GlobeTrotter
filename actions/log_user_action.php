<?php

//starting a session
session_start();

//include connection file
include('../settings/connection.php');


//check if session started

if (!isset($_SESSION)) {
    // Session did not start
    echo "Error: Session did not start.";
    exit();
}
else{
    //collecting data
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
}

//a query that selects a record from the people table using email
$emailquery= "SELECT * FROM users WHERE email = ?";

$person=$con->prepare($emailquery);
$person->bind_param("s",$email);
$person->execute();
$result = $person->get_result();
$user = $result->fetch_assoc();
$person->close();

// Check if the user exists and if the entered password matches the hashed password in the database
if ($user && password_verify($_POST['password'], $user['password'])) {
    // Password is correct
    echo 'Login successful';
    //starting session using user and role id
    $_SESSION['pid']=$user['pid'];
    
//redirecting
header('Location: ../view/home.php');
        exit();
    
} else {
    // Password is incorrect or user not found
    echo 'Login failed';
}












}

/*checking if such a row exists
if($person){

    if (!$result->num_rows > 0) {
        echo 'User not found';
      }
       else{
          while($user=$person->fetch_assoc()){
             $ans=$person->fetch_assoc();
       }
      }
}*/




?>

