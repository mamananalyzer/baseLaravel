@extends('layout/base')

@section('title', 'About')

@section('container')

    <div class="" style="background-color: #F6F6F6;">
        <div class="row" id="notyet">

        </div>
        <div class="row">
            <div class="col-6">
                <img src="img/construction.png" alt="">
            </div>
            <div class="col-5 mt-5 pt-5 text-center">
                <h1>Website Under Construction</h1>
                <br>
                <br>
                <a href="{{ url('/') }}">
                    <h1 class="btn btn-info besar">Back to Homepage !</h1>
                </a>
            </div>
        </div>
        <div class="row" id="notyet">

        </div>
    </div>


@endsection
