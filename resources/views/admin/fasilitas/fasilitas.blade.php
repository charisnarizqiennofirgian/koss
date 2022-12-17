@extends('admin.index')
@section('content')
@php
$title = ['No', 'Fasilitas', 'Action'];
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
                                    <h4 class="card-title">Table Fasilitas</h4>
                                    <a title="Tambah Fasilitas" href="{{route('fasilitas.create')}}"
                                        class="btn btn-secondary btn-round ml-auto text-decoration-none text-light">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </a>

                                    <a title="Export to PDF" href="{{url('fasilitas-pdf')}}"
                                        class="btn btn-danger btn-round ml-2 text-light">
                                        <span class="btn-label">
                                            <i class="fas fa-file-pdf"></i>
                                        </span>
                                        Export File
                                    </a>

                                    <a title="Export to Excel" href="{{url('fasilitas-excel')}}"
                                        class="btn btn-success btn-round ml-2 text-light">
                                        <span class="btn-label">
                                            <i class="fas fa-file-excel"></i>
                                        </span>
                                        Export File
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
                                            @foreach($fass as $fs)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$fs['fasilitas']}}</td>
                                                <td>
                                                    <form method="POST"
                                                        action="{{route('fasilitas.destroy', $fs->id)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="form-button-action">
                                                            <a href="{{ url('fasilitas-edit',$fs->id) }}"
                                                                data-toggle="tooltip" title="Edit Fasilitas"
                                                                class="btn btn-link btn-warning"
                                                                data-original-title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <button
                                                                onclick="return confirm('Yakin data ingin dihapus permanent?')"
                                                                role="button" type="submit" data-toggle="tooltip"
                                                                title="" class="btn btn-link btn-danger delete-confirm"
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

    <!-- Custom template | don't include it in your project! -->

    <!-- End Custom template -->
</div>
@endsection