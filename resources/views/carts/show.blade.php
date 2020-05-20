@extends('layout/base')

@section('title', 'Receipt Page')

@section('container')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<div id="invoice">
    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" value="Print" onclick="window.print()" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
            {{-- <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button> --}}
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="http://amptron.my.id/">
                            <img src="{{asset('img/aii.png')}}" width="130px" data-holder-rendered="true" />
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="http://amptron.my.id/">
                            Amptron Instrumindo
                            </a>
                        </h2>
                        <div>Komplek Rukan Taman Meruya Blok N-15-16
                            <br> Meruya Utara, Kembangan, Jakarta Barat
                            <br> Daerah Khusus Ibukota Jakarta 11620</div>
                        <div>(+62-21) 585 5055</div>
                        <div>amptron@cbn.net.id</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INQUIRY FROM:</div>
                        <h2 class="to">{{$carts->name}} {{$carts->name2}}</h2>
                        <div class="address">{{$carts->Address1}}</div>
                        <div class="address">{{$carts->city}} {{$carts->postcode}}</div>
                        <div class="email">{{$carts->email}}, {{$carts->company}}</div>
                        <div class="email">{{$carts->phone}}</div>
                    </div>
                    <div class="col invoice-details">
                        {{date_default_timezone_set('Asia/Jakarta')}}
                        <div class="date">{{$carts->date}}</div>
                        <div class="date">{{$carts->time}}</div>
                        {{-- <button id="printInvoice" value="Print" onclick="window.print()" class="btn btn-info"><i class="fa fa-print"></i> Print</button> --}}
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-right"></th>
                            <th class="text-right">Quantity</th>
                            <th class="text-right">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="no">01</td>
                            <td class="text-left"><h3>{{$carts->product}}</h3>
                               {{$carts->description}}
                            </td>
                            <td class="unit"></td>
                            <td class="qty">{{$carts->quantity}}</td>
                            <td class="total">{{$carts->price}}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="address">{{$carts->pesan}}</div>

                <div class="thanks mt-4">Thank you!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">Save this page with click button PRINT on top and resend email to <a href="mailto:amptron@cbn.net.id">amptron@cbn.net.id .</a></div>
                </div>
            </main>
            <footer>
                Fast Response for Excellent Support © Amptron Instrumindo 1997 - 2020
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
@endsection


