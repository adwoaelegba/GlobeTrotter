<?php
// * local DB Config

$SERVER='localhost';
$USERNAME="root";
$PASSWD="JJLXSURT/2Yn";
$DATABASE="travel";

//Create a conneection
$con = new mysqli($SERVER,$USERNAME,$PASSWD,$DATABASE) or die ("Could not connect database");

//check the connection 
if($con->connect_error){
    die('Connection failed: ' . $con->connect_error);
}

//echo 'Connection successful';

//$con->close();







?>