<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>About</title>
  </head>
  <body>
    {{-- header --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <a class="navbar-brand" href="#">
        <img src="/docs/4.4/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Amptron
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 ml-5 mr-5">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav navbar-right ml-5 mr-auto">
          <a class="nav-item nav-link pr-4" href="{{ url('/') }}">Home</a>
          <a class="nav-item nav-link pr-4" href="{{ url('/about') }}">About</a>
          <a class="nav-item nav-link pr-4" href="{{ url('/barang') }}">Product</a>
          <a class="nav-item nav-link pr-4 page-scroll" href="#baris1">News</a>
          <a class="nav-item nav-link pr-4 page-scroll" href="#baris2">Services</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    {{-- end header --}}

    <div class="jumbotron jumbotron-fluid" style="background-image: url('img/jumbo.jpg'); background-size: 120%">
      <div class="container text-center">
        <img src="img/aii.png" width="200" class="rounded-circle">
        <h1 class="display-3">Amptron Instrumindo</h1>
        <p class="lead">Sole Agent Electrical Intrument for Indonesian Territory</p>
      </div>
    </div>
      <video loop autoplay>
        <source src="img/DigitalMultimeter.webm" type="video/webm">
      </video>

    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1></h1>
        </div>
      </div>
      <br>
      <div class="row" id="baris1">
        <div class="col-md text-center">
          <div class="card container border-info">
            <img src="img/acuvimII.jpg" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Acuvim II Series</h5>
              <hr>
              <p class="card-text text-info">Quality engineered energy submeters provides a simple robust solution for power monitoring, power quality analysis, kWh metering, system integration.</p>
              <a href="listproduk.php" class="btn btn-info">Read more ...</a>
            </div>
          </div>
        </div>
        <div class="col-md text-center">
          <div class="card container border-info">
            <img src="img/acuvimL.jpg" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Acuvim L Series</h5>
              <hr>
              <p class="card-text text-info">This three phase energy meter is ideal for applications that require standard parameters for monitoring and controlling power distribution systems.</p>
              <a href="listproduk.php" class="btn btn-info">Read more ...</a>
            </div>
          </div>
        </div>
        <div class="col-md text-center">
          <div class="card container border-info">
            <img src="img/aculink810.jpg" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Aculink 810</h5>
              <hr>
              <p class="card-text text-info">Accuenergy’s AcuLink 810 is a data acquisition server and gateway.</p>
              <a href="listproduk.php" class="btn btn-info">Read more ...</a>
            </div>
          </div>
        </div>
        <div class="col-md text-center">
          <div class="card container border-info">
            <img src="img/analogrishabh.png" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ammeters and Voltmeters</h5>
              <hr>
              <p class="card-text text-info">Moving Coil meter AC ammeters and voltmeters with rectifier 90deg.</p>
              <a href="listproduk.php" class="btn btn-info">Read more ...</a>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row" id="baris2">
        <div class="col-md text-center">
          <div class="card container border-info">
            <img src="img/a2000.png" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">A2000 Multifunctional Power Meter</h5>
              <hr>
              <p class="card-text text-info">The A2000 acquires voltages, current, frequency and phase displacement in 3 and 4-wire systems</p>
              <a href="listproduk.php" class="btn btn-info">Read more ...</a>
            </div>
          </div>
        </div>
        <div class="col-md text-center">
          <div class="card container border-info">
            <img src="img/3430.png" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Rish Master 3430</h5>
              <hr>
              <p class="card-text text-info">On site programmable PT/CT ratios, True RMS measurement, User selectable 3 phase 3W or 4W</p>
              <a href="listproduk.php" class="btn btn-info">Read more ...</a>
            </div>
          </div>
        </div>
        <div class="col-md text-center">
          <div class="card container border-info">
            <img src="img/risheine+.png" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Rish Eine+</h5>
              <hr>
              <p class="card-text text-info">specially designed to measure electrical parameters like DC Voltage or DC Current and display it in terms of any parameter or process value.</p>
              <a href="listproduk.php" class="btn btn-info">Read more ...</a>
            </div>
          </div>
        </div>
        <div class="col-md text-center">
          <div class="card container border-info">
            <img src="img/stroboscope.png" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nova-Pro™ 300 LED Stroboscopes/Tachometers</h5>
              <hr>
              <p class="card-text text-info">Nova-Pro™ is a series of powerful portable visual inspection and speed measurement tools.</p>
              <a href="listproduk.php" class="btn btn-info">Read more ...</a>
            </div>
          </div>
        </div>
      </div>
      <br>
    </div>
    

    {{-- footer --}}
    <div class="card text-dark bg-light">
      <div class="card-header">
        <a href="">aii.com</a> Global Website
      </div>
      <div class="card-body text-right">
        <blockquote class="blockquote mb-0">
          <footer class="blockquote-footer">PT. Amptron Instrumindo |<cite title="Source Title"> © Amptron Instrumindo 1997-2020</cite></footer>
        </blockquote>
      </div>
    </div>
    {{-- end footer --}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>







    
    