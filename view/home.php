<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeTrotter-Home</title>
    <link rel="stylesheet" href="../css/home.css">
    <!-- Font Awesome CDN link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!--Swiper CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>

<header >
        <a href="#" class="brand">GlobeTrotter</a>
        <div class="nav">
            <div class="nav-items">
                <a href="../view/home.php">Home</a>
                <a href="../view/destination.php">Destinations</a>
                <a href="../view/hotels.php">Hotels</a>
                <a href="../view/package.php">Packages</a>
                <a href="../view/book.php">Book trip</a>
                <a href="../view/budget.php">Budget calculator</a>
            </div>

        </div>
    </header>



    <!--home slider -->
    <section class="home">

    <div class="swiper home-slider">

    <div class="swiper-wrapper">

    <!--Fist slider-->
    <div class="swiper-slide" style="background: url(../images/jamaica.jpg) no-repeat;">

    <div class="content">
<span>Explore The World</span>
<h3>We currently have some countries in each continent and division in our portfolio that we cater to.Check out which ones</h3>
<a href="../view/destination.php" class="btn">Learn more</a>
    </div>

    </div>

    <!--second-->
    <div class="swiper-slide" style="background: url(../images/masaai.jpg) no-repeat;">

<div class="content">
<span>Don't Break The Bank</span>
<h3>We allow you to calculate your budget so you can keep track of your spending</h3>
<a href="../view/budget.php" class="btn">Learn more</a>
</div>

</div>
<!--third-->
<div class="swiper-slide" style="background: url(../images/boat.jpeg) no-repeat;">

<div class="content">
<span>Packages For Everyone</span>
<h3>We offer packages to everyone, regardless of budget. You don't have to break the bank to travel with us</h3>
<a href="../view/package.php" class="btn">Learn more</a>
</div>

</div>

<!--last slide-->
<div class="swiper-slide" style="background: url(../images/dubai.jpg) no-repeat;">

<div class="content">
<span>Made Your Choice?</span>
<h3>Book that trip and get travelling</h3>
<a href="../view/book.php" class="btn">Book Now</a>
</div>

</div>

<!--next-->

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    </div>

    </section>





<!--Swiper js-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".home-slider", {
        loop:true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
</script>




</body>
</html>