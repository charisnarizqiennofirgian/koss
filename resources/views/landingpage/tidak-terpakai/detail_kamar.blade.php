@extends('landingpage.index')
@section('content')
@php
$rekomendasi_kamar = App\Models\Kost::paginate(4);
@endphp

<!-- Product section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                    src="{{url('admin/img/'.$kost_id->foto_kamar)}}" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1">Detail Kamar</div>
                <h2 class="display-5 fw-bolder">{{$kost_id->nama_kost}}</h2>
                <div class="fs-5 mb-2">
                    <span class="text-decoration-line-through">Rp.
                        {{number_format($kost_id->harga_kamar, 2, ',', '. ')}}</span>

                </div>
                <ul>
                    <li>
                        <p>Luas Kamar: {{$kost_id->luas_kamar}}</p>
                    </li>
                    <li>
                        <p>Alamat Kost: {{$kost_id->alamat_kost}}</p>
                    </li>
                    <li>
                        <p>Keterangan: {{$kost_id->keterangan}}</p>
                    </li>
                    <li>
                        @foreach($d_fasilitas as $fs)
                        @if($kost_id->id_fasilitas === $fs->id)
                        <p>Fasilitas: {{$fs->fasilitas}}</p>
                        @endif
                        @endforeach
                    </li>
                </ul>

                <div class="d-flex">
                    <a class="btn btn-danger mr-2" href="{{url('kamar')}}">Back</i></a>
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"
                        style="max-width: 3rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        Booking Kost
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related items section-->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">Rekomendasi Kamar</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <!-- card awal rekomendasi kamar -->
            @foreach($rekomendasi_kamar as $rk)
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{url('admin/img/'.$rk->foto_kamar)}}" alt="..." />
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">{{$rk->nama_kost}}</h5>
                            Rp. {{number_format($rk->harga_kamar, 2, ',', '. ')}}
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- akhir rekomendasi kamar -->
        </div>
    </div>
</section>
@endsection