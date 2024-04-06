<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeTrotter</title>
    <link rel="stylesheet" href="./css/index.css">
    <!-- Font Awesome CDN link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
    <header >
        <a href="#" class="brand">GlobeTrotter</a>
        <div class="nav">
            <div class="nav-items">
                <a href="#">Home</a>
                <a href="#">Destinations</a>
                <a href="#">Hotels</a>
                <a href="#">Book trip</a>
                <a href="#">Budget calculator</a>
            </div>

        </div>
    </header>
    
    <section class="index">
<video class="back active" src="./images/beachvid.mp4" autoplay muted loop></video>
<video class="back" src="./images/beachvid.mp4" autoplay muted loop></video>
<video class="back" src="./images/safarivid.mp4"  autoplay muted loop></video>
<video class="back" src="./images/nightvid (1).mp4"  autoplay muted loop></video>


        <div class="info active">
            <h1>Start <br> <span>Exploring</span></h1>
            <p>Looking for a travel company that can make travelling the world easier and without hassle. Look no further than GlobeTrotter. We organise trips of all nature-be it honeymoons,girls trips, friend hangouts-to over 10 different countries. Ready to start exploring? Log in now </p>
            <a href="./login/login.html">Log In</a>
            </div>



            
<div class="slider">
    <div class="slider-btn active" onclick="slider(0)"></div>
    <div class="slider-btn"  onclick="slider(1)"></div>
    <div class="slider-btn" onclick="slider(2)"></div>

</div>
        

    </section>


    <script>
        const circles= document.querySelectorAll(".slider-btn");
        const slides= document.querySelectorAll(".back");
        console.log("Circles:",circles);
        console.log("Slides:",slides); 

        var slider= function(change){
            circles.forEach((circle) => {
                circle.classList.remove("active");
            });

            slides.forEach((slide) => {
                slide.classList.remove("active");
            });

            




            circles[change].classList.add("active");
            slides[change].classList.add("active");
            
           

        }
        slider(0);

        circles.forEach((circle, i) => {
            circle.addEventListener("click", () => {
                slider(i);
            });
           
        });
    </script>
</body>
</html>