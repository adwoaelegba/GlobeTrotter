<?php



//if(isset($_SESSION['pid'])) {
   // $pid = $_SESSION['pid'];
//} else {
   // echo  'No pid';
//}

// Fetch the user ID from the session


include("../settings/connection.php");


if(isset($_POST["action"])){
    if($_POST["action"] == "book"){
        book();
    }
}


function book(){
    global $con;
    $dest_name=$_POST["destination"];
    $travel_date = $_POST["date"];
    $duration=$_POST["duration"];
    $payment=$_POST["payment"];
    $card_num = $_POST["card"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

   


    $insert =  "INSERT INTO book_trip ( pid, dest_id, travel_date, duration, payment, card_num, first_name, last_name, email, phone_num) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $stmt_insert = $con->prepare($insert);


    

    $idQuery = "SELECT pid FROM users WHERE email = ?";
    $stmt_select = $con->prepare($idQuery);
  $stmt_select->bind_param("s", $email);
  $stmt_select->execute();
  $taskResult = $stmt_select->get_result();
  
  if ($taskResult->num_rows > 0) {
     $row = $taskResult->fetch_assoc();
      $pid = $row['pid'];
     
  }

  $countryQuery = "SELECT dest_id FROM destination WHERE dest_name = ?";
    $stmt_select = $con->prepare($countryQuery);
  $stmt_select->bind_param("s", $dest_name);
  $stmt_select->execute();
  $taskResult = $stmt_select->get_result();
  
  if ($taskResult->num_rows > 0) {
     $row = $taskResult->fetch_assoc();
      $dest_id = $row['dest_id'];
     
  }

  $stmt_insert->bind_param("iisisisssi",$pid, $dest_id, $travel_date, $duration,$payment, $card_num,$firstName,$lastName,$email, $phone );
    
   


    
    if ($stmt_insert->execute()) {
        echo 'Booked';
        
    } else {
        echo 'Registration failed';
    }

    $stmt_insert->close();
    $stmt_select->close();




}



?>