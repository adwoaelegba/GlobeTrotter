<?php
include("../settings/connection.php");



if(isset($_POST["action"])){
    if($_POST["action"] == "edit"){
        edit();
    }
}
else{
    delete();
        
}


function edit(){
    global $con;



    $book_id=$_POST["book_id"];
    $destination=$_POST["destination"];
    $date = date("Y-m-d H:i:s", strtotime($_POST["date"]));
   // $date=$_POST["date"];
    $duration=$_POST["duration"];


    $dest_id_query = "SELECT dest_id FROM destination WHERE dest_name = '$destination'";
    $dest_id_result = mysqli_query($con, $dest_id_query);

    if($dest_id_result) {
        $row = mysqli_fetch_assoc($dest_id_result);
        $dest_id = $row['dest_id'];
    }

    $query= "UPDATE book_trip SET  dest_id = '$dest_id',travel_date = '$date', duration = '$duration'  WHERE book_id = $book_id";
    mysqli_query($con, $query);
    echo"Updated";
    




}


function  delete(){
    global $con;


    $book_id=$_POST["action"];

    $query= "DELETE FROM  book_trip WHERE book_id= $book_id";
    
    mysqli_query($con, $query);
    echo "Deleted Successfully";

    
};


?>