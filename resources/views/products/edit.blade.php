@extends('layout/base')

@section('title', 'Edit Product')

@section('container')

    {{-- date_default_timezone_set('Asia/Jakarta');
    echo 'Indonesian Timezone: ' . date('d-m-Y H:i:s'); --}}

    <div class="container">
      <div class="row">
        <div class="col-8">
          <h1 class="mt-3">Form Edit Product</h1>
            <form action="/products/{{ $product->id }}" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; }
            else {
                alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
                return false;
            }">
            @method('patch')
            {{ csrf_field() }}
            <div class="form-group">
                <label for="brand">Brand *</label>
                <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" placeholder="Brand" name="brand" value="{{ $product->brand }}">
                @error('brand')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Type *</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Type" name="type" value="{{ $product->type }}">
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="code">Code *</label>
                <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" placeholder="Code" name="code" value="{{ $product->code }}">
                @error('code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="purchaseorder">Purchase Order *</label>
                <input type="text" class="form-control @error('purchaseorder') is-invalid @enderror" id="purchaseorder" placeholder="Purchase Order" name="purchaseorder" value="{{ $product->purchaseorder }}">
                @error('purchaseorder')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="serialnumber">Serial Number *</label>
                <input type="text" class="form-control @error('serialnumber') is-invalid @enderror" id="serialnumber" placeholder="Serial Number" name="serialnumber" value="{{ $product->serialnumber }}">
                @error('serialnumber')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="spec">Spec *</label>
                <input type="text" class="form-control @error('spec') is-invalid @enderror" id="spec" placeholder="Spec" name="spec" value="{{ $product->spec }}">
                @error('spec')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="customer">Customer *</label>
                <input type="text" class="form-control @error('customer') is-invalid @enderror" id="customer" placeholder="Customer" name="customer" value="{{ $product->customer }}">
                @error('customer')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <input type="checkbox" name="checkbox" value="check" id="agree" />
            <label for="agree">I have read and agree to the Terms and Conditions and Privacy Policy</label>
            <br>
            <br>
            <input class="btn btn-success" type="submit" name="submit" value="Edit Data" />
            <a href="{{url('/products')}}" class="card-link ml-2">Back</a>
            </form>
        </div>
      </div>
    </div>
@endsection
