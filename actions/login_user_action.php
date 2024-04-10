<?php

session_start();
include("../settings/connection.php");



if (isset($_POST["action"])){
    if($_POST["action"] == "login"){
        login();
    }
}




function login(){
    global $con;

    $email= $_POST["email"];
  
    $password=$_POST["password"];

    //var_dump($email);
    //var_dump( $password);

    

    
    $emailquery= "SELECT * FROM users WHERE email = ?";
    $person=$con->prepare($emailquery);
    $person->bind_param("s",$email);
    $person->execute();
    $result = $person->get_result();
    $user = $result->fetch_assoc();
    $person->close();

    if ($user && password_verify($_POST['password'], $user['password'])) {
        // Password is correct
        //echo 'Login successful';
        //starting session using user and role id
        $_SESSION['login']= true;
        $_SESSION['pid']=$user['pid'];

        header('Location: ../view/home.php');
        exit();
      
    
    } else {
        // Password is incorrect or user not found
        echo 'Login failed';
    }


    
    
}

   






?>