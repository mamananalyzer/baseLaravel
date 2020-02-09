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
            <a class="nav-link page-scroll" href="#about"><h3>Tentang Kami</h3></a>
            </li>
            <li class="nav-item pr-5">
            <a class="nav-link page-scroll" href="#partner"><h3>Partner Kami</h3></a>
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
      <div class="row pt-4" id="about">
        <div class="col-md-5 text-center">
          <div class="container border-info pKiri">
            <img src="img/aiisepfamily.jpg" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Amptron & Suryamas Family</h5>
              <hr>
              <p class="card-text grey">Fasilitas kami terletak di area seluas 900 m2 dimana diantaranya seluas 320 m2 adalah untuk kantor operasional, dan selebihnya untuk ruang laboratorium, gudang, dan workshop.</p>
            </div>
          </div>
        </div>

        <div class="accordion col-md-7 pKanan" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="gold">
                        <h6>TENTANG KAMI</h6>
                    </div>
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body grey">
                    PT. Amptron Instrumindo adalah perusahaan Sole Agent dari produk-produk berkualitas dengan total pengetahuan dan pengalaman lebih dari 20 tahun di bidang Electrical. Kami menjual peralatan kebutuhan project, serta memberikan jasa engineering. Spesialisasi kami adalah menganalisa kebutuhan dan memberi solusi dengan produk-produk untuk Electrical Project.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="gold">
                        <h6>VISI DAN MISI</h6>
                    </div>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body grey">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>


      </div>
      <br>
      <div class="row portfolio" id="partner">
        <div class="col-md text-center thumbnail">
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
        <div class="col-md text-center thumbnail">
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
        <div class="col-md text-center thumbnail">
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
        <div class="col-md text-center thumbnail">
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
