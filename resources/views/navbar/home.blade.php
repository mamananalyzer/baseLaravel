@extends('layout/base')

@section('title', 'Amptron Instrumindo')

@section('container')

    <link rel="stylesheet" href="{{asset('css/styleyt.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/test.css')}}"> --}}


    <section>
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
    </section>
    <script type="text/javascript">
        let section = document.querySelector('section');
        window.addEventListener('scroll', function(){
            let value = 1 + window.scrollY/-550;
            section.style.opacity = value;
        })
    </script>

    <div class="cardhovereffect home">
        <div class="content">
            <div class="row text-center neon offset-md-1">
                <div class="card col">
                    <div class="imgBx"  data-text="A2000">
                        <img class="" src="{{asset('img/acuvimII.png')}}" alt="Generic placeholder image" width="140" height="140">
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
                    <div class="imgBx"  data-text="A2000">
                        <img class="" src="{{asset('img/acuvimII.png')}}" alt="Generic placeholder image" width="140" height="140">
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
            <div class="row text-center mt-2 neon offset-md-1">
                <div class="card col">
                    <div class="imgBx"  data-text="A2000">
                        <img class="" src="{{asset('img/acuvimII.png')}}" alt="Generic placeholder image" width="140" height="140">
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
                    <div class="imgBx"  data-text="A2000">
                        <img class="" src="{{asset('img/acuvimII.png')}}" alt="Generic placeholder image" width="140" height="140">
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

            {{-- <div class="secvideo">
                <section>
                    <video src="{{url('img/bg.mp4')}}" autoplay="" muted="" loop=""></video>
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
                        let value = 1 + window.scrollY/-1710;
                        video.style.opacity = value;
                    })
                </script>
            </div> --}}

            <hr>
            <div class="row featurette atas">
                <div class="col-md-7 ml-4">
                    <h1 class="featurette-heading">First featurette heading. <span class="">It'll blow your mind.</span></h1>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-4">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="{{ asset('img/acuvimII.png')}}" data-holder-rendered="true">
                </div>
            </div>
                {{-- <hr class="featurette-divider"> --}}
            <div class="row featurette tengah">
                <div class="col-md-7 order-md-2 ml-4">
                    <h1 class="featurette-heading">Oh yeah, it's that good. <span class="">See for yourself.</span></h1>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-4 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="{{ asset('img/aculink810.png')}}" data-holder-rendered="true" style="width: 500px; height: 500px;">
                </div>
            </div>
                {{-- <hr class="featurette-divider"> --}}
            <div class="row featurette bawah">
                <div class="col-md-7 ml-4">
                    <h1 class="featurette-heading">First featurette heading. <span class="">It'll blow your mind.</span></h1>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-4">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="{{ asset('img/acuvimL.png')}}" data-holder-rendered="true">
                </div>
            </div>
        </div>
    </div>

@endsection
