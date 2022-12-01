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
                                    <h4 class="card-title">Table Fasilitas</h4>
                                    <a title="Tambah Fasilitas" href=""
                                        class="btn btn-secondary btn-round ml-auto text-decoration-none text-light">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </a>

                                    <a title="Export to PDF" href="" class="btn btn-danger btn-round ml-2 text-light">
                                        <span class="btn-label">
                                            <i class="fas fa-file-pdf"></i>
                                        </span>
                                        Export File
                                    </a>

                                    <a title="Export to Excel" href=""
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
                                                <td>{{$us['created_at']}}</td>
                                                <td>{{$us['updated_at']}}</td>
                                                <td>
                                                    <form method="POST">
                                                        @csrf
                                                        <a href="{{route('users.show', $us->id)}}"
                                                            class="btn btn-link btn-primary btn-lg">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </form>
                                                    @endforeach

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header no-bd">
                                                                    <h5 class="modal-title">
                                                                        <span class="fw-mediumbold">
                                                                            User</span>
                                                                        <span class="fw-light">
                                                                            Detail
                                                                        </span>
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- isi -->
                                                                    <div class="row g-0">
                                                                        <div class="col-md-4 gradient-custom text-center text-white"
                                                                            style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                                                alt="Avatar" class="img-fluid my-5"
                                                                                style="width: 80px;" />
                                                                            <h5>kampret</h5>
                                                                            <p>Web Designer</p>
                                                                            <i class="far fa-edit mb-5"></i>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="card-body p-4">
                                                                                <h6>Information</h6>
                                                                                <hr class="mt-0 mb-4">
                                                                                <div class="row pt-1">
                                                                                    <div class="col-6 mb-3">
                                                                                        <h6>Email</h6>
                                                                                        <p class="text-muted">
                                                                                            info@example.com
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="col-6 mb-3">
                                                                                        <h6>Phone</h6>
                                                                                        <p class="text-muted">
                                                                                            123 456 789</p>
                                                                                    </div>
                                                                                </div>
                                                                                <h6>Projects</h6>
                                                                                <hr class="mt-0 mb-4">
                                                                                <div class="row pt-1">
                                                                                    <div class="col-6 mb-3">
                                                                                        <h6>Recent</h6>
                                                                                        <p class="text-muted">
                                                                                            Lorem ipsum</p>
                                                                                    </div>
                                                                                    <div class="col-6 mb-3">
                                                                                        <h6>Most Viewed</h6>
                                                                                        <p class="text-muted">
                                                                                            Dolor sit amet
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start">
                                                                                    <a href="#!"><i
                                                                                            class="fab fa-facebook-f fa-lg me-3"></i></a>
                                                                                    <a href="#!"><i
                                                                                            class="fab fa-twitter fa-lg me-3"></i></a>
                                                                                    <a href="#!"><i
                                                                                            class="fab fa-instagram fa-lg"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                    <!-- end -->
                                                                </div>
                                                                <div class="modal-footer no-bd">
                                                                    <button type="button" id="addRowButton"
                                                                        class="btn btn-primary">Back</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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

    <!-- Custom template | don't include it in your project! -->
    <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
            <div class="switcher">
                <div class="switch-block">
                    <h4>Logo Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                        <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                        <br />
                        <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Navbar Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeTopBarColor" data-color="dark"></button>
                        <button type="button" class="changeTopBarColor" data-color="blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="green"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange"></button>
                        <button type="button" class="changeTopBarColor" data-color="red"></button>
                        <button type="button" class="changeTopBarColor" data-color="white"></button>
                        <br />
                        <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                        <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="green2"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                        <button type="button" class="changeTopBarColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Sidebar</h4>
                    <div class="btnSwitch">
                        <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Background</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                        <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                        <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                        <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-toggle">
            <i class="flaticon-settings"></i>
        </div>
    </div>
    <!-- End Custom template -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
$('.show_confirm').click(function(event) {
    var form = $(this).closest("form");
    var name = $(this).data("name");
    event.preventDefault();
    swal({
            title: `Are you sure you want to delete this record?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
});
</script>

@endsection