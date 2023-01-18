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
            <a href="/">Beranda</a>
            <a href="/books">Novel</a>
            <a href="/Biografi">Biografi</a>
            <a href="/komik">Komik</a>     
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

    <section class="blogs" id="blogs">
                                           
        <h1 class="heading"> <span>Rekomendasi 3 Buku Populer</span> </h1>
    
        <div class="swiper blogs-slider">
    
            <div class="swiper-wrapper">
    
                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Hujan</h3>
                        <p>Tere Liye</p>
                        <p>Pada 2042, dunia telah memasuki era di mana peran manusia telah digantikan oleh ilmu pengeahuan dan teknologi canggih. Cerita berfokus pada karakter Lail, gadis berusia 13 tahun, yang pada hari pertamanya di sekolah harus mengalami bencana gunung meletus dan gempa dahsyat.</p>
                        <a href="#" class="btn">read more</a>                  
                    </div>
                </div>
    
                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Laut Bercerita</h3>
                        <p>Leila S. chudori</p>
                        <p>Novel ini mengisahkan perilaku kekejaman dan kebengisan yang dirasakan oleh kelompok aktivis mahasiswa di masa Orde Baru. Tidak hanya itu, novel ini pun merenungkan kembali akan hilangnya 13 aktivis, bahkan sampai saat ini belum juga ada petunjuknya. Dengan membaca novel ini, akan membuka pikiran dan hati.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>
    
                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Bulan</h3>
                        <p>Tere Liye</p>
                        <p>Pada novel ini Masih menceritakan petualangan tiga sekawan yaitu Ali, Seli, dan Raib. pada novel Bulan ini dikisahkan Ali, Seli, dan Raib yang dibawa oleh Miss Selena dan Av untuk melakukan diplomasi di Klan Matahari. Tujuannya adalah untuk membuka portal atau gerbang yang sudah ribuan tahun lamanya ditutup.</p>
                        <a href="/read" class="btn">read more</a>
                    </div>
                </div>
    
            </div>
    
        </div>
    
    </section>
   
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Lokasi</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>Jl. Raya Wangun</a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>Kelurahan Sindangsari</a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>Bogor Timur 16720</a>
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

<!-- loader  -->

{{-- <div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div> --}}

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html> 