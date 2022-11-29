<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{url('admin/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>

                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
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
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="{{url('dashboard')}}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
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
                            <li>
                                <a href="{{url('users')}}">
                                    <span class="sub-item">Users</span>
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