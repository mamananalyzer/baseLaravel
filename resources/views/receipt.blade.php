@extends('layout/base')

@section('title', 'About')

@section('container')


    {{-- <div class="container mt-5">
        <h5>Contact Our Team</h5>
        <h3>Here you can send us an inquiry concerning general questions about Amptron.</h3>
        <br>
        <h6>* Required</h6>
        <hr>
    </div> --}}
    <div class="container">
        <h4>Thank you for contacting us, your message has been sent. Please wait for our admin to contact you</h4>
        <div class="row">
            <div class="col">
                <h5>{{$receipt->name}} {{$receipt->name2}}</h5>
            </div>
            <div class="col">
                <h5>{{$receipt->email}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5>{{$receipt->company}}</h5>
            </div>
            <div class="col">
                <h5>{{$receipt->phone}}</h5>
            </div>
        </div>
        <div class="row">
            <h5>{{$receipt->Address1}}</h5>
        </div>
        <div class="row">
            <div class="col">
                <h5>{{$receipt->city}}</h5>
            </div>
            <div class="col">
                <h5>{{$receipt->postcode}}</h5>
            </div>
        </div>
        <div class="row">
            <h5>{{$receipt->product}}</h5>
        </div>
        <div class="row">
            <h5>{{$receipt->pesan}}</h5>
        </div>



        <main>
            <div class="row contacts">
                <div class="col invoice-to">
                    <div class="text-gray-light">INVOICE TO:</div>
                    <h2 class="to">John Doe</h2>
                    <div class="address">796 Silver Harbour, TX 79273, US</div>
                    <div class="email"><a href="mailto:john@example.com">john@example.com</a></div>
                </div>
                <div class="col invoice-details">
                    <h1 class="invoice-id">INVOICE 3-2-1</h1>
                    <div class="date">Date of Invoice: 01/10/2018</div>
                    <div class="date">Due Date: 30/10/2018</div>
                </div>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="text-left">DESCRIPTION</th>
                        <th class="text-right">HOUR PRICE</th>
                        <th class="text-right">HOURS</th>
                        <th class="text-right">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="no">04</td>
                        <td class="text-left"><h3>
                            <a target="_blank" href="https://www.youtube.com/channel/UC_UMEcP_kF0z4E6KbxCpV1w">
                            Youtube channel
                            </a>
                            </h3>
                           <a target="_blank" href="https://www.youtube.com/channel/UC_UMEcP_kF0z4E6KbxCpV1w">
                               Useful videos
                           </a>
                           to improve your Javascript skills. Subscribe and stay tuned :)
                        </td>
                        <td class="unit">$0.00</td>
                        <td class="qty">100</td>
                        <td class="total">$0.00</td>
                    </tr>
                    <tr>
                        <td class="no">01</td>
                        <td class="text-left"><h3>Website Design</h3>Creating a recognizable design solution based on the company's existing visual identity</td>
                        <td class="unit">$40.00</td>
                        <td class="qty">30</td>
                        <td class="total">$1,200.00</td>
                    </tr>
                    <tr>
                        <td class="no">02</td>
                        <td class="text-left"><h3>Website Development</h3>Developing a Content Management System-based Website</td>
                        <td class="unit">$40.00</td>
                        <td class="qty">80</td>
                        <td class="total">$3,200.00</td>
                    </tr>
                    <tr>
                        <td class="no">03</td>
                        <td class="text-left"><h3>Search Engines Optimization</h3>Optimize the site for search engines (SEO)</td>
                        <td class="unit">$40.00</td>
                        <td class="qty">20</td>
                        <td class="total">$800.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">SUBTOTAL</td>
                        <td>$5,200.00</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">TAX 25%</td>
                        <td>$1,300.00</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">GRAND TOTAL</td>
                        <td>$6,500.00</td>
                    </tr>
                </tfoot>
            </table>
            <div class="thanks">Thank you!</div>
            <div class="notices">
                <div>NOTICE:</div>
                <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
            </div>
        </main>





        {{-- <form action=" {{ url('email/send') }}" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; }
        else {
            alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
            return false;
        }">
        {{ csrf_field() }}
            <label for="exampleInputName">Name *</label>
            <div class="form-row">
                <div class="col">
                <input type="text" class="form-control" placeholder="First name" name="name" required>
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Last name" name="name2" required>
                </div>
            </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email *</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
        </form> --}}
    </div>

@endsection


{{--  --}}
