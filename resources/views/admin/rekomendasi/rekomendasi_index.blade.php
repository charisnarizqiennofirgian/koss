@extends('admin.index')
@section('content')
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
                                    <h4 class="card-title">Table Rekomendasi Kost</h4>
                                    <a title="Tambah Rekomendasi Kost" href="{{route('rekomendasi.create')}}"
                                        class="btn btn-secondary btn-round ml-auto text-decoration-none text-light">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Modal -->
                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                @foreach($title as $tt)
                                                <th>{{$tt}}</th>
                                                @endforeach
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach($rekomendasi as $rek)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$rek->nama_kost}}</td>
                                                <td>{{$rek->name}}</td>
                                                <td>
                                                    <form method="POST"
                                                        action="{{route('rekomendasi.destroy', $rek->id)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button
                                                            onclick="return confirm('Yakin data ingin dihapus permanent?')"
                                                            role="button" type="submit" data-toggle="tooltip"
                                                            title="Delete"
                                                            class="btn btn-link btn-danger delete-confirm"
                                                            data-original-title="Remove">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
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

    <!-- Custom template | don't include it in your project! -->

    <!-- End Custom template -->
</div>
@endsection