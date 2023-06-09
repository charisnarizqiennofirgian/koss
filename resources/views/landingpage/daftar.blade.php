@extends('landingpage.navLog')
@section('content')
<div class="container pt5 py-5 register">
    <div class="tittle-header d-flex flex-column justify-content-center align-items-center">
        <h3 class="text-center">Daftar</h3>
        <img class="img-brand" src="assets/image/brand-image(2).png">
        <a type="button" href="{{url('register')}}" class="btn btn-custom-daftar mb-3"> Daftar Sebagai Penghuni Kos</a>
        <a type="button" href="{{url('register-pemilik')}}" class="btn btn-custom-daftar mb-3"> Daftar Sebagai Pemilik Kos</a>
        <a class="forget text-center" href="{{url('login')}}">Sudah Punya Akun</a>
    </div>
</div>
@endsection