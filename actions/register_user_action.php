<?php

include("../settings/connection.php");



if(isset($_POST["action"])){
    if($_POST["action"] == "insert"){
        insert();
    }
}


function insert(){
    global $con;

   

    //$insert = "INSERT INTO users VALUES ('' , '$firstName' , '$lastName', ' $email', '$phone',' $country', '$passhash')";
    //mysqli_query($con, $insert);
    //echo "Inserted successfully";

    $insert =  "INSERT INTO users (first_name, last_name, email, phone_num, country, password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($insert);

    $stmt->bind_param("sssiss", $firstName, $lastName, $email, $phone, $country, $passhash);

    var_dump($_POST);
    
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $country = $_POST["country"];
    $password = $_POST["password"];
    $passhash = password_hash($password, PASSWORD_DEFAULT);

    if ($stmt->execute()) {
        echo 'Register';
        
    } else {
        //echo 'Registration failed';
    }

    $stmt->close();



}

?>