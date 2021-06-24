<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1>Terimakasih {{$user}},</h1>
    <p>Anda telah melakukan checkout atas barang:</p>

    @php
        $total = 0;
    @endphp
    <table>
        <thead>
            <th>#</th>
            <th>Nama Product</th>
            <th>Harga</th>
            <th>Qty</th>
            <th>SubTotal</th>
        </thead>
        <tbody>
            @foreach ($products as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->product->name}}</td>
                <td>Rp. {{number_format($item->product->price)}}</td>
                <td>{{$item->qty}}</td>
                <td>Rp. {{number_format($item->qty * $item->product->price)}}</td>
            </tr>
            @php
                $total += ($item->qty * $item->product->price);
            @endphp
            @endforeach
        </tbody>
    </table>

    <h1>Total pembelian sebesar: Rp. {{number_format($total)}}</h1>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
