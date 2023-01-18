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
    <link rel="stylesheet" href="css/produk.css">


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
            <a href="/yield">Download</a>         
        </nav>
    </div>

</header>

<body>
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
    
          <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                <img src="image/blog-3.jpg" width="100%"  id="ProductImg">
                </div>
            </div>
            <div class="col-2">
                <h4>Bulan</h4>
                <h4>Tere Liye</h4>
            <h4>Sinopsis</h4>
            <br>
            <h4>Pada novel ini Masih menceritakan petualangan tiga sekawan yaitu Ali, Seli, dan Raib. pada novel Bulan ini dikisahkan Ali, Seli, dan Raib yang dibawa oleh Miss Selena dan Av untuk melakukan diplomasi di Klan Matahari. Tujuannya adalah untuk membuka portal atau gerbang yang sudah ribuan tahun lamanya ditutup.</h4>
        </div>
     </div>
    </div>
    </body>

    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = Document.getElementByClassName("small-img");

        SmallImg[0].onclick = function()
        {
            ProductImg.src =SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src =SmallImg[1].src;
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src =SmallImg[2].src;
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src =SmallImg[3].src;
        }
        </script>
    