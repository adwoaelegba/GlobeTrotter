<?php
session_start();
include("../ajax/script.php");
include("../actions/book_trip_action.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeTrotter-Book Trip</title>
    <link rel="stylesheet" href="../css/book.css">
    <!-- Font Awesome CDN link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
<header >
        <a href="#" class="brand">GlobeTrotter</a>
        <div class="nav">
            <div class="nav-items">
                <a href="../view/home.php">Home</a>
                <a href="../view/destination.php">Destinations</a>
                <a href="../view/book.php">Book trip</a>
                <a href="../view/budget.php">Budget calculator</a>
                <a href="../login/logout.php">Log out</a>
            </div>

        </div>
    </header>

    <section class="main">
    <div class="cont">
        <div class="image-overlay">
            <div class="text-overlay">Book Trip</div>
        </div>
   

    <!--form-->
    <div class="container">
        <h1>Book Trip</h1>
        <form action="#">
            <div class="form-first">
                <div class="personal">
                    <span class="title">Trip Details</span>
                    <div class="field">
                        <div class="input">
                            <label>Destination</label>
                            <input type="text" name="destination" id="destination" placeholder="Enter Your Destination">
                        </div>
                        <div class="input">
                            <label>Travel Date</label>
                            <input type="date" id="date" name="date">
                        </div>
                        <div class="input">
                            <label>Duration</label>
                            <input type="number" name="duration" id="duration" placeholder="E.g 3">
                        </div>
                      

                        <!--second-line-->
                        <div class="input">
                            <label>Payment Method</label>
                            <input type="text" name="payment" id="payment" placeholder="Eg Visa,Mastercard">
                        </div>
                        <div class="input">
                            <label>Card Number</label>
                            <input type="text" name="card" id="card" placeholder="Enter Your Card Number">
                        </div>
                        
                    </div>
                </div>
                <div class="personal">
                    <span class="title">Personal Details</span>
                    <div class="field">
                        <div class="input">
                            <label>First Name</label>
                            <input type="text" name="firstName" id="firstName" placeholder="Enter Your First Name">
                        </div>
                        <div class="input">
                            <label>Last Name</label>
                            <input type="text" name="lastName" id="lastName" placeholder="Enter Your Last Name">
                        </div>
                        <div class="input">
                            <label>Email</label>
                            <input type="text" name="email" id="email" placeholder="Enter Your Email">
                        </div>
                        <div class="input">
                            <label>Phone Number</label>
                            <input type="text"  name="phone" id="phone" placeholder="Enter Your Phone Number" >
                        </div>
                        

                       
                        
                    </div>
                    <div class="btn">
                        <button type="submit" class="sub-btn" name="book" id="book" onclick="bookTrip('book');">Book</button>
                        
                        <a href="../view/trip.php" class="sub-btn">Manage Trips</a>


                        </div>
                </div>
            </div>

        </form>

    </div>
    
    </div>
    </section>
</body>
</html>