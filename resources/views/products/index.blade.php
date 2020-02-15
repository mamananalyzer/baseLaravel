@extends('layout/base')

@section('title', 'List Product')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Product</h1>


          <ul class="list-group">
              @foreach ($products as $product)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $product -> brand }}
                  <a href="" class="badge badge-info">Read more ...</a>
              </li>
              @endforeach
          </ul>
        </div>
      </div>
    </div>
@endsection
