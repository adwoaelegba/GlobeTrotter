<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeTrotter-Destination</title>
    <link rel="stylesheet" href="../css/destCSS.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin:ital,wght@0,400..700;1,400..700&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Dancing+Script:wght@400..700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lobster&family=Raleway:ital,wght@0,100..900;1,100..900&family=Russo+One&family=Yellowtail&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!--Swiper CSS-->
    <link rel="stylesheet" href="../css/swiper bundle-min.css">

     <!--Iconscout-->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

</head>
<body>
    <section class="main">
    <header >
        <a href="#" class="brand">GlobeTrotter</a>
        <div class="nav">
            <div class="nav-items">
                <a href="../view/home.php">Home</a>
                <a href="../view/destination.php">Destinations</a>
                <a href="../view/package.php">Packages</a>
                <a href="../view/book.php">Book trip</a>
                <a href="../view/budget.php">Budget calculator</a>
            </div>

        </div>

    </header>

   <!-- <div class="search-bar"> 
           <div class="search-box"></div> 
           <input type="text" class="search-input" placeholder="Search destinations">

        </div>-->
<!--slider-->
<div class="slider-cont">
<div class="swiper cardSwiper">
    <div class="swiper-wrapper">
        <!--slider-->
      <div class="swiper-slide">
        <div class="card ghana-bg">
            <div class="card-img">
                <img src="../images/ghana-icon.jpg" alt=""  class="ghana">
                <span class="number">1</span>
            </div>

            <div class="card-content">
                <div class="info">
                    <h2>Ghana</h2>
                    <div class="sub-info">
                        <span>Country</span>
                        <h4>Africa</h4>
                    </div>
                </div>
                <div class="read-more-btn">
                    <a><span>Read more</span></a>
                </div>
            </div>

        </div>
      </div>
     <!--slider-->
    </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </div>
</div>
   

<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/java.js"></script>
</body>
</html>