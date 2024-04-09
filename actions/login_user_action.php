<?php

include("../settings/connection.php");

session_start();

if (isset($_POST["action"])){
    if($_POST["action"] == "login"){
        login();
    }
}



function login(){
    global $con;

    $email= $_POST["email"];
    $password=$_POST["password"];

    $user= mysqli_query($con, "SELECT * FROM users WHERE email='$email'");

    if(mysqli_num_rows($user) > 0){
        $row=mysqli_fetch_assoc($user);
        if($password == $row["password"]){
            echo "Login successful";
            $_SESSION["login"] = true;
            $_SESSION["pid"]= $row['pid'];

        }
        else{
            echo "Wrong password";
           
        }

    }

    else{
        echo "User not found";
    }

}



?>