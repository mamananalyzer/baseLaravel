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
    </table>

   <p>Company : {{ $company  }} </p>
   <p>Phone : {{ $phone  }} </p>
   <p>Address : {{ $Address1  }} </p>
   <p>City : {{ $city  }} </p>
   <p>Postcode : {{ $postcode  }} </p>
   <p>Message : {{ $pesan  }} </p>

   Thanks,<br>
   {{ config('app.name') }}
</body>
</html>
