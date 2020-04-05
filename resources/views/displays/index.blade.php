@extends('layout/base')

@section('title', 'List Product')

@section('container')

@if(session('status'))
<div class="alert alert-success container text-center" role="alert">
    {{session('status')}}
</div>
@endif

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Product List</h1>
            </div>
            <div class="col-4">
                <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                    <select class="custom-select custom-select-md mt-3" name="category" id="">
                        <option value="transducer">Transducer</option>
                        <option value="powermeter">Power Meter</option>
                        <option value="digitalmeter">Digital Meter</option>
                        <option value="stroboscope">Stroboscope</option>
                    </select>
                    <button class="btn btn-outline-dark mt-3 ml-2" type="submit">Search</button>
                </form>
            </div>
            <div class="col-2">
                <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-3">
                    <button class="btn btn-outline-dark mt-3 ml-2" type="submit" value="">Show all</button>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            @foreach ($display as $display)
            <div class="col-lg-3 text-center ">
              <div class="card container border-info">
                <img src="{{$display->getPic()}}" width="100%" height="100%" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $display -> type }}</h5>
                  <hr>
                  <p class="card-text text-info batasdisplay">{{ $display -> description }}</p>
                  <a href="{{ url('/product')}}/{{ $display -> id }}" class="btn btn-info">Read more ...</a>
                </div>
              </div>
            </div>
            @endforeach
        </div>
      {{-- <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Product</h1>

            <form method="GET" action="/products" class="form-inline">
                <a href="{{url('/products/create')}}" class="btn btn-success my-2" style="display: none;">Add Products</a>
                <input name="cari" type="search" class="form-control ml-4 ml-auto">
                <button class="btn btn-outline-primary" type="submit">Cari</button>
            </form>

          <ul class="list-group">
              @foreach ($display as $display)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $display -> type }}
              <a href="{{ url('/product')}}/{{ $display->id }}" class="badge badge-info">Read more ...</a>
              </li>
              @endforeach
          </ul>
        </div>
      </div> --}}
    </div>
@endsection
