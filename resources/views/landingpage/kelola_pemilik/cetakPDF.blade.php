<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan data kost pemilik</title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }

    th {
        color: white;
    }
    </style>
</head>

<body>
    <h3>Laporan Kost Pemilik</h3>
    <table>
        <thead style=" background-color: #11296b;">
            <tr class="text-light">
                <th>Pemilik Kost</th>
                <th>Nama Kost</th>
                <th>Luas Kamar</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemilik_kost as $pk)
            <tr>
                <td>{{$pk->name}}</td>
                <td>{{$pk->nama_kost}}</td>
                <td>{{$pk->luas_kamar}}</td>
                <td>Rp {{number_format($pk->harga_kamar, 0, ',', '. ')}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>