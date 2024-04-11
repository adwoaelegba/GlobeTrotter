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
                <a href="../view/book.php">Book trip</a>
                <a href="../view/budget.php">Budget calculator</a>
                <a href="#">Log Out</a>
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
        <!--slider start-->
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
                    <a onclick="openPopup()"><span>Read more</span></a>
                </div>
            </div>

        </div>
      </div>
     <!--slider end-->
     <!--slider start-->
     <div class="swiper-slide">
        <div class="card naija-bg">
            <div class="card-img">
                <img src="../images/nigeria.png" alt=""  class="naija">
                <span class="number">2</span>
            </div>

            <div class="card-content">
                <div class="info">
                    <h2>Nigeria</h2>
                    <div class="sub-info">
                        <span>Country</span>
                        <h4>Africa</h4>
                    </div>
                </div>
                <div class="read-more-btn">
                    <a onclick="openPopup()"><span>Read more</span></a>
                </div>
            </div>

        </div>
      </div>
       <!--slider end-->
       <!--slider start-->
     <div class="swiper-slide">
        <div class="card mauritius-bg">
            <div class="card-img">
                <img src="../images/mauritius.png" alt=""  class="mauritius">
                <span class="number">3</span>
            </div>

            <div class="card-content">
                <div class="info">
                    <h2>Mauritius</h2>
                    <div class="sub-info">
                        <span>Country</span>
                        <h4>Africa</h4>
                    </div>
                </div>
                <div class="read-more-btn">
                    <a onclick="openPopup()"><span >Read more</span></a>
                </div>
            </div>

        </div>
      </div>
       <!--slider end-->
       <!--slider start-->
     <div class="swiper-slide">
        <div class="card italy-bg">
            <div class="card-img">
                <img src="../images/italy.png" alt=""  class="italy">
                <span class="number">4</span>
            </div>

            <div class="card-content">
                <div class="info">
                    <h2>Italy</h2>
                    <div class="sub-info">
                        <span>Country</span>
                        <h4>Europe</h4>
                    </div>
                </div>
                <div class="read-more-btn">
                    <a onclick="openPopup()"><span>Read more</span></a>
                </div>
            </div>

        </div>
      </div>
       <!--slider end-->
       <!--slider end-->
       <!--slider start-->
     <div class="swiper-slide">
        <div class="card france-bg">
            <div class="card-img">
                <img src="../images/france.png" alt=""  class="france">
                <span class="number">5</span>
            </div>

            <div class="card-content">
                <div class="info">
                    <h2>France</h2>
                    <div class="sub-info">
                        <span>Country</span>
                        <h4>Europe</h4>
                    </div>
                </div>
                <div class="read-more-btn">
                    <a onclick="openPopup()"><span>Read more</span></a>
                </div>
            </div>

        </div>
      </div>
       <!--slider end-->
       <!--slider end-->
       <!--slider start-->
     <div class="swiper-slide">
        <div class="card barb-bg">
            <div class="card-img">
                <img src="../images/barbados.png" alt=""  class="barbados">
                <span class="number">6</span>
            </div>

            <div class="card-content">
                <div class="info">
                    <h2>Barbados</h2>
                    <div class="sub-info">
                        <span>Country</span>
                        <h4>N.America</h4>
                    </div>
                </div>
                <div class="read-more-btn">
                    <a onclick="openPopup()"><span>Read more</span></a>
                </div>
            </div>

        </div>
      </div>
       <!--slider end-->
    </div>
    </div>
      <!--slider nav-->
      <div class="slider-nav">
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </div>  
    
</div>

<!--Modals -->
<div class="modal-container">
    <!--Modals start -->
    <div class="modal-box ghana-bg">
    <div class="modal-content">
        <a onclick="closePopup()" class="modal-close-btn"><i class="uil uil-times "></i> <span>Close</span></a>
        <div class="modal-inner">
            <h1 class="modal-bg-title">Ghana</h1>
        </div>
        <div class="modal-image-area">
            <img src="../images/elmina.jpg" alt="" class="modal-img">
        </div>
        <div class="modal-text-content">
            <h1 class="modal-title">Ghana</h1>
            <div class="modal-title-sub">
                <span>Country</span>
                <h4>Africa</h4>
            </div>
            <p>Ghana,officially the Republic of Ghana, is a country in West Africa. It abuts the Gulf of Guinea and the Atlantic Ocean to the south, sharing a border with Ivory Coast in the west, Burkina Faso in the north, and Togo in the east. Ghana covers an area of 239,567 km2 (92,497 sq mi), spanning diverse biomes that range from coastal savannas to tropical rainforests. With over 32 million inhabitants, Ghana is the second-most populous country in West Africa. The capital and largest city is Accra; other significant cities include Kumasi, Tamale, and Sekondi-Takoradi.</p>
        </div>
    </div>
    </div>
    <!--Modals end -->
    <!--Modals start -->
    <div class="modal-box naija-bg">
    <div class="modal-content">
        <a class="modal-close-btn" onclick="closePopup()"><i class="uil uil-times "></i> <span>Close</span></a>
        <div class="modal-inner">
            <h1 class="modal-bg-title">Nigeria</h1>
        </div>
        <div class="modal-image-area">
            <img src="../images/naija.jpg" alt="" class="modal-img">
        </div>
        <div class="modal-text-content">
            <h1 class="modal-title">Nigeria</h1>
            <div class="modal-title-sub">
                <span>Country</span>
                <h4>Africa</h4>
            </div>
            <p>Nigeria is a country of contrasts, where ancient traditions coexist with modern aspirations. Whether you want to explore the bustling city of Lagos, the sacred forest of Oshogbo, or the artistic treasures of Nike Art Gallery, Nigeria offers something for every traveler. You can also witness the diversity of Nigeria's cultures and religions, from the Muslim north to the Christian south, and enjoy the rich cuisine, music, and festivals that celebrate their heritage. Nigeria is not without its challenges, but it is also a country of resilience, creativity, and optimism, where you can experience the vitality of Africa.</p>
        </div>
    </div>
    </div>
    <!--Modals end -->

    <!--Modals start -->
    <div class="modal-box mauritius-bg">
    <div class="modal-content">
        <a class="modal-close-btn" onclick="closePopup()"><i class="uil uil-times "></i> <span>Close</span></a>
        <div class="modal-inner">
            <h1 class="modal-bg-title">Mauritius</h1>
        </div>
        <div class="modal-image-area">
            <img src="../images/maur.jpg" alt="" class="modal-img">
        </div>
        <div class="modal-text-content">
            <h1 class="modal-title">Mauritius</h1>
            <div class="modal-title-sub">
                <span>Country</span>
                <h4>Africa</h4>
            </div>
            <p>Mauritius,officially the Republic of Mauritius,[b] is an island country in the Indian Ocean, about 2,000 kilometres (1,100 nautical miles) off the southeastern coast of East Africa, east of Madagascar. It includes the main island (also called Mauritius), as well as Rodrigues, Agaléga, and St. Brandon (Cargados Carajos shoals).[12][13] The island of Mauritius along with nearby Réunion (a French overseas department), are part of the Mascarene Islands. The main island of Mauritius, where the population is concentrated, hosts the capital and largest city, Port Louis. The country spans 2,040 square kilometres (790 sq mi) and has an exclusive economic zone covering 2,300,000 square kilometres (670,000 square nautical miles).</p>
        </div>
    </div>
    </div>
    <!--Modals end -->

    <!--Modals start -->
    <div class="modal-box italy-bg">
    <div class="modal-content">
        <a class="modal-close-btn" onclick="closePopup()"><i class="uil uil-times "></i> <span>Close</span></a>
        <div class="modal-inner">
            <h1 class="modal-bg-title">Italy</h1>
        </div>
        <div class="modal-image-area">
            <img src="../images/italypic.jpg" alt="" class="modal-img">
        </div>
        <div class="modal-text-content">
            <h1 class="modal-title">Italy</h1>
            <div class="modal-title-sub">
                <span>Country</span>
                <h4>Europe</h4>
            </div>
            <p>Italy is a dream destination for travelers who love art, culture, and cuisine. Whether you want to admire the ancient wonders of Rome, cruise the romantic canals of Venice, or explore the fashion capital of Milan, Italy has something for everyone. You can also enjoy the stunning scenery of the Amalfi Coast, the rolling hills of Tuscany, or the snowy peaks of the Alps. Italy is a feast for the senses, with its rich history, vibrant colors, and delicious flavors. Experience the dolce vita in one of the most beautiful and diverse countries in Europe.</p>
        </div>
    </div>
    </div>
    <!--Modals end -->

    <!--Modals start -->
    <div class="modal-box france-bg">
    <div class="modal-content">
        <a class="modal-close-btn" onclick="closePopup()"><i class="uil uil-times "></i> <span>Close</span></a>
        <div class="modal-inner">
            <h1 class="modal-bg-title">France</h1>
        </div>
        <div class="modal-image-area">
            <img src="../images/paris.jpg" alt="" class="modal-img">
        </div>
        <div class="modal-text-content">
            <h1 class="modal-title">France</h1>
            <div class="modal-title-sub">
                <span>Country</span>
                <h4>Europe</h4>
            </div>
            <p>France is a country that charms travelers with its diverse and captivating attractions. Whether you are drawn to the iconic Eiffel Tower, the world-class art of the Centre Pompidou, or the romantic cafe terraces, you will find something to love in France. Explore the rich history and culture of its cities, from Paris to Marseille, or discover the stunning landscapes and villages of its countryside, from Provence to Normandy. France offers a variety of experiences for every taste and budget, and is a destination that will seduce you with its beauty and elegance.</p>
        </div>
    </div>
    </div>
    <!--Modals end -->


    <!--Modals start -->
    <div class="modal-box barb-bg">
    <div class="modal-content">
        <a class="modal-close-btn" onclick="closePopup()"><i class="uil uil-times "></i> <span>Close</span></a>
        <div class="modal-inner">
            <h1 class="modal-bg-title">Barbados</h1>
        </div>
        <div class="modal-image-area">
            <img src="../images/barb.jpg" alt="" class="modal-img">
        </div>
        <div class="modal-text-content">
            <h1 class="modal-title">Barbados</h1>
            <div class="modal-title-sub">
                <span>Country</span>
                <h4>N.America</h4>
            </div>
            <p>Barbados is a gem of the Caribbean, where you can experience the best of both worlds: the laid-back beach life and the lively cultural scene. Whether you want to soak up the sun on the white-sand shores, dive into the turquoise waters, or explore the historic sites and natural wonders, Barbados has something for you. You can taste the island's rich culinary heritage, from the spicy fish cakes to the world-famous rum, and enjoy the music, art, and festivals that showcase the Bajan spirit. Barbados is more than just a destination, it's a way of life</p>
        </div>
    </div>
    </div>
    <!--Modals end -->



    
</div>

   
</section>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/java.js"></script>

<script>
   
    
</script>
</body>
</html>