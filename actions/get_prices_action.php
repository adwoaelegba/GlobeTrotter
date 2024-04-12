<?php

include("../settings/connection.php");


if (isset($_POST["action"])){
    if($_POST["action"] == "price"){
        price();
    }
}


function price(){
    global $con;

    $destination=$_POST["destination"];
    $duration=$_POST["duration"];

    var_dump( $destination);
    var_dump( $duration);



  
    $flight = "SELECT flight_price FROM destination WHERE dest_id = ?";
    $stmt_flight = $con->prepare($flight);
  $stmt_flight->bind_param("i", $destination);
  $stmt_flight->execute();
  $flightResult = $stmt_flight->get_result();
  if ($flightResult->num_rows > 0) {
    $row = $flightResult->fetch_assoc();
     $flightPrice = (float)$row['flight_price'];
    
 }
 $stmt_flight->close();


  $hotel = "SELECT hotel_price FROM destination WHERE dest_id = ?";
  $stmt_hotel = $con->prepare($hotel);
$stmt_hotel->bind_param("i", $destination);
$stmt_hotel->execute();
$hotelResult = $stmt_hotel->get_result();
if ($hotelResult->num_rows > 0) {
    $row = $hotelResult->fetch_assoc();
     $hotelPrice = $hotelPrice = (float)$row['hotel_price'];
    
 }
 $stmt_hotel->close();



$tour = "SELECT tour_price FROM destination WHERE dest_id = ?";
$stmt_select = $con->prepare($tour);
$stmt_select->bind_param("i", $destination);
$stmt_select->execute();
$tourResult = $stmt_select->get_result();
if ($tourResult->num_rows > 0) {
    $row = $tourResult->fetch_assoc();
     $tourPrice = $tourPrice = (float)$row['tour_price'];
    
 }

 $stmt_select->close();



$souvenir = "SELECT souvenir_price FROM destination WHERE dest_id = ?";
$stmt_souvenir = $con->prepare($souvenir);
$stmt_souvenir->bind_param("i", $destination);
$stmt_souvenir->execute();
$souvenirResult = $stmt_souvenir->get_result();
if ($souvenirResult->num_rows > 0) {
    $row = $souvenirResult->fetch_assoc();
     $souvenirPrice = (float)$row['souvenir_price'];


    
 }
 $stmt_souvenir->close();

 var_dump($tourPrice);
 var_dump($flightPrice);
 var_dump($souvenirPrice);
 var_dump($hotelPrice);


 // Fetch and cast prices to floats
//$flightPrice = (float)$row['flight_price'];
//$hotelPrice = (float)$row['hotel_price'];
//$tourPrice = (float)$row['tour_price'];
//$souvenirPrice = (float)$row['souvenir_price'];



$totalCost= $hotelPrice*$duration + $flightPrice+ $tourPrice + $souvenirPrice;


echo $totalCost;
  
  
    
}


?>