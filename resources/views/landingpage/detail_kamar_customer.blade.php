@extends('landingpage.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col p-5" id="main">
            <div class="main-panel">
                <div class="content-wrapper" style="background: white!important">
                    <div class="row-12" style="width: 100%">
                        <div id="carouselExampleControls" class="carousel slide mb-4" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{url('admin/img')}}/{{$kost_id->foto_kamar}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url('admin/img')}}/{{$kost_id->foto_kamar}}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url('admin/img')}}/{{$kost_id->foto_kamar}}" class="d-block w-100"
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
                    <!-- container -->
                    <div class="mt-5 d-flex justify-content-between">
                        <div class="d-flex flex-column col-8 mr-4">
                            <h5 style="font-size: 24px;font-weight: 600;">
                                {{$kost_id->nama_kost}}
                            </h5>
                            <div class="d-flex justify-content-start border-bottom my-4 mb-4">
                                <div class="p-2">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                        class="bi bi-geo-alt-fill"></i>&nbsp;&nbsp;&nbsp;{{$kost_id->alamat_kost}}
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <h4 class="fw-bold">Kost dikelola oleh {{$kost_id->name}}</h4>
                            </div>

                            <div class="d-flex justify-content-start align-items-center border-bottom">
                                <img style="width: 50px; height: 50px;" src="{{url('admin/img/users/wahyu.jpg')}}"
                                    class="rounded-circle " alt="...">
                                <div class="d-flex flex-column mx-4 my-4 mb-4">
                                    <a href="https://wa.me/{{$kost_id->telp}}"
                                        style="border: 1px solid #11296B; color: #11296B;" class="btn bg-body rounded"
                                        type="submit">
                                        Tanya pemilik kost&nbsp;&nbsp;<i class="bi bi-chat-left-text"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-flex align-items-center">
                            <div class="shadow d-flex flex-column mb-3 p-5">
                                <form action="">
                                <h4 class="fw-bold">Rp.
                                    {{number_format($kost_id->harga_kamar, 2, ',', '. ')}}<span>/bln</span>
                                </h4>
                                <div class="mb-3">
                                    <input type="date" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="mb-3">
                                    <input type="date" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <a href=""><button class="btn btn-primary bt">Pesan Kamar</button></a>
                                </form>
                            </div>
                        </div>
                        <!-- end container 2 -->

                    </div>
                    <!-- end container-->

                    <!-- container -->
                    <div class="mt-5 d-flex justify-content-between">
                        <div class="d-flex flex-column col-8 mr-4 border-bottom">
                            <h5 style="font-size: 24px;font-weight: 600;">
                                Spesifikasi Tipe Kamar</h5>
                            <div class="d-flex justify-content-start mb-2 mt-3">
                                <i class="bi bi-aspect-ratio"></i>&nbsp;&nbsp;Luas kamar: {{$kost_id->luas_kamar}} Meter
                            </div>
                            <div class="d-flex justify-content-start">
                                <i class="bi bi-bag-heart"></i>&nbsp;&nbsp;Fasilitas: {{$kost_id->fasilitas}}
                            </div>

                            <div class="mt-5 row p-3">
                                <h5 style="font-size: 24px;font-weight: 600;">Ketersediaan kost</h5>
                            </div>
                            <br>
                            <div>
                                <div class="col-8 mb-5">
                                    {{$kost_id->keterangan}}
                                </div>
                            </div>
                        </div>
                        <!-- end container 2 -->
                    </div>
                    <!-- end container-->
                </div>
                <!-- endcontainer -->


            </div>
        </div>
    </div>
</div>
</div>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endsection