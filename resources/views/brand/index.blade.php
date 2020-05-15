@extends('layout/base')

@section('title', 'List Brand')

@section('container')

@if(session('status'))
<div class="alert alert-success container text-center" role="alert">
    {{session('status')}}
</div>
@endif

    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="row">
                    <div class="col-10">
                        <h1 class="mt-3">Brands</h1>
                    </div>
                    <div class="col">
                        <a href="{{url('/brand/create')}}" class="btn btn-success mt-4">Add Brand</a>
                    </div>
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Display Brand</th>
                            <th>Value Brand</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td>
                                    {{ $brand -> display_brand }}
                                </td>
                                <td>
                                    {{ $brand -> brand }}
                                </td>
                                <td>
                                    <a href="/brand/{{ $brand->id }}/edit"><i class="fa fa-edit"></i> Edit | </a>
                                    <form action="{{url('/brand')}}/{{ $brand->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        {{ csrf_field() }}
                                        <button type="submit" onclick="return confirm('Are you sure delete this category ?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <a href="{{ url('/products') }}" class="btn btn-secondary ml-4 mb-4">Back</a>
        </div>
    </div>
@endsection
