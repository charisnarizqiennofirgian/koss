<nav class="navbar navbar-expand-lg fixed-top navbar-static-top navbar-light bg-light ">
    <a class="navbar-brand mr-auto mr-lg-0 d-inline" href="{{url('/')}}">
        <img src="{{url('assets/image/logo-brand.png')}}" alt="" srcset="">
    </a>
    <div class="container navbar-wrapper mr-auto">
        <button class="navbar-toggler p-0 border-0 ml-auto" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-2">
                <li class="nav-item active">
                    <a class="nav-link " href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#rek">Rekomendasi Kos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#kost">Kost</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#tes">Testimoni</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#tentang">About</a>
                </li>
                {{-- notification --}}
                @auth
                @php
                $booking = App\Models\Pembayaran::select('pesanan')
                ->limit(1)
                ->get();
                @endphp
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link dropdown-toggle nav-item dropdown hidden-caret" href="#" id="notifDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        @foreach($booking as $bg)
                        @if(Auth::user()->role === "customer")
                        <span class="notification"><i class="bi bi-check-circle"></i></span>
                        @elseif(Auth::user()->role === "pemilik")
                        <span class="notification">{{$bg->count()}}</span>
                        @endif
                        @endforeach
                    </a>
                    <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                        <li>
                            <div class="notif-scroll scrollbar-outer">
                                <div class="notif-center p-3">

                                    <div class="notif-icon notif-primary"> <i class="bi bi-check-circle"></i></div>
                                    <div class="notif-content">
                                        @foreach($booking as $bk)
                                        @if(Auth::user()->role === "customer")
                                        @if($bk->pesanan === "diterima")
                                        <span class="block">
                                            Hallo, selamat kost mu telah {{$bk->pesanan}}!

                                            <br> <a href="{{route('invoice')}}">Cek history pembayaran!</a>
                                        </span>
                                        @elseif($bk->pesanan === "ditolak")
                                        <span class="block">
                                            Hallo, mohon maaf kost mu telah {{$bk->pesanan}}!

                                            silahkan cek kembali
                                            pesananmu!
                                        </span>
                                        @else
                                        <span class="block">
                                            Hallo, pesanan kost mu sedang {{$bk->pesanan}}!
                                            Mohon tunggu beberapa saat!
                                        </span>
                                        @endif

                                        @elseif(Auth::user()->role === "pemilik")
                                        <span class="block">
                                            Hallo, ada {{$bk->count()}} pesanan kost masuk nih!
                                            <br><a href="{{url('pesanan')}}"> cek disini! </a>
                                        </span>
                                        @endif
                                        @endforeach
                                    </div>

                                </div>
                    </ul>
                </li>
                @endauth
                {{--awal notification --}}
            </ul>
            <div class="ml-auto button-navbar d-flex">
                <!-- Added -->
                @guest
                <a class="btn btn-custom" href="{{url('login')}}" type="button">Login</a>
                <a class="btn daftar" href="{{url('daftar')}}" type="button">Daftar</a>
                @endguest
                @auth
                <div class="dropdown">
                    <button class="btn name dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item"><i class="fas fa-street-view"></i> {{ Auth::user()->role }}</a>
                        <a class="dropdown-item"><i class="bi bi-hourglass-bottom"></i> History Pembelian</a>
                        @php
                        $role = Auth::user()->role
                        @endphp
                        @if( $role === "pemilik")
                        <a class="dropdown-item" href="{{url('dashboards')}}"><i class="fas fa-user-edit"></i> Dashboard
                            Pemilik</a>
                        @elseif($role === "admin")
                        <a class="dropdown-item" href="{{url('administrator')}}"><i class="fas fa-user-edit"></i>
                            Dashboard
                            Admin</a>
                        @endif
                        <a class="dropdown-item" href="#" onclick="document.getElementById('form-logout').submit()"><i
                                class="fas fa-power-off"></i> Logout</a>
                        <form action="{{ route('logout') }}" method="post" id="form-logout">
                            @csrf
                        </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>