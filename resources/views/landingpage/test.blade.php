@extends('landingpage.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
    <div class="row">
        <div class="col-2 px-1 shadow">
            <div class="nav flex-column flex-nowrap vh-100 overflow-auto p-2">
                <a href="dashboard_pk.html" class="nav-link side active"><i class="bi bi-grid"></i>Dashboard</a>
                <a href="dashboard-kos" class="nav-link side"><i class="bi bi-house-door"></i>Home</a>
            </div>
        </div>
        <!-- main content -->

        <div class="col-10 p-5" id="main">
            <div class="main-panel">
                <div class="row p-3">
                    <!-- <h5 style="font-size: 24px;font-weight: 600;">nama kost</h5> -->
                </div>

                <div class="content-wrapper" style="background: white!important">
                    <div class="row-12" style="width: 100%">
                        <div id="carouselExampleControls" class="carousel slide mb-4" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{url('images/pemilik/detail_pemilik.png')}}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url('images/pemilik/detail_pemilik.png')}}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url('images/pemilik/detail_pemilik.png')}}" class="d-block w-100"
                                        alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="row p-3">
                        <div class="card mb-3" style="width: 100%; border: 3px dashed #E0E0E0;">
                            <div class="card-body">
                                <center style="margin-top:3%; margin-bottom:3%">
                                    <div class="tambah" style="color:#BDBDBD; font-size:35px">
                                        <i class='far fa-image'></i>
                                    </div>
                                    <div class="tambah" style="color:#BDBDBD">
                                        <i class="fa fa-plus-square"></i>
                                    </div>
                                    <div class="tambah">
                                        <input style="color:#BDBDBD" type="file" />
                                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="row p-3">
                        <h5 style="font-size: 24px;font-weight: 600;">Spesifikasi Tipe Kamar</h5>
                    </div>
                    <div class="row p-3">
                        <div class="col-lg-12">
                            <table>
                                <thead>
                                    <tr>
                                        <th width="15%"></th>
                                        <th width="50%"></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="height: 48px">
                                        <td><i class="fa fa-home fa-fw"></i></td>
                                        <!-- <td>luas kamar Meter</td> -->
                                    </tr>
                                    <tr style="height: 48px">
                                        <td>&nbsp;<i class='fa fa-flash'></i></td>
                                        <!-- <td>fasilitas</td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-5 row p-3">
                        <h5 style="font-size: 24px;font-weight: 600;">Catatan Pemilik untuk kos ini</h5>
                    </div>
                    <br>
                    <div class="row p-3">
                        <div class="catatan" style="width: 64%">
                            <!-- keterangan -->
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row p-3">
                        <a href="" class="btn"
                            style="color: #BDBDBD;font-weight: 500; background: #163358;width: 100%;border-radius: 0px;"
                            data-toggle="modal" data-target="#exampleModal">Ubah</a>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form method="POST" action="" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input name="nama_kost" value="" style="border-radius: 12px" type="text"
                                                class="form-control mb-3" placeholder="">
                                            <input name="luas_kamar" value="" style="border-radius: 12px" type="text"
                                                class="form-control mb-3" placeholder="">
                                            <input name="alamat_kost" value="" style="border-radius: 12px" type="text"
                                                class="form-control mb-3" placeholder="">
                                            <input name="keterangan" value="" style="border-radius: 12px" type="text"
                                                class="form-control mb-3" placeholder="">
                                            <input name="kota_id" value="" style="border-radius: 12px" type="text"
                                                class="form-control mb-3" placeholder="">
                                            <input name="id_user" value="" style="border-radius: 12px" type="text"
                                                class="form-control mb-3" placeholder="">
                                            <input name="harga_kamar" value="" style="border-radius: 12px" type="text"
                                                class="form-control mb-3" placeholder="">

                                    </div>
                                    <button class="btn" type="submit"
                                        style="margin-left: 26px;max-width: 448px;background: #163358; margin-bottom:33px; color:white">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endsection