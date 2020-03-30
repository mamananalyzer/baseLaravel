@extends('layout/base')

@section('title', 'Amptron Instrumindo')

@section('container')

<link rel="stylesheet" href="{{asset('css/styleyt.css')}}">


    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{asset('img/carousel/4.png')}}" class="d-block w-100 base" alt="...">
            <div class="carousel-caption d-none d-md-block">
                {{-- <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> --}}
                <img src="img/aii.png" class="rounded-circle">
                <h1 class="display-3 blue">Amptron Instrumindo</h1>
                <p class="lead">Sole Agent Electrical Intrument for Indonesian Territory</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{asset('img/carousel/6.png')}}" class="d-block w-100" alt="...">
            {{-- <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div> --}}
            </div>
            <div class="carousel-item">
            <img src="{{asset('img/carousel/5.png')}}" class="d-block w-100" alt="...">
            {{-- <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div> --}}
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="row text-center mt-2">
            <div class="card col">
                <div class="imgBx"  data-text="Design">
                    <img class="" src="{{asset('img/a2000.webp')}}" alt="Generic placeholder image" width="140" height="140">
                </div>
                <div class="content">
                    <h2>A2000 <br>Multifunctional Power Meter</h2>
                    <p>A single device for 1 A and 5 A current transformers, 2 pulse outputs for read-out of active and reactive energy.</p>
                    <p><a class="btn" href="/products/5" role="button">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        View details »</a></p>
                </div>
            </div>
            <div class="card col">
                <div class="imgBx"  data-text="Design">
                    <img class="" src="{{asset('img/a2000.webp')}}" alt="Generic placeholder image" width="140" height="140">
                </div>
                <div class="content">
                    <h2>A2000 <br>Multifunctional Power Meter</h2>
                    <p>A single device for 1 A and 5 A current transformers, 2 pulse outputs for read-out of active and reactive energy.</p>
                    <p><a class="btn" href="/products/5" role="button">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        View details »</a></p>
                </div>
            </div>
        </div>
        <div class="row text-center mt-2">
            <div class="card col">
                <div class="imgBx"  data-text="Design">
                    <img class="" src="{{asset('img/a2000.webp')}}" alt="Generic placeholder image" width="140" height="140">
                </div>
                <div class="content">
                    <h2>A2000 <br>Multifunctional Power Meter</h2>
                    <p>A single device for 1 A and 5 A current transformers, 2 pulse outputs for read-out of active and reactive energy.</p>
                    <p><a class="btn" href="/products/5" role="button">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        View details »</a></p>
                </div>
            </div>
            <div class="card col">
                <div class="imgBx"  data-text="Design">
                    <img class="" src="{{asset('img/a2000.webp')}}" alt="Generic placeholder image" width="140" height="140">
                </div>
                <div class="content">
                    <h2>A2000 <br>Multifunctional Power Meter</h2>
                    <p>A single device for 1 A and 5 A current transformers, 2 pulse outputs for read-out of active and reactive energy.</p>
                    <p><a class="btn" href="/products/5" role="button">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        View details »</a></p>
                </div>
            </div>
        </div>
<hr>
        <div class="row featurette my-5">
            <div class="col-md-7">
                <h1 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h1>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="img/acuvimII.webp" data-holder-rendered="true">
            </div>
        </div>
            <hr class="featurette-divider">
        <div class="row featurette my-5">
            <div class="col-md-7 order-md-2">
                <h1 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h1>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="img/aculink810.webp" data-holder-rendered="true" style="width: 500px; height: 500px;">
            </div>
        </div>
            <hr class="featurette-divider">
        <div class="row featurette my-5">
            <div class="col-md-7">
                <h1 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h1>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="img/acuvimL.webp" data-holder-rendered="true">
            </div>
        </div>
    </div>
@endsection
