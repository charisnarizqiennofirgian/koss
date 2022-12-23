@extends('landingpage.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('landingpage.sidebar')
        <div class="col-10 p-5" id="main">
            <div class="content">
                <div class="page-inner">
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
                        <div class="col-md-6">
                            <div class="card">
                                <form method="POST" action="{{ route('data-pemilik.update',$detail_kamar->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div style="background-color: #11296b;"
                                        class="card-header text-light d-flex align-center">
                                        <div class="card-title fw-bold">Form update pemilik kost</div>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- table kost --}}
                                                <div class="form-group">
                                                    <label>Nama Kost</label>
                                                    <input value="{{$detail_kamar->nama_kost}}" name="nama_kost"
                                                        type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Luas Kamar</label>
                                                    <input value="{{$detail_kamar->luas_kamar}}" name="luas_kamar"
                                                        type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Harga Kamar</label>
                                                    <input value="{{$detail_kamar->harga_kamar}}" name="harga_kamar"
                                                        type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat Kost</label>
                                                    <input value="{{$detail_kamar->alamat_kost}}" name="alamat_kost"
                                                        type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Foto Kamar</label>
                                                    <input value="{{$detail_kamar->foto_kamar}}" name="foto_kamar"
                                                        type="text" class="form-control" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Fasilitas</label>
                                                    <select name="id_fasilitas" class="form-control">
                                                        @foreach($fasilitas as $fs)
                                                        @if($fs->id === $detail_kamar->id)
                                                        <option value="{{$detail_kamar->id_fasilitas}}">
                                                            {{$fs->fasilitas}}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kota</label>
                                                    <select name="kota_id" class="form-control">
                                                        <option value="{{$detail_kamar->kota_id}}">
                                                            {{$kota->nama_kota}}</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input hidden value="{{$detail_kamar->id_user}}" name="id_user"
                                                        type="text" class="form-control" placeholder="">
                                                </div>
                                                <small id="emailHelp" class="form-text text-muted">Silahkan masukan
                                                    data yang
                                                    valid!</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <button type="submit" class="btn btn-success">Update</button>
                                        <a onclick="return confirm('Anda yakin ingin kembali ke table kost?')"
                                            href="{{url('data-pemilik')}}" class="btn btn-danger">Back</a>
                                    </div>
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
</div>
</div>
@endsection