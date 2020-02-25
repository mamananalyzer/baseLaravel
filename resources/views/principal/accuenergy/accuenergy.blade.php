@extends('layout/base')

@section('title', 'Accuenergy')

@section('container')
    <div class="container mt-3">
      <div class="row">
        <div class="col-lg-3 text-center">
          <div class="card container border-info">
            <img src="img/acuvimII.webp" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Acuvim II Series</h5>
              <hr>
              <p class="card-text text-info">Simple robust solution for power monitoring, power quality analysis & system integration.</p>
              <a href="{{ url('/acuvim') }}" class="btn btn-info">Read more ...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card container border-info">
            <img src="img/acuvimL.webp" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Acuvim L Series</h5>
              <hr>
              <p class="card-text text-info">Ideal 3 phase energy meter for standard parameters & controlling power distribution systems.</p>
              <a href="{{ url('/acuvimL') }}" class="btn btn-info">Read more ...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card container border-info">
            <img src="img/aculink810.webp" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Aculink 810</h5>
              <hr>
              <p class="card-text text-info">Accuenergy’s AcuLink 810 is a data acquisition server and gateway.</p>
              <a href="{{ url('/aculink810') }}" class="btn btn-info">Read more ...</a>
            </div>
          </div>
        </div>
      </div>
      <br>
    </div>
@endsection
