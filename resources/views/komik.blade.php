<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERPUSTKAAN WIKRAMA</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="#" class="logo"> <i class="fas fa-book"></i> WIK BOOK</a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <div id="login-btn" class="fas fa-user" ></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="/recomend">Dashboard</a>
        </nav>
    </div>

</header>

<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

</div>
<body>
    
<!-- header section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>Buku Komik</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>

                <div class="image">
                    <img src="image/nopal.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Si Nopal</h3>
                    <div class="price">Naufal Faridurrazak</div>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/tahi-lalat.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tahilalats</h3>
                    <div class="price">Nurfadli murysid</div>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/si juki.jpg" alt="">
                </div>
                <div class="content">
                    <h3>si juki</h3>
                    <div class="price">Faza meonk</div>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Lokasi</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>Indonesia </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
            <img src="image/worldmap.png" class="map" alt="">
        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> created by <span>Aretta Dwi Hapsari</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

<!-- loader  -->
