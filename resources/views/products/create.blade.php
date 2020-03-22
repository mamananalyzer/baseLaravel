@extends('layout/base')

@section('title', 'Add Product')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h1 class="mt-3">Form Add Product</h1>
            <form action=" {{ url('/products') }}" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; }
            else {
                alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
                return false;
            }">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="brand">Brand *</label>
                <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" placeholder="Brand" name="brand">
                @error('brand')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Type *</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Type" name="type">
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="code">Code *</label>
                <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" placeholder="Code" name="code">
                @error('code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="purchaseorder">Purchase Order *</label>
                <input type="text" class="form-control @error('purchaseorder') is-invalid @enderror" id="purchaseorder" placeholder="Purchase Order" name="purchaseorder">
                @error('purchaseorder')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="serialnumber">Serial Number *</label>
                <input type="text" class="form-control @error('serialnumber') is-invalid @enderror" id="serialnumber" placeholder="Serial Number" name="serialnumber">
                @error('serialnumber')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="spec">Spec *</label>
                <input type="text" class="form-control @error('spec') is-invalid @enderror" id="spec" placeholder="Spec" name="spec">
                @error('spec')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="customer">Customer *</label>
                <input type="text" class="form-control @error('customer') is-invalid @enderror" id="customer" placeholder="Customer" name="customer">
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
            <input class="btn btn-success" type="submit" name="submit" value="Kirim" />
            </form>
        </div>
      </div>
    </div>
@endsection
