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

    {{-- <div class="header-2">
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#home">Login</a>
        </nav>
    </div> --}}

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

        <form method="POST" action="{{route('login.auth')}}">
        @csrf
        <h3>LOGIN</h3>
        {{-- <span>username</span>
        <input type="email" name="email" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="password" class="box" placeholder="enter your password" id=""> --}}
        <a href="/login" class="btn">LOGIN</a>
        <p>don't have an account ? <a href="/register">create one</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>WIKRAMA BOOK</h3>
            <p>Better solutions for your choice book.</p>
            <p>We can access book for online and free!</p>
            <a href="/register" class="btn">Register</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="image/book-1.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/blog-3.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/blog-2.jpg" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>User Friendly</h3>
            <p>mudah untuk digunakan</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>Kemudahan Akses</h3>
            <p>Tidak Dibatasi Ruang dan Waktu</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>Lengkap dan Up-to-date</h3>
            <p>Koleksi buku lengkap dan up-to-date</p>
        </div>
    </div>
</section>



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
                    </div>
                </div>
    
            </div>
    
        </div>
    
    </section>




<!-- footer section starts  -->

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





































{{-- 
@extends('layout')
@section('contetnt')

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">WIKBOOK</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#Home">Home</a></li>
          <li><a class="getstarted scrollto" href="#login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Choice Book</h1>
          <h2>We can access book for online and free!</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#register" class="btn-get-started scrollto">Register</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="image/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="image/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="image/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="image/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="image/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="image/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="image/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              more than 99 books that you can access on this wikbook web for free, we provide
              books that can be read online so that knowledge is wider
            </p>
            
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong>Top #3</strong> Book of the Weeks</h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Bulan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Dalam novel Bulan petualangan antara Raib dan kedua kawannya masih berlanjut. 
                      Miss Selena akhirnya muncul di sekolah saat beberapa bulan setelah kejadian di 
                      klan Bulan. Miss Selena memberikan kabar menyenangkan bagi para murid yang 
                      mempunyai jiwa petualang, seperti Raib, Ali, dan Seli. Miss Selena bersama Av
                      berniat untuk mengajak mereka berkunjung ke klan Matahari selama kurang lebih
                      dua minggu. Av memiliki rencana hendak menemui ketua konsil klan Matahari.
                      Diduga Konsil klan Matahari ingin menguasai klan matahari guna mencari federasi
                      dalam melawan Tamus yang diperkirakan akan bebas dan juga membebaskan raja 
                      tanpa mahkota.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Hujan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Pada 2042, dunia telah memasuki era di mana peran manusia telah digantikan oleh ilmu pengeahuan dan teknologi canggih. Cerita berfokus pada karakter Lail, gadis berusia 13 tahun, yang pada hari pertamanya di sekolah harus mengalami bencana gunung meletus dan gempa dahsyat.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Bumi <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Mengisahkan tentang petualangan 3 remaja yang berusia 15 tahun bernama Raib, Ali dan Seli. Namun mereka bukanlah remaja biasa, melainkan remaja yang memiliki kekuatan khusus seperti Raib yang bisa menghilang, Seli yang bisa mengeluarkan petir dan Ali seorang pelajar yang sangat jenius.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

  
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>WIKBOOK</h3>
            <p>
              Jl. Raya Wangun <br>
              Kelurahan Sindangsari<br>
              Bogor Timur 16720 <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Wikbook</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">Nasywa Aulya Putri</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html> --}}