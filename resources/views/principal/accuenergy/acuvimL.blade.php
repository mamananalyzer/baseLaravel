@extends('layout/base')

@section('title', 'Acuvim L Series')

@section('container')

    <div class="row pt-4 offset-md-1 container" id="home">
        <div class="col-md-5 text-center">
            <div class="border-info">
                <img src="img/acuvimL.webp" width="100%" height="100%" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"></h5>
                <hr>
                </div>
            </div>
        </div>

        <div class="accordion col-md-6" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                    <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="black">
                            <h2><i class="fas fa-chevron-circle-up fa-rotate-180" style="color:blue;"></i> Power And Energy Panel Meters</h2>
                        </div>
                    </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <h2>Acuvim L Series</h2>
                        <hr>
                        <br>
                        <p>This three phase energy meter is ideal for applications that require standard parameters for monitoring and controlling power distribution systems, medium to low voltage systems, industrial automation and commercial facilities. Acuvim L power meters comes with a choice of a built-in communication Modbus RTU, pulse output or none for panel meters.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                    <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="black">
                            <h3><i class="fas fa-chevron-circle-up fa-rotate-180" style="color:blue;"></i> New Feature Power Meter</h3>
                        </div>
                    </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <div class="card-body grey">
                            <ul>
                                <li>Six different models for different applications</li>
                                <li>NEMA 4 rated tough and watertight design</li>
                                <li>3-Line LCD display with backlight</li>
                                <li>Multiple current transformer options</li>
                                <li>Class leading 5 year warranty</li>
                                <li>Built-in MODBUS RTU (some models)</li>
                                <li>Optional digital/analog I/O or PROFIBUS (some models)</li>
                                <li>Optional DIN rail mount transducer (some models)</li>
                            </ul>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="card-body grey">
                    <div class="row">
                        <div class="col-1">
                            <object data="img/download.svg" type="img/download.svg">
                                <img src="img/download.svg"/>
                            </object>
                        </div>
                        <div class="col-4">
                            <h6>Downloads :</h6>
                        </div>
                    </div>
                    <a href="https://www.accuenergy.com/wp-content/uploads/Acuvim-L-Power-Meter-Brochure-1030E1210.pdf"><button type="button" class="btn btn-primary">Datasheet</button></a>
                    <a href="https://www.accuenergy.com/wp-content/uploads/Acuvim-L-Panel-Submeter-Power-Energy-Meter-User-Manual1030E2202.pdf"><button type="button" class="btn btn-primary">Software</button></a>
                    <a href="https://www.accuenergy.com/wp-content/uploads/Acuview-Free-Energy-Management-datalogging-Software.zip"><button type="button" class="btn btn-primary">User's Manual</button></a>
                    <a href="https://www.accuenergy.com/support/acuvim-l-modbus-map/"><button type="button" class="btn btn-primary">Modbus Map</button></a>
                </div>
            </div>
          </div>
        </div>
      <br>
@endsection
