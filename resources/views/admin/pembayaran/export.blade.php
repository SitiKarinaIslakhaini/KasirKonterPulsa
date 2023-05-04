<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
        body {
            display : flex;
            justify-content: center;
            padding: 2rem;
        }
        table{
            border: 1px solid black;
            width: 100%;
            background-color: #f1f1f1;
        }
        table thead th {
            border-bottom: 1px solid black;
            padding: 0.5rem 0.2rem;
            text-transform: Uppercase;
            font-size: 0.7rem;
        }
        table tbody{
            background-color: white;
        }
        table tbody tr td{
            text-align:center;
            padding: 0.5rem 0.2rem;
        }
     </style>
</head>
<body>
    <table class="">
        <thead>
            <tr>
                <th>Kasir</th>
                <th>Pelanggan</th>
                <th>Pulsa</th>
                <th>Tanggal</th>
                <th>Total</th>                        
            </tr>
        </thead>
        <tbody>
        @foreach ($pembayaran as $isla)
            <tr>
            <td>{{$isla->kasir->nama_kasir}}</td>
            <td>{{$isla->pelanggan->nama_pelanggan}}</td>
            <td>{{$isla->pulsa->nama_pulsa}}</td>
            <td>{{$isla->tanggal}}</td>
            <td>{{$isla->total}}</td> 
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    
</body>
</html>