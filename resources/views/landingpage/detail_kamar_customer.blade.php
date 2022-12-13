@extends('landingpage.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">
        <div class="col p-5" id="main">
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
                    <!-- container -->
                    <div class="mt-5 d-flex justify-content-between">
                        <div class="d-flex flex-column col-8 mr-4">
                            <h5 style="font-size: 24px;font-weight: 600;">
                                {{$kost_id->nama_kost}}</h5>
                            <div class="d-flex justify-content-start border-bottom my-4 mb-4">
                                <button class="btn shadow bg-body rounded text-dark  px-5 py-3 mb-4" type="submit">
                                    Kriteria
                                    Kost
                                </button>
                                <div class="p-2">
                                    <i class="bi bi-geo-alt-fill"></i>&nbsp;&nbsp;test
                                    dgfsdfsdfsddfjsofisjofsijfosfjdsofijsdfpoisj
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <h4 class="fw-bold">Kost dikelola oleh Zuhdi</h4>
                            </div>

                            <div class="d-flex justify-content-start align-items-center border-bottom">
                                <img style="width: 50px; height: 50px;" src="{{url('admin/img/users/wahyu.jpg')}}"
                                    class="rounded-circle " alt="...">
                                <div class="d-flex flex-column mx-4 my-4 mb-4">
                                    <p class="d-flex align-items-center" style="color: #1EA723;"><i class="bi bi-dot"
                                            style="font-size:30px;"></i>online</p>
                                    <a href="#" style="border: 1px solid #11296B; color: #11296B;"
                                        class="btn bg-body rounded" type="submit">
                                        Tanya pemilik kost&nbsp;&nbsp;<i class="bi bi-chat-left-text"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-flex align-items-center">
                            <div class="shadow d-flex flex-column mb-3 p-5">
                                <h4 class="fw-bold">Rp.
                                    {{number_format($kost_id->harga_kamar, 2, ',', '. ')}}<span>/bln</span></h4>
                                <div class="mb-3">
                                    <input type="date" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="mb-3">
                                    <input type="date" class="form-control" id="exampleFormControlInput1">
                                </div>
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
                                <h5 style="font-size: 24px;font-weight: 600;">Catatan Pemilik untuk kos ini</h5>
                            </div>
                            <br>
                            <div>
                                <div class="col-8 mb-5">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quidem, magnam
                                    facilis porro obcaecati odit laudantium aspernatur nostrum a optio molestias quia.
                                    Pariatur temporibus repudiandae perspiciatis doloribus iure debitis aliquid.
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-flex align-items-center">
                            <div class="shadow d-flex flex-column mb-3 p-5">
                                <h4 class="fw-bold">Rp.
                                    {{number_format($kost_id->harga_kamar, 2, ',', '. ')}}<span>/bln</span></h4>
                                <div class="mb-3">
                                    <input type="date" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="mb-3">
                                    <input type="date" class="form-control" id="exampleFormControlInput1">
                                </div>
                            </div>
                        </div>
                        <!-- end container 2 -->
                    </div>
                    <!-- end container-->
                </div>
                <!-- endcontainer -->


                <div>
                    <button class="btn"
                        style="color: #BDBDBD;font-weight: 500; background: #163358;width: 100%;border-radius: 0px;"
                        data-toggle="modal" data-target="#exampleModal">Booking Kamar</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form method="POST" action="" enctype="multipart/form-data">
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