<?php

include("../settings/connection.php");



if(isset($_POST["action"])){
    if($_POST["action"] == "insert"){
        insert();
    }
}
global $con;
if($_SERVER["REQUEST_METHOD"] =="POST"){

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $country = $_POST["country"];
    $password = $_POST["password"];
    $passhash = password_hash($password, PASSWORD_DEFAULT);
   
   

    $sql_query = "INSERT INTO users (first_name, last_name, email, phone_num, country, password) VALUES ('$firstName', '$lastName','$email', '$phone', '$country', '$passhash')";
    $insertion = mysqli_query($con, $sql_query);
    if($insertion){
        header("location: ../login/login.php");
    }
    else{
       // echo "Failed Terribly";
       //return false;
    }
}



?>






