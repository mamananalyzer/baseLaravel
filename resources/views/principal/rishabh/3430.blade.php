@extends('layout/base')

@section('title', 'Rish Master 3430')

@section('container')

      <div class="row pt-4 offset-md-1 container" id="home">
        <div class="col-md-5 text-center">
          <div class="border-info">
            <img src="img/3430.png" width="100%" height="100%" class="card-img-top" alt="...">
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
                            <h2><i class="fas fa-chevron-circle-up fa-rotate-180" style="color:blue;"></i> High Performance Power and Energy Meter</h2>
                        </div>
                    </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <h2>Rish Master 3430</h2>
                        <hr>
                        <br>
                        <p>On site programmable PT/CT ratios, True RMS measurement, User selectable 3 phase 3W or 4W</p>
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
                                <li>Level 2 DNP3 and IEC61850 2nd Edition</li>
                                <li>User selectable PT Secondary</li>
                                <li>User selectable CT Secondary 5A/1A</li>
                                <li>User selectable 3 phase 3W or 4W</li>
                                <li>Onsite selection of Auto scroll / Fixed Screen</li>
                                <li>True RMS measurement</li>
                                <li>High brightness 3 line 4 digits LED display</li>
                                <li>Number of parameters measured: up to 48</li>
                                <li>Optional MODBUS (RS485) Output</li>
                                <li>Optional Pulse Output </li>
                                <li>Enclosure Protection for dust and water</li>
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
                    <a href="https://rishabh.co.in/uploads/product/Rish_Master_34301.pdf"><button type="button" class="btn btn-primary">Datasheet</button></a>
                    <a href="https://rishabh.co.in/uploads/product/Rish_Master_3430_Manual.pdf"><button type="button" class="btn btn-primary">User's Manual</button></a>
                </div>
            </div>
          </div>
        </div>
      <br>
@endsection
