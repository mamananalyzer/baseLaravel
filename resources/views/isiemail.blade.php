<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isi Pesan</title>
</head>
<body>
    
    <h3> Hai Amptron Sales,   </h3>
    <h4>Seseorang mengirim pesan</h4>
    <br>
    <table class="table">
        <tr>
            <td scope="col-2">
                <p>Name</p> 
            </td>
            <td>:</td>
            <td>
                <p>{{ $name  }} {{ $name2  }} </p>
            </td>
        </tr>
        <tr>
            <td scope="col-2">
                <p>Email</p>  
            </td>
            <td>:</td>
            <td>
                <p>{{ $email  }}</p>
            </td>
        </tr>
        <tr>
            <td scope="col-2">
                <p>Company</p>  
            </td>
            <td>:</td>
            <td>
                <p>{{ $company  }}</p>
            </td>
        </tr>
        <tr>
            <td scope="col-2">
                <p>Phone</p>  
            </td>
            <td>:</td>
            <td>
                <p>{{ $phone  }}</p>
            </td>
        </tr>
        <tr>
            <td scope="col-2">
                <p>Address</p>  
            </td>
            <td>:</td>
            <td>
                <p>{{ $Address1  }}</p>
            </td>
        </tr>
        <tr>
            <td scope="col-2">
                <p>City</p>  
            </td>
            <td>:</td>
            <td>
                <p>{{ $city  }}</p>
            </td>
        </tr>
        <tr>
            <td scope="col-2">
                <p>Post code</p>  
            </td>
            <td>:</td>
            <td>
                <p>{{ $postcode  }}</p>
            </td>
        </tr>
        <tr>
            <td scope="col-2">
                <p>Message</p>  
            </td>
            <td>:</td>
            <td>
                <p>{{ $pesan  }}</p>
            </td>
        </tr>
    </table>

   Thanks,<br><br><br>
   {{ config('app.name') }}
</body>
</html>
