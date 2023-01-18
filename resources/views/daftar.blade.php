<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/dasmen.css">
  <link rel="stylesheet" href="css/paymin.css">
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
 <body>
<!-- partial:index.partial.html -->
<h1>
  Daftar Buku
</h1>
<br>
<main>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>No. ISBN</th>
        <th>Kategori Buku</th>
        <th>Sampul Buku</th>
        <th>Sinopsis</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <?php $i =1; ?>
    <tbody>
    @foreach($data as $item)
      <tr>
      	<td>{{$i++}}</td>
        <td data-title='judul'>
        {{$item->judul}}
        </td>
        <td data-title='penulis'>
        {{$item->penulis}}
        </td>
        <td data-title='penerbit'>
       {{$item->penerbit}}
        </td>
        <td data-title='no.isbn'>
       {{$item->isbn}}
        </td>
         <td data-title='kategori'>
       {{$item->kategori}}
    </td>
     <td data-title='sampul'>
        <a href="/sampul/{{$item['id']}}" style="color:#fff;">Lihat</a>
    </td>
    <td data-title='sinopsis'>
       {{$item->sinopsis}}
    </td>
     <td style="display:flex">
								<form action="/" method="delete"> 
								@csrf
								<button class="btn btn-danger" style="height: 29px; border-radius:15px; padding: 5px 10px; margin:5px; background:#1C4670; color: #fff;
								display: flex; align-items: center; font-weight: 500; font-size:18px; ">Delete</button></td>
							</tr>
						@endforeach 
    </tbody>
  </table> 
  
<script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");

  closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
    if (sidebar.classList.contains("open")) {
      closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
    } else {
      closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
    }
  }
</script>
</body>

</html>