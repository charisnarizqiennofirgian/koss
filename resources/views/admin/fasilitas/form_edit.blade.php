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
                        <form method="POST" action="{{ route('fasilitas.update',$fasilitas_edit->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class=" card-header">
                                <div class="card-title">Form Update Fasilitas</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 col-lg-6 ">
                                        <div class="form-group">
                                            <label>Nama Kost</label>
                                            <input value="{{ $fasilitas_edit->fasilitas }}" name="fasilitas" type="text"
                                                class="form-control" placeholder="nama fasilitas">
                                        </div>
                                        <small id="emailHelp" class="form-text text-muted">Silahkan masukan data yang
                                            valid!</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Save</button>
                                <a href="{{url('fasilitas')}}" class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.footer')
@endsection