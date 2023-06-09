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
        @include('landingpage.sidebar')
        <!-- main content -->

        <div class="col-10 p-5" id="main">
            <div class="main-panel">
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
                        <h2>{{$detail_kamar->nama_kost}}</h2>
                    </div>

                    <div class="d-flex justify-content-start border-bottom my-4 mb-4">
                        <button class="btn mr-4 shadow bg-body rounded text-dark  px-5 py-3 mb-4" type="submit">
                            Pemilik
                            Kost: {{$detail_kamar->name}}
                        </button>
                        <div class="p-2">
                            <i class="bi bi-geo-alt-fill"></i>&nbsp;&nbsp;&nbsp;{{$detail_kamar->alamat_kost}}
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
                                        <td>Luas kamar: {{$detail_kamar->luas_kamar}} Meter</td>
                                    </tr>
                                    <tr style="height: 48px">
                                        <td>&nbsp;<i class='fa fa-flash'></i></td>
                                        <td>Fasilitas: {{$detail_kamar->fasilitas}}</td>
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
                            Keterangan:
                            {{$detail_kamar->keterangan}}
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row p-3">
                        <a href="{{url('/data-pemilik')}}" class="btn"
                            style="color: #BDBDBD;font-weight: 500; background: #163358;width: 100%;border-radius: 0px;">Back</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endsection