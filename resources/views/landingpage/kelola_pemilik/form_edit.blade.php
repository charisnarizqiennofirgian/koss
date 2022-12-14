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
                                                {{-- table user --}}
                                                <div class="form-group">
                                                    <label>Nama user</label>
                                                    <input value="{{$detail_kamar->name}}" name="name" type="text"
                                                        class="form-control" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input value="{{$detail_kamar->email}}" name="email" type="text"
                                                        class="form-control" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Role</label>
                                                    <select name="role" class="form-control">
                                                        <option value="{{$detail_kamar->role}}">{{$detail_kamar->role}}
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Pekerjaan</label>
                                                    <input value="{{$detail_kamar->pekerjaan}}" name="pekerjaan"
                                                        type="text" class="form-control" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Telpon</label>
                                                    <input value="{{$detail_kamar->telp}}" name="telp" type="text"
                                                        class="form-control" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input value="{{$detail_kamar->password}}" name="password"
                                                        type="text" class="form-control" placeholder="">
                                                </div>
                                                {{-- end table user --}}

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
                                                    <label>Keterangan</label>
                                                    <input value="{{$detail_kamar->keterangan}}" name="keterangan"
                                                        type="text" class="form-control" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Kota Id</label>
                                                    <input value="{{$detail_kamar->kota_id}}" name="kota_id" type="text"
                                                        class="form-control" placeholder="">
                                                </div>
                                                {{-- end table kost --}}

                                                {{-- table fasilitas --}}
                                                <div class="form-group">
                                                    <label>Fasilitas</label>
                                                    <input value="{{$detail_kamar->fasilitas}}" name="fasilitas"
                                                        type="text" class="form-control" placeholder="">
                                                </div>
                                                {{-- table fasilitas --}}
                                                <small id="emailHelp" class="form-text text-muted">Silahkan masukan
                                                    data yang
                                                    valid!</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <button type="submit" class="btn btn-success">Update</button>
                                        <a onclick="return confirm('Anda yakin ingin kembali ke table kost?')" href=""
                                            class="btn btn-danger">Back</a>
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