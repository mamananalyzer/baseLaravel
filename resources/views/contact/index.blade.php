@extends('layout/base')

@section('title', 'List Contact')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Contact</h1>
        </div>
        <div class="col-6">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success mt-4 float-right" data-toggle="modal" data-target="#exampleModalLong">
            Request a Quote
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Request a Quote</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container">
                      <form action="#" onsubmit="if(document.getElementById('agree').checked) { return true; } 
                      else { 
                          alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); 
                          return false; 
                      }">
                          <label for="exampleInputName">Name *</label>
                          <div class="form-row">
                              <div class="col">
                              <input type="text" class="form-control" placeholder="First name" name="name" required>
                              </div>
                              <div class="col">
                              <input type="text" class="form-control" placeholder="Last name" name="name" required>
                              </div>
                          </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Email *</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="row">
                          <div class="col-7 form-group">
                              <label for="Company">Company *</label>
                              <input type="company" class="form-control" id="Company" placeholder="PT. Amptron Instrumindo" required> 
                          </div>
                          <div class="col-5 form-group">
                              <label for="PhoneNumber">Phone *</label>
                              <input type="tel" name="phone" class="form-control" id="PhoneNumber" placeholder="+62 000" required>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col form-group">
                              <label for="Street and Number">Street and Number *</label>
                              <input type="Street and Number" name="Address1" class="form-control" id="Street and Number" placeholder="Address" required> 
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-7 form-group">
                              <label for="City">City *</label>
                              <input type="city" name="city" class="form-control" id="City" placeholder="City" required>
                          </div>
                          <div class="col-5 form-group">
                              <label for="Post Code">Post Code *</label>
                              <input type="postcode" name="postcode" class="form-control" id="Post Code" placeholder="Post Code" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">Your Message *</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" required></textarea>
                      </div>
                      <div class="row">
                        <div class="col-1">
                          <input type="checkbox" name="checkbox" value="check" id="agree" />
                        </div>
                        <div class="col">
                          <label for="agree">I have read and agree to the Terms and Conditions and Privacy Policy</label>
                        </div>
                      </div>
                      <br>
                      <br>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" type="submit" name="submit" value="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      <div class="row">
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Aksi</th>
                <th scope="col">Nama Depan</th>
                {{-- <th scope="col">Nama Belakang</th> --}}
                <th scope="col">Email</th>
                <th scope="col">Company</th>
                <th scope="col">Telepon</th>
                <th scope="col">Alamat</th>
                {{-- <th scope="col">Kota</th>
                <th scope="col">Post Code</th> --}}
                <th scope="col">Pesan</th>
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
                {{-- <th scope="col">{{ $cont->namabelakang }}</th> --}}
                <th scope="col">{{ $cont->email }}</th>
                <th scope="col">{{ $cont->company }}</th>
                <th scope="col">{{ $cont->telepon }}</th>
                <th scope="col">{{ $cont->alamat }}</th>
                {{-- <th scope="col">{{ $cont->kota }}</th>
                <th scope="col">{{ $cont->postcode }}</th> --}}
                <th scope="col">{{ $cont->pesan }}</th>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
          

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
@endsection
