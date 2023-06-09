@extends('landingpage.navLog')
@section('content')
<div class="container pt5 py-5 auth">
    <div class="tittle-header d-flex flex-column justify-content-center align-items-center">
        <h3 class="text-center">Selamat Datang Di</h3>
        <img class="mb-5" src="assets/image/brand-image(2).png">
        <form action="{{ route('login') }}" method="post" class="form-login">
            @csrf
            <input class="form-control @error('email') is-invalid @enderror w-50" type="email" name="email"
                placeholder="Masukkan username/email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input class="form-control @error('password') is-invalid @enderror w-50" type="password" name="password"
                placeholder="Masukkan password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <button type="submit" class="btn btn-custom-daftar mb-3">Masuk Sekarang</button>
            <a class="btn mb-3 belum" style="padding-bottom: 10px ;" href="daftar">
                Belum Punya Akun
            </a>
        </form>
        <a class="forget" href="">
            <p>Lupa Password</p>
        </a>

    </div>
    <!-- <div class="logo-brand d-flex justify-content-center">
    </div> -->
</div>
@endsection