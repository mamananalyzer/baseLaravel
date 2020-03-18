@extends('layout/base')

@section('title', 'About')

@section('container')


    <div class="container mt-5">
        <h5>Contact Our Team</h5>
        <h3>Here you can send us an inquiry concerning general questions about Amptron.</h3>
        <br>
        <h6>* Required</h6>
        <hr>
    </div>
    <div class="container">
        <form action=" {{ url('email/send') }}" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; }
        else {
            alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
            return false;
        }">
        {{ csrf_field() }}
        <label for="Produk">Product *</label>
            <select class="form-control col-3" id="Produk" onchange="produk(this);">
                <option value="" selected='selected'>-- choose the product --</option>
                <option value="Power Meter">Power Meter</option>
                <option value="Digital Meter">Digital Meter</option>
                <option value="Analog Meter">Analog Meter</option>
                <option value="Transducer">Transducer</option>
                <option value="AMR">Automatic Meter Reading</option>
            </select>


        <div class="form-group" id="ifYes" style="display: none;">
            <label for="exampleInputEmail1">Power Supply *</label>
            <select class="form-control col-3" id="Produk" onchange="ps(this);">
                <option value="P1">110-230VDC / 110-230VAC (P1)</option>
                <option value="P2">24-48VDC (P2)</option>
            </select>
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
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Your Message *</label>
            <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="4" required></textarea>
        </div>
        <input type="checkbox" name="checkbox" value="check" id="agree" />
        <label for="agree">I have read and agree to the Terms and Conditions and Privacy Policy</label>
        <br>
        <br>
        <input class="btn btn-success" type="submit" name="submit" value="Kirim" />
        </form>
    </div>

@endsection


{{--  --}}
