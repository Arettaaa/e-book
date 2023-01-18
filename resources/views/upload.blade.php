<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/dasmen.css">
  <link rel="stylesheet" href="css/paymen.css">
    <link rel="stylesheet" href="css/paymen.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <div class="logo_name">WIKRAMA BOOK</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="/admin">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="/input">
          <i class='bx bxs-user'></i>
          <span class="links_name">Users</span>
        </a>
        <span class="tooltip">Users</span>
      </li>
      <li>
        <a href="/upload">
          <i class='bx bxs-book'></i>
          <span class="links_name">Books</span>
        </a>
        <span class="tooltip">Books</span>
      </li>
      <li>
        <a href="/category">
            <i class='bx bx-category'></i>
          <span class="links_name">Category</span>
        </a>
        <span class="tooltip">Category</span>
      </li>
      <li class="profile">
        <div class="profile-details">
          <div class="name_job">
            {{-- @foreach($data as $d)
            <div class="name">{{$d->name}}</div>
            <div class="job">{{$d->nisn}}</div>
            @endforeach --}}
          </div>
        </div>
        <a href="/logout"><i class='bx bx-log-out' id="log_out"></i></a>
      </li>
    </ul>
  </div>
  
      <section class="dashboard"> 
      <div class="main-body" style="width: 70%; padding: 1rem;">
      </div>
      <div class="container">
        <h1>Formulir Upload Buku</h1>
        <br>
        <form action="{{route('add')}}" method="post" enctype="multipart/form-data">
           @csrf 
          <div class="row">
            <div class="column">
              <label for="judul">Judul Buku</label>
              <input type="text" name="judul" placeholder="Masukkan Nama Bank">
              
            </div>
            <div class="column">  
              <label for="penulis">Penulis</label>
              <input type="text"  name="penulis" placeholder="Masukkan Nama Rekening">
            </div>
          </div>
          <div class="row">
            <div class="column">
              <label for="penerbit">Penerbit</label>
              <input type="text"  name="penerbit" placeholder="Masukkan Nomor Telephone">
            </div>
            <div class="column">
              <label for="isbn">No. ISBN</label>
              <input type="number"  name="isbn" placeholder="Masukkan Nominal">
            </div>
          </div>
          <div class="row">
            <div class="column">
              <label for="sinopsis">Sinopsis</label>
              <input type="text"  name="sinopsis" placeholder="Masukkan Nomor Telephone">
            </div>
            <div class="column">
              <label for="kategori">Kategori Buku</label>
              <input type="text"  name="kategori" placeholder="Masukkan Nominal">      
            </div>
          </div>
          <div class="row">
            <div class="column" style="">
              <label for="issue">Sampul Buku</label>
              <input name="image" id="image" type="file" class="file-upload-field" style="color:#f6fbff;">
            </div>
          </div>
          <button type="submit" style="cursor: pointer;">Submit</button>
        </form>
    </section>
  </section>
  
  <script>

  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>
 