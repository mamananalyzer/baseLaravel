@extends('layout/base')

@section('title', 'List Product')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mt-3">Product</h1>



          {{-- <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col-3">Aksi</th>
                <th scope="col">Brand</th>
                <th scope="col">Type</th>
                <th scope="col">Code</th>
                <th scope="col">Purchase Order</th>
                <th scope="col">Serial Number</th>
                <th scope="col">Spec</th>
                <th scope="col">Customer</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($barang as $brg)
              <tr>
                <th scope="col">{{ $loop->iteration}}</th>
                <th scope="col-3">
                  <a href="" class="badge badge-success">Edit</a>
                  <a href="" class="badge badge-danger">Delete</a>
                </th>
                <th scope="col">{{ $brg->brand }}</th>
                <th scope="col">{{ $brg->type }}</th>
                <th scope="col">{{ $brg->code }}</th>
                <th scope="col">{{ $brg->purchaseorder }}</th>
                <th scope="col">{{ $brg->serialnumber }}</th>
                <th scope="col">{{ $brg->spec }}</th>
                <th scope="col">{{ $brg->customer }}</th>

              </tr>
              @endforeach
            </tbody>
          </table> --}}
        </div>
      </div>
    </div>
@endsection
