@extends('layout/base')

@section('title', 'List Product')

@section('container')

@if(session('dataadded'))
<div class="alert alert-success container text-center" role="alert">
    {{session('dataadded')}}
</div>
@endif

    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Product</h1>

            <a href="{{url('/products/create')}}" class="btn btn-success my-2">Add Products</a>

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
