<?php

//including the connection file

function selectCountry(){
    include('../settings/connection.php');

     //select query from the family table
    $country='SELECT dest_id, dest_name FROM  destination';
    $countries=$con->query($country);
    
    
    
    //fetch the results
    if($countries->num_rows > 0){
        echo '<select name="countryDrop" id="countryDrop">' ;
        while($rows=$countries->fetch_assoc()){
            echo '<option value="' . $rows['dest_id'] . '">' . $rows['dest_name'] . '</option>';
    
        }
        echo '</select>';
    } else{
        echo 'No results found';
    }
    
    
    
    
    
}
