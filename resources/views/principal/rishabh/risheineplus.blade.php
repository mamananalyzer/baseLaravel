@extends('layout/base')

@section('title', 'Rish Eine+')

@section('container')

      <div class="row pt-4 offset-md-1 container" id="home">
        <div class="col-md-5 text-center">
          <div class="border-info">
            <img src="img/risheineplus.webp" width="100%" height="100%" class="card-img-top" alt="...">
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
                            <h2><i class="fas fa-chevron-circle-up fa-rotate-180" style="color:blue;"></i> Rescalable Display Range DC Meter</h2>
                        </div>
                    </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <h2>Rish Eine+</h2>
                        <hr>
                        <br>
                        <p>The meter supports bent characteristics. Hence user can configure the meter as per requirement.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                    <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="black">
                            <h3><i class="fas fa-chevron-circle-up fa-rotate-180" style="color:blue;"></i> New Feature DC Meter</h3>
                        </div>
                    </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <div class="card-body grey">
                            <ul class="font-weight-bold">
                                <li>Low Back Depth</li>
                                <li>Rescalable Display range</li>
                                <li>Function keys</li>
                                <li>Bent Characteristics</li>
                            </ul>
                            <ul>
                                <li>Power Factor Display</li>
                                <li>Ambient Temperature Indication</li>
                                <li>Wide Input Range</li>
                                <li>Compliance to International Safety standards</li>
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
                    <a href="https://rishabh.co.in/uploads/product/Datasheet_Eine+_48x96_96x96_Rev_I.pdf"><button type="button" class="btn btn-primary">Datasheet</button></a>
                    <a href="https://rishabh.co.in/uploads/product/Rish_Eine_+1.pdf"><button type="button" class="btn btn-primary">User's Manual</button></a>
                </div>
            </div>
          </div>
        </div>
      <br>
@endsection
