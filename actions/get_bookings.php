<?php


//include the connection
include('../settings/connection.php');


//Function to return results of query

function getAllrows($con) {
//write select all chores query
$select="SELECT * FROM  book_trip";


//Execute query
$result = $con->query($select);

//var_dump($result);

//check if execution worked
if($result){
    $queryRows = array();
    //check if any record was returned. If yes,...
    while($row= $result->fetch_assoc() ){
        $queryRows[]= $row;

    }
   

    return $queryRows;


}

else{
    return false;
}



}

