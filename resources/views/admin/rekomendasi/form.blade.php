@extends('admin.index')
@section('content')
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
            <div class="row">
                <div class="col-md-12">
                    <!-- validasi form -->
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
                    <!-- akhir validasi -->
                    <div class="card">
                        <form method="POST" action="{{ route('rekomendasi.store')}}">
                            <div class="card-header">
                                <div class="card-title">Form Rekomendasi</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            @csrf
                                            <label for="email2">Rekomendasikan Kost</label>

                                          
                                            <select name="kost_id" class="form-control">
                                               @foreach($kost as $k)
                                                <option value="{{$k->id}}">{{$k->nama_kost}}</option>
                                                @endforeach
                                            </select>
                                            <small id="emailHelp2" class="form-text text-muted">Silahkan masukan data
                                                rekomendasi sesuai dengan ketentuan!</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Save</button>
                                <a href="{{url('rekomendasi')}}" class="btn btn-danger">Back</a>
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
                2022, build with <i class="fa fa-heart heart text-danger"></i> by <a href="#">Team</a>
            </div>
        </div>
    </footer>
</div>
@endsection