<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav">
                <li class="nav-item active" style="font-size:1.4rem;">
                    <a href="{{url('administrator')}}" data-toggle="collapse">
                        <div class="p-2">
                            <span id="boot-icon" class="bi bi-grid"></span>
                        </div>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- awal -->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#base" style="font-size:1.2rem;">
                        <div class="p-2">
                            <span id="boot-icon" class="bi bi-layers"></span>
                        </div>
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