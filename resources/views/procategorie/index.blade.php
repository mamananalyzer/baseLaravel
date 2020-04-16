@extends('layout/base')

@section('title', 'List Product')

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
                    <h1 class="mt-3">Categories</h1>
                </div>
                <div class="col">
                    <a href="{{url('/procategorie/create')}}" class="btn btn-success mt-4">Add Category</a>
                </div>
            </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Display Category</th>
                            <th>Value Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $categorie)
                            <tr>
                                <td>
                                    {{ $categorie -> display_kategori }}
                                </td>
                                <td>
                                    {{ $categorie -> kategori }}
                                </td>
                                <td>
                                    <a href="/procategorie/{{ $categorie->id }}/edit"><i class="fa fa-edit"></i> Edit | </a>
                                    <form action="/procategorie/{{ $categorie->id }}" method="post" class="d-inline">
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
    </div>
@endsection
