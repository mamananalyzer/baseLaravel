@extends('layout/base')

@section('title', 'Principal')

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
            {{-- <li class="nav-item pr-5">
            <a class="nav-link page-scroll" href="#about"><h3>Partner Kami</h3></a>
            </li> --}}
        </ul>
        <span class="navbar-text">

        </span>
        </div>
    </nav>
    {{-- end sub-nav --}}


    <div class="jumbotron jumbotron-fluid" id="home" style="height:500px; background-image: url('img/bg-3.jpg'); background-position: 0 0px;">
      <div class="container text-left">
        <img src="img/aii.png" class="rounded-circle offset-md-2">
        <h1 class="display-3 blue">Amptron Instrumindo</h1>
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
            <div class="row align-items-start">
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="accuenergy" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/accunergy.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Digital Power AC & DC Power Meter, Mult-Circuit Energy Monitoring and AcuCT </p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="alan" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/alan.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>LED <br> Backlight <br> Annunciators</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="bauser" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/bauser.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Instrument displays <br> Hour counters <br> Pulse counters</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="bnr" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/bnr.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Perfection in Automation Complete automation solution from Austria for over 30 years</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="row align-items-start">
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="GMC Instruments" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/gmc.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Programmable <br> Power Tranducers <br> Barriers, Transmitters</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="dold" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/dold.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Monitoring <br> & <br> Control Relays</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="emh" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/emh.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Smart Meter Gateway <br> Special meters <br> Domestic meters & smart meters</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="leipole" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/leipole.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Fan Filter <br> Enclosure Thermostat <br> Enclosure Hygrostat</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="row">
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="monarch" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/monarch.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Stroboscope, Tachometer <br> Vibration Measurement <br> Process Chart Recorder</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="Rishabh" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/rishabh.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Multifunction <br> Smart Demand Controller <br> Power Quality Analyzer</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="wharton" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/wharton.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Digital Clocks <br> Time Information Displays <br> for Professional Applications</p>
                                <hr>
                            </button>
                        </form>
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
