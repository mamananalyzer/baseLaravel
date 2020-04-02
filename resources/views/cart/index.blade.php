@extends('layout/base')

@section('title', 'Amptron Instrumindo')

@section('container')

    <h3>Cart Items</h3>
    {{-- <ol>
        @foreach ($cartItems as $cartItem)
            <li>{{ $cartitem->brand }}</li>
        @endforeach
    </ol> --}}

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Size</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $cartItem)
                <tr>
                    <td>{{ $cartItem->name }}</td>
                    <td width="50px">
                        {!! Form::open(['route' => ['cart.update', $cartItem->rowId], 'method' => 'PUT']) !!}
                            <input name="qty" type="text" value="{{$cartItem->qty}}">
                            <input type="submit" class="btn btn-primary" value="OK">
                        {!! Form::close() !!}
                    </td>
                    <td>--</td>
                    <td>{{ $cartItem->name }}</td>
                </tr>
            @endforeach

                <tr>
                    <td></td>
                    <td>Item(s) : {{ Cart::count() }}</td>
                    <td>--</td>
                </tr>
        </tbody>
    </table>

    <a href="" class="button">Checkout</a>
@endsection
