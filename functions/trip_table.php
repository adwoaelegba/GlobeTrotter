
<?php
function showTable(){

    include("../actions/get_bookings.php");
    include("../ajax/script.php");
//execute function and assign result to a variable ($var_data)
$var_data=getAllrows($con);

//Creating a table for the data 
if($var_data!==false){
    echo'<section id="table-section">';
    echo '<table>';
    echo '<thead>';
    echo'<tr>';
    echo'<th>Booking ID</th>';
    echo'<th>Destination</th>';
    echo' <th>Trip Date</th>';
    echo' <th>Duration</th>';
    echo' <th>Actions</th>';
    echo'</tr>';
    echo'</thead>';
    echo' <tbody>';
    foreach ($var_data as $row) {

        $destination_query = "SELECT dest_name FROM destination WHERE dest_id = {$row['dest_id']}";
            $destination_result = mysqli_query($con, $destination_query);
            $destination_row = mysqli_fetch_assoc($destination_result);
            $destination = $destination_row['dest_name'];
        echo '<tr>';
        echo '<td>' . $row['book_id'] . '</td>';
        echo '<td>' . $destination. '</td>';
        echo '<td>' . $row['travel_date'] . '</td>';
        echo '<td>' . $row['duration'] . '</td>';
        echo'<td class="chore-actions">';
       // echo'<button class="action-button">Edit</button>';
        //echo'<button class="action-button-delete">Cancel Trip</button>';
        echo '<a href="../actions/edit_booking.php?book_id=' . $row['book_id'] . '" class="action-button"> Edit</a>';
        echo '<button class="action-button-delete" type="button" onclick="submitTrip(' . $row['book_id'] . ');">Cancel Trip</button>';
        echo '</tr>';
    }
    echo '  </tbody>';
    echo '</table>';
    echo '</section>';
} else {
    echo '<p>No chores found.</p>';
}
}


?>






















