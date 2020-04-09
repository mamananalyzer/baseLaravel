@extends('layout/base')

@section('title', 'Amptron Instrumindo')

@section('container')

{{--  --}}
<?php
dd($cartItem->all());
?>
@foreach ($cartItem as $cart)
    <div class="row">
        <div class="col-6 form-group">
            <label for="brand">Brand *</label>
            <input type="brand" name="brand" class="form-control" id="brand" aria-describedby="emailHelp" value="{{ $cart->name }}" required>
        </div>
        <div class="col-6 form-group">
            <label for="quantity">Quantity *</label>
            <input type="quantity" name="quantity" class="form-control" id="quantity" aria-describedby="emailHelp" value="{{ $cart->qty }}" required>
        </div>
    </div>
@endforeach

@endsection
