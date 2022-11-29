@extends('admin.index')
@section('content')

{{-- cara import model di blade --}}
@php
$d_fasilitas = App\Models\Fasilitas::all();
@endphp

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
                        <a href="#">Forms</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Basic Form</a>
                    </li>
                </ul>
            </div>
            {{-- form validation --}}
            <div class="text-danger">
                @if ($errors->any())
                <strong>Whoops!</strong> Terjadi Kesalahan saat input data<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach

                </ul>
                @endif
            </div>
            {{-- end validation form --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form method="POST" action="{{ route('kost.update',$kost_edit->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class=" card-header">
                                <div class="card-title">Form Data Kost</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 col-lg-6 ">
                                        <div class="form-group">
                                            <label>Nama Kost</label>
                                            <input value="{{ $kost_edit->nama_kost }}" name="nama_kost" type="text"
                                                class="form-control" placeholder="nama kost">
                                        </div>
                                        <div class="form-group">
                                            <label>Luas Kamar</label>
                                            <input value="{{ $kost_edit->luas_kamar }}" name="luas_kamar" type="text"
                                                class="form-control" placeholder="luas kamar">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Kamar</label>
                                            <input value="{{ $kost_edit->harga_kamar }}" name="harga_kamar"
                                                type="number" class="form-control" placeholder="harga kamar">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input value="{{ $kost_edit->keterangan }}" name="keterangan" type="text"
                                                class="form-control" placeholder="keterangan">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Fasilitas</label>
                                            <select name="id_fasilitas" class="form-control"
                                                id="exampleFormControlSelect1">
                                                @foreach($d_fasilitas as $fs)
                                                @php $sel = $kost_edit->id_fasilitas == $fs->id ? 'selected' : '';
                                                @endphp
                                                <option value="{{$fs->id}}" {{$sel}}>{{$fs->fasilitas}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Foto Kamar</label>
                                            <input name="foto_kamar" type="file" class="form-control-file"
                                                id="exampleFormControlFile1">
                                            @if(!empty($kost_edit->foto_kamar)) <img
                                                src="{{ url('admin/img')}}/{{$kost_edit->foto_kamar}}" width="20%"
                                                class="img-thumbnail">
                                            <br />{{$kost_edit->foto_kamar}}
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="comment">Alamat</label>
                                            <textarea name="alamat_kost" class="form-control" id="comment"
                                                rows="5">{{ $kost_edit->alamat_kost }}</textarea>
                                        </div>

                                        <small id="emailHelp" class="form-text text-muted">Silahkan masukan data yang
                                            valid!</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Save</button>
                                <a onclick="return confirm('Anda yakin ingin kembali ke table kost?')"
                                    href="{{url('kost')}}" class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.themekita.com">
                            ThemeKita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Help
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright ml-auto">
                2018, made with <i class="fa fa-heart heart text-danger"></i> by <a
                    href="https://www.themekita.com">ThemeKita</a>
            </div>
        </div>
    </footer>
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
@endsection