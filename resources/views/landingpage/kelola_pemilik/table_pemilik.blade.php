@extends('landingpage.app')
@section('content')
<!-- <link rel="stylesheet" href="{{asset('../../admin/css/atlantis.min.css')}}">
<link rel="stylesheet" href="{{asset('../../admin/css/bootstrap.min.css')}}"> -->
<div class="container-fluid">
    <div class="row">
        @include('landingpage.sidebar')
        <div class="col-10 p-5" id="main">
            <table class="table table-hover">
                <thead style=" background-color: #11296b;">
                    <tr class="text-light">
                        <th>Pemilik Kost</th>
                        <th>Nama Kost</th>
                        <th>Luas Kamar</th>
                        <th>Harga</th>
                        <th style="width: 10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pemilik_kost as $pk)
                    <tr>
                        <td>{{$pk->name}}</td>
                        <td>{{$pk->nama_kost}}</td>
                        <td>{{$pk->luas_kamar}}</td>
                        <td>Rp {{number_format($pk->harga_kamar, 0, ',', '. ')}}</td>
                        <td style="width: 20%;">
                            <div class="form-button-action">
                                <a href="{{ route('data-pemilik.show',$pk->id) }}" type="button" data-toggle="tooltip"
                                    style="color: #11296b;" title="Detail" class="btn btn-link btn-lg"
                                    data-original-title="Detail">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <button type="button" data-toggle="tooltip" style="color: #fd5f00;" title="Edit"
                                    class="btn btn-link btn-lg" data-original-title="Edit Task">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection