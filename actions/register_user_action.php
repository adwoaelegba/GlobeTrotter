<?php

include("../settings/connection.php");



if(isset($_POST["action"])){
    if($_POST["action"] == "insert"){
        insert();
    }
}


function insert(){
    global $con;

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $country = $_POST["country"];
    $password = $_POST["password"];
    $passhash = password_hash($password, PASSWORD_DEFAULT);


    $insert = "INSERT INTO users VALUES ('' , '$firstName' , '$lastName', ' $email', '$phone',' $country', '$passhash')";
    mysqli_query($con, $insert);
    echo "Inserted successfully";

}

?>