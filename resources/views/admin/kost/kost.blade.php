@extends('admin.index')
@section('content')
@php
$title = ['No', 'Nama Kost', "Luas Kamar", "Harga Kamar", "Alamat Kost", "Kota Pilihan", "Keterangan", "Fasilitas",
"Foto", "Aksi"];
$kota = App\Models\Kota::all();
@endphp



<div class="wrapper">
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
                            <a href="#">Tables</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Datatables</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Data Info Kost</h4>
                                    <a title="Tambah Kost" href="{{route('kost.create')}}"
                                        class="btn btn-secondary btn-round ml-auto text-decoration-none text-light">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </a>

                                    <a title="Export to PDF" href="{{url('kost-pdf')}}"
                                        class="btn btn-danger btn-round ml-2 text-light">
                                        <span class="btn-label">
                                            <i class="fas fa-file-pdf"></i>
                                        </span>
                                        Export File
                                    </a>

                                    <a title="Export to Excel" href="{{url('kost-excel')}}"
                                        class="btn btn-success btn-round ml-2 text-light">
                                        <span class="btn-label">
                                            <i class="fas fa-file-excel"></i>
                                        </span>
                                        Export File
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover">
                                        <thead>
                                            <tr class="text-center">
                                                @foreach($title as $tt)
                                                <th>{{$tt}}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach($kost as $fs)
                                            <tr>
                                                <td>{{$no ++}}</td>
                                                <td>{{$fs['nama_kost']}}</td>
                                                <td>{{$fs['luas_kamar']}}</td>
                                                <td>Rp. {{number_format($fs['harga_kamar'], 2, ',', '. ')}}</td>
                                                <td>{{$fs['alamat_kost']}}</td>
                                                @foreach($kota as $kt)
                                                @if($fs->kota_id === $kt->id)
                                                <td>{{$kt->nama_kota}}</td>
                                                @endif
                                                @endforeach
                                                <td>{{$fs['keterangan']}}</td>

                                                @foreach($d_fasilitas as $fas)
                                                @if($fs->id_fasilitas === $fas->id)
                                                <td>{{$fas->fasilitas}}</td>
                                                @endif
                                                @endforeach

                                                <td width="30%">
                                                    @empty($fs->foto_kamar)
                                                    <img src="{{ url('https://stimra.ac.id/wp-content/themes/consultix/images/no-image-found-360x260.png') }}"
                                                        width="35%" alt="Profile">
                                                    @else
                                                    <img src="{{ url('admin/img')}}/{{$fs->foto_kamar}}" width="100%"
                                                        alt="Profile">
                                                    @endempty
                                                </td>
                                                <td>
                                                    <form method="POST" action="{{route('kost.destroy', $fs->id)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="form-button-action align-items-center">
                                                            <a href="{{ route('kost.show',$fs->id) }}"
                                                                data-toggle="tooltip" title=""
                                                                class="btn btn-link btn-primary btn-lg"
                                                                data-original-title="View Detail">
                                                                <i class="fa fa-eye"></i>
                                                            </a>

                                                            <a href="{{ url('kost-edit',$fs->id) }}"
                                                                data-toggle="tooltip" title="Edit"
                                                                class="btn btn-link btn-warning"
                                                                data-original-title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <button role="button"
                                                                id="delete"
                                                                type="submit" data-toggle="tooltip" title="Remove"
                                                                class="btn btn-link btn-danger"
                                                                data-original-title="Remove">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </form>
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
        </div>
        @include('admin.footer')
    </div>

    {{-- Custom template | don't include it in your project! --}}

    {{-- End Custom template --}}
</div>

@endsection
