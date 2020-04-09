@extends('layout/base')

@section('title', 'Amptron Instrumindo')

@section('container')

    <div class="container">
        <h3>Cart Items</h3>
        {{-- <li class="dropdown">
            <a href="#" class="nav-item nav-link pr-4" data-toggle="dropdown"><img width="30" src="{{asset('assets/img/user.png')}}" class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
            </ul>
        </li> --}}
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

        <button type="button" class="btn btn-success text-light mt-4" data-toggle="modal" data-target="#exampleModalScrollable">
            Checkout!
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Checkout!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action=" {{ url('test') }}" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; }
                        else {
                            alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
                            return false;
                        }">
                        {{ csrf_field() }}
                            <label for="exampleInputName">Name *</label>
                            <div class="form-row">
                                <div class="col">
                                <input type="text" class="form-control" placeholder="First name" name="name" required>
                                </div>
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Last name" name="name2" required>
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email *</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <label for="Company">Company *</label>
                                <input type="company" name="company" class="form-control" id="Company" placeholder="PT. Amptron Instrumindo" required>
                            </div>
                            <div class="col-6 form-group">
                                <label for="PhoneNumber">Phone *</label>
                                <input type="tel" name="phone" class="form-control" id="PhoneNumber" placeholder="+62 000" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <label for="Street and Number">Street and Number *</label>
                                <input type="Street and Number" name="Address1" class="form-control" id="Street and Number" placeholder="Address" required>
                            </div>
                            <div class="col-3 form-group">
                                <label for="City">City *</label>
                                <input type="city" name="city" class="form-control" id="City" placeholder="City" required>
                            </div>
                            <div class="col-3 form-group">
                                <label for="Post Code">Post Code *</label>
                                <input type="postcode" name="postcode" class="form-control" id="Post Code" placeholder="Post Code" required>
                            </div>
                        </div>
                        @foreach ($cartItems as $cartItem)
                        <div class="row">
                            <div class="col-6 form-group">
                                <label for="brand">Brand *</label>
                                <input type="brand" name="brand" class="form-control" id="brand" aria-describedby="emailHelp" value="{{ $cartItem->name }}" required>
                            </div>
                            <div class="col-6 form-group">
                                <label for="quantity">Quantity *</label>
                                <input type="quantity" name="quantity" class="form-control" id="quantity" aria-describedby="emailHelp" value="{{ $cartItem->qty }}" required>
                            </div>
                        </div>
                        @endforeach
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Message *</label>
                            <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="4" required></textarea>
                        </div>
                        <input type="checkbox" name="checkbox" value="check" id="agree" />
                        <label for="agree">I have checked that the item type and quantity are correct</label>
                        <br>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input class="btn btn-success" type="submit" name="submit" value="Send" />
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
