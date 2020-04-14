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
                <div class="carousel-caption d-none d-md-block text-left">
                    {{-- <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                    <img src="img/aii.png" class="rounded-circle">
                    <h1 class="display-3 blue">Amptron Instrumindo</h1>
                    <p class="lead">Sole Agent Electrical Intrument for Indonesian Territory</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="{{asset('img/carousel/5.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-right">
                    {{-- <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> --}}
                    <img src="img/aii.png" class="rounded-circle">
                    <h1 class="display-3 blue">Amptron Instrumindo</h1>
                    <p class="lead">Sole Agent Electrical Intrument for Indonesian Territory</p>
                </div>
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
                        <img class="" src="{{asset('img/products/a2000.png')}}" alt="Generic placeholder image" width="140" height="140">
                    </div>
                    <div class="content">
                        <h2>A2000 <br>Multifunctional Power Meter</h2>
                        <p>The A2000 multifunctional power meter measures all values for three-phase systems.</p>
                        <p><a class="btn" href="{{ url('/product/3') }}" role="button">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            View details »</a></p>
                    </div>
                </div>
                <div class="card col">
                    <div class="imgBx"  data-text="Acuvim II">
                        <img class="" src="{{asset('img/products/acuvimII.png')}}" alt="Generic placeholder image" width="140" height="140">
                    </div>
                    <div class="content">
                        <h2>Acuvim II Series</h2>
                        <p>Quality engineered energy submeters provides a simple robust solution for power monitoring, power quality analysis, kWh metering, system integration, controlling power distribution systems & other speciality applications.</p>
                        <p><a class="btn" href="{{ url('/product/1') }}" role="button">
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
                    <div class="imgBx"  data-text="3430">
                        <img class="" src="{{asset('img/products/3430.png')}}" alt="Generic placeholder image" width="140" height="140">
                    </div>
                    <div class="content">
                        <h2>Rish Master 3430</h2>
                        <p>It is possible to program primary of external potential Transformer (PT), primary of external Current Transformer (CT) on site via front panel keys by entering into Programming mode.</p>
                        <p><a class="btn" href="{{ url('/product/4') }}" role="button">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            View details »</a></p>
                    </div>
                </div>
                <div class="card col">
                    <div class="imgBx"  data-text="Acuvim L">
                        <img class="" src="{{asset('img/products/acuvimL.png')}}" alt="Generic placeholder image" width="140" height="140">
                    </div>
                    <div class="content">
                        <h2>Acuvim L Series</h2>
                        <p>This three phase energy meter is ideal for applications that require standard parameters for monitoring and controlling power distribution systems.</p>
                        <p><a class="btn" href="{{ url('/product/2') }}" role="button">
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
                    <h1 class="featurette-heading pt-5">Moving Coil meter AC ammeters and voltmeters with rectifier 90deg (VQ)</h1>
                    <hr>
                    <p class="lead">The basic meters are accurate to 1% and the variation scale to scale is less than 0.5% giving a total accuracy of 1.5% max</p>
                </div>
                <div class="col-md-4 pb-4">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="{{ asset('img/products/analogrishabh.png')}}" data-holder-rendered="true">
                </div>
            </div>
                {{-- <hr class="featurette-divider"> --}}
            <div class="row featurette tengah">
                <div class="col-md-7 order-md-2 ml-4">
                    <h1 class="featurette-heading pt-5">Nova-Pro™ 300 LED Stroboscopes/Tachometers</h1>
                    <hr>
                    <p class="lead">We have combined all the features of our hand held LED stroboscopes together with a full function
                        <br> * laser tachometer to create a compact, ergonomic and extremely powerful two in one predictive maintenance tool.
                        <br> The stroboscope light source is made up of twelve LED’s which are extraordinarily bright yet extremely efficient allowing cool continuous operation and long battery life (up to 9.5 hours on a single charge).
                        <br> Continuous operation is also possible with the optional AC adapter.
                        <br> * Integral optical sensor and flash trigger protected under US Patent 10,080,268
                        <br> The Trademark Nova-Pro is protected under USPTO 87087611</p>
                </div>
                <div class="col-md-4 order-md-1 pb-4">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="{{ asset('img/products/stroboscope.png')}}" data-holder-rendered="true" style="width: 500px; height: 500px;">
                </div>
            </div>
                {{-- <hr class="featurette-divider"> --}}
            <div class="row featurette bawah">
                <div class="col-md-7 ml-4">
                    <h1 class="featurette-heading pt-5">RISH CON - CA/CV</h1>
                    <hr>
                    <p class="lead">Accuracy Transducer class 0.2 as per International Standard IEC/EN 60 688</p>
                </div>
                <div class="col-md-4 pb-4">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="{{ asset('img/products/rishcon.png')}}" data-holder-rendered="true">
                </div>
            </div>
        </div>
    </div>

@endsection
