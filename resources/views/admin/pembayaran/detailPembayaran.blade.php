@extends('admin.index')
@section('content')
<div class="wrapper" style="background-color:#eee;">
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">

                <div class="card mx-5 mt-2">
                    <div class="card-body mx-5">
                        <div class="container mb-5 mt-5">
                            <div class="row d-flex align-items-baseline">
                                <div class="col-xl-9">
                                    <p style="color: #7e8d9f;font-size: 20px;">Invoice &gt;&gt; <strong>ID:
                                            #{{$data->kode_bayar}}
                                        </strong></p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <i class="far fa-building fa-4x ms-0" style="color:#8f8061 ;"></i>
                                        <p class="pt-2">PT Kostku.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-8">
                                        <ul class="list-unstyled">
                                            <li class="text-muted">To: <span style="color:#8f8061 ;">
                                                    {{$data->name}}
                                                </span></li>
                                            <li class="text-muted">Street, City</li>
                                            <li class="text-muted">State, Country</li>
                                            <li class="text-muted"><i class="fas fa-phone"></i> 123-456-789</li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-4">
                                        <p class="text-muted">Invoice</p>
                                        <ul class="list-unstyled">
                                            <li class="text-muted"><i class="fas fa-circle" style="color:#8f8061 ;"></i>
                                                <span class="fw-bold">ID:</span>#{{$data->kode_bayar}}
                                            </li>
                                            <li class="text-muted"><i class="fas fa-circle" style="color:#8f8061 ;"></i>
                                                <span class="fw-bold">Creation Date: </span>{{$data->tanggal_masuk}}
                                            </li>
                                            <li class="text-muted"><i class="fas fa-circle" style="color:#8f8061;"></i>
                                                <span class="me-1 fw-bold">Status:</span><span
                                                    class="badge bg-warning text-black fw-bold">
                                                    Unpaid</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row my-2 mx-1 justify-content-center">
                                    <div class="col-md-2 mb-4 mb-md-0">
                                        <div class="
                        bg-image
                        ripple
                        rounded-5
                        mb-4
                        overflow-hidden
                        d-block
                        " data-ripple-color="light">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(4).webp"
                                                class="w-100" height="100px" alt="Elegant shoes and shirt" />
                                            <a href="#!">
                                                <div class="hover-overlay">
                                                    <div class="mask" style="background-color: hsla(0, 0%, 98.4%, 0.2)">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 mb-4 mb-md-0">
                                        <p class="fw-bold">Custom suit</p>
                                        <p class="mb-1">
                                            <span class="text-muted me-2">Size:</span><span>8.5</span>
                                        </p>
                                        <p>
                                            <span class="text-muted me-2">Color:</span><span>Gray</span>
                                        </p>
                                    </div>
                                    <div class="col-md-3 mb-4 mb-md-0">
                                        <h5 class="mb-2">
                                            <s class="text-muted me-2 small align-middle"></s><span
                                                class="align-middle">Rp.
                                                {{number_format($data->total_bayar, 2, ',', '. ')}}</span>
                                        </h5>
                                        <p class="text-danger"><small>You save 25%</small></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-8">
                                        <p class="ms-3">Add additional notes and payment information</p>
                                    </div>
                                    <div class="col-xl-3">
                                        <ul class="list-unstyled">
                                            <li class="text-muted ms-3"><span
                                                    class="text-black me-4">SubTotal</span>$1050</li>
                                            <li class="text-muted ms-3 mt-2"><span
                                                    class="text-black me-4">Shipping</span>$15</li>
                                        </ul>
                                        <p class="text-black float-start"><span class="text-black me-3"> Total
                                                Amount</span><span style="font-size: 25px;">$1065</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection