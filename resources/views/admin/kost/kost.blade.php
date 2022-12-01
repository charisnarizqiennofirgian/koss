@extends('admin.index')
@section('content')
@php
$title = ['No', 'Nama Kost', "Luas Kamar", "Harga Kamar", "Alamat Kost", "Keterangan", "Fasilitas", "Foto", "Aksi"];
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
                                    <h4 class="card-title">Data Info Kost</h4>
                                    <a title="Tambah Kost" href="{{route('kost.create')}}"
                                        class="btn btn-secondary btn-round ml-auto text-decoration-none text-light">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </a>

                                    <a title="Export to PDF" href="{{url('kost-pdf')}}"
                                        class="btn btn-danger btn-round ml-2 text-light">
                                        <span class="btn-label">
                                            <i class="fas fa-file-pdf"></i>
                                        </span>
                                        Export File
                                    </a>

                                    <a title="Export to Excel" href="{{url('kost-excel')}}"
                                        class="btn btn-success btn-round ml-2 text-light">
                                        <span class="btn-label">
                                            <i class="fas fa-file-excel"></i>
                                        </span>
                                        Export File
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover">
                                        <thead>
                                            <tr class="text-center">
                                                @foreach($title as $tt)
                                                <th>{{$tt}}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach($kost as $fs)
                                            <tr>
                                                <td>{{$no ++}}</td>
                                                <td>{{$fs['nama_kost']}}</td>
                                                <td>{{$fs['luas_kamar']}}</td>
                                                <td>Rp. {{number_format($fs['harga_kamar'], 2, ',', '. ')}}</td>
                                                <td>{{$fs['alamat_kost']}}</td>
                                                <td>{{$fs['keterangan']}}</td>

                                                @foreach($d_fasilitas as $fas)
                                                @if($fs->id_fasilitas === $fas->id)
                                                <td>{{$fas->fasilitas}}</td>
                                                @endif
                                                @endforeach

                                                <td width="30%">
                                                    @empty($fs->foto_kamar)
                                                    <img src="{{ url('https://stimra.ac.id/wp-content/themes/consultix/images/no-image-found-360x260.png') }}"
                                                        width="35%" alt="Profile">
                                                    @else
                                                    <img src="{{ url('admin/img')}}/{{$fs->foto_kamar}}" width="100%"
                                                        alt="Profile">
                                                    @endempty
                                                </td>
                                                <td>
                                                    <form method="POST" action="{{route('kost.destroy', $fs->id)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="form-button-action">
                                                            <a href="{{ route('kost.show',$fs->id) }}"
                                                                data-toggle="tooltip" title=""
                                                                class="btn btn-link btn-primary btn-lg"
                                                                data-original-title="View Detail">
                                                                <i class="fa fa-eye"></i>
                                                            </a>

                                                            <a href="{{ url('kost-edit',$fs->id) }}"
                                                                data-toggle="tooltip" title="Edit"
                                                                class="btn btn-link btn-warning"
                                                                data-original-title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <button role="button"
                                                                onclick="return confirm('Anda yakin data akan dihapus?')"
                                                                type="submit" data-toggle="tooltip" title="Remove"
                                                                class="btn btn-link btn-danger"
                                                                data-original-title="Remove">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
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

    {{-- Custom template | don't include it in your project! --}}
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
    {{-- End Custom template --}}
</div>
@endsection