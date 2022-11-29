@extends('landingpage.index')
@section('content')

<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Info <span>Kamar</span>
            </h2>
        </div>
        <div class="row">
            @foreach($kost as $ik)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="{{ route('kamar.show',$ik->id) }}" class="option1">
                                Detail Kamar
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{url('admin/img/'.$ik->foto_kamar)}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            {{$ik->nama_kost}}
                        </h5>

                    </div>
                    <div>
                        <h6>
                            Rp. {{number_format($ik->harga_kamar, 2, ',', '. ')}}
                        </h6>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="btn-box">
            <a href="">
                View All products
            </a>
        </div>
    </div>
</section>
<!-- end product section -->
@endsection