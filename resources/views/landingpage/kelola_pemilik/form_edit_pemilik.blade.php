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
                        <div class="col-md-12">
                            <div class="card">
                                <form method="POST" action="{{route('dashboard-kos.update', $d->id)}}"
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
                                                    <input value="{{$d->nama_kost}}" name="nama_kost" type="text"
                                                        class="form-control" placeholder="nama kost">
                                                </div>
                                                <div class="form-group">
                                                    <label>Luas Kamar</label>
                                                    <input value="{{$d->luas_kamar}}" name="luas_kamar" type="text"
                                                        class="form-control" placeholder="luas kamar">
                                                </div>
                                                <div class="form-group">
                                                    <label>Harga Kamar</label>
                                                    <input value="{{$d->harga_kamar}}" name="harga_kamar" type="number"
                                                        class="form-control" placeholder="harga kamar">
                                                </div>
                                                <div class="form-group">
                                                    <label>Keterangan</label>
                                                    <input value="{{$d->keterangan}}" name="keterangan" type="text"
                                                        class="form-control" placeholder="keterangan">
                                                </div>

                                                <div class="form-group">
                                                    <label>Kota</label>
                                                    <select name="kota_id" class="form-control">

                                                        <option value="{{$d->kota_id}}">{{$d->kota_id}}</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Fasilitas</label>
                                                    <select name="id_fasilitas" class="form-control"
                                                        id="exampleFormControlSelect1">

                                                        <option value="{{$d->id_fasilitas}}">{{$d->id_fasilitas}}
                                                        </option>

                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <label for="comment">Alamat</label>
                                                    <textarea name="alamat_kost" class="form-control" id="comment"
                                                        rows="5"></textarea>
                                                </div>

                                                <small id="emailHelp" class="form-text text-muted">Silahkan masukan
                                                    data yang
                                                    valid!</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <button type="submit" class="btn btn-success">Save</button>
                                        <a onclick="return confirm('Anda yakin ingin kembali ke table kost?')" href=""
                                            class="btn btn-danger">Back</a>
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
                </div>
            </footer>


        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection