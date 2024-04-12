<?php

include("../ajax/script.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Trip</title>
</head>
<body>

<h2>Edit Trip</h2>

<form autocomplete="off" action="" method="post">
    <?php
    include("../settings/connection.php");
    $book_id=$_GET["book_id"];
    $row=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM book_trip WHERE book_id = $book_id" ));



?>
<input type="hidden" id="book_id" value="<?php echo $row['book_id']?>">
    <label for="destination">Destination:</label><br>
    <?php
    // Perform a database query to fetch the destination name based on the dest_id
    $dest_id = $row['dest_id'];
    $destination_query = "SELECT dest_name FROM destination WHERE dest_id = $dest_id";
    $destination_result = mysqli_query($con, $destination_query);
    $destination_row = mysqli_fetch_assoc($destination_result);
    $destination_name = $destination_row['dest_name'];
?>
    <input type="text" id="destination" name="destination" value="<?php echo $destination_name ?>" required><br><br>
    
    <label for="trip_date">Trip Date:</label><br>
    <input type="date" id="date" name="date" value="<?php echo $row['travel_date']?>"><br><br>
    
    <label for="duration">Duration:</label><br>
    <input type="text" id="duration" name="duration" value="<?php echo $row['duration']?>"><br><br>
    
   <button type="button" onclick="submitTrip('edit');">Edit</button>
</form>

</body>
</html>
