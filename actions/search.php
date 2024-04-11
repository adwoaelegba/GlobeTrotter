<?php

include("../settings/searchconnection.php");

if(isset($_POST['entry'])){

    $entry  = $_POST['entry'];


    $query= "SELECT * FROM destination WHERE dest_name LIKE '{$entry}%' OR continent LIKE '{$entry}%' 
    OR hotel_price LIKE '{$entry}%' OR flight_price LIKE '{$entry}%' LIMIT 3";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){?>
        <table class="table-display">
            <thead>
                <tr>
                    <th>Country</th>
                    <th>Continent</th>
                    <th>Details</th>
                    <th>Flight costs</th>
                </tr>
            </thead>
            <thead>
                <tbody>
                    <?php

                    while($row = mysqli_fetch_assoc($result)){

                        $country =$row['dest_name'];
                        $continent =$row['continent'];
                        $accom =$row['hotel_price'];
                        $flight =$row['flight_price'];

                        ?>
                        <tr>
                            <td> <?php echo $country;?></td>
                            <td> <?php echo $continent;?></td>
                            <td> <?php echo $accom;?></td>
                            <td> <?php echo $flight;?></td>
                        </tr>
                        
                        <?php

                    }
                    ?>

                </tbody>
            </thead>

        </table>
<?php
    }else{
        echo "<h3 class='text-error text-center mt-3'> No destination found </h3>";

    }

}



?>