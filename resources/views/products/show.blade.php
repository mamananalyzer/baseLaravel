@extends('layout/base')

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
@endsection
