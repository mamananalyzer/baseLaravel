@extends('layout/base')

@section('title', 'About')

@section('container')
    {{date('Y-m-d')}}
<br>
    {{date_default_timezone_set('Asia/Jakarta')}}
    <br>
    {{'Date : ' . date('d-m-Y')}}
    <br>
    {{'Time : ' . date('H:i:s')}}

@endsection

