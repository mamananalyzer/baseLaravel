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
          <h1 class="mt-3">Product</h1>

            {{-- <form method="GET" action="/products" class="form-inline">
                <a href="{{url('/products/create')}}" class="btn btn-success my-2" style="display: none;">Add Products</a>
                <input name="cari" type="search" class="form-control ml-4 ml-auto">
                <button class="btn btn-outline-primary" type="submit">Cari</button>
            </form> --}}

          <ul class="list-group">
              @foreach ($display as $display)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $display -> type }}
              <a href="product/{{ $display->id }}" class="badge badge-info">Read more ...</a>
              </li>
              @endforeach
          </ul>
        </div>
      </div>
    </div>
@endsection
