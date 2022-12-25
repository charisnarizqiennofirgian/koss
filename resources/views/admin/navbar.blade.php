<nav class="navbar navbar-header navbar-expand-lg" data-background-color="white">
    <div class="container-fluid">
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
                <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false"
                    aria-controls="search-nav">
                    <i class="fa fa-search"></i>
                </a>
            </li>
            <li class="nav-item dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                        @empty($fs->foto_kamar)
                        <img src="{{ url('admin/img/users/no_user_foto.png') }}" alt="foto_profile"
                            class="avatar-img rounded-circle">
                        @else
                        <img src="{{url('admin/img/users/', Auth::user()->foto_user)}}" alt="..."
                            class="avatar-img rounded-circle">
                        @endempty
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            <div class="user-box">
                                <div class="avatar-lg">
                                    @empty($fs->foto_kamar)
                                    <img src="{{ url('admin/img/users/no_user_foto.png') }}" alt="image profile"
                                        class="avatar-img rounded">
                                    @else
                                    <img src="{{url('admin/img/users/', Auth::user()->foto_user)}}" alt="image profile"
                                        class="avatar-img rounded">
                                    @endempty






                                </div>
                                <div class="u-text">
                                    <h4>{{Auth::user()->name}}</h4>
                                    <p class="text-muted">{{Auth::user()->email}}</p>
                                    <p class="user-level">{{Auth::user()->role}}</p>
                                    <a href="{{route('users.show', Auth::user()->id)}}"
                                        class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('user-edit',Auth::user()->id) }}">Edit Profile</a>
                            <a class="dropdown-item" href=""></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('users')}}">Management Users</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"
                                onclick="document.getElementById('form-logout').submit()">Logout</a>
                            <form action="{{ route('logout') }}" method="post" id="form-logout">
                                @csrf
                            </form>
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>