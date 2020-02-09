<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>@yield('title')</title>
  </head>
  <body>
    {{-- header --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
        Amptron Instrumindo
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 offset-md-1">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav navbar-right offset-md-3">
          <a class="nav-item nav-link pr-4" href="{{ url('/') }}">Home</a>
          <a class="nav-item nav-link pr-4" href="{{ url('/about') }}">About</a>
          <a class="nav-item nav-link pr-4" href="{{ url('/barang') }}">Product</a>
          <a class="nav-item nav-link pr-4" href="#">News</a>
          <a class="nav-item nav-link pr-4" href="#">Services</a>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div> --}}
          </li>
        </ul>
      </div>
    </nav>
    {{-- end header --}}


    @yield('container')


    {{-- footer --}}
    <div class="row mr-auto text-left text-light bg-grey pl-5 pr-5 mt-2 pt-5">
        <div class="col-md-3 pl-5">
            <h6>JAM KERJA</h6>
            <hr class="bg-warning">
            <p>Senin - Jum'at : 08.15 - 17.15</p>
            <p>Sabtu - Minggu : Tutup</p>
        </div>
        <div class="col-md-3">
            <h6>BERITA TERKINI</h6>
            <hr class="bg-warning">
        </div>
        <div class="col-md-3">
            <h6>SITEMAP</h6>
            <hr class="bg-warning">
        </div>
        <div class="col-md-3">
            <h6>KONTAK KAMI</h6>
            <hr class="bg-warning">
            <p>Komplek Rukan Taman Blok M-51, Meruya Utara, Kembangan, RT.6/RW.7, Meruya Utara, Jakarta Barat, DKI Jakarta, Daerah Khusus Ibukota Jakarta 11620</p>
            <p>Website</p>
        </div>
    </div>


    {{-- <div class="card text-dark bg-light">
      <div class="card-header">
        <a href="">aii.com</a> Global Website
      </div>
      <div class="card-body text-right">
        <blockquote class="blockquote mb-0">
          <footer class="blockquote-footer">PT. Amptron Instrumindo |<cite title="Source Title"> © Amptron Instrumindo 1997-2020</cite></footer>
        </blockquote>
      </div>
    </div> --}}
    {{-- end footer --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>
