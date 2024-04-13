<?php
include("../ajax/script.php");
include("../actions/get_prices_action.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeTrotter-Budget</title>
    <link rel="stylesheet" href="../css/budget.css">
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
                <a href="#">Log out</a>
            </div>

        </div>
    </header>
<section class="main">
<h1 class="title">Budget Calculator</h1>
<h2 class="heading">Calculate your expenses</h2>

    <div class="container">
    <form>

    <input type="text" class="country-input" id="country" name="country" placeholder="Enter country">
    <input type="text" class="dur-input" id="dur" name="dur" placeholder="Enter duration">
    <button type="submit" class="sub-btn" name="price" id="price" onclick="calculateCost('price');">Calculate</button>

    </form>
      

        

    
</div>

<div class="display" id="display">
    <div class="close">&times;</div>
</div>



    
</body>

</html>