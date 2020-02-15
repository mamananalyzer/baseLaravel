@extends('layout/base')

@section('title', 'About')

@section('container')

      <div class="row pt-4 offset-md-1 container" id="home">
        <div class="col-md-5 text-center">
          <div class="border-info">
            <img src="img/acuvimII.jpg" width="100%" height="100%" class="card-img-top" alt="...">
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
                            <h2>High Performance Power and Energy Meter</h2>
                        </div>
                    </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <h2>Acuvim II Series</h2>
                        <hr>
                        <br>
                        <p>Quality engineered energy submeters provides a simple robust solution for power monitoring, power quality analysis, kWh metering, system integration, controlling power distribution systems & other speciality applications.</p>              </div>
                    </div>
                </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                    <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="black">
                            <h3>New Feature Power Meter</h3>
                        </div>
                    </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <div class="card-body grey">
                            <ul class="font-weight-bold">
                                <li>Level 2 DNP3 and IEC61850 2nd Edition</li>
                                <li>MV90 Support</li>
                                <li>8GB Datalogging and event storage</li>
                                <li>COMtrade Waveform format</li>
                            </ul>
                            <ul>
                                <li>Four different models for different applications</li>
                                <li>Revenue grade ANSI C12.20 class 0.2 & IEC 62053-22 class 0.2s</li>
                                <li>Built-in MODBUS RTU via RS485 port</li>
                                <li>Plug-in modules for BACNET, Ethernet, Profibus & WiFi</li>
                                <li>Optional data logging, time-of-use and power quality monitoring</li>
                                <li>Choose panel mount meter with digital display or DIN rail mount transducer</li>
                                <li>Free Cloud Metering Data Storage + Analytics</li>
                                <li>5 year warranty guarantee</li>
                            </ul>
                            <hr>
                            <br>
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
                    <a href="doc/AcuRev 1310 Modbus Map.pdf"><button type="button" class="btn btn-primary">Datasheet</button></a>
                    <a href="doc/AcuRev 1310 Modbus Map.pdf"><button type="button" class="btn btn-primary">Software</button></a>
                    <a href="doc/AcuRev 1310 Modbus Map.pdf"><button type="button" class="btn btn-primary">User's Manual</button></a>
                    <a href="doc/AcuRev 1310 Modbus Map.pdf"><button type="button" class="btn btn-primary">Modbus Map</button></a>
                </div>
            </div>
          </div>
        </div>
      <br>
@endsection
