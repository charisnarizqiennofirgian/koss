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
                                    <h4 class="card-title">Table Management Users</h4>
                                    <a title="Tambah Fasilitas" href="{{route('users.create')}}"
                                        class="btn btn-secondary btn-round ml-auto text-decoration-none text-light">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </a>

                                    <a title="Export to PDF" href="{{url('users-pdf')}}"
                                        class="btn btn-danger btn-round ml-2 text-light">
                                        <span class="btn-label">
                                            <i class="fas fa-file-pdf"></i>
                                        </span>
                                        Export File
                                    </a>

                                    <a title="Export to Excel" href="{{url('users-excel')}}"
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
                                            @foreach($users as $us)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$us['name']}}</td>
                                                <td>{{$us['email']}}</td>
                                                <td>{{$us['role']}}</td>
                                                <td>{{$us['pekerjaan']}}</td>
                                                <td style="width: 30%;">
                                                    <form method="POST" action="{{route('users.destroy', $us->id)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{route('users.show', $us->id)}}"
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-toggle="tooltip" title="Detail">
                                                            <i class="fa fa-eye"></i>
                                                        </a>

                                                        <a href="{{ url('user-edit',$us->id) }}" data-toggle="tooltip"
                                                            title="Edit" class="btn btn-link btn-warning"
                                                            data-original-title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                        <button role="button"
                                                            onclick="return confirm('Anda yakin data akan dihapus?')"
                                                            type="submit" data-toggle="tooltip" title="Remove"
                                                            class="btn btn-link btn-danger"
                                                            data-original-title="Remove">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>
                                                    @endforeach
                                                </td>
                                            </tr>

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
</div>
@endsection