@extends('layout/base')

@section('title', 'List Contact')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Contact</h1>


          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Aksi</th>
                <th scope="col">Nama Depan</th>
                <th scope="col">Nama Belakang</th>
                <th scope="col">Email</th>
                <th scope="col">Company</th>
                {{-- <th scope="col">Telepon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kota</th>
                <th scope="col">Post Code</th>
                <th scope="col">Pesan</th> --}}
              </tr>
            </thead>
            <tbody>
              @foreach ($contact as $cont)
              <tr>
                <th scope="col">{{ $loop->iteration}}</th>
                <th scope="col">
                  <a href="" class="badge badge-success">Edit</a>
                  <a href="" class="badge badge-danger">Delete</a>
                </th>
                <th scope="col">{{ $cont->namadepan }}</th>
                <th scope="col">{{ $cont->namabelakang }}</th>
                <th scope="col">{{ $cont->email }}</th>
                <th scope="col">{{ $cont->company }}</th>
                {{-- <th scope="col">{{ $cont->telepon }}</th>
                <th scope="col">{{ $cont->alamat }}</th>
                <th scope="col">{{ $cont->kota }}</th>
                <th scope="col">{{ $cont->postcode }}</th>
                <th scope="col">{{ $cont->pesan }}</th> --}}
              </tr>
              @endforeach
            </tbody>
          </table>

          {{-- <ul class="list-group">
              @foreach ($contact as $cont)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $cont -> namadepan }}
                  <a href="" class="badge badge-info">Read more ...</a>
              </li>
              @endforeach
          </ul> --}}
        </div>
      </div>
    </div>
@endsection
