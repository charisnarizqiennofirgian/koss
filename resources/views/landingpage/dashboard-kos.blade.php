@extends('landingpage.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('landingpage.sidebar')
        <div class="col-10 p-5" id="main">
            <div class="row">
                @foreach($pemilik_kost as $pk)
                @if($pk->name === Auth::user()->name)
                <div class="col-md-4">
                    <div class="card shadow-sm border-light mb-4">
                        <a href="#" class="position-relative">
                            <img src="assets/image/example_card/image.png" class="card-img-top" alt="image"> </a>
                        <div class="card-body">
                            <div class="d-flex align-content-center align-items-center justify-content-between">
                                <span class="font-weight-small">{{$pk->nama_kost}}</span>
                                <div class="d-flex align-items-center align-content-center">
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="rate">(5.0)</span>
                                </div>
                            </div>
                            <div class="post-meta">
                                <span class="small lh-120">
                                    <i class="fas fa-map-marker-alt mr-2">
                                    </i>{{$pk->alamat_kost}}
                                </span>
                            </div>
                            <div class="kelola-button pt-3 pb-3 d-flex justify-content-center">
                                <a href="{{url('pemilik-edit', $pk->id)}}" class="btn btn-custom w-100">Kelola</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection