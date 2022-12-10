<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{url('admin/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>

                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        @auth
                        <span>
                            {{Auth::user()->name}}
                            <span class="user-level">{{Auth::user()->role}}</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <form method="POST">
                                    @csrf
                                    <a href="{{route('users.show', Auth::user()->id)}}">
                                        <span class="link-collapse">My Profile</span>
                                    </a>
                                </form>
                            </li>
                            <li>
                                <a href="{{ url('user-edit',Auth::user()->id) }}">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('users')}}">
                                    <span class="link-collapse">Management Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onclick="document.getElementById('form-logout').submit()"><span
                                        class="link-collapse">Logout</span></a>
                                <form action="{{ route('logout') }}" method="post" id="form-logout">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>

                    @endauth
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a href="{{url('administrator')}}" data-toggle="collapse">
                        <span id="boot-icon" class="bi bi-house-door"
                            style="font-size: 19px; -webkit-text-stroke-width: 0px; opacity: 1; border: hidden; padding: 10px; border-radius: 1%;"></span>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <!-- awal -->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Master Data</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{url('kost')}}">
                                    <span class="sub-item">Kost</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('fasilitas')}}">
                                    <span class="sub-item">Fasilitas</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('pembayaran')}}">
                                    <span class="sub-item">Pembayaran</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- akhir -->
            </ul>
        </div>
    </div>
</div>