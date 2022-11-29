@extends('admin.index')
@section('content')
@php
$title = ['No', 'Kode Bayar','Id Kamar', 'Id User', 'Tanggal Masuk', 'Tanggal Keluar', 'Total Bayar'];
@endphp

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
                                    <h4 class="card-title">Table Pembayaran</h4>
                                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                        data-target="#addRowModal">
                                        <i class="fa fa-plus"></i>
                                        Add Row
                                    </button>

                                    <a title="Export to PDF" href="{{url('pembayaran-pdf')}}"
                                        class="btn btn-danger btn-round ml-2 text-light">
                                        <span class="btn-label">
                                            <i class="fas fa-file-pdf"></i>
                                        </span>
                                        Export File
                                    </a>

                                    <a title="Export to Excel" href="{{url('pembayaran-excel')}}"
                                        class="btn btn-success btn-round ml-2 text-light">
                                        <span class="btn-label">
                                            <i class="fas fa-file-excel"></i>
                                        </span>
                                        Export File
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Modal -->
                                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="small">Create a new row using this form, make sure you
                                                    fill them all</p>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Name</label>
                                                                <input id="addName" type="text" class="form-control"
                                                                    placeholder="fill name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 pr-0">
                                                            <div class="form-group form-group-default">
                                                                <label>Position</label>
                                                                <input id="addPosition" type="text" class="form-control"
                                                                    placeholder="fill position">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>Office</label>
                                                                <input id="addOffice" type="text" class="form-control"
                                                                    placeholder="fill office">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer no-bd">
                                                <button type="button" id="addRowButton"
                                                    class="btn btn-primary">Add</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Close</button>
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
                                                <td>
                                                    <div class="form-button-action">
                                                        <button type="button" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="View Detail">
                                                            <i class="fa fa-eye"></i>
                                                        </button>
                                                        <button type="button" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-danger"
                                                            data-original-title="Remove">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>

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
        @include('admin.footer')
    </div>

    <!-- Custom template | don't include it in your project! -->
    <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
            <div class="switcher">
                <div class="switch-block">
                    <h4>Logo Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                        <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                        <br />
                        <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Navbar Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeTopBarColor" data-color="dark"></button>
                        <button type="button" class="changeTopBarColor" data-color="blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="green"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange"></button>
                        <button type="button" class="changeTopBarColor" data-color="red"></button>
                        <button type="button" class="changeTopBarColor" data-color="white"></button>
                        <br />
                        <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                        <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="green2"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                        <button type="button" class="changeTopBarColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Sidebar</h4>
                    <div class="btnSwitch">
                        <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Background</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                        <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                        <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                        <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-toggle">
            <i class="flaticon-settings"></i>
        </div>
    </div>
    <!-- End Custom template -->
</div>
@endsection