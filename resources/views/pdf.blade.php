<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
</head>
<body>
    <table class="w-full">
        <tr>
            
            <td class="w-half">
                <h2>Invoice ID: {{$data->id}}</h2>
                
            </td>
        </tr>
    </table>
 
    <div class="margin-top">
        <table class="w-full">
            <tr>
                <td class="w-half">
                    <div><h4>To:</h4></div>
                    <div>{{$data->user->name}}</div>
                    <div>123 Acme Str.</div>
                </td>
                <td class="w-half">
                    <div><h4>From:</h4></div>
                    <div>Tour & Travel</div>
                    <div>INDONESIA</div>
                </td>
                <tr><td></td></tr>
            </tr>
            
                <tr>
                    <div>Tour Name : {{$data->schedule->tour->name}}</div>
                </tr>
                <tr>
                    <div>Schedule : {{$data->schedule->tanggalBerangkat}} </div>
                </tr>
                <tr>
                    <div>Airline : {{$data->schedule->tour->flight->airline}} </div>
                </tr>
                <tr>
                    <div>Payment : {{$data->payment}} </div>
                </tr>
                <tr>
                    <div> </div>
                </tr>
        </table>
    </div>

    <div class="total">
        Price : Rp. {{number_format($data->schedule->tour->price)}}
    </div>
    <br>
    <div class="footer margin-top">
        <div>Thank you</div>
        <div>&copy; Laravel Daily</div>
    </div>
</body>
</html>