@extends('layout/base')

@section('title', 'Nova-Pro™ 300 LED Stroboscopes/Tachometers')

@section('container')

      <div class="row pt-4 offset-md-1 container" id="home">
        <div class="col-md-5 text-center">
          <div class="border-info">
            <img src="img/stroboscope.png" width="100%" height="100%" class="card-img-top" alt="...">
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
                            <h2><i class="fas fa-chevron-circle-up fa-rotate-180" style="color:blue;"></i> Stroboscopes/ Tachometers</h2>
                        </div>
                    </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <h2>Nova-Pro™ 300 LED Stroboscopes/Tachometers</h2>
                        <hr>
                        <br>
                        <p>Nova-Pro™ is a series of powerful portable visual inspection and speed measurement tools.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                    <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="black">
                            <h3><i class="fas fa-chevron-circle-up fa-rotate-180" style="color:blue;"></i> New Feature Stroboscopes/Tachometers</h3>
                        </div>
                    </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <div class="card-body grey">
                            <ul class="font-weight-bold">
                                <li>Stroboscope & Tachometer in one!</li>
                                <li>Super bright LED's</li>
                                <li>Ergonomic one handed operation</li>
                                <li>Removable rechargeable Li-ion battery</li>
                            </ul>
                            <ul>
                                <li>Extremely bright, uniform light output</li>
                                <li>Completely silent</li>
                                <li>Cool operation</li>
                                <li>for Print quality inspection</li>
                                <li>for Textile processing inspection</li>
                            </ul>
                            <hr>
                            <br>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-body grey">
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
                </div> --}}
            </div>
          </div>
        </div>
      <br>
@endsection
