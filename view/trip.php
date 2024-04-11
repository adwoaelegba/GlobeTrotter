<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeTrotter-Trip Details</title>
    <link rel="stylesheet" href="../css/tripCSS.css">
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
                <a href="../view/book.php">Book trip</a>
                <a href="../view/budget.php">Budget calculator</a>
                <a href="../login/logout.php">Log Out</a>
            </div>

        </div>
    </header>

    <section class="main">
        <div class="block">
            <div class="heading">
                <span>Ready To Go On That Trip?</span>
                <h2>Manage your trip details </h2>
                
                </div>
        </div>

    </section>

    <div class="body">
        <h1 class="title">Barbados</h1>
        <p class="second-title">Trip Countdown</p>
        <div class="container">
            <div class="box">
                <div id="day" class="counter"></div>
                <div class="words">Days</div>
            </div>
            <!--hours-->

            <div class="box">
                <div id="hour" class="counter"></div>
                <div class="words">Hours</div>
            </div>
<!--minutes-->
            <div class="box">
                <div id="minute" class="counter"></div>
                <div class="words">Minutes</div>
            </div>
<!--seconds-->
            <div class="box">
                <div id="second" class="counter"></div>
                <div class="words">Seconds</div>
            </div>
        </div>
    </div>

    

    <!--counter-->
    <script>
        var tripDate= new Date('July 12, 2024 00:00:00').getTime();


        function newYear(){
            var current= new Date().getTime();
            difference= tripDate- current;


            var second=1000;
            var minute=second * 60;
            var hour = minute * 60;
            var day = hour * 24;


            var d = Math.floor(difference / (day));
            var h = Math.floor((difference % (day)) /(hour)) ;
            var m = Math.floor((difference % (hour))/ (minute));
            var s = Math.floor((difference % (minute)) / (second));



            document.getElementById('day').innerText= d;
            document.getElementById('hour').innerText= h;
            document.getElementById('minute').innerText= m;
            document.getElementById('second').innerText= s;


        }

        setInterval(function(){
            newYear();
        }, 1000)
    </script>
        
    </body>

    </html>
