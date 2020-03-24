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

            <form method="GET" action="/products" class="form-inline">
                <a href="{{url('/products/create')}}" class="btn btn-success my-2">Add Products</a>
                <input name="cari" type="search" class="form-control ml-4 ml-auto">
                <button class="btn btn-outline-primary" type="submit">Cari</button>
                <a href="#" class="nav-item nav-link pr-4 offset-md-8" data-toggle="dropdown"><img width="30" src="{{asset('assets/img/user.png')}}" class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                <div class="dropdown-menu">
                    <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                    <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                    <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                    <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                </div>
            </form>

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
