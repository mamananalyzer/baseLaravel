@extends('layout/base')

@section('title', 'A2000')

@section('container')

      <div class="row pt-4 offset-md-1 container" id="home">
        <div class="col-md-5 text-center">
          <div class="border-info">
            <img src="img/a2000.webp" width="100%" height="100%" class="card-img-top" alt="...">
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
                            <h2><i class="fas fa-chevron-circle-up fa-rotate-180" style="color:blue;"></i> Multifunctional Power Meter for 3-Phase Systems</h2>
                        </div>
                    </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <h2>A2000</h2>
                        <hr>
                        <br>
                        <p>The A2000 multifunctional power meter measures all values for three-phase systems.</p>
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
                            <ul class="font-weight-bold">
                                <li>2 Analog inputs for standard signal or Pt1000 sensors e.g. for temperature measurements at transformators</li>
                                <li>RS 232 and RS 485 interfaces included</li>
                                <li>Adjustable voltage and current transformer ratios</li>
                                <li>A single device for 1 A and 5 A current transformers</li>
                                <li>Limit value and analog outputs included as standard equipment</li>
                                <li>2 pulse outputs for read-out of active and reactive energy</li>
                                <li>Data memory for continuous recording of measurement values or for events recording - 8 years puffered</li>
                                <li>Additional range of power supply 20 .. 27 VAC / 45 .. 450 Hz and 20 .. 36 VDC</li>
                                <li>Made in Germany</li>
                                <li>3 Years Warranty</li>
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
                    <a href="https://www.gmc-instruments.de/media/gb/a2000-db_gb.pdf"><button type="button" class="btn btn-primary">Datasheet</button></a>
                    <a href="https://www.gmc-instruments.de/media/gb/product_manual/a2000-ba_gb.pdf"><button type="button" class="btn btn-primary">User's Manual</button></a>
                    <a href="https://www.gmc-instruments.de/media/gb/a2000-sb_modbus1_gb.pdf"><button type="button" class="btn btn-primary">Modbus Map</button></a>
                </div>
            </div>
          </div>
        </div>
      <br>
@endsection
