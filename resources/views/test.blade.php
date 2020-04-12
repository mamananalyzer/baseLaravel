@extends('layout/base')

@section('title', 'Amptron Instrumindo')

@section('container')

<link rel="stylesheet" href="{{asset('css/test.css')}}">

<div class="secvideo">
    <section>
        <video src="{{url('img/bg.mp4')}}" autoplay="" muted="" loop></video>
    </section>
    <section>
        <div class="content">
            <h2>video</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam aliquam dicta et sed iusto, fuga nostrum fugit non inventore officia cum adipisci soluta repellat odit sapiente deleniti veniam, minima facilis!</p>
        </div>
    </section>
    <script type="text/javascript">
        let video = document.querySelector('video');
        window.addEventListener('scroll', function(){
            let value = 1 + window.scrollY/-600;
            video.style.opacity = value;
        })
    </script>
</div>





<div class="cntainer">
    <div class="section1">
        <h1>hai</h1>
        <h1>hai</h1>
        <h1>hai</h1>
        <h1>hai</h1>
        <h1>hai</h1>
    </div>
    <div class="section2">
        <h1>hai</h1>
        <h1>hai</h1>
        <h1>hai</h1>
        <h1>hai</h1>
        <h1>hai</h1>
        <h1>hai</h1>
    </div>
    <h1>hai</h1>
    <h1>hai</h1>
    <h1>hai</h1>
    <h1>hai</h1>
    <h1>hai</h1>

</div>

@endsection
