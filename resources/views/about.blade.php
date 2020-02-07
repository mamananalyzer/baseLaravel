@extends('layout/base')

@section('title', 'About')

@section('container')

    {{-- sub-nav --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand page-scroll" href="#home">Base AnaLyZer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto offset-md-3">
            <li class="nav-item pr-5">
            <a class="nav-link page-scroll" href="#home"><h3>Home</h3></a>
            </li>
            <li class="nav-item pr-5">
            <a class="nav-link page-scroll" href="#product"><h3>Product</h3></a>
            </li>
            <li class="nav-item pr-5">
            <a class="nav-link page-scroll" href="#contact"><h3>Contact</h3></a>
            </li>
        </ul>
        <span class="navbar-text">
            Navbar text with an inline element
        </span>
        </div>
    </nav>
    {{-- end sub-nav --}}


    <div class="jumbotron jumbotron-fluid" id="home" style="background-image: url('img/jumbo.jpg'); background-size: 120%">
      <div class="container text-center">
        <img src="img/aii.png" width="200" class="rounded-circle">
        <h1 class="display-3">Amptron Instrumindo</h1>
        <p class="lead">Sole Agent Electrical Intrument for Indonesian Territory</p>
      </div>
    </div>
      {{-- <video loop autoplay>
        <source src="img/DigitalMultimeter.webm" type="video/webm">
      </video> --}}

    <div class="container">
      {{-- <div class="row">
        <div class="col text-center">
          <h1></h1>
        </div>
      </div>
      <br> --}}
      <div class="row" id="product">
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
      <div class="row" id="contact">
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
@endsection
