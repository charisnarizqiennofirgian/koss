<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invoice kost</title>
</head>

<body>
    <div class="container">
        <h2>History transaksi sewa kost</h2>
        <div class="card">
            <div class="card-body">
                <table class="striped responsive">
                    <thead>
                        <tr>
                            @foreach($heading as $hd)
                            <th style="background-color: #000080; color: white; padding: 5px 10px;">{{$hd}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($invoice as $inv)
                        <tr style="color: black; padding: 5px 10px;">
                            <td style="color: black; padding: 5px 10px;">{{$inv->kode_bayar}}</td>
                            <td style="color: black; padding: 5px 10px;">{{$inv->tanggal_masuk}}</td>
                            <td style="color: black; padding: 5px 10px;">{{$inv->tanggal_keluar}}</td>
                            <td style="color: black; padding: 5px 10px;">{{$inv->total_bayar}}</td>
                            <td style="color: black; padding: 5px 10px;">{{$inv->status_pembayaran}}</td>
                            <td style="color: black; padding: 5px 10px;">{{$inv->pesanan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>