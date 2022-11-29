@extends('landingpage.app')
@section('content')
<div class="container pt5 py-5">
  <div class="tittle-header d-flex flex-column justify-content-center align-items-center">
    <h3 class="text-center">Daftar</h3>
    <img class="mb-5" src="assets/image/brand-image(2).png">

    <form action="{{ route('register') }}" method="post" class="form-register">
    @csrf
    <input class="form-control w-50 @error('name') is-invalid @enderror" type="text" name="name"
      value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukkan nama lengkap">
    @error('name')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror

    <input class="form-control w-50 @error('email') is-invalid @enderror" type="email" name="email"
      value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan Email">
    @error('email')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror

    <select name="role" id="role" class="form-control w-50 h-25">
      <option value="customer">Customer</option>
      <option value="pemilik">Pemilik Kos</option>
    </select>
    @error('role')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror

    <input class="form-control w-50 @error('pekerjaan') is-invalid @enderror" type="text" name="pekerjaan"
      value="{{ old('pekerjaan') }}" required autocomplete="pekerjaan" placeholder="Pekerjaan">
    @error('pekerjaan')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror



    <input class="form-control w-50 @error('password') is-invalid @enderror" type="password" name="password" required
      autocomplete="new-password" placeholder="Password">
    @error('password')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror

    <input class="form-control w-50" type="password" name="password_confirmation" placeholder="Password Confrim" required autocomplete="new-password">

    <button type="submit" class="btn btn-custom-daftar mb-3">Daftar Sekarang</button>
  </form>
    <p>Lupa Password ?</p>
  </div>



  <!-- <div class="logo-brand d-flex justify-content-center">
    </div> -->
</div>
@endsection