{{-- @extends('layout/base')

@section('title', 'List Product')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Edit Product</h1>

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">{{$product->brand}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$product->type}}</h6>
                <img src="{{$product->getPic()}}" class="img-circle" width="300">
                <p class="card-text">{{$product->purchaseorder}}</p>
                <p class="card-text">{{$product->serialnumber}}</p>
                <p class="card-text">{{$product->spec}}</p>
                <p class="card-text">{{$product->customer}}</p>

                <a href="{{ $product->id }}/edit" class="btn btn-primary">Edit</a>
                <form action="/products/{{ $product->id }}" method="post" class="d-inline">
                    @method('delete')
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{url('/products')}}" class="card-link ml-2">Back</a>
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection --}}

@extends('layout/base')

@section('title', "$display->brand")

@section('container')

      <div class="row pt-4 offset-md-1 container" id="home">
        <div class="col-md-5 text-center">
          <div class="border-info">
            <img src="{{$display->getPic()}}" width="100%" height="100%" class="card-img-top" alt="...">
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
                            <h2><i class="fas fa-chevron-circle-up fa-rotate-180" style="color:blue;"></i>{{$display->brand}}</h2>
                        </div>
                    </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <h2>{{$display->type}}</h2>
                        <hr>
                        <br>
                        <p>{{$display->purchaseorder}}</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                    <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="black">
                            <h3><i class="fas fa-chevron-circle-up fa-rotate-180" style="color:blue;"></i>{{$display->serialnumber}}</h3>
                        </div>
                    </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body grey">
                        <div class="card-body grey">
                            <ul class="font-weight-bold">
                                <li>{{$display->spec}}</li>
                                <li>MV90 Support</li>
                                <li>8GB Datalogging and event storage</li>
                                <li>COMtrade Waveform format</li>
                            </ul>

                            <hr>
                        </div>
                    </div>
                </div>
                <div class="card-body grey">
                    <div class="row">
                        <div class="col-1">
                            <object data="{{asset('img/download.svg')}}" type="{{asset('img/download.svg')}}">
                                <img src="{{asset('img/download.svg')}}"/>
                            </object>
                        </div>
                        <div class="col-4">
                            <h6>Downloads :</h6>
                        </div>
                    </div>
                    <a href="https://www.accuenergy.com/wp-content/uploads/Acuvim-II-Multifunction-Power-Energy-Meter-Brochure-Datasheet.pdf"><button type="button" class="btn btn-primary">{{$display->customer}}</button></a>
                    <a href="https://www.accuenergy.com/wp-content/uploads/Acuview-Free-Energy-Management-datalogging-Software.zip"><button type="button" class="btn btn-primary">Software</button></a>
                    <a href="https://www.accuenergy.com/wp-content/uploads/Acuvim-II-Power-Meter-User-Manual-1040E1303.pdf"><button type="button" class="btn btn-primary">User's Manual</button></a>
                    <a href="https://www.accuenergy.com/support/acuvim-ii-modbus-map/"><button type="button" class="btn btn-primary">Modbus Map</button></a>
                </div>
            </div>
          </div>
        </div>
      <br>
@endsection
