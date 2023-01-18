<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
  <link rel="stylesheet" href="css/login.css">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="image/beranda 1.jpg" alt="">
        <div class="text">
          <span class="text-1">Wikrama Book</span>
          <span class="text-1">SMK Wikrama Bogor</span>

        </div>
      </div>
    </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Login</div>

          <form method="POST" action="{{route('login.auth')}}">
            @csrf
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Masukkan email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Masukkan password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Login">
                <br>
                <a href="/register" style="color: #1C4670; padding: 0 10px; position: relative;">Tidak punya akun?</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>