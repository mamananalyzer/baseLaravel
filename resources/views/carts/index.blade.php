@extends('layout/base')

@section('title', 'Amptron Instrumindo')

@section('container')

@if(session('status'))
<div class="alert alert-success container text-center" role="alert">
    {{session('status')}}
</div>
@endif

    <div class="container">
      <div class="row">
        <div class="col-9">
          <h1 class="mt-3">Request Customer</h1>

            <form method="GET" action="{{ url('/carts') }}" class="form-inline">
                <a href="" class="ml-auto"><img src="{{ asset('assets/img/user.png')}}" width="44px" alt=""><span>{{ auth()->user()->name }}</span></a>
                <a href="{{ ('/logout') }}" class="btn btn-warning ml-2 mr-auto">Logout</a>
            </form>




            <ul class="list-group">
                @if(auth()->user()->email == 'amptron@cbn.net.id')
                @foreach ($carts as $cart)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $cart -> name }}, {{ $cart -> email }}, {{ $cart -> company }}
                    <a href="carts/{{ $cart->id }}" class="badge badge-info ml-auto mr-4"></i>Read more ...</a>
                    <form action="/carts/{{ $cart->id }}" method="post" class="d-inline">
                        @method('delete')
                        {{ csrf_field() }}
                        <button type="submit" onclick="return confirm('Are you sure delete this request ?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                    </form>
                    <div class="form-group">
                        <label for="picture">Picture *</label>
                        <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture" placeholder="picture" name="picture" value="{{ old('picture')}}">
                    </div>
                    @if( $cart->status =='waiting')
                        <form action="/carts/{{ $cart->id }}" method="post" class="d-inline">
                            @method('patch')
                            {{ csrf_field() }}
                            <button type="submit" onclick="return confirm('Are you sure Approve this request ?')" class="btn btn-warning ml-2" value="confirm" name="status"><i class="fa fa-approve"></i>Approve</button>
                        </form>
                    @elseif( $cart->status =='confirm')
                        <button type="submit" class="btn btn-success ml-2"><i class="fa fa-approve"></i>Confirmed</button>
                    @else
                        <button class="btn btn-danger ml-2">Mencurigakan</button>
                    @endif
                </li>
                @endforeach
                @endif
            </ul>
            <a href="{{url('/products')}}" class="btn btn-light my-2">Back</a>
        </div>
      </div>
    </div>
@endsection
