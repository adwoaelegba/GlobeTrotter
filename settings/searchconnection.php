<?php
$con = mysqli_connect("localhost", "root", "", "travel" );

if(!$con){
    echo "Connection failed" . mysqli_connect_error();
}

?>