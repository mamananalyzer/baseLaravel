@extends('layout/base')

@section('title', 'Amptron Instrumindo')
    
@section('container')
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
      {{-- <div class="row">
        <div class="col text-center">
          <h1></h1>
        </div>
      </div>
      <br> --}}
      <div class="row">
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
      <div class="row">
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