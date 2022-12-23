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
            <!-- form validation -->
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
            <!-- end validation form -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class=" card-header">
                                <div class="card-title">Form Data Kost</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 col-lg-6 ">
                                        <!-- Input Nama -->
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="name" type="text" class="form-control" required
                                                autocomplete="name">
                                        </div>
                                        <!-- Input Email -->
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="text" class="form-control">
                                        </div>
                                        <!-- Input Password -->
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control  @error('password') is-invalid @enderror"
                                                type="password" name="password" required autocomplete="new-password"
                                                placeholder="Password">
                                        </div>
                                        <!-- Input Confirm Password -->
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control  @error('password') is-invalid @enderror"
                                                type="password" name="password_confirmation" required
                                                autocomplete="new-password" placeholder="Password">
                                        </div>
                                        <!-- Input Role -->
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" name="role" id="">
                                                <option value="admin">admin</option>
                                                <option value="customer">customer</option>
                                                <option value="pemilik">pemilik</option>
                                            </select>
                                        </div>
                                        <!-- Input Pekerjaan -->
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input name="pekerjaan" type="text" class="form-control">
                                        </div>
                                        <!-- Input NOPE -->
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Nomor Telepon</label>
                                            <input class="form-control" type="number" name="telp">
                                        </div>
                                        <!-- Input FOTO -->
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Foto</label>
                                            <input name="foto_user" type="file" class="form-control-file"
                                                id="exampleFormControlFile1">
                                        </div>
                                        <!-- Alamat -->
                                        <div class="form-group">
                                            <label for="comment">Alamat</label>
                                            <textarea name="alamat" class="form-control" id="comment"
                                                rows="5"></textarea>
                                        </div>
                                        <small id="emailHelp" class="form-text text-muted">Silahkan masukan data yang
                                            valid!</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Save</button>
                                <a href="" class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')
</div>
@endsection