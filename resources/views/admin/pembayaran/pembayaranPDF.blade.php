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
                    <div class="page-header">
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="#">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Tables</a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Datatables</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">


                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Data Transaksi</h4>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Modal -->
                                    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header no-bd">
                                                    <h5 class="modal-title">
                                                        <span class="fw-mediumbold">
                                                            New</span>
                                                        <span class="fw-light">
                                                            Row
                                                        </span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    @foreach($title as $tt)
                                                    <th>{{$tt}}</th>
                                                    @endforeach
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @php
                                                $no = 1;
                                                @endphp
                                                @foreach($pembayaran as $fs)
                                                <tr>
                                                    <td>{{$no++}}
                                                    <td>{{$fs['kode_bayar']}}</td>
                                                    <td>{{$fs['id_kamar']}}</td>
                                                    <td>{{$fs['id_user']}}</td>
                                                    <td>{{$fs['tanggal_masuk']}}</td>
                                                    <td>{{$fs['tanggal_keluar']}}</td>
                                                    <td>Rp. {{number_format($fs['total_bayar'], 2, ',', '. ')}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>

                                            </tfoot>
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
    <!-- end pembayaran -->
</body>

</html>