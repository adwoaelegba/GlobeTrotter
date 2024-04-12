<?php

error_reporting(E_ALL); ini_set('display_errors', 1);
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

    

    

    
    $emailquery= "SELECT * FROM users WHERE email = ?";
    $person=$con->prepare($emailquery);
    $person->bind_param("s",$email);
    $person->execute();
    $result = $person->get_result();
    $user = $result->fetch_assoc();
    $person->close();

    if ($user && password_verify($_POST['password'], $user['password'])) {
      
        
        
        $_SESSION['login']= true;
        $_SESSION['pid']=$user['pid'];

        echo 'Login successful';

        header('Location: ../view/home.php');
        exit();

        
      
    
    } else {
        // Password is incorrect or user not found
        echo 'Login failed';
    }


    
    
}

   






?>