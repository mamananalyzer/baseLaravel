@extends('layout/base')

@section('title', 'Rishabh')

@section('container')
    <div class="container mt-3">
      <div class="row">
        <div class="col-lg-3 text-center">
            <div class="card container border-info">
              <img src="img/analogrishabh.png" width="100%" height="100%" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Ammeters and Voltmeters</h5>
                <hr>
                <p class="card-text text-info">Moving Coil meter AC ammeters and voltmeters with rectifier 90deg.</p>
                <a href="{{ url('/AVmeter') }}" class="btn btn-info">Read more ...</a>
              </div>
            </div>
          </div>
        <div class="col-lg-3 text-center">
          <div class="card container border-info">
            <img src="img/3430.png" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Rish Master
                  <br> 3430</h5>
              <hr>
              <p class="card-text text-info">On site programmable PT/CT ratios,
                <br> True RMS measurement,
                <br> User selectable 3 phase 3W or 4W</p>
              <a href="{{ url('/3430') }}" class="btn btn-info">Read more ...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card container border-info">
            <img src="img/risheineplus.png" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Rish Eine+</h5>
              <hr>
              <p class="card-text text-info">specially designed to measure electrical parameters like DC Voltage or DC Current and display it in any parameter or process value.</p>
              <a href="{{ url('/risheineplus') }}" class="btn btn-info">Read more ...</a>
            </div>
          </div>
        </div>
      </div>
      <br>
    </div>
@endsection
