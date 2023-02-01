<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Batu Night Spectacular</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
    body {
        overflow-y: scroll;
    }
    body::-webkit-scrollbar {
        display: none;
    }
    body {
        -ms-overflow-style: none;
        scrollbar-width: none; 
    }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
    function initialize() {
      var options = {
        center:new google.maps.LatLng(-7.896446844750957, 112.5345639588626), // longitude latitude bandung
        zoom:15,
        mapTypeId:google.maps.MapTypeId.ROADMAP // Tipe ROADMAP
      };
      // create map object
      var map=new google.maps.Map(document.getElementById("googleMap"),options);
    }
    // membuat Event Listener untuk memanggil fungsi initialize pada saat halaman selesai di load
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarCenteredExample"
          aria-controls="navbarCenteredExample"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="wahana">Wahana</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ticket">Booking</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- Banner -->
    <style>
      .masthead {
      height: 100vh;
      min-height: 500px;
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1502136969935-8d8eef54d77b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      color : white;
      }
    </style>
    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center">
            <h1 class="fw-normal display-3"><b>BATU NIGHT SPECTACULAR</b></h1>
            <p class="lead fw-normal">JUST IMAGINE THE FUN AT NIGHT</p>
            <a href="ticket" class="btn bg-warning bg-gradient text-dark btn-lg active" role="button" aria-pressed="true">Booking Ticket</a>
          </div>
        </div>
      </div>
    </header>

<!-- Page Content -->
    <section class="py-3">
      <style>
        .justify {
            text-align:justify;
            text-justify: inter-word;
            }
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }
      </style>
      <div class="container py-3 mt-3">
        <div class="container w-75 p-5">
          <h2 class="pb-2 border-bottom fw-bold text-uppercase text-center ">Mengapa Harus Batu Night Spectacular ?</h2>
          <p class="justify  fs-4">Tahukah kamu? Pasar malam tadinya adalah festival perayaan Maulud Nabi di Jawa, terutama di Surakarta dan Yogyakarta. Kini, pasar malam setia menemani begitu matahari tenggelam, apalagi di Kota Batu! Batu Night Spectacular adalah pasar malam modern dengan beragam atraksi menguji adrenalin dan menghibur untuk keluarga. 
            Batu night spectacular atau yang lebih lekat disebut BNS adalah salah satu ikon wisata kota Batu Malang. Lokasinya yang ada di tengah kehijauan alam pegunungan membuat destinasi wisata yang satu ini berkesan unik. Hal ini karena tipografi Batu sendiri yang hadir sebagai kota di daerah dataran tinggi. Hampir semua wilayahnya pun masih ada di area kaki gunung.
            Terkadang malam terlalu sayang untuk dilewatkan begitu saja. Apalagi saat waktu berkumpul bersama keluarga begitu singkat. 
            Batu Night Spectacular menyediakan beragam atraksi yang bisa dilakukan oleh keluarga tercinta dari segala umur. Perang laser, rumah hantu, roller coaster, hingga film 4D membuat malam sayang dilewatkan begitu saja. 
            Abadikan malam dengan berfoto di balon udara, menara Eiffel, dan kereta Cinderella di taman lampion. </p>
        </div>
      <div class="container py-3 mt-5">
        <h2 class="pb-2 border-bottom fw-bold text-uppercase text-center ">Wahana Batu Night Spectacular</h2>
      </div>
        <div class="py-3 row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <img src="https://jtp.id/bns/file/2022/01/20170605094517_170517_BNS-Rumah-Hantu-1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Rumah Hantu</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://jtp.id/bns/file/2022/01/20170605034733_170517_BNS-Witch-Castle-1-350x250.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Witch Castle</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://jtp.id/bns/file/2022/01/20170605034658_170517_BNS-Trick-Art-3-350x250.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Trick Art</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://jtp.id/bns/file/2022/01/20170606033333_170517_BNS-Rodeo-1-350x250.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Rodeo</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://jtp.id/bns/file/2022/01/20170605095351_170517_BNS-Marry-Go-Round-1-350x250.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Merry Go Round</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://jtp.id/bns/file/2022/01/04-BNS_Flying-Swinger-350x250.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Flying Swinger</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="container mt-3 d-grid gap-2 col-3 mx-auto">
            <a href="wahana" class="btn bg-primary bg-gradient text-light btn-lg active" role="button" aria-pressed="true">More</a>
        </div>
        <div class="container py-5 mt-5">
            <h2 class="pb-2 border-bottom fw-bold text-uppercase text-center ">Lokasi Batu Night Spectacular</h2>
            <div class="container p-5 mt-3" id="googleMap" style="width:800px;height:380px;"></div>
            <h5 class="card-title text-center mt-3">Jl. Hayam Wuruk No.1, Oro-Oro Ombo, Kec. Batu, Kota Batu, Jawa Timur 65316</h5>
        </div>
      </div>
    </section>

<!-- Footer -->
    <footer class="text-center text-white">
      <div class="container">
        <section>
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://www.facebook.com/batunightspectacular/"
            role="button"
            data-mdb-ripple-color="dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
          </a>
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://www.instagram.com/batunightspectacular/?hl=id"
            role="button"
            data-mdb-ripple-color="dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>
          </a>
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://twitter.com/wisatamalam_bns"
            role="button"
            data-mdb-ripple-color="dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg>
          </a>
        </section>
      </div>

      <div class="text-center text-dark p-3">
      © 2022 Company, Inc
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- End -->
  </body>
</html>