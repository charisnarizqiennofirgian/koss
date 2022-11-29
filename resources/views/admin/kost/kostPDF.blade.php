<!DOCTYPE html>
<html>

<head>
    <title>Info Data Kost</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Data Info Kost</h4>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Modal -->
                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped table-hover">
                                            <thead>
                                                <tr class="text-center">
                                                    @foreach($title as $tt)
                                                    <th>{{$tt}}</th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $no = 1;
                                                @endphp
                                                @foreach($kost as $fs)
                                                <tr>
                                                    <td>{{$no ++}}</td>
                                                    <td>{{$fs['nama_kost']}}</td>
                                                    <td>{{$fs['luas_kamar']}}</td>
                                                    <td>Rp. {{number_format($fs['harga_kamar'], 2, ',', '. ')}}</td>
                                                    <td>{{$fs['alamat_kost']}}</td>
                                                    <td>{{$fs['keterangan']}}</td>

                                                    @foreach($d_fasilitas as $fas)
                                                    @if($fs->id_fasilitas === $fas->id)
                                                    <td>{{$fas->fasilitas}}</td>
                                                    @endif
                                                    @endforeach
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>