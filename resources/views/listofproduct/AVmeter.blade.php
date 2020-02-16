@extends('layout/base')

@section('title', 'AC ammeters and voltmeters')

@section('container')

      <div class="row pt-4 offset-md-1 container" id="home">
        <div class="col-md-5 text-center">
          <div class="border-info">
            <img src="img/analogrishabh.png" width="100%" height="100%" class="card-img-top" alt="...">
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
                            <h2>Moving Iron meter AC ammeters and voltmeters 90deg (EQ)</h2>
                        </div>
                    </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <h2>AC ammeters and voltmeters</h2>
                        <hr>
                        <br>
                        <p>All Rishabh meters are fitted with scales which slide in guide slots and there is a window which click-fits into the housing after the scale is fitted or removed. This is the only meter in India which offers this interchangeable scale feature. The advantage is that it reduces the inventory of the stockists, panel builders as well as end users. The basic meters are accurate to 1% and the variation scale to scale is less than 0.5% giving a total accuracy of 1.5% max. The guide slots are very accurately designed such that the pointer cannot be damaged even by the most unskilled user. At the same time the window is such that it closes automatically if left open inadvertently when the meter is fitted in the panel. Out of the four directions in which the dial can be inserted, there is only one correct position in which the dial can be inserted. The dial has a small slot by which it can be pulled out easily either using nail or a tip of a pen or clip.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                    <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="black">
                            <h3>New Feature Moving Iron meter</h3>
                        </div>
                    </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <div class="card-body grey">
                            <ul class="font-weight-bold">
                                <li>Polycarbonate housing having UL 94 V-0</li>
                                <li>Scale Interchangeability</li>
                                <li>Knife edge Pointer</li>
                                <li>Terminal screws and clamps</li>
                                <li>Terminal protection with click-fitting back cover</li>
                                <li>Mounting arrangement</li>
                                <li>Easy replacement of glass and bezel</li>
                                <li>IP-52 Protection</li>
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
                    <a href="https://rishabh.co.in/uploads/product/EQ1.pdf"><button type="button" class="btn btn-primary">Datasheet</button></a>
                    <a href="https://rishabh.co.in/uploads/product/Instruction_Manual_Analogue_Panel_Meters_type_EQ.pdf"><button type="button" class="btn btn-primary">User's Manual</button></a>
                </div>
            </div>
          </div>
        </div>
      <br>
@endsection
