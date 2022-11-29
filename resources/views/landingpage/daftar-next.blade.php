@extends('landingpage.app')
@section('content')
<div class="container pt5 py-5">
    <div class="tittle-header d-flex flex-column justify-content-center align-items-center">
      <h3 class="text-center">Daftar</h3>
      <img class="mb-5" src="assets/image/brand-image(2).png">
      <input class="form-control w-50" type="text" name="" placeholder="Masukkan username/email">
      <input class="form-control w-50" type="password" name="" placeholder="Masukkan password">
      <input class="form-control w-50" type="text" name="" placeholder="Ulangi password">
      <select name="" id="" class="form-control w-50 h-25">
        <option value="">Jenis Kelamin</option>
      </select>
      <input class="form-control w-50" type="text" name="" placeholder="Pekerjaan">
      <input class="form-control w-50" type="text" name="" placeholder="Umur">
      <input class="form-control w-50" type="text" name="" placeholder="Status Perkawinan">
      <input class="form-control w-50" type="text" name="" placeholder="Agama">
      <button type="button" class="btn btn-custom-daftar mb-3">Masuk Sekarang</button>
      <p>Lupa Password ?</p>
    </div>

    

    <!-- <div class="logo-brand d-flex justify-content-center">
    </div> -->
  </div>
@endsection