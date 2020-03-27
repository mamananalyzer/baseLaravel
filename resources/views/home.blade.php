@extends('layout/base')

@section('title', 'Amptron Instrumindo')

@section('container')
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
        <div class="row text-center mt-5">
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{asset('img/a2000.webp')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>A2000 <br>Multifunctional Power Meter</h2>
                <p>A single device for 1 A and 5 A current transformers, 2 pulse outputs for read-out of active and reactive energy.</p>
                <p><a class="btn btn-secondary" href="/products/5" role="button">View details »</a></p>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{asset('img/stroboscope.webp')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Nova-Pro™ 300 LED Stroboscopes/ Tachometers</h2>
                <p>Nova-Pro™ is a series of powerful portable visual inspection and speed measurement tools.</p>
                <p><a class="btn btn-secondary" href="/products/5" role="button">View details »</a></p>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{asset('img/aculink810.webp')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Aculink 810 <br> Data Acquisition <br> server and gateway</h2>
                <p>data acquisition server and gateway designed to collect energy data up to 32 Modbus meters and field sensors such as water and gas.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
        </div>

        <div class="row featurette my-5">
            <div class="col-md-7">
                <h1 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h1>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1711159295c%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1711159295c%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.0234375%22%20y%3D%22261.25%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
            </div>
        </div>
            <hr class="featurette-divider">
        <div class="row featurette my-5">
            <div class="col-md-7 order-md-2">
                <h1 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h1>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17111592964%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17111592964%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.0234375%22%20y%3D%22261.25%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 500px; height: 500px;">
            </div>
        </div>
            <hr class="featurette-divider">
        <div class="row featurette my-5">
            <div class="col-md-7">
                <h1 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h1>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1711159295c%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1711159295c%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.0234375%22%20y%3D%22261.25%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
            </div>
        </div>
    </div>
@endsection
