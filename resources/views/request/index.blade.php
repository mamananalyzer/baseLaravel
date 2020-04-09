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
        <div class="col-9">
          <h1 class="mt-3">Product</h1>

            <form method="GET" action="{{ url('/products') }}" class="form-inline">
                <a href="{{url('/products/create')}}" class="btn btn-success my-2">Add Products</a>
                <a href="" class="ml-auto"><img src="{{ asset('assets/img/user.png')}}" width="44px" alt=""><span>{{ auth()->user()->name }}</span></a>
                <a href="{{ ('/logout') }}" class="btn btn-warning ml-2 mr-auto">Logout</a>
                <input name="cari" type="search" class="form-control ml-4 ml-auto mr-2">
                <button class="btn btn-outline-primary" type="submit">Cari</button>
            </form>
            <a href="{{url('/products/create')}}" class="btn btn-success my-2">Show Request Customer</a>




          <ul class="list-group">
              @foreach ($products as $product)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $product -> type }}
              <a href="products/{{ $product->id }}" class="badge badge-info">Read more ...</a>
              </li>
              @endforeach
          </ul>
        </div>
      </div>
    </div>
@endsection
