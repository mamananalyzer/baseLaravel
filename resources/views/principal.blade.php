@extends('layout/base')

@section('title', 'About')

@section('container')

    {{-- sub-nav --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand page-scroll" href="#home">
            <img class="ml-5" src="img/aii.png" width="50px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto offset-md-3">
            <li class="nav-item pr-5">
            <a class="nav-link page-scroll" href="#home"><h3>Home</h3></a>
            </li>
            <li class="nav-item pr-5">
            <a class="nav-link page-scroll" href="#brand"><h3>Our Brand</h3></a>
            </li>
            <li class="nav-item pr-5">
            <a class="nav-link page-scroll" href="#about"><h3>Partner Kami</h3></a>
            </li>
        </ul>
        <span class="navbar-text">

        </span>
        </div>
    </nav>
    {{-- end sub-nav --}}


    <div class="jumbotron jumbotron-fluid" id="home">
      <div class="container text-left">
        <img src="img/aii.png" class="rounded-circle offset-md-2">
        <h1 class="display-3">Amptron Instrumindo</h1>
        <p class="lead offset-md-1 pl-2">Sole Agent Electrical Intrument for Indonesian Territory</p>
      </div>
    </div>

    <div class="section container">
      <div class="row">
        <div class="col text-center">
          <h2>Our Brand</h2>
          <hr>
        </div>
      </div>
      <div class="portfolio" id="brand">
        <div class="row" id="">
          <div class="col-sm-3 text-center thumbnail">
            <div class="card border-light">
              <a href="">
                <img src="img/principal/accunergy.png" width="100%" height="100%" class="card-img-top" alt="...">
                <p>Digital Power AC & DC Power Meter, Mult-Circuit Energy Monitoring and AcuCT </p>
                      <hr>
                    </a>
                  </div>
              </div>
              <div class="col-sm-3 text-center thumbnail">
                  <div class="card border-light">
                    <a href="">
                      <img src="img/principal/alan.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <p>LED Backlight Annunciators</p>
                      <hr>
                    </a>
                  </div>
              </div>
              <div class="col-sm-3 text-center thumbnail">
                  <div class="card border-light">
                    <a href="">
                      <img src="img/principal/bauser.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <p></p>
                      <hr>
                    </a>
                  </div>
              </div>
              <div class="col-sm-3 text-center thumbnail">
                  <div class="card border-light">
                    <a href="">
                      <img src="img/principal/bnr.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <p>Perfection in Automation Complete automation solution from Austria for over 30 years</p>
                      <hr>
                    </a>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-3 text-center thumbnail">
                  <div class="card border-light">
                    <a href="">
                      <img src="img/principal/cb.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <p>Programmable Power Tranducers / Barriers/ Transmitters</p>
                      <hr>
                    </a>
                  </div>
              </div>
              <div class="col-sm-3 text-center thumbnail">
                  <div class="card border-light">
                    <a href="">
                      <img src="img/principal/dold.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <p>Monitoring & Control Relays</p>
                      <hr>
                    </a>
                  </div>
              </div>
              <div class="col-sm-3 text-center thumbnail">
                  <div class="card border-light">
                    <a href="">
                      <img src="img/principal/emh.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <p></p>
                      <hr>
                    </a>
                  </div>
              </div>
              <div class="col-sm-3 text-center thumbnail">
                  <div class="card border-light">
                    <a href="">
                      <img src="img/principal/leipole.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <p></p>
                      <hr>
                    </a>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-3 text-center thumbnail">
                  <div class="card border-light">
                    <a href="">
                      <img src="img/principal/monarch.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <p>Stroboscope, Tachometer, Vibration Measurement, Process Chart Recorder</p>
                      <hr>
                    </a>
                  </div>
              </div>
              <div class="col-sm-3 text-center thumbnail">
                  <div class="card border-light">
                    <a href="">
                      <img src="img/principal/rishabh.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <p></p>
                      <hr>
                    </a>
                  </div>
              </div>
              <div class="col-sm-3 text-center thumbnail">
                  <div class="card border-light">
                    <a href="">
                      <img src="img/principal/wharton.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <p></p>
                      <hr>
                    </a>
                  </div>
              </div>
          </div>
        </div>
    </div>

    <div class="row pt-4 offset-md-1 container" id="about">
      <div class="col-md-5 pKiri">
        
      </div>
      <div class="col-md-6 pKanan" id="">
            
      </div>
    </div>
@endsection
